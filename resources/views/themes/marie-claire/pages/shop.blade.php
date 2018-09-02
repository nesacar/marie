@extends('themes.' . env('APP_THEME') . '.layouts.main')

@section('content')
    <div class="container">

        @banner(['position' => \App\Position::setBannerByPosition($positions, 'BH3')])@endbanner

        <div class="shop-layout">

            @include('themes.' . env('APP_THEME') . '.partials.shop.filters')

            <div>
                <div class="row shop-list mb-4">
                    @foreach($products as $product)
                        <div class="col shop-list_item">
                            @shop_product(['product' => $product])@endshop_product
                        </div>
                    @endforeach
                </div>

                @include('themes.' . env('APP_THEME') . '.partials.pagination')
            </div>

        </div>

        <div class="mb-5 pt-2">
            <h2 class="h6 text-serif mb-3">Ne propustite</h2>
            <div class="row">
                @foreach($do_not_miss_it as $post)
                    <div class="col col--6">
                        @related_item(['post' => $post]) @endrelated_item
                    </div>
                @endforeach
            </div>
        </div>

    </div>
@endsection