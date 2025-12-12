@extends('layouts.app')
@section('title', 'Show User')

@section('content')
    @include('layouts.navbar')
    <main class="bg-[#154869] pt-20 bg-cover w-full min-h-[100dvh] flex flex-col justify-center items-center">
        <div class="bg-[#0006] md:w-10/12 w-full text-white p-10 rounded-lg flex flex-col justify-center items-center">
            <h1 class="text-2xl flex gap-2 items-center pb-2 border-b-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="size-12" fill="#fff" viewBox="0 0 256 256"><path d="M229.66,218.34l-50.07-50.06a88.11,88.11,0,1,0-11.31,11.31l50.06,50.07a8,8,0,0,0,11.32-11.32ZM40,112a72,72,0,1,1,72,72A72.08,72.08,0,0,1,40,112Z"></path></svg>
                User Details
            </h1>

            {{-- Breadcrumbs --}}
            <div class="breadcrumbs text-sm mt-6">
                <ul>
                    <li>
                        <a href="{{ url('dashboard') }}" class="flex items-center gap-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="size-5" fill="#fff" viewBox="0 0 256 256">
                                <path d="M104,40H56A16,16,0,0,0,40,56v48a16,16,0,0,0,16,16h48a16,16,0,0,0,16-16V56A16,16,0,0,0,104,40Zm0,64H56V56h48v48Zm96-64H152a16,16,0,0,0-16,16v48a16,16,0,0,0,16,16h48a16,16,0,0,0,16-16V56A16,16,0,0,0,200,40Zm0,64H152V56h48v48Zm-96,32H56a16,16,0,0,0-16,16v48a16,16,0,0,0,16,16h48a16,16,0,0,0,16-16V152A16,16,0,0,0,104,136Zm0,64H56V152h48v48Zm96-64H152a16,16,0,0,0-16,16v48a16,16,0,0,0,16,16h48a16,16,0,0,0,16-16V152A16,16,0,0,0,200,136Zm0,64H152V152h48v48Z"></path>
                            </svg>
                            Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('users') }}" class="flex items-center gap-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="size-5" fill="#fff" viewBox="0 0 256 256">
                                <path d="M244.8,150.4a8,8,0,0,1-11.2-1.6A51.6,51.6,0,0,0,192,128a8,8,0,0,1-7.37-4.89,8,8,0,0,1,0-6.22A8,8,0,0,1,192,112a24,24,0,1,0-23.24-30,8,8,0,1,1-15.5-4A40,40,0,1,1,219,117.51a67.94,67.94,0,0,1,27.43,21.68A8,8,0,0,1,244.8,150.4ZM190.92,212a8,8,0,1,1-13.84,8,57,57,0,0,0-98.16,0,8,8,0,1,1-13.84-8,72.06,72.06,0,0,1,33.74-29.92,48,48,0,1,1,58.36,0A72.06,72.06,0,0,1,190.92,212ZM128,176a32,32,0,1,0-32-32A32,32,0,0,0,128,176ZM72,120a8,8,0,0,0-8-8A24,24,0,1,1,87.24,82a8,8,0,1,0,15.5-4A40,40,0,1,0,37,117.51,67.94,67.94,0,0,0,9.6,139.19a8,8,0,1,0,12.8,9.61A51.6,51.6,0,0,1,64,128,8,8,0,0,0,72,120Z"></path>
                            </svg>
                            Users Module
                        </a>
                    </li>
                    <li>
                        <span class="inline-flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="size-5" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                            </svg>
                            View User
                        </span>
                    </li>
                </ul>
            </div>

            {{-- User Details Card --}}
            <div class="w-full max-w-2xl mt-8 bg-[#000000b3] rounded-xl p-6 shadow-lg">
                <div class="flex flex-col md:flex-row gap-8">
                    {{-- Photo Section --}}
                    <div class="flex-shrink-0 flex flex-col items-center relative">
                        @if($user->active == 1)
                            <div class="rounded rounded-full w-[20px] h-[20px] bg-green-600 absolute top-[-5px] right-[-5px]"></div>
                        @else 
                            <div class="rounded rounded-full w-[20px] h-[20px] bg-red-600 absolute top-[-5px] right-[-5px]"></div>
                        @endif
                        <div class="mask mask-squircle w-48 h-48 bg-gray-700 flex items-center justify-center">
                            @if($user->photo)
                                <img src="{{ asset('images/'.$user->photo) }}" 
                                     alt="User Photo" 
                                     class="w-full h-full object-cover">
                            @else
                                <div class="text-6xl text-gray-400">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="size-32" fill="currentColor" viewBox="0 0 256 256">
                                        <path d="M172,120a44,44,0,1,1-44-44A44,44,0,0,1,172,120Zm60,8A104,104,0,1,1,128,24,104.11,104.11,0,0,1,232,128Zm-16,0a88.09,88.09,0,0,0-91.47-87.93C77.43,41.89,39.87,81.12,40,128.25a87.65,87.65,0,0,0,22.24,58.16A79.71,79.71,0,0,1,84,165.1a4,4,0,0,1,4.83.32,59.83,59.83,0,0,0,78.28,0,4,4,0,0,1,4.83-.32,79.71,79.71,0,0,1,21.79,21.31A87.62,87.62,0,0,0,216,128Z"></path>
                                    </svg>
                                </div>
                            @endif
                        </div>
                        <div class="mt-4 text-center">
                            <h2 class="text-xl font-bold">{{ $user->fullname }}</h2>
                            <p class="text-gray-300">{{ $user->email }}</p>
                            <p class="text-gray-300">{{ $user->role }}</p>
                        </div>
                    </div>

                    {{-- Details Section --}}
                    <div class="flex-grow grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="bg-[#0006] p-4 rounded-lg">
                            <h3 class="text-gray-400 text-sm font-semibold">Document</h3>
                            <p class="mt-1">{{ $user->document }}</p>
                        </div>
                        
                        <div class="bg-[#0006] p-4 rounded-lg">
                            <h3 class="text-gray-400 text-sm font-semibold">Gender</h3>
                            <p class="mt-1">{{ $user->gender }}</p>
                        </div>
                        
                        <div class="bg-[#0006] p-4 rounded-lg">
                            <h3 class="text-gray-400 text-sm font-semibold">Birthdate</h3>
                            <p class="mt-1">{{ \Carbon\Carbon::parse($user->birthdate)->format('d/m/Y') }}</p>
                        </div>
                        
                        <div class="bg-[#0006] p-4 rounded-lg">
                            <h3 class="text-gray-400 text-sm font-semibold">Phone</h3>
                            <p class="mt-1">{{ $user->phone }}</p>
                        </div>

                        <div class="bg-[#0006] p-4 rounded-lg">
                            <h3 class="text-gray-400 text-sm font-semibold">Email</h3>
                            <p class="mt-1">{{ $user->email }}</p>
                        </div>

                        <div class="bg-[#0006] p-4 rounded-lg md:col-span-2">
                            <h3 class="text-gray-400 text-sm font-semibold">Role</h3>
                            <p class="mt-1">{{ $user->role }}</p>
                        </div>

                        <div class="bg-[#0006] p-4 rounded-lg md:col-span-2">
                            <h3 class="text-gray-400 text-sm font-semibold">Created At</h3>
                            <p class="mt-1">{{ \Carbon\Carbon::parse($user->created_at)->format('d/m/Y') }}</p>
                        </div>
                        
                    </div>
                </div>

                {{-- Action Buttons --}}
                <div class="mt-8 flex flex-wrap gap-4 justify-center">
                    {{-- <a href="{{ route('users.edit', $user->id) }}" class="btn btn-primary flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="size-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                        </svg>
                        Edit User
                    </a> --}}
                    
                    <a href="{{ url('users') }}" class="btn btn-outline flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="size-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                        </svg>
                        Back to Users
                    </a>
                </div>
            </div>
        </div>   
    </main>
@endsection