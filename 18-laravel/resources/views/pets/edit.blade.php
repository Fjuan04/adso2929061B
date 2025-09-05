@extends('layouts.app')
@section('title', 'Edit')

@section('content')
    @include('layouts.navbar')
    <main class="bg-[#2A8C82] bg-cover w-full min-h-[100dvh] flex flex-col justify-center items-center">
        <div class="bg-[#0006] md:w-10/12 w-96 text-white p-10 rounded-lg flex flex-col justify-center items-center mt-20">
            <h1 class="text-2xl flex gap-2 items-center pb-2 border-b-2">
                <svg xmlns="http://www.w3.org/2000/svg"  class="size-6" fill="currentColor" viewBox="0 0 256 256"><path d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm0,192a88,88,0,1,1,88-88A88.1,88.1,0,0,1,128,216Zm48-88a8,8,0,0,1-8,8H136v32a8,8,0,0,1-16,0V136H88a8,8,0,0,1,0-16h32V88a8,8,0,0,1,16,0v32h32A8,8,0,0,1,176,128Z"></path></svg> Edit Pet
                
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
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#fff" class="size-5" viewBox="0 0 256 256"><path d="M212,80a28,28,0,1,0,28,28A28,28,0,0,0,212,80Zm0,40a12,12,0,1,1,12-12A12,12,0,0,1,212,120ZM72,108a28,28,0,1,0-28,28A28,28,0,0,0,72,108ZM44,120a12,12,0,1,1,12-12A12,12,0,0,1,44,120ZM92,88A28,28,0,1,0,64,60,28,28,0,0,0,92,88Zm0-40A12,12,0,1,1,80,60,12,12,0,0,1,92,48Zm72,40a28,28,0,1,0-28-28A28,28,0,0,0,164,88Zm0-40a12,12,0,1,1-12,12A12,12,0,0,1,164,48Zm23.12,100.86a35.3,35.3,0,0,1-16.87-21.14,44,44,0,0,0-84.5,0A35.25,35.25,0,0,1,69,148.82,40,40,0,0,0,88,224a39.48,39.48,0,0,0,15.52-3.13,64.09,64.09,0,0,1,48.87,0,40,40,0,0,0,34.73-72ZM168,208a24,24,0,0,1-9.45-1.93,80.14,80.14,0,0,0-61.19,0,24,24,0,0,1-20.71-43.26,51.22,51.22,0,0,0,24.46-30.67,28,28,0,0,1,53.78,0,51.27,51.27,0,0,0,24.53,30.71A24,24,0,0,1,168,208Z"></path></svg>
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
                        Edit pet
                    </span>
                    </li>
                </ul>
            </div>

            <form action="{{url('pets/'. $pet->id)}}" method="post" enctype="multipart/form-data" class="my-6 flex flex-col  gap-2 ">
                @csrf
                @method('put')
                <div class="avatar mt-6 flex flex-col items-center">

                        <div id="upload" class="mask mask-squircle w-48 cursor-pointer hover:scale-110 transition-transform">
                            <img id="preview" src="{{asset('images/'.$pet->image)}}" />
                        </div>
                        <small class="font-bold text-gray-500  mt-2 gap-1">Upload photo</small>
                    </div>
                    <input type="file" id="photo" name="image" class="hidden" accept="image/*" >
                    <input type="hidden" name="originphoto" value="{{$pet->image}}">
                    
                 <div>
                     <label class="mt-4">Name:</label>
                     <input type="text" name="name" placeholder="Killer" class="input bg-[transparent] border-white w-full" value="{{ old('name', $pet->name) }}"/>
                 </div>
                 
                 
                 <div>
                     <label class="mt-4">Kind:</label>
                     <input type="text" name="kind" placeholder="Dog" class="input bg-[transparent] border-white w-full" value="{{ old('kind', $pet->kind) }}"/>
                 </div>
                 <div>
                     <label class="mt-4">Weight:</label>
                     <input step="0.1" type="number" name="weight" placeholder="8.5" class="input bg-[transparent] border-white w-full" value="{{ old('weight', $pet->weight) }}"/>
                 </div>
                 <div>
                     <label class="mt-4">Age:</label>
                     <input step="1" type="number" name="age" placeholder="5" class="input bg-[transparent] border-white w-full" value="{{ old('age', $pet->age) }}"/>
                 </div>
                 <div>
                     <label class="mt-4">Breed:</label>
                     <input step="1" type="text" name="breed" placeholder="Bulldog" class="input bg-[transparent] border-white w-full" value="{{ old('breed', $pet->breed) }}"/>
                 </div>
                <div>
                     <label class="mt-4">Location:</label>
                     <input  type="text" name="location" placeholder="Shangai" class="input bg-[transparent] border-white w-full" value="{{ old('location', $pet->location) }}"/>
                 </div>
                 <div>
                     <label class="mt-4">Description:</label>
                     <input type="text" name="description" placeholder="Very child" class="input bg-[transparent] border-white w-full" value="{{ old('description', $pet->description) }}"/>
                 </div>
                 <div>
                     <label class="mt-4">active:</label>
                     <select name="active" class="select bg-[#0006] border-white w-full">
                        <option value="">Select Status</option>
                        <option value="1" @if(old('active', $pet->active) == 1) selected @endif>Active</option>
                        <option value="0" @if(old('active', $pet->active) == 0) selected @endif>Inactive</option>
                     </select>
                 </div>
                 
                 
                 <div>
                    <button class="btn btn-light w-full ">
                        Update
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
                    });

            @endif
        })
    </script>
@endsection