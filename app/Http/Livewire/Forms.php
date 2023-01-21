<?php

namespace App\Http\Livewire;

use App\Models\Dog;
use App\Models\Fped;
use App\Models\Mped;
use Livewire\Component;

class Forms extends Component
{
    public $mpeds;
    public $fpeds;

    public Dog $dog;

    public function mount(Dog $dog){
        $this->mpeds = Mped::orderby('callName','asc')
                        ->select('*')
                        ->get();

        $this->fpeds = Fped::orderby('callName','asc')
        ->select('*')
        ->get();

        $this->dog = $dog ?? new Dog();
    }

    function rules() {
        return [
            'dog.callName'  => 'required|min:3',
            'dog.slug'      => 'required|string|min:2|unique:dogs,slug,' . $this->dog->id,
            'dog.regName'   => 'required',
            'dog.mped_id'   => 'required',
            'dog.fped_id'   => 'required',
            'dog.dogstat'   => 'required',
            'dog.colour'    => 'required',
            'dog.sex'       => 'required',
            'dog.blurb'     => 'sometimes',
            'dog.clearances'=> 'sometimes',
            'dog.pedigree'  => 'sometimes',
            'dog.birthday'  => 'date',
            'dog.wpage'     => 'sometimes',
            'dog.pic'       => 'sometimes'
        ];
    }

    public function updated($property)
    {
        $this->validateOnly($property);
    }



    public function render()
    {
        return view('livewire.forms');
    }

    public function store() {
        $validatedData = $this->validate();

        $this->dog->save();
            return redirect()->route('dogs.index');
    }


}
