<?php

namespace App\Http\Livewire;

use App\Models\Dog;
use App\Models\Fped;
use App\Models\Mped;
use Livewire\Component;
use Livewire\WithPagination;

class Dogs extends Component
{
    use WithPagination;


    public $mped_id = 0;
    public $fped_id = 0;

    public $perPage = 20;
    public $search ='';
    public $orderBy = 'birthday';
    public $orderAsc = 'true';


    public function mount(){
        $this->mpeds = Mped::orderby('callName','asc')
                           ->select('*')
                           ->get();

        $this->fpeds = Fped::orderby('callName','asc')
        ->select('*')
        ->get();
   }




    public function render()
    {
            return view('livewire.dogs', [
                'dogs' => Dog::search($this->search)
                ->orderBy($this->orderBy, $this->orderAsc ? 'desc' : 'asc')
                ->paginate($this->perPage),
            ]);
    }
}
