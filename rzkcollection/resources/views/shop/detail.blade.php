@extends('layouts.master')

@section('content')
@include('components.navbar')

<main class="flex">
    @if(!is_null($products) && $products->count() > 0)
    <aside class="w-1/2 py-14 pr-16 flex justify-end" id="detailProduct">
        <div class=" h-full w-8/12 bg-cover bg-center bg-no-repeat"
            style="background-image: url('{{ asset('assets/img/'.$products->productImage) }}')"></div>
    </aside>
    <form class="w-1/2 py-14 px-16" id="detailProduct" action="{{route('cart.add')}}" method="POST">
        @csrf
        <p class="font-['NotoSerifDisplay'] font-black text-4xl mb-5">{{$products->productName}}</p>
        <div class="description h-1/4 border-b-2 border-black w-3/5 pt-5 mb-3">
            <p class="w-full h-min break-all font-['Lora']">{{$products->productDescription}}</p>
        </div>
        <p id="selectedColor" class="mb-3 font-['Lora'] text-[#4a586f]"></p>
        <div class="color flex border-b-2 h-[7%] border-black w-3/5 mb-2">
            @php
            $uniqueColors = [];
            @endphp
            @if (!is_null($products->variant) && $products->variant->count() > 0)
            @foreach ($products->variant as $variant)
            @php
            $colorHexCode = $variant->color->first()->colorHexCode;
            $colorName = $variant->color->first()->colorName;
            @endphp
            @if (!in_array($colorHexCode, $uniqueColors))
            <input type="radio" id="color{{$variant->color->first()->id}}" name="color" value="{{$variant->color->first()->id}}" class="hidden" />
            <label for="color{{$variant->color->first()->id}}" class="color-option mr-1 w-[20px] h-[20px] cursor-pointer border-2 border-white hover:border-gray-400" style="background-color: {{$colorHexCode}}" data-color-name="{{$variant->color->first()->colorName}}"></label>
            @php
            $uniqueColors[] = $colorHexCode;
            @endphp
            @endif
            @endforeach
            @else
            <p>No variants available for this product.</p>
            @endif
        </div>
        <div class="size flex mt-3 w-3/5 mb-5">
            @php
            $uniqueSizes = [];
            $colorSelected = false;
            @endphp
            @if (!is_null($products->variant) && $products->variant->count() > 0)
                @foreach ($products->variant as $variant)
                    @php
                    $sizeName = $variant->size->first()->sizeName;
                    $sizeId = $variant->size->first()->id;
                    $variantId = $variant->id;
                    $stockName = $variant->stock->first()->stockName;
                    @endphp
                    @if (!in_array($sizeName, $uniqueSizes))
                        <input type="radio" id="size{{$sizeId}}" name="size" value="{{$variant->size->first()->id}}" class="hidden size-radio" data-stock-name="{{$stockName}}" />
                        <p>
                            <label for="size{{$sizeId}}" class="size-option font-['OpenSans'] text-[14px] px-2 py-1 mr-2" style="border: 1px solid #848992;" onclick="toggleSizeOption(this)">{{$sizeName}}</label>
                        </p>
                        @php
                        $uniqueSizes[] = $sizeName;
                        @endphp
                    @endif
                @endforeach
            @endif
        </div>
        <div class="flex justify-between w-3/5 font-['Lora']">
            <p id="selectedStock"></p>
            <p>Rp. {{ number_format($products->productPrice, 2, ',', '.') }}</p>
        </div>
        <div class="btn mt-10 w-3/5 flex justify-around">
            <button type="submit" class="w-[40%] font-['Lora'] uppercase border-[1px] text-[#848992] border-black" id="button-buy" disabled>
                <p class="border-dotted border-[0.5px] border-[#0c2240] py-3 m-[1px]">
                    buy
                </p>
            </button>
            <button type="submit" class="w-[40%] font-['Lora'] uppercase border-[1px] text-[#848992] border-black" id="button-add-to-cart" disabled>
                <p class="border-[0.5px] border-dotted border-[#0c2240] py-3 m-[1px]">
                    add to cart
                </p>
            </button>
        </div>
    </form>
    @endif
</main>

<script>
    const colorOptions = document.querySelectorAll('.color-option');
    const sizeRadios = document.querySelectorAll('.size-radio');
    const selectedColorElement = document.getElementById('selectedColor');
    const selectedStockElement = document.getElementById('selectedStock');
    const buyButton = document.getElementById('button-buy');
    const addToCartButton = document.getElementById('button-add-to-cart');

    // Mendefinisikan objek untuk menyimpan informasi stok berdasarkan pilihan warna dan ukuran
    const stockInfo = {};

    selectedColorElement.textContent = 'Silahkan Pilih Warna Yang Anda Inginkan!'

    // Memuat informasi stok dari database dan menyimpannya dalam objek stockInfo
    @foreach ($products->variant as $variant)
        @php
            $colorHexCode = $variant->color->first()->colorHexCode;
            $colorName = $variant->color->first()->colorName;
            $sizeName = $variant->size->first()->sizeName;
            $stockName = $variant->stock->first()->stockName;
        @endphp
        stockInfo['color{{$variant->color->first()->id}}-size{{$variant->size->first()->id}}'] = '{{$stockName}}';
    @endforeach

    colorOptions.forEach(colorOption => {
    colorOption.addEventListener('click', () => {
        colorOptions.forEach(option => option.classList.remove('active'));
        colorOption.classList.add('active');
        const colorId = colorOption.getAttribute('for').substring(5);
        const selectedSize = document.querySelector('.size-option.selected');
        if (selectedSize) {
            selectedSize.classList.remove('selected');
        }
        const selectedSizeId = sizeRadios[0].getAttribute('id').substring(4);
        const stockKey = `color${colorId}-size${selectedSizeId}`;
        const stockName = stockInfo[stockKey];
        selectedColorElement.textContent = colorOption.getAttribute('data-color-name');
        if (selectedSizeId in stockInfo) {
            selectedStockElement.textContent = 'Stock: ' + stockName;
            buyButton.disabled = false;
            addToCartButton.disabled = false;
        } else {
            selectedStockElement.textContent = 'Silahkan Pilih Ukuran';
            buyButton.disabled = true;
            addToCartButton.disabled = true;
        }
    });
});

    sizeRadios.forEach(sizeRadio => {
        sizeRadio.addEventListener('change', () => {
            const selectedSize = document.querySelector('.size-option.selected');
            if (selectedSize) {
                selectedSize.classList.remove('selected');
            }
            const sizeOption = sizeRadio.parentNode.querySelector('.size-option');
            sizeOption.classList.add('selected');
            const colorId = document.querySelector('.color-option.active').getAttribute('for').substring(5);
            const selectedSizeId = sizeRadio.getAttribute('id').substring(4);
            const stockKey = `color${colorId}-size${selectedSizeId}`;
            const stockName = stockInfo[stockKey];
            selectedStockElement.textContent = 'Stock: ' + stockName;
            buyButton.disabled = false;
            addToCartButton.disabled = false;
        });
    });
</script>
@endsection
