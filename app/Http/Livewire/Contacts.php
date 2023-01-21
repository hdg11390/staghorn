<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\ContactUs;
use Livewire\WithPagination;

class Contacts extends Component
{

    use WithPagination;


    public $perPage = 20;
    public $search ='';
    public $orderBy = 'id';
    public $orderAsc = 'true';

    public function render()
    {
            return view('livewire.contacts', [
                'contacts' => ContactUs::search($this->search)
                ->orderBy($this->orderBy, $this->orderAsc ? 'desc' : 'asc')
                ->paginate($this->perPage),
            ]);
    }
}
