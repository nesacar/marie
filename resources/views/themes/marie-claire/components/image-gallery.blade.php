<div class="image-grid">
    @php $br=0; @endphp
    @foreach($images as $image)
        <a href="{{ !empty($post)? url($post->getGalleryLink(++$br)) : '#' }}"
          title="{{ $image->title }}">
            <responsive-image class="image image--1-1"
              src={{ url($image->file_path) }}
              alt="{{ $image->title }}"
            ></responsive-image>
        </a>
    @endforeach
</div>