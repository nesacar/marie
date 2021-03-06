@php
    $isFeatured = isset($featured) ? $featured : false;
    $hasActions = isset($actions) ? $actions : false;
    $teaser = 'teaser'.($isFeatured ? ' teaser--featured' : '');
    $image = 'image js-lazy-image image--'.($isFeatured ? '16-9' : '1-1');
    $details = 'details'.($isFeatured ? ' details--fixed' : '');
    $body = 'teaser_body'.(!$isFeatured ? ' text-truncate' : '');
@endphp

<div class="{{$teaser}}">
    <div class="teaser_media">
        <a href="{{ $post->link }}" title="image alt">
            <div class="{{$image}} tint tint--light tint--hover"
                 data-src="{{ !empty($post->image)? ($isFeatured? asset(\Imagecache::get($post->image, '650x366')->src) : asset($post->image_box)) : '' }}"
                 data-alt="{{ $post->title }}"
            ></div>
        </a>
    </div>
    <div class="teaser_primary">
        <div class="{{$details}}">
            <a href="{{ count($post->blog) ? $post->blog->first()->getLink() : '#' }}" class="details-item details-item--primary">{{ count($post->blog) ? $post->blog->first()->title : '' }}</a>
            <span class="details-item details-item--secondary">{{ \Carbon\Carbon::parse($post->publish_at)->format('d/m/Y') }}</span>
        </div>
        <h3 class="teaser_title"><a href="{{ $post->link }}">{{ $post->title }}</a></h3>
        <p class="{{$body}}">{{ $post->short }}</p>
    </div>
    @if($hasActions)
        <div class="teaser_actions">
            <a href="{{ $post->link }}" class="btn btn--secondary">još</a>
        </div>
    @endif
</div>