@extends('layouts.app')
@section('title', 'Register')
@section('content')
    @include('layouts.navbar')
    <main class="bg-[url(images/bg-welcome.webp)] bg-cover w-full min-h-[100dvh] flex flex-col justify-center items-center">
        <div class="bg-[#0006] w-96 text-white p-10 mt-20 mb-10 rounded-lg flex flex-col justify-center items-center">
            <h1 class="text-4xl flex gap-2 items-center pb-2 border-b-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-12">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                </svg>
                Register
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
            <form method="POST" action="{{ route('register') }}" class="flex flex-col gap-6">
                 @csrf
                 {{-- 
        
                'gender',
               
                 --}}
                <div class="mt-4">
                     <label class="mt-4">Document:</label>
                     <input type="text" name="document" placeholder="750001002" class="input bg-[transparent] border-white" value="{{ old('document') }}"/>
                 </div>
                 <div>
                     <label class="mt-4">Full Name:</label>
                     <input type="text" name="fullname" placeholder="John Wick" class="input bg-[transparent] border-white" value="{{ old('fullname') }}"/>
                 </div>
                 <div>
                     <label class="mt-4">Gender:</label>
                     <select name="gender" class="select bg-[transparent] border-white">
                        <option value="">Select Gender...</option>
                        <option value="Female" @if(old('gender') == 'Female') selected @endif>Female</option>
                        <option value="Male" @if(old('gender') == 'Male') selected @endif>Male</option>
                     </select>
                 </div>
                 <div>
                     <label class="mt-4">Birthdate:</label>
                     <input type="date" name="birthdate" placeholder="2000-10-08" class="input bg-[transparent] border-white" value="{{ old('birthdate') }}"/>
                 </div>
                 <div>
                     <label class="mt-4">Phone Number:</label>
                     <input type="text" name="phone" placeholder="3201231234" class="input bg-[transparent] border-white" value="{{ old('phone') }}"/>
                 </div>
                 <div>
                     <label class="mt-4">Email:</label>
                     <input type="text" name="email" placeholder="jonhw@mail.com" class="input bg-[transparent] border-white" value="{{ old('email') }}"/>
                 </div>
                 <div>
                     <label class="mt-4">Password:</label>
                     <input type="password" name="password" placeholder="secret" class="input bg-[transparent] border-white" />
                 </div>
                 <div>
                     <label class="mt-4">Password Confirmation:</label>
                     <input type="password" name="password_confirmation" placeholder="secret" class="input bg-[transparent] border-white" />
                 </div>
                 <div>
                    <button class="btn btn-light w-full">
                        Register
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                        </svg>
                    </button>
                    <a class="pb-1 border-b-2 mt-6 inline-block text-sm text-gray-400 hover:text-gray-100" href="{{ route('login') }}">
                        Already registered?
                    </a>
                 </div>
            </form>

        </div>
    </main>
@endsection


