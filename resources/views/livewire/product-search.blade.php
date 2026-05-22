<div>
    <input wire:model.live="search" type="text" placeholder="search..." class="border p-2">
    @if($search)
        <ul>
            @foreach($products as $product)
                <li>{{ $product->translateAttribute('name') }}</li>
            @endforeach
        </ul>
    @endif
</div>