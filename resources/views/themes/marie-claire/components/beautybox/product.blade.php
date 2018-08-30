<div class="beautybox-product">
    <a href="{{ $product->link }}" title="image-alt">
        <div class="image image--1-1 js-lazy-image"
             data-src="{{ $product->image? url(\Imagecache::get($product->image, '305x305')->src): '' }}"
             data-alt="{{ $product->title }}"
        ></div>
    </a>
    <h3 class="beautybox-product_title text-center">{{ $product->title }}</h3>
    <div class="beautybox-product_overlay">
        <div class="beautybox-product_desc">
            <h3 class="beautybox-product_title">{{ $product->title }}</h3>
            <p>{{ $product->short }}</p>
            <p>Više informacija <a class="beautybox-product_link" href="{{ $product->link }}" target="_blank">ovde</a>.
            </p>
        </div>
    </div>
</div>
