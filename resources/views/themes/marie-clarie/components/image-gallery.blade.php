<div class="image-grid">
    @php $br=0; @endphp
    @foreach($images as $image)
        <a href="{{ !empty($post)? $post->getGalleryLink(++$br) : '#' }}" title="{{ $image->title }}">
            <div class="image image--1-1 js-lazy-image" data-src={{ url($image->file_path) }} data-alt="{{ $image->title }}"></div>
        </a>
    @endforeach
</div>