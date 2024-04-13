@section('Page-Title')
<div>

    <h1>hnjjjjjj</h1>
    {{$counter}}

    <input wire:model="counter" type="text">
    <ul>
        @foreach ($products as $product)
            <li>{{$product->name}}</li>
        @endforeach
    </ul>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
</div>
@endsection
