<div class="filters">
    <form>

        <event-dispatcher as="div" class="filters_head" event="toggle:filters">
            <span>Filteri</span>
            <span class="icon">&#9660;</span>
        </event-dispatcher>

        <collapsible-container class="filters_body" name="filters">

            @if(false)
            <div class="filter">
                <div class="filter_name">Radio filters</div>
                <ul class="filter_list with-scrollbar">

                    @for($i = 0; $i < 4; $i++)
                        <li class="filter_list-item">
                            <label class="filter-item">
                                <div class="radio-button">
                                    <input type="radio" name="radio">
                                    <div class="radio-button_mark"></div>
                                </div>
                                <span class="ml-2">Holla</span>
                            </label>
                        </li>
                    @endfor

                </ul>
            </div>
            @endif

            @if(!empty($brands))
            <div class="filter">
                <div class="filter_name">Brendovi</div>
                <ul class="filter_list with-scrollbar">

                    @foreach($brands as $brand)
                        <li class="filter_list-item">
                            <label class="filter-item">
                                <div class="checkbox">
                                    <input type="checkbox" value="{{ $brand->id }}" name="brands[]" {{ (request('brands') && in_array($brand->id, request('brands')))? 'checked' : '' }}>
                                    <div class="checkbox_mark"></div>
                                </div>
                                <span class="ml-2">{{ $brand->title }}</span>
                            </label>
                        </li>
                    @endforeach

                </ul>
            </div>
            @endif

            <div class="filter">
                <div class="filter_name">Pol</div>
                <ul class="filter_list with-scrollbar">

                    @foreach($genders as $gender)
                        <li class="filter_list-item">
                            <label class="filter-item">
                                <div class="checkbox">
                                    <input type="checkbox" value="{{ $gender->id }}" name="genders[]" {{ (request('genders') && in_array($gender->id, request('genders')))? 'checked' : '' }}>
                                    <div class="checkbox_mark"></div>
                                </div>
                                <span class="ml-2">{{ $gender->title }}</span>
                            </label>
                        </li>
                    @endforeach

                </ul>
            </div>

            <div class="filter">
                <div class="filter_name">Cena</div>
                <div class="d-flex py-2">
                    <label class="sr-only" for="from">od</label>
                    <input class="filter-range_input"
                           type="number"
                           name="prices[min]"
                           id="from"
                           value="{{ (!empty(request('prices')) && !empty(request('prices')['min']))? request('prices')['min'] : '' }}"
                           placeholder="Od"
                    />
                    <label class="sr-only" for="to">do</label>
                    <input class="filter-range_input"
                           type="number"
                           name="prices[max]"
                           id="to"
                           value="{{ (!empty(request('prices')) && !empty(request('prices')['max']))? request('prices')['max'] : '' }}"
                           placeholder="Do"
                    />
                </div>
            </div>

            <button class="btn btn--secondary btn--block mt-1 mb-3" type="submit">primeni</button>

        </collapsible-container>

    </form>

</div>