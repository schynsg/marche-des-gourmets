<?php

namespace App\Http\Livewire;

use App\Models\exhibitor;
use App\Models\filter;
use App\Models\text;
use Livewire\Component;
use Livewire\WithPagination;

class Exhib extends Component
{
    use WithPagination;

    public $searchTerm;

    public function render()
    {
        $texts = text::all();
        $filters = filter::all();
        $exhibitors = exhibitor::query()->where('name','LIKE', '%'. $this->searchTerm . '%')->paginate(2);
        return view('livewire.exhib', ['exhibitors' => $exhibitors], compact('texts','filters'));
    }
}
