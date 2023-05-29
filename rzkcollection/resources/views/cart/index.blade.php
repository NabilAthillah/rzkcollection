@extends('layouts.master')

@section('content')
@include('components.navbar')
        <main id="mainCart" class="w-full pl-20 pr-20 pt-10 flex">
            <main class="w-6/12">
                <p id="cartBelanja" class="text-black uppercase font-black text-3xl mb-2">tas belanja</p>
                <div class="box w-[90%] border-2 mb-2 relative p-5 flex">
                    <div class="box-left h-full w-1/3 mr-2">
                        <img src={{asset('assets/img/GRS03747.jpeg')}}  alt="" width={100} height={200} id="imgCart"/>
                    </div>
                    <div class="box-right">
                        <p class="capitalize font-['Lora'] font-semibold text-xl text-black">therary</p>
                        <p class="capitalize font-['Lora'] text-black text-lg">ukuran : allsize</p>
                        <p class="capitalize font-['Lora'] text-black text-lg">warna : black</p>
                        <p class="capitalize font-['Lora'] text-black text-lg">harga : 52.500</p>
                        <div class="qty-counter">
                            <button type="button" onclick="decreaseQuantity()">-</button>
                            <input type="number" id="quantity" name="quantity" value="1" min="1" max="10" onchange="updateQuantity(this.value)">
                            <button type="button" onclick="increaseQuantity()">+</button>
                        </div>
                        <p class="capitalize font-['Lora'] text-black font-bold text-lg">Total : 52.500</p>
                    </div>
                    <button class="absolute right-3 bottom-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#a6a6a6" class="bi bi-trash3" viewBox="0 0 16 16">
                            <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z"/>
                        </svg>
                    </button>
                </div>
                <div class="box w-[90%] border-2 mb-2 relative p-5 flex">
                    <div class="box-left h-full w-1/3 mr-2">
                        <img src={{asset('assets/img/GRS03747.jpeg')}}  alt="" width={100} height={200} id="imgCart"/>
                    </div>
                    <div class="box-right">
                        <p class="capitalize font-['Lora'] font-semibold text-xl text-black">therary</p>
                        <p class="capitalize font-['Lora'] text-black text-lg">ukuran : allsize</p>
                        <p class="capitalize font-['Lora'] text-black text-lg">warna : black</p>
                        <p class="capitalize font-['Lora'] text-black text-lg">harga : 52.500</p>
                        <div class="qty-counter">
                            <button type="button" onclick="decreaseQuantity()">-</button>
                            <input type="number" id="quantity" name="quantity" value="1" min="1" max="10" onchange="updateQuantity(this.value)">
                            <button type="button" onclick="increaseQuantity()">+</button>
                        </div>
                        <p class="capitalize font-['Lora'] text-black font-bold text-lg">Total : 52.500</p>
                    </div>
                    <button class="absolute right-3 bottom-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#a6a6a6" class="bi bi-trash3" viewBox="0 0 16 16">
                            <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z"/>
                        </svg>
                    </button>
                </div>
            </main>
            <aside class=" w-5/12 mt-11 border-2 p-7 fixed right-20" id="totalBelanja">
                <p class=" text-black uppercase font-black text-xl text-center" id="cartBelanja">total tas belanja</p>
                <div class="checkout absolute bottom-4 right-2">
                    <p class="font-['Lora'] uppercase text-black font-black mr-3">subtotal : Rp 161.500,00</p>
                    <button class=" w-40 h-8 bg-[#434343] uppercase text-white font-['Lora'] text-xs ml-6 font-bold mt-3">pembayaran</button>
                </div>
                <div class="pesanan flex font-['Lora']">
                    <p class=" w-24">Pesanan :</p>
                    <div class="detail w-full">
                        <p class="mb-2">Therary (Black,Allsize)</p>
                        <p>Daily Lyra (Dusty Rose,Allsize)</p>
                    </div>
                    <div class="qty-detail">
                        <div id="quantityDisplay" class="border-[1px] border-[#848992] px-1 font-light mb-2">1</div>
                        <div id="quantityDisplay" class="border-[1px] border-[#848992] px-1 font-light">1</div>
                    </div>
                </div>
            </aside>
        </main>
    <script>
        function decreaseQuantity() {
            const quantityInput = document.getElementById('quantity');
            let quantity = parseInt(quantityInput.value);
            if (quantity > 1) {
                quantity--;
                quantityInput.value = quantity;
                updateQuantity(quantity);
            }
        }
    
        function increaseQuantity() {
            const quantityInput = document.getElementById('quantity');
            let quantity = parseInt(quantityInput.value);
            if (quantity < 10) {
                quantity++;
                quantityInput.value = quantity;
                updateQuantity(quantity);
            }
        }
    
        function updateQuantity(value) {
            document.getElementById('quantityDisplay').textContent = value;
        }
    </script> 
@endsection