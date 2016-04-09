<div class="row" style="margin-top:40px">
    @foreach($products as $product)
        <a href="{{ url('selectProductImage/'.$product->id) }}">{{ $product->id }}</a>
    @endforeach
</div>

</div>
<div class="pagination"> {{ $products->links() }} </div>