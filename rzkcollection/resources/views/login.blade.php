<!-- login.blade.php -->
@extends('layouts.master')

@section('content')
    @include('components.navbar')
    @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    <form action="{{ route('login.post') }}" class="flex flex-col justify-center items-center mt-10" method="POST">
        @csrf
        <p class="cursor-default font-['NotoSerifDisplay'] font-black text-4xl mb-8 uppercase">Login</p>
        <div class="container relative h-96 w-2/5 border-[1px] border-black flex flex-col px-10 py-8">
            <div class="form-group flex flex-col font-['Lora']">
                <label for="name" class="mb-2">Username</label>
                <input type="text" name="name" id="name" class="h-7 mb-2 form-control border-[1px] border-[#848992] pl-2" required>
            </div>
            <div class="form-group flex flex-col">
                <label for="password" class="mb-2">Password</label>
                <div class="relative mb-4">
                    <input type="password" name="password" id="password" class="h-7 form-control border-[1px] border-[#848992] pl-2 relative w-full" required>
                    <div class="password-toggle absolute">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 absolute top-1/2 right-[-0.5rem] transform -translate-y-1/2 cursor-pointer" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M10 12a2 2 0 1 0 0-4 2 2 0 0 0 0 4zM2.667 10a6.87 6.87 0 0 1 1.648-4.433L4.768 4.58l1.414 1.414L3.818 8.192a5.002 5.002 0 0 0 0 3.616l2.364 2.364-1.414 1.414L4.648 14.45A6.87 6.87 0 0 1 2.667 10z"/>
                            <path d="M8.485 9.879l-1.414-1.414L10 5.758l2.93 2.93-1.414 1.414-1.516-1.516a1 1 0 0 0-1.415 1.415l2.12 2.12-1.415 1.414-2.121-2.12a2 2 0 0 1 0-2.829z"/>
                        </svg>
                    </div>
                </input>
                </div>                         
            </div>
            <a href="#" class="mb-4 font-['Lora'] text-[#a6a6a6] text-sm text-end">Forgot Password?</a>
            <button type="submit" class="btn font-['Lora'] text-[#ebeae9] bg-[#2e2e2e] uppercase h-10">submit</button>
            <a href="/user/register" class="absolute bottom-4 right-4 font-['Lora'] text-[#4c4e53] italic">You Don't Have Account? Register</a>
        </div>
    </form>
    <script>
    const passwordInput = document.getElementById('password');
    const passwordToggle = document.querySelector('.password-toggle');

    passwordToggle.addEventListener('click', function() {
        const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
        passwordInput.setAttribute('type', type);
        this.querySelector('svg').classList.toggle('text-gray-500'); // Add or remove CSS class for styling
    });
    </script>    
@endsection
