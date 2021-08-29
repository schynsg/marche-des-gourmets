<?php

namespace App\Http\Livewire;

use App\Models\Exhibitor;
use App\Models\Filter;
use App\Models\Text;
use Livewire\Component;

class Exhibitors extends Component
{
    public $searchTerm;

    public function render()
    {
        $filters = Filter::all();
        $search = '%'.$this->searchTerm . '%';
        $exhibitors = Exhibitor::orderBy('id', 'ASC')
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

        return view('exhibitors',['exhibitors'=>$exhibitors], compact('filters'));
    }
}

