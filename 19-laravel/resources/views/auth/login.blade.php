@extends('layouts.app')
@section('title', 'Login')
@section('content')
    @include('layouts.navbar')
    <main class="bg-[url(images/bg-welcome.webp)] bg-cover w-full min-h-[100dvh] flex flex-col justify-center items-center">
        <div class="bg-[#0006] w-96 text-white p-10 rounded-lg flex flex-col justify-center items-center">
            <h1 class="text-4xl flex gap-2 items-center pb-2 border-b-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-12">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 1 0-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 0 0 2.25-2.25v-6.75a2.25 2.25 0 0 0-2.25-2.25H6.75a2.25 2.25 0 0 0-2.25 2.25v6.75a2.25 2.25 0 0 0 2.25 2.25Z" />
                </svg>
                Login
            </h1>
            @if (count($errors->all()) > 0)
                <div class="flex flex-col gap-1 my-4">
                    @foreach ($errors->all() as $msg)
                        <div class="badge badge-error text-xs">
                            {{ $msg }}
                        </div>
                    @endforeach
                </div>
            @endif
            @if (session('error'))
                <div class="flex flex-col gap-1 my-4">
                        <div class="badge badge-error text-xs">
                            {{ session('error') }}
                        </div>
                </div>
            @endif
            <form method="POST" action="{{ route('login') }}" class="flex flex-col gap-6">
                 @csrf
                 <div class="mt-4">
                     <label class="mt-4">Email:</label>
                     <input type="text" name="email" placeholder="jonhw@mail.com" class="input bg-[transparent] border-white"/>
                 </div>
                 <div>
                     <label class="mt-4">Password:</label>
                     <input type="password" name="password" placeholder="secret" class="input bg-[transparent] border-white" />
                 </div>
                 <div>
                    <button class="btn btn-light w-full">
                        Login
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                        </svg>
                    </button>
                    @if (Route::has('password.request'))
                        <a class="pb-1 border-b-2 mt-6 inline-block text-sm text-gray-400 hover:text-gray-100" href="{{ route('password.request') }}">
                            Forgot your password?
                        </a>
                    @endif
                 </div>
            </form>

        </div>
    </main>
@endsection

