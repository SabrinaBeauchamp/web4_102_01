<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\Validator;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role_id',
        'telephone',
        'adresse',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function role() {
        return $this->belongsTo(Role::class);
    }
    public function hasPermission($name) {
        return $this->role->permissions()->where('name', $name)->exists();
    }
    public function likes() {
        return $this->belongsToMany(Favorie::class, 'favories');
    }
    public function likesEntreprises() {
        return $this->morphedByMany(Entreprise::class, 'favorie');
    }
    public function likesForfaits() {
        return $this->morphedByMany(Forfait::class, 'favorie');
    }
    public function likesEvenements() {
        return $this->morphedByMany(Evenement::class, 'favorie');
    }
    public function getVerificationAttribute() {
        $array = array();
        $resultat = true;
        $array = \Auth::user()->attributesToArray();
        array_splice($array, 4, 5);
        foreach ($array as $item => $value) {
            if ($value === null) {
                $resultat = false;
                return $resultat;
            }  
        }
        return $resultat;
    }

    public static function validator($data) {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'telephone' => ['required','regex:~[0-9]{3}\-[0-9]{3}\-[0-9]{4}~'],
            'adresse' => ['required'],
        ]);
    }
    public function getIsValidAttribute() {
        return self::validator($this->attributes)->checks();
    }
    public function validate() {
        $isInvalid = self::validator($this->attributes)->fails();
        if($isInvalid) {
            return redirect()->route('users.gestionaires.edit', $this)->with('message','veuillez complèter votre inscription');
        }
    }
}
