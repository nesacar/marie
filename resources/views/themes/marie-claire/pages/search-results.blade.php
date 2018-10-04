@extends('themes.' . env('APP_THEME') . '.layouts.main')

@section('seo')
    {!! SEOMeta::generate() !!}
    {!! OpenGraph::generate() !!}
@endsection

@section('content')

    @banner(['position' => \App\Position::setBannerByPosition($positions, 'BH3')])@endbanner

    <div class="container pt-4">

        <h1 class="h4 text-serif">Rezultati pretrage za termin: {{ $text }}</h1>
        <div class="content-wrap">
            <div class="content-main">

                <div class="row">

                    @if(!empty($posts))

                        @foreach($posts as $post)
                            <div class="col col--6">
                                @article_teaser([ 'actions' => true, 'post' => $post, ]) @endarticle_teaser
                            </div>
                        @endforeach

                    @endif

                </div>

                {{--@include('themes.' . env('APP_THEME') . '.partials.pagination')--}}

                <div class="mb-5 pt-2">
                    <h2 class="h6 text-serif mb-3">Ne propustite</h2>

                    <div class="row">
                        @foreach($latest as $post)
                            <div class="col col--6">
                                @related_item(['post' => $post]) @endrelated_item
                            </div>
                        @endforeach
                    </div>
                </div>

            </div>
            <aside class="content-aside">

                @banner(['position' => \App\Position::setBannerByPosition($positions, 'D1')])@endbanner

                @banner(['position' => \App\Position::setBannerByPosition($positions, 'D2')])@endbanner

                <div class="aside-box">
                    @include('themes.' . env('APP_THEME') . '.partials.subscription')
                </div>
                <div class="aside-box">
                    @include('themes.' . env('APP_THEME') . '.partials.newsletter')
                </div>
            </aside>
        </div>

    </div>
@endsection
