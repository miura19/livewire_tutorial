<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;//こいつも忘れない

class Counter extends Component
{
    public $count = 10;
    public $message;
    public $users;

    public function inc(){
        $this->count++;
    }
    //モデルの取得のやりかた
    public function mount(){
        $this->users = User::all();
    }

    public function delbtn($id){
        $this->users = $this->users->filter(function($value, $key) use($id){
            return $value['id'] != $id;
        });

        $user = User::find($id);
        $user->delete();
    }
    public function render()
    {
        return view('livewire.counter');
    }
}
