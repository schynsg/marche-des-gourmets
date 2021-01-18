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
        $texts = Text::all();
        $filters = Filter::all();
        $search = '%'.$this->searchTerm . '%';
        $exhibitors = Exhibitor::orderBy('id', 'ASC')->where('name','LIKE',$search)->orWhere('country','LIKE',$search)->orWhere('description','LIKE',$search)->orWhere('city','LIKE',$search)->orWhere('address','LIKE',$search)->orWhere('city','LIKE',$search)->paginate(10);

        return view('exhibitors',['exhibitors'=>$exhibitors], compact('texts','filters'));
    }
}

