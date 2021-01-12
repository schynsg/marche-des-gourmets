<?php

namespace App\Http\Livewire;

use App\Models\exhibitor;
use App\Models\filter;
use App\Models\text;
use Livewire\Component;

class Exhibitors extends Component
{
        public $searchTerm;

    public function render()
    {
        $texts = text::all();
        $filters = filter::all();
        $search = '%'.$this->searchTerm . '%';
        $exhibitors = exhibitor::orderBy('id', 'ASC')->where('name','LIKE',$search)->orWhere('country','LIKE',$search)->orWhere('description','LIKE',$search)->orWhere('city','LIKE',$search)->orWhere('address','LIKE',$search)->orWhere('city','LIKE',$search)->paginate(10);

        return view('exhibitors',['exhibitors'=>$exhibitors], compact('texts','filters'));
    }
}

