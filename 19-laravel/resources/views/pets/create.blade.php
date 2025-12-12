@extends('layouts.app')
@section('title', 'Pets Module')

@section('content')
    @include('layouts.navbar')
    <main class="bg-[#2A8C82] bg-cover w-full min-h-[100dvh] flex flex-col justify-center items-center">
        <div class="bg-[#0006] md:w-10/12 w-96 text-white p-10 rounded-lg flex flex-col justify-center items-center mt-20">
            <h1 class="text-2xl flex gap-2 items-center pb-2 border-b-2">
                <svg xmlns="http://www.w3.org/2000/svg"  class="size-6" fill="currentColor" viewBox="0 0 256 256"><path d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm0,192a88,88,0,1,1,88-88A88.1,88.1,0,0,1,128,216Zm48-88a8,8,0,0,1-8,8H136v32a8,8,0,0,1-16,0V136H88a8,8,0,0,1,0-16h32V88a8,8,0,0,1,16,0v32h32A8,8,0,0,1,176,128Z"></path></svg> Add pet
            </h1>
            
            <div class="breadcrumbs text-sm mt-5">
                <ul>
                    <li>
    <a href="{{url('dashboard')}}">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6A2.25 2.25 0 0 1 6 3.75h2.25A2.25 2.25 0 0 1 10.5 6v2.25a2.25 2.25 0 0 1-2.25 2.25H6a2.25 2.25 0 0 1-2.25-2.25V6ZM3.75 15.75A2.25 2.25 0 0 1 6 13.5h2.25a2.25 2.25 0 0 1 2.25 2.25V18a2.25 2.25 0 0 1-2.25 2.25H6A2.25 2.25 0 0 1 3.75 18v-2.25ZM13.5 6a2.25 2.25 0 0 1 2.25-2.25H18A2.25 2.25 0 0 1 20.25 6v2.25A2.25 2.25 0 0 1 18 10.5h-2.25a2.25 2.25 0 0 1-2.25-2.25V6ZM13.5 15.75a2.25 2.25 0 0 1 2.25-2.25H18a2.25 2.25 0 0 1 2.25 2.25V18A2.25 2.25 0 0 1 18 20.25h-2.25A2.25 2.25 0 0 1 13.5 18v-2.25Z" />
                        </svg>
                        Dashboard
                    </a>
                    </li>
                    <li>
                    <a href="{{url('pets')}}">
                        <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        class="h-4 w-4 stroke-current">
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z"></path>
                        </svg>
                        Pets Module
                    </a>
                    </li>
                    <li>
                    <span class="inline-flex items-center gap-2">
                        <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        class="h-4 w-4 stroke-current">
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M9 13h6m-3-3v6m5 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                        </svg>
                        Add Pet
                    </span>
                    </li>
                </ul>
            </div>

            <form action="{{ url('pets') }}" method="post" enctype="multipart/form-data" class="my-6 flex flex-col gap-2 ">
    @csrf
    <div class="avatar mt-6 flex flex-col items-center">
        <div id="upload" class="mask mask-squircle w-48 cursor-pointer hover:scale-110 transition-transform">
            <img id="preview" src="{{ asset('images/no-image.webp') }}">
        </div>
        <small class="font-bold text-gray-500 mt-2 gap-1">Upload photo</small>
    </div>
    <input type="file" id="photo" name="image" class="hidden" accept="image/*" >
    
    <div>
        <label class="mt-4">Name:</label>
        <input type="text" name="name" placeholder="Killer" class="input bg-[transparent] border-white w-full" value="{{ old('name') }}">
    </div>
    
    <div>
        <label class="mt-4">Kind:</label>
        <input type="text" name="kind" placeholder="Dog" class="input bg-[transparent] border-white w-full" value="{{ old('kind') }}">
    </div>
    <div>
        <label class="mt-4">Weight:</label>
        <input step="0.1" type="number" name="weight" placeholder="8.5" class="input bg-[transparent] border-white w-full" value="{{ old('weight') }}">
    </div>
    <div>
        <label class="mt-4">Age:</label>
        <input step="1" type="number" name="age" placeholder="5" class="input bg-[transparent] border-white w-full" value="{{ old('age') }}">
    </div>
    <div>
        <label class="mt-4">Breed:</label>
        <input step="1" type="text" name="breed" placeholder="Bulldog" class="input bg-[transparent] border-white w-full" value="{{ old('breed') }}">
    </div>
    <div>
        <label class="mt-4">Location:</label>
        <input type="text" name="location" placeholder="Shangai" class="input bg-[transparent] border-white w-full" value="{{ old('location') }}">
    </div>
    <div>
        <label class="mt-4">Description:</label>
        <input type="text" name="description" placeholder="Very child" class="input bg-[transparent] border-white w-full" value="{{ old('description') }}">
    </div>
    
    
    
    <div>
        <button class="btn btn-light w-full ">
            Create
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
            </svg>
        </button>
    </div>
</form>

            

            
        </div>

            
    </main>
@endsection
@section('js')
    <script>
        
        $(document).ready(function(){
            


            $('#upload').click(function(){
                $('#photo').click()
            })

            $('#photo').change(function(){
                
                $('#preview').attr('src', window.URL.createObjectURL($(this)[0].files[0]))
            })

            @if (count($errors->all()) > 0)
                @php $content = '<ul class="flex flex-col gap-1>"' @endphp

                    @foreach ($errors->all() as $msg)
                            @php $content .= "<li class='badge badge-error gap-4'>". $msg  . "</li>" @endphp
                    @endforeach
                    @php $content .= '</ul>' @endphp
                    Swal.fire({
                    position: "top-end",
                    icon: "error",
                    title: "Something went wrong",
                    html: `@php echo $content @endphp`,
                    showConfirmButton: true,
                    timer: 2000
                    })
            @endif
        })
    </script>
@endsection