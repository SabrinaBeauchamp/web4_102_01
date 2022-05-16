<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ForfaitFavorie extends Component
{
    public $forfait;
    public $listeners = ['addLike'];

    
    public function addLike() {
        // dd('like');
        auth()->user()->likes()->toggle($this->forfait->id);
    }
    public function like() {
        
    }
    public function render()
    {
        return view('livewire.forfait-favorie');
    }

}
