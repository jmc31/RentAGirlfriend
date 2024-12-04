<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\GirlfriendForHire;

class GirlfriendForHireCreate extends Component
{
    public function render()
    {
        return view('livewire.girlfriend-for-hire-create');
    }

    public $name, $description, $age, $rate_per_hour;

    protected $rules = [
        'name' => 'required|string',
        'description' => 'nullable|string',
        'age' => 'required|integer',
        'rate_per_hour' => 'required|numeric',
    ];

    public function save()
    {
        $this->validate();
        GirlfriendForHire::create([
            'name' => $this->name,
            'description' => $this->description,
            'age' => $this->age,
            'rate_per_hour' => $this->rate_per_hour,
        ]);

        return redirect()->route('girlfriend.index');
    }
}
