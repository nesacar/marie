<div class="container beautybox-hero">
    <div class="beautybox-hero_content">
        <h1 class="beautybox-hero_desc">
            <span class="beautybox-hero_subtitle">{{ $beauty_box->overtitle }}</span>
            <strong class="beautybox-hero_title">{{ $beauty_box->title }}</strong>
            <span class="beautybox-hero_underline">{{ $beauty_box->subtitle }}</span>
        </h1>
        <div class="beautybox-hero_actions">
            <a class="btn btn--primary btn--lg" href="#">
                <svg class="icon mr-2" role="presentation">
                    <use xlink:href="#icon_cart"></use>
                </svg>
                kupi
            </a>
            <span class="beautybox-hero_price">{{ $beauty_box->price }}din</span>
        </div>
    </div>
    @if($beauty_box->image)
        <div class="beautybox-hero_image">
            <img
                    src="{{ url($beauty_box->image) }}"
                    alt="{{ $beauty_box->title }}">
        </div>
    @endif
</div>