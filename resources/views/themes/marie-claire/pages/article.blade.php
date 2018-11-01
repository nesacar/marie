@extends('themes.' . env('APP_THEME') . '.layouts.main')

@section('seo')
    {!! SEOMeta::generate() !!}
    {!! OpenGraph::generate() !!}
@endsection

@section('content')

    @banner(['position' => \App\Position::setBannerByPosition($positions, 'BH3')])@endbanner

    <div class="container pt-4">
        <h1 class="h4 text-serif  mb-3">{{ $post->title }}</h1>
        <div class="content-wrap">

            <div class="content-main">

                <div class="article pb-4"><!-- article -->

                    <div class="article_header" style="position: relative;
                    width: 100%;">
                        <div class="image image--16-9 js-lazy-image"
                             data-src="{{ $post->image? url(\Imagecache::get($post->image, '650x366')->src) : '' }}"
                             data-alt="{{ $post->title }}">
                             <div style="    height: 100%;
                             width: 100%;
                             position: absolute;
                             right: 0;
                             top: 0;
                             display: flex;
                             flex-direction: row-reverse;">
                              @if($post->gallery->count())
                              <div class="gallery-article-more-button">
                                <a class="more-pictures" href="{{ url($post->getGalleryLink()) }}">
                                  <div class="text-serif">
                                    <strong>Pogledajte galeriju </strong>
                                  </div>
                                  <div id="slikee">{{ $post->gallery->count() }}
                                    @if (ends_with($post->gallery->count(), '12') || ends_with($post->gallery->count(), '13') || ends_with($post->gallery->count(), '14'))
                                      slika
                                    @elseif(ends_with($post->gallery->count(), '2') || ends_with($post->gallery->count(), '3') || ends_with($post->gallery->count(), '4'))
                                      slike
                                    @else
                                      slika
                                    @endif
                                  </div> 
                                </a>
                              </div>
                              @endif
                             </div>
                           
                          </div>
                         
                          
                        
                        <div class="article_details">
                            @if(!empty($post->author)) {{ $post->author }}, @endif
                            datum: {{ \Carbon\Carbon::parse($post->publish_at)->format('d.m.Y.') }}
                        </div>
                    </div>

                    <div class="article_body">
                        {!! $post->content !!}
                    </div>

                    @if(!empty($post->gallery))
                        <div class="article_thumbs">
                            @image_gallery(['images' => $post->gallery, 'post' => $post]) @endimage_gallery
                        </div>
                    @endif

                </div><!-- ./article -->

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