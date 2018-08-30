<div class="image image--16-9 video-box mb-3">
    <iframe src="{{ $thumbs->first()->href }}"
            frameborder="0"
            allow="autoplay; encrypted-media"
            allowfullscreen
    ></iframe>
</div>
<ul class="video-box_list">
    @foreach($thumbs as $video)
        <li class="video-box_list-item tint tint--light tint--hover"
            data-src=""
            tabindex="0"
        >
            <div class="image image--16-9 js-lazy-image"
                 data-src=""
                 data-alt="{{ $video->title }}"
                 style="background-color: lightgray;"
            ></div>
            <h3 class="video-title text-serif">{{ $video->title }}</h3>
        </li>
    @endforeach
</ul>