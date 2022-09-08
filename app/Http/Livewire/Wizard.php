<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Phone;

class Wizard extends Component


{
    public function render()
    {
        return view('livewire.wizard');

    }
    public function  firstStepSubmit(){
         $validatedData = $this->validate([
            'name' => 'required|unique:products',
            'amount' => 'required|numeric',
            'description' => 'required',
        ]);

        $this->currentStep = 2;

    }
    public function secondStepSubmit()
    {
        $validatedData = $this->validate([
            'stock' => 'required',
            'status' => 'required',
        ]);

        $this->currentStep = 3;
    }
}
