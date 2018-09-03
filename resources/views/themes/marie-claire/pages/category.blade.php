@extends('themes.' . env('APP_THEME') . '.layouts.main')

@section('seo')
    {!! SEOMeta::generate() !!}
    {!! OpenGraph::generate() !!}
@endsection

@section('content')

    @banner(['position' => \App\Position::setBannerByPosition($positions, 'BH3')])@endbanner

    <div class="container pt-4">
        <h1 class="h4 text-serif text-capitalize">{{ $category->title }}</h1>

        @if(!empty($category->video) && count($category->video)>0)
            <div style="margin-bottom: 64px;">
                <p class="mb-4">{!! $category->short !!}</p>
                <video-box
                        :index="0"
                        :thumbs="{{ $category->video }}"
                        :pgnc="0"
                ></video-box>
            </div>
        @endif

        <div class="content-wrap">
            <div class="content-main">
                @if(!empty($latest) && count($latest)>0)
                    @article_teaser([ 'featured' => true, 'actions' => true, 'post' =>  $latest->slice(0, 1)->first(),
                    ]) @endarticle_teaser

                    <div class="row">

                        @foreach($latest->slice(1) as $post)
                            <div class="col col--6">
                                @article_teaser([ 'actions' => true, 'post' => $post, ]) @endarticle_teaser
                            </div>
                        @endforeach

                    </div>

                @endif

                @include('themes.' . env('APP_THEME') . '.partials.pagination')

                <div class="mb-5 pt-2">
                    <h2 class="h6 text-serif mb-3">Ne propustite</h2>

                    @if(!empty($do_not_miss_it))
                        <div class="row">
                            @foreach($do_not_miss_it as $post)
                                <div class="col col--6">
                                    @related_item(['post' => $post]) @endrelated_item
                                </div>
                            @endforeach
                        </div>
                    @endif
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