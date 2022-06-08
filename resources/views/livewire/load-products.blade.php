<div tabindex="0" class="focus:outline-none">
    <div class="mx-auto container">
        <div class="flex flex-wrap items-center lg:justify-around justify-center">
            @foreach($products as $product)
                <div tabindex="0" class="focus:outline-none mx-2 w-72 h-[450px] xl:mb-0 m-8 rounded-lg shadow-lg hover:scale-105 transition-all duration-300 ease-in-out">
                    <div>
                        <img alt="{{$product->name}}" src="{{$product->image_url}}" tabindex="0" class="focus:outline-none w-full h-44" />
                    </div>
                    <div class="bg-white">
                        <div class="flex items-center justify-between px-4 pt-4">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" tabindex="0" class="focus:outline-none" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M9 4h6a2 2 0 0 1 2 2v14l-5-3l-5 3v-14a2 2 0 0 1 2 -2"></path>
                                </svg>
                            </div>
                            @if ($product->featured == 1)
                                <div class="bg-yellow-200 py-1.5 px-6 rounded-full">
                                    <p tabindex="0" class="focus:outline-none text-xs text-yellow-700">Featured</p>
                                </div>
                            @endif
                        </div>
                        <div class="p-4">
                            <div class="flex items-center">
                                <h2 tabindex="0" class="focus:outline-none text-lg font-semibold">{{$product->name}}</h2>
                            </div>
                            <div class="flex items-center">
                                <h3 tabindex="0" class="focus:outline-none text-lg font-semibold mr-3" :class="{{ $product->sale_price > 0 ? 'line-through' : ''  }}">{{$product->regular_price}}</h3>
                                @if ($product->sale_price > 0)
                                    <h3 tabindex="0" class="focus:outline-none text-lg font-semibold">{{$product->sale_price}}</h3>
                                @endif
                            </div>
                            <p tabindex="0" class="focus:outline-none text-xs text-gray-600 mt-2">{{$product->description}}</p>
                            <div class="flex mt-4">
                                <div>
                                    <p tabindex="0" class="focus:outline-none text-xs text-gray-600 px-2 bg-gray-200 py-1">12 months warranty</p>
                                </div>
                                <div class="pl-2">
                                    <p tabindex="0" class="focus:outline-none text-xs text-gray-600 px-2 bg-gray-200 py-1">Complete box</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            @if($products->hasMorePages())
                @livewire('load-more-products', ['page' => $page, 'perPage' => $perPage, 'key' => 'products-page-' . $page])
            @endif
            
        </div>
        {{-- <div class="flex flex-wrap items-center lg:justify-around justify-center mt-4">
            <x-jet-button wire:click="loadMore" class="my-4 p-4 bg-slate-600 text-white hover:scale-110">
                {{ __('Load More Products') }}
            </x-jet-button>
        </div> --}}
        
    </div>
    
</div>