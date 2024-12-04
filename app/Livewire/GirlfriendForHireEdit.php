<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\GirlfriendForHire;

class GirlfriendForHireEdit extends Component
{
    public function render()
    {
        return view('livewire.girlfriend-for-hire-edit');
    }

    public $girlfriendId, $name, $description, $age, $rate_per_hour;

    public function mount($id)
    {
        $girlfriend = GirlfriendForHire::findOrFail($id);
        $this->girlfriendId = $girlfriend->id;
        $this->name = $girlfriend->name;
        $this->description = $girlfriend->description;
        $this->age = $girlfriend->age;
        $this->rate_per_hour = $girlfriend->rate_per_hour;
    }

    public function save()
    {
        $this->validate([
            'name' => 'required|string',
            'description' => 'nullable|string',
            'age' => 'required|integer',
            'rate_per_hour' => 'required|numeric',
        ]);

        $girlfriend = GirlfriendForHire::findOrFail($this->girlfriendId);
        $girlfriend->update([
            'name' => $this->name,
            'description' => $this->description,
            'age' => $this->age,
            'rate_per_hour' => $this->rate_per_hour,
        ]);

        return redirect()->route('girlfriend.index');
    }
}
