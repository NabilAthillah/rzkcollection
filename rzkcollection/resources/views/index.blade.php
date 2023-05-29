@extends('layouts.master')

@section('content')
@include('components.navbar')
<main class="flex mb-3">
    <aside id="aside-1"></aside>
    <main id="main-1" class="flex flex-col justify-center pl-28">
        <p class="uppercase text-6xl text-white mb-5">daily lyra</p>
        <p class="uppercase text-6xl text-white mb-5">is back</p>
        <p class="uppercase text-xl text-white mb-4">get it before it`s gone!</p>
        <a href='/shop/2' class="w-min p-0.5 border-2">
            <div class="w-28 h-14 flex justify-center items-center" id="box">
                <p class="uppercase text-sm text-white h-min">
                    shop now
                </p>
            </div>
        </a>
    </main>
</main>
<main>
    <main id="main-2" class=""></main>
    <aside class="w-full" id="aside-2">
        <p class="uppercase text-6xl text-black" id="best">best seller</p>
    </aside>
</main>
<main id="main-3">
    <aside id="aside-31" class=" w-1/2"> </aside>
    <aside id="aside-32" class="w-1/2"></aside>
    <p class="z-0 uppercase text-white text-8xl h-48" id="sale">sale</p>
</main>
@include('components.footer')
@endsection
