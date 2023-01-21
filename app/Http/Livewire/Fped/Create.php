<?php

namespace App\Http\Livewire\Fped;

use App\Models\Fped;
use Livewire\Component;

class Create extends Component
{
    public Fped $fped;

    public function mount(Fped $fped) {

        $this->fped = $fped ?? new Fped();

    }

    function rules() {
        return [
        'fped.callName'     => 'required|string|min:2|unique:fpeds,callName,' . $this->fped->id,
        'fped.regName'      => 'required',
        'fped.sire'         => 'required',
        'fped.dame'         => 'required',
        'fped.sFather'      => 'required',
        'fped.sMother'      => 'required',
        'fped.dFather'      => 'required',
        'fped.dMother'      => 'required',

        'fped.sfFather'      => 'required',
        'fped.sfMother'      => 'required',
        'fped.smFather'      => 'required',
        'fped.smMother'      => 'required',

        'fped.dfFather'      => 'required',
        'fped.dfMother'      => 'required',
        'fped.dmFather'      => 'required',
        'fped.dmMother'      => 'required',
        'fped.is_active'     => 'sometimes'

        ];
     }

     public function updated($property)
     {
         $this->validateOnly($property);
     }

    public function render()
    {


        return view('livewire.fped.create');
    }

    public function store() {
        $validatedData = $this->validate();



      $this->fped->save();

        return redirect()->route('fped.index');
    }
}
