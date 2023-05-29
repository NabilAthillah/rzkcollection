@extends ('layouts.master')

@section('content')
@include('components.navbar')
<main id="shopMain" class="pt-8">
    @if(!is_null($products) && $products->count() > 0)
        @foreach ($products as $product)
            <aside class="mb-10">
                <a href='{{ route('product.show', $product->id) }}'>
                    <div class="bg-cover bg-center bg-no-repeat" style="background-image: url('{{ asset('assets/img/'.$product->productImage) }}')" id="section1"></div>
                    <p class="font-['Lora'] text-black capitalize ml-[5px] mt-2 mb-2">{{$product->productName}}</p>
                    <article class="flex">  
                        @php
                            $uniqueColors = [];
                        @endphp
                        @if (!is_null($product->variant) && $product->variant->count() > 0)
                            @foreach ($product->variant as $variant)
                                @php
                                    $colorHexCode = $variant->color->first()->colorHexCode;
                                @endphp
                                @if (!in_array($colorHexCode, $uniqueColors))
                                    <div class="box h-[16px] w-[16px] ml-[5px]" style="background-color: {{$colorHexCode}}"></div>
                                    @php
                                        $uniqueColors[] = $colorHexCode;
                                    @endphp
                                @endif
                            @endforeach
                        @else
                            <p>No variants available for this product.</p>
                        @endif
                    </article>
                </a>
            </aside>
        @endforeach
    @else
        <p>No products available.</p>
    @endif
</main>
@endsection
