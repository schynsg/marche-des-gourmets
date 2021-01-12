<div class="exhib__content">
    <h2>Liste de nos exposants</h2>
        <div class="exhibitors">
            <div class="exhib__forms">
                <form action="#" class="exhib__search-form">
                    <label for="search">Rechercher un exposant</label>
                    <div>
                        <input type="text" name="search" id="search" placeholder="Rechercher"  wire:model="searchTerm">
                    </div>
                </form>
                @if(count($filters))
                    <form action="#" class="exhib__filter-form">
                        <label for="filter">Type de produits</label>
                        <select name="filter" id="filter">
                            <option value="all">Tout</option>
                            @foreach($filters as $filter)
                                <option value="{{$filter->value}}">{{$filter->text}}</option>
                            @endforeach
                        </select>
                    </form>
                @endif
            </div>
            @if(count($exhibitors))
            <ul class="exhib__list">
                @foreach($exhibitors as $exhibitor)
                    <li class="exhibitor">
                        <div class="exhibitor__infos">
                            <h3 @if($exhibitor->is_bio)class="bio"@endif>{{$exhibitor->name}}</h3>
                            <p class="exhibitor__address">{{$exhibitor->address}}, {{$exhibitor->postal_code}} {{$exhibitor->city}} ({{$exhibitor->country}})</p>
                            <p class="exhibitors__products">{{$exhibitor->description}}</p>
                        </div>
                        @if($exhibitor->website !== "")<a href="{{$exhibitor->website}}" title="Vers le site de l'exposant">Visiter le site web</a>@endif
                    </li>
                @endforeach
            </ul>
            {{$exhibitors->links()}}
            <a href="{{ url('/new-exhibitor') }}" class="exhib__new-link">Devenir exposant</a>
        </div>
    @else
        <p>Malheureusement, nous n'avons pas encore d'exposant à vous montrer pour l'instant.</p>
    @endif
</div>
