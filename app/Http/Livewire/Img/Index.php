<?php

namespace App\Http\Livewire\Img;

use App\Models\Img;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;


    public $mped_id = 0;
    public $fped_id = 0;

    public $perPage = 20;
    public $search ='';
    public $orderBy = 'id';
    public $orderAsc = 'true';
    public function render()
    {
        return view('livewire.img.index', [
            'imgs' => Img::search($this->search)
            ->orderBy($this->orderBy, $this->orderAsc ? 'desc' : 'asc')
            ->paginate($this->perPage),
        ]);
    }
}
