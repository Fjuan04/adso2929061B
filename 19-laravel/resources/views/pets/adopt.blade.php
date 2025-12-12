@extends('layouts.app')
@section('title', 'Show Pet')

@section('content')
    @include('layouts.navbar')
    <main class="bg-[#2A8C82] pt-20 bg-cover w-full min-h-[100dvh] flex flex-col justify-center items-center">
        <div class="bg-[#0006] md:w-10/12 w-full text-white p-10 rounded-lg flex flex-col justify-center items-center">
            <h1 class="text-2xl flex gap-2 items-center pb-2 border-b-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="size-12" fill="#fff" viewBox="0 0 256 256"><path d="M229.66,218.34l-50.07-50.06a88.11,88.11,0,1,0-11.31,11.31l50.06,50.07a8,8,0,0,0,11.32-11.32ZM40,112a72,72,0,1,1,72,72A72.08,72.08,0,0,1,40,112Z"></path></svg>
                Pet Details
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
                        <a href="{{ route('freepets') }}" class="flex items-center gap-1">
                            <svg class="size-5" xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#fff" viewBox="0 0 256 256"><path d="M212,80a28,28,0,1,0,28,28A28,28,0,0,0,212,80Zm0,40a12,12,0,1,1,12-12A12,12,0,0,1,212,120ZM72,108a28,28,0,1,0-28,28A28,28,0,0,0,72,108ZM44,120a12,12,0,1,1,12-12A12,12,0,0,1,44,120ZM92,88A28,28,0,1,0,64,60,28,28,0,0,0,92,88Zm0-40A12,12,0,1,1,80,60,12,12,0,0,1,92,48Zm72,40a28,28,0,1,0-28-28A28,28,0,0,0,164,88Zm0-40a12,12,0,1,1-12,12A12,12,0,0,1,164,48Zm23.12,100.86a35.3,35.3,0,0,1-16.87-21.14,44,44,0,0,0-84.5,0A35.25,35.25,0,0,1,69,148.82,40,40,0,0,0,88,224a39.48,39.48,0,0,0,15.52-3.13,64.09,64.09,0,0,1,48.87,0,40,40,0,0,0,34.73-72ZM168,208a24,24,0,0,1-9.45-1.93,80.14,80.14,0,0,0-61.19,0,24,24,0,0,1-20.71-43.26,51.22,51.22,0,0,0,24.46-30.67,28,28,0,0,1,53.78,0,51.27,51.27,0,0,0,24.53,30.71A24,24,0,0,1,168,208Z"></path></svg>
                            Free Pets
                        </a>
                    </li>
                    <li>
                        <span class="inline-flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="size-5" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                            </svg>
                            View Pet
                        </span>
                    </li>
                </ul>
            </div>

            {{-- User Details Card --}}
            <div class="w-full max-w-2xl mt-8 bg-[#000000b3] rounded-xl p-6 shadow-lg">
                <div class="flex flex-col md:flex-row gap-8">
                    {{-- Photo Section --}}
                    <div class="flex-shrink-0  flex flex-col items-center justify-center relative">
                        @if($pet->active == 1)
                            <div class="rounded rounded-full w-[100px] h-[30px] bg-green-600 absolute top-[0px] left-[50%] translate-x-[-50%] text-center  font-bold flex items-center justify-center">Active</div>
                        @else 
                            <div class="rounded rounded-full w-[100px] h-[30px] bg-red-600 absolute top-[0px] left-[50%] translate-x-[-50%] text-center  font-bold flex items-center justify-center">Inactive</div>
                        @endif
                        <div class="mask mask-squircle w-48 h-48 bg-gray-700 flex items-center justify-center">
                            @if($pet->image)
                                <img src="{{ asset('images/'.$pet->image) }}" 
                                     alt="Pet Photo" 
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
                            <h2 class="text-xl font-bold">{{ $pet->name }}</h2>
                            <p class="text-gray-300">{{ $pet->kind }}</p>
                            <p class="text-gray-300">Age: {{ $pet->age }}</p>

                        </div>
                    </div>

                    {{-- Details Section --}}
                    <div class="flex-grow grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="bg-[#0006] p-4 rounded-lg">
                            <h3 class="text-gray-400 text-sm font-semibold">Weight</h3>
                            <p class="mt-1">{{ $pet->weight }} kgs</p>
                        </div>
                        
                        <div class="bg-[#0006] p-4 rounded-lg">
                            <h3 class="text-gray-400 text-sm font-semibold">Location</h3>
                            <p class="mt-1">{{ $pet->location }}</p>
                        </div>
                        
                        
                        <div class="bg-[#0006] p-4 rounded-lg md:col-span-2">
                            <h3 class="text-gray-400 text-sm font-semibold">Description</h3>
                            <p class="mt-1">{{ $pet->description }}</p>
                        </div>
                        <div class="bg-[#0006] p-4 rounded-lg md:col-span-2">
                            <h3 class="text-gray-400 text-sm font-semibold">Status</h3>
                            <p class="mt-1">{{$pet->status == 0 ? 'Avaliable' : 'Adopted'}}</p>
                        </div>
                        <div class="bg-[#0006] p-4 rounded-lg md:col-span-2">
                            <h3 class="text-gray-400 text-sm font-semibold">Created At</h3>
                            <p class="mt-1">{{ $pet->created_at->format('d/m/Y H:i') }}</p>
                        </div>
                        
                    </div>
                </div>

                {{-- Action Buttons --}}
                <div class="mt-8 flex flex-wrap gap-4 justify-center">
                    <form action="{{route('mkadopt')}}" method="post">
                        @csrf
                        <input type="hidden" name="user_id" value="{{$user->id}}">
                        <input type="hidden" name="pet_id" value="{{$pet->id}}">
                        <button class="btn btn-outline flex items-center gap-2">
                            Adopt now!
                        </button>
                    </form>
                </div>
            </div>
        </div>   
    </main>
@endsection