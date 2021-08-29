<?php

namespace App\Http\Livewire;

use App\Models\Exhibitor;
use App\Models\Filter;
use App\Models\Text;
use Livewire\Component;
use Livewire\WithPagination;

class Exhib extends Component
{
    use WithPagination;

    public $searchTerm;
    public $searchFilter = 'all';

    public function render()
    {
        $filters = Filter::all();
        $search = '%'.$this->searchTerm . '%';
        $exhibitorsAll = Exhibitor::orderBy('id', 'ASC')
            ->where(function ($query) use ($search){
                $query->where('name','LIKE',$search)
                    ->orWhere('country','LIKE',$search)
                    ->orWhere('description','LIKE',$search)
                    ->orWhere('city','LIKE',$search)
                    ->orWhere('address','LIKE',$search)
                    ->orWhere('city','LIKE',$search);
            })
            ->where(function ($query){
                $query->where('active', '=', 1);
            })
            ->paginate(10);
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

        return view('livewire.exhib', ['exhibitors' => $exhibitorsFiltered], compact('filters', 'exhibitorsAll'));
    }
}

