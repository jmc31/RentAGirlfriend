<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\GirlfriendForHire;


class GirlfriendForHireIndex extends Component
{
    public $girlfriends;

    public function render()
    {
        $this->girlfriends = GirlfriendForHire::all();
        return view('livewire.girlfriend-for-hire-index');
    }

    public function delete($id)
    {
        GirlfriendForHire::findOrFail($id)->delete();
    }
}
