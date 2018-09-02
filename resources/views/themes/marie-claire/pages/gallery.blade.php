@extends('themes.' . env('APP_THEME') . '.layouts.main')

@section('seo')
    {!! SEOMeta::generate() !!}
    {!! OpenGraph::generate() !!}
@endsection

@section('content')
    <div class="container pt-4">

        @banner(['position' => \App\Position::setBannerByPosition($positions, 'BH3')])@endbanner

        <h1 class="h4 text-serif text-capitalize mb-3">{{ $post->title }}</h1>

        <div class="content-wrap">

            <div class="content-main">

                <div class="d-flex justify-content-between py-2 border-top">
                    <div></div>
                    <a class="btn btn--secondary px-2" href="{{ url($post->getImagesLink()) }}">
                        <svg class="icon" role="presentation">
                            <use xlink:href="#icon_gallery"></use>
                        </svg>
                        <span class="ml-1 d-none d-sm-inline">sve slike</span>
                    </a>
                </div>

                @if(!empty($post->gallery))
                    <div class="mb-3 gallery">
                        <div style="overflow-x: hidden;">

                            @php
                              $images =  array();
                              foreach ($post->gallery as $key => $image) {
                                $images[] = [
                                  'src' => url($image->file_path),
                                  'desc' => $image->desc,
                                  'title' => $image->title,
                                ];
                              }
                            @endphp

                            <gnc-gallery
                              :srcset="{{ json_encode($images) }}"
                              :index="{{ request('image')? (int) request('image') - 1 : 0 }}"
                              :pgnc="50"
                            >
                            </gnc-gallery>

                        </div>
                    </div>
                @endif

                <div class="mb-5 pt-2">
                    <h2 class="h6 text-serif mb-3">Ne propustite</h2>

                    <div class="row">
                        @foreach($do_not_miss_it as $article)
                            <div class="col col--6">
                                @related_item(['post' => $article])@endrelated_item
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