<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Option; // Assuming you have an Option model

class DynamicSelect extends Component
{
    public $selectedValue;

    public function mount()
    {
        $this->selectedValue = null;
    }

    public function updatedSelectedValue()
    {
        // Handle the selected value here, e.g., update a model, etc.
        dd($this->selectedValue);
    }

  

    public function render()
    {
        return view('livewire.dynamicselect', );
    }
}