@extends('themes.' . env('APP_THEME') . '.layouts.main')

@section('content')
  <div class="container">

    <div class="shop-layout">

      <div class="filters">

        <toggler as="div" class="filters_head" event="toggle:filters">
          <span>Filteri</span>
          <span class="icon">&#9660;</span>
        </toggler>

        <collapsible class="filters_body" name="filters">

          <div class="filter">
            <div class="filter_name">Filter name</div>
            <ul class="filter_list with-scrollbar">

              @for($i = 0; $i < 8; $i++)
              <li class="filter_list-item">
                <label class="filter-item">
                  <div class="checkbox">
                    <input type="checkbox" name="demo">
                    <div class="checkbox_mark"></div>
                  </div>
                  <span class="ml-2">Hello</span>
                </label>
              </li>
              @endfor

            </ul>
          </div>

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

          <div class="filter">
            <div class="filter_name">Range filter</div>
            <div class="d-flex py-2">
              <input class="filter-range_input"
                type="number"
                name="from"
                placeholder="Od"
              />
              <input class="filter-range_input"
                type="number"
                name="to"
                placeholder="Do"
              />
            </div>
          </div>

        </collapsible>

      </div>
      
      <div>
        <div class="row shop-list mb-4">
          @for($i = 0; $i < 6; $i++)
          <div class="col shop-list_item">
            @shop_product()
            @endshop_product
          </div>
          @endfor
        </div>

        @include('themes.' . env('APP_THEME') . '.partials.pagination')
      </div>

    </div>

    <div class="mb-5 pt-2">
      <h2 class="h6 text-serif mb-3">Ne propustite</h2>
      <div class="row">
        @for($i = 0; $i < 6; $i++)
        <div class="col col--6">
          {{-- @related_item()
          @endrelated_item --}}
        </div>
        @endfor
      </div>
    </div>

  </div>
@endsection