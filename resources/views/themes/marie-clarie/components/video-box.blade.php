<div class="image image--16-9 video-box mb-3">
  <iframe
    src="https://www.youtube.com/embed/6lcZ0redg1s"
    frameborder="0"
    allow="autoplay; encrypted-media"
    allowfullscreen
  ></iframe>
</div>
<ul class="video-box_list">
  @for($i = 0; $i < 6; $i++)
  <li class="video-box_list-item tint tint--light tint--hover"
    data-src=""
    tabindex="0"
  >
    <div class="image image--16-9 js-lazy-image"
      data-src=""
      data-alt=""
      style="background-color: lightgray;"
    ></div>
    <h3 class="video-title text-serif">naslov very long title bla b;a tri</h3>
  </li>
  @endfor
</ul>