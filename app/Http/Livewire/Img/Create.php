<?php

namespace App\Http\Livewire\Img;

use App\Models\Img;
use Livewire\Component;

class Create extends Component
{        public Img $img;

    public function mount(Img $img) {

        $this->img = $img ?? new Img();

    }

    function rules() {
        return [
        'img.callName'     => 'required',
        'img.img_pos'      => 'required',
        'img.pics'         => 'required',
        'img.img_by'       => 'sometimes',

        ];
     }

    public function updated($property)
    {
        $this->validateOnly($property);
    }

   public function render()
   {


       return view('livewire.img.create');
   }

   public function store() {
       $validatedData = $this->validate();



     $this->img->save();

       return redirect()->route('img.index');
   }
}
