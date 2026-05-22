@foreach($products as $product)
    <div class="product-card">
        <h3>{{ $product->translateAttribute('name') }}</h3>
        
        <div x-data="{ open: false }">
            <button @click="open = true" class="bg-blue-500 text-white p-2">
                Quick View
            </button>

            <div x-show="open" 
                 class="fixed inset-0 flex items-center justify-center bg-black/50 z-50"
                 x-cloak>
                <div @click.away="open = false" class="bg-white p-6 rounded shadow-lg max-w-lg w-full">
                    <h2 class="text-xl font-bold">{{ $product->translateAttribute('name') }}</h2>
                    <p>Product details here...</p>
                    <button @click="open = false" class="mt-4 text-red-500">Close</button>
                </div>
            </div>
        </div>
    </div>
@endforeach