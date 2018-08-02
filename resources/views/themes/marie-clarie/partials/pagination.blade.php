@if(!empty($latest))
    {{ $latest->links() }}
@elseif(!empty($products))
    {{ $products->links() }}
@endif