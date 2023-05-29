<nav role="nav" class="nav w-screen bg-white flex justify-around border-b-2 border-[#a6a6a6] h-16" id="navbar">
    <div class="navbar-left grid">
        <a href='/#main-1' class="grid">
            <img alt="Logo" src="{{ asset('assets/img/316609274_494526255980765_2425076201375607374_n-removebg-preview111.png') }}"
            class="h-12 self-center" />       
        </a>
    </div>
    <div class="navbar-mid flex w-3/5">
        <a href='/shop' class="uppercase font-['Montserrat'] navList self-center mr-20">Shop</a>
        <a href='/#main-2' class="uppercase font-['Montserrat'] navList self-center mr-20">Best Seller</a>
        <a href='/#main-3' class="uppercase font-['Montserrat'] navList self-center mr-20">sale</a>
    </div>
    <div class="navbar-right flex justify-end w-1/6">
        @if (session()->has('name'))
        <a href='/cart' class="flex align-middle">
            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="#a6a6a6"
                class="bi bi-bag-fill self-center mr-5" viewBox="0 0 16 16">
                <path
                    d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5z" />
            </svg>
        </a>
            <div class="flex relative align-middle" id="dropdown">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#a6a6a6"
                    class="bi bi-person-fill self-center group-hover:fill-[#000000]" viewBox="0 0 16 16">
                    <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                </svg>
                <ul class="absolute hidden mt-[4rem] right-0 rounded-xl bg-white shadow-lg w-40 px-2" id="dropmenu">
                    <p class="text-sm text-[#bbb58a] font-['Lora'] group-hover:text-black w-full h-10 mt-auto mb-auto cursor-default flex justify-center border-b-[1px] border-black capitalize" style="align-items: center">Hello {{ session('name') }} !</p>
                    <li><a href="/profile" class="block px-4 py-4 text-sm text-gray-700 hover:bg-gray-100">Profile</a></li>
                    <li><a href="/settings" class="block px-4 py-4 text-sm text-gray-700 hover:bg-gray-100">My Orders</a></li>
                    <li><a href="{{route('user.logout')}}" class="block px-4 py-4 text-sm text-gray-700 hover:bg-gray-100">Logout</a></li>
                </ul>
            </div>
        @else
            <a href='/user/login' class="font-semibold font-['Lora'] mt-auto mb-auto ml-2 text-base text-[#a6a6a6]">
                Login / Register
            </a>
        @endif
    </div>
</nav>