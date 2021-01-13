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
    public $searchFilter = 'all';

    public function render()
    {
        $texts = text::all();
        $filters = filter::all();
        $exhibitorsAll = exhibitor::query()->where('name','LIKE', '%'. $this->searchTerm . '%')->orWhere('city','LIKE', '%'. $this->searchTerm . '%')->orWhere('description','LIKE', '%'. $this->searchTerm . '%')->paginate(2);
        $exhibitorsFiltered = [];

        for ($i = 0; $i < count($exhibitorsAll->items()); $i++) {
            if ($this->searchFilter === 'all'){
                array_push($exhibitorsFiltered, $exhibitorsAll->items()[$i]);
            } else{
                for ($j = 0; $j < (count($exhibitorsAll->items()[$i]->filters)); $j++){
                    if ($exhibitorsAll->items()[$i]->filters[$j]->value === $this->searchFilter){
                        array_push($exhibitorsFiltered, $exhibitorsAll->items()[$i]);
                    }
                }
            }
        }

        return view('livewire.exhib', ['exhibitors' => $exhibitorsFiltered], compact('texts','filters', 'exhibitorsAll'));
    }
}

