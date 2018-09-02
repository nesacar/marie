@extends('themes.' . env('APP_THEME') . '.layouts.main')

@section('content')
    <div class="container pt-4">

        @banner(['position' => \App\Position::getBannerByTitle($positions, 'BH3')])@endbanner

        <h1 class="h4 text-serif text-capitalize">Rezultati pretrage</h1>
        <div class="content-wrap">
            <div class="content-main">

                <div class="row">

                    @foreach($latest->slice(1) as $post)
                        <div class="col col--6">
                            @article_teaser([ 'actions' => true, 'post' => $post, ]) @endarticle_teaser
                        </div>
                    @endforeach

                </div>

                @include('themes.' . env('APP_THEME') . '.partials.pagination')

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
            <aside class="content-aside">

                @banner(['position' => \App\Position::getBannerByTitle($positions, 'D1')])@endbanner

                @banner(['position' => \App\Position::getBannerByTitle($positions, 'D2')])@endbanner

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
