<div class="subscription">
  <span class="subscription_label">novo izdanje</span>
  <a href="{{ $settings->magazine_link }}">
    <div class="image image--3-4 js-lazy-image subscription_image"
      data-src="{{ $settings->magazine_image? url($settings->magazine_image): '' }}"
      data-alt="{{ $settings->magazine_title }}"
    ></div>
  </a>
  <a class="btn btn--primary btn--block" href="{{ $settings->magazine_link }}">pretplati se</a>
</div>