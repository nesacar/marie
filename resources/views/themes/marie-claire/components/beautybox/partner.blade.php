<div class="beautyshop-partner">
  <a href="{{ $partner->link?: '#' }}" title="{{ $partner->title }}">
    <div class="beautyshop-partner_image js-lazy-image"
      data-src="{{ $partner->image? url($partner->image) : '' }}"
      data-alt="{{ $partner->title }}"
    ></div>
  </a>
</div>