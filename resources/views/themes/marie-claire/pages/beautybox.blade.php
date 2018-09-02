@extends('themes.' . env('APP_THEME') . '.layouts.beautybox')

@section('seo')
    {!! SEOMeta::generate() !!}
    {!! OpenGraph::generate() !!}
@endsection

@section('content')

    <div class="py-4" style="background-color: #b5e2f5;">
        @beautybox_hero(['beauty_box' => $beauty_box]) @endbeautybox_hero
    </div>

    <div class="container">

        @banner(['position' => \App\Position::setBannerByPosition($positions, 'BH3')])@endbanner

        <div class="mb-5">
            {{--<p class="mt-4">{!! $beauty_box->short !!}</p>--}}
            <div class="text-center">
                <img src="{{ url('client/images/marieclaire_sig.png') }}" alt="marie claire signature">
            </div>
        </div>

        @if(!empty($products))
        <h2 class="text-uppercase text-center mb-4 h5">sadržaj beauty box-a</h2>

        <div class="row mb-5">
            @foreach($products as $product)
                <div class="col beautybox-list_item">
                    @beautybox_product(['product' => $product]) @endbeautybox_product
                </div>
            @endforeach
        </div>
        @endif

        @if(!empty($partners))
        <h2 class="text-uppercase text-center mb-4 h5">partneri</h2>

        <div class="row mb-5">
            @foreach($partners as $partner)
                <div class="col beautybox-list_item">
                    @beautybox_partner(['partner' => $partner]) @endbeautybox_partner
                </div>
            @endforeach
        </div>
        @endif

        <h2 class="h6">#beautybox</h2>

        <div>
            instagram plugin and stuff...
        </div>

        <div class="text-center py-5 small">
            <div>Legal crap and stuff</div>
            <div>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatum rerum hic quas! Atque nostrum
                dolores excepturi!
            </div>
        </div>

    </div>
@endsection