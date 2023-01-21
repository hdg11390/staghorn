<?php

namespace App\Http\Livewire\Mped;

use App\Models\Mped;
use Livewire\Component;

class Create extends Component
{ public Mped $mped;

    public function mount(Mped $mped) {

        $this->mped = $mped ?? new Mped();

    }

    function rules() {
        return [
        'mped.callName'     => 'required|string|min:2|unique:mpeds,callName,' . $this->mped->id,
        'mped.regName'      => 'required',
        'mped.sire'         => 'required',
        'mped.dame'         => 'required',
        'mped.sFather'      => 'required',
        'mped.sMother'      => 'required',
        'mped.dFather'      => 'required',
        'mped.dMother'      => 'required',

        'mped.sfFather'      => 'required',
        'mped.sfMother'      => 'required',
        'mped.smFather'      => 'required',
        'mped.smMother'      => 'required',

        'mped.dfFather'      => 'required',
        'mped.dfMother'      => 'required',
        'mped.dmFather'      => 'required',
        'mped.dmMother'      => 'required',
        'mped.is_active'     => 'sometimes'

        ];
     }

     public function updated($property)
     {
         $this->validateOnly($property);
     }

    public function render()
    {


        return view('livewire.mped.create');
    }

    public function store() {
        $validatedData = $this->validate();



      $this->mped->save();

        return redirect()->route('mped.index');
    }
}
