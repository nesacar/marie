@if($settings)
  <ul class="social">
    @if($settings->facebook)
      <li class="social-item">
        <a class="social-link" href="{{ $settings->facebook }}" title="facebook">
          <svg class="icon">
            <use xlink:href="#icon_facebook"></use>
          </svg>
        </a>
      </li>
    @endif
    @if($settings->instagram)
      <li class="social-item">
        <a class="social-link" href="{{ $settings->instagram }}" title="instagram">
          <svg class="icon">
            <use xlink:href="#icon_instagram"></use>
          </svg>
        </a>
      </li>
      @endif
      @if($settings->twitter)
      <li class="social-item">
        <a class="social-link" href="{{ $settings->twitter }}" title="twitter">
          <svg class="icon">
            <use xlink:href="#icon_twitter"></use>
          </svg>
        </a>
      </li>
      @endif
  </ul>
@endif