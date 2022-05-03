<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

class Search extends Component
{
    public $search="";

    public function render()
    {
        return view('livewire.search', [
            'users' => User::where('name', "LIKE","%$this->search%")->get(),
        ]);
    }
}
