<div class="shop-product">
    <a title="image alt attribute"
       href="{{ $product->link }}"
       target="_blank"
       rel="noopener noreferrer"
    >
        <div class="image image--1-1 js-lazy-image"
             data-src="{{ $product->image? url(\Imagecache::get($product->image, '267x267')->src): '' }}"
             data-alt="{{ $product->title }}"
        ></div>
    </a>
    <div class="shop-product_name" title="{{$product->title}}">{{ $product->title }}</div>
    <div class="shop-product_price">{{ $product->outlet_price?: $product->price }} rsd</div>
    <a class="btn btn--primary btn--block"
       href="{{ $product->link }}"
       target="_blank"
       rel="noopener noreferrer"
    >pogledaj</a>
</div>
