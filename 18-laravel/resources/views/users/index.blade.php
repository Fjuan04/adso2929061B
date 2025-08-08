@extends('layouts.app')
@section('title', 'Users Module')

@section('content')
    @include('layouts.navbar')
    <main class="bg-[url(images/bg-users.png)] bg-cover w-full min-h-[100dvh] flex flex-col justify-center items-center">
        <div class="bg-[#0006] md:w-10/12 w-96 text-white p-10 rounded-lg flex flex-col justify-center items-center">
            <h1 class="text-2xl flex gap-2 items-center pb-2 border-b-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="size-12" fill="#fff" viewBox="0 0 256 256"><path d="M244.8,150.4a8,8,0,0,1-11.2-1.6A51.6,51.6,0,0,0,192,128a8,8,0,0,1-7.37-4.89,8,8,0,0,1,0-6.22A8,8,0,0,1,192,112a24,24,0,1,0-23.24-30,8,8,0,1,1-15.5-4A40,40,0,1,1,219,117.51a67.94,67.94,0,0,1,27.43,21.68A8,8,0,0,1,244.8,150.4ZM190.92,212a8,8,0,1,1-13.84,8,57,57,0,0,0-98.16,0,8,8,0,1,1-13.84-8,72.06,72.06,0,0,1,33.74-29.92,48,48,0,1,1,58.36,0A72.06,72.06,0,0,1,190.92,212ZM128,176a32,32,0,1,0-32-32A32,32,0,0,0,128,176ZM72,120a8,8,0,0,0-8-8A24,24,0,1,1,87.24,82a8,8,0,1,0,15.5-4A40,40,0,1,0,37,117.51,67.94,67.94,0,0,0,9.6,139.19a8,8,0,1,0,12.8,9.61A51.6,51.6,0,0,1,64,128,8,8,0,0,0,72,120Z"></path></svg>
                Users Module:
            </h1>
            
            <div class="join mt-5">
                <a href="{{url('users/create')}}" class="btn join-item btn-success"><svg xmlns="http://www.w3.org/2000/svg"  class="size-6" fill="currentColor" viewBox="0 0 256 256"><path d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm0,192a88,88,0,1,1,88-88A88.1,88.1,0,0,1,128,216Zm48-88a8,8,0,0,1-8,8H136v32a8,8,0,0,1-16,0V136H88a8,8,0,0,1,0-16h32V88a8,8,0,0,1,16,0v32h32A8,8,0,0,1,176,128Z"></path></svg> Add user</a>
                <a href="{{ url('export/users/pdf')}}" class="btn join-item"><svg xmlns="http://www.w3.org/2000/svg" class="size-6" fill="#000000" viewBox="0 0 256 256"><path d="M224,152a8,8,0,0,1-8,8H192v16h16a8,8,0,0,1,0,16H192v16a8,8,0,0,1-16,0V152a8,8,0,0,1,8-8h32A8,8,0,0,1,224,152ZM92,172a28,28,0,0,1-28,28H56v8a8,8,0,0,1-16,0V152a8,8,0,0,1,8-8H64A28,28,0,0,1,92,172Zm-16,0a12,12,0,0,0-12-12H56v24h8A12,12,0,0,0,76,172Zm88,8a36,36,0,0,1-36,36H112a8,8,0,0,1-8-8V152a8,8,0,0,1,8-8h16A36,36,0,0,1,164,180Zm-16,0a20,20,0,0,0-20-20h-8v40h8A20,20,0,0,0,148,180ZM40,112V40A16,16,0,0,1,56,24h96a8,8,0,0,1,5.66,2.34l56,56A8,8,0,0,1,216,88v24a8,8,0,0,1-16,0V96H152a8,8,0,0,1-8-8V40H56v72a8,8,0,0,1-16,0ZM160,80h28.69L160,51.31Z"></path></svg> Export</a>
                <a href="{{ url('export/users/excel')}}" class="btn join-item">Export</a>
                <input type="search" name="qsearch" id="qsearch" placeholder="Search" class="outline-0 rounded-tr-sm rounded-br-sm indent-2 bg-white/10" >
            </div>

            

            <div class="overflow-x-auto mt-8 rounded-box border">
                <table class="table table-xs bg-[#0006]">
                    <!-- head -->
                    <thead class="text-white">
                        <tr>
                            <th>FullName</th>
                            <th class="hidden md:table-cell">Role</th>
                            <th class="hidden lg:table-cell">Email</th>
                            <th >Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>
                            <div class="flex items-center gap-3">
                                <div class="avatar">
                                <div class="mask mask-squircle h-12 w-12">
                                    <img
                                    src="{{ asset('images/'.$user->photo) }}"
                                    alt="Photo" />
                                </div>
                                </div>
                                <div>
                                <div class="font-bold">{{ $user->fullname }}</div>
                                <div class="text-sm opacity-50">{{ $user->document }}</div>
                                </div>
                            </div>
                            </td>
                            <td>
                            <span class="badge badge-ghost badge-sm hidden md:table-cell    ">{{ $user->role }}</span>
                            </td>
                            <td class="hidden lg:table-cell">{{ $user->email }}</td>
                            <th class="w-full">
                                <a href="{{'users/.$user->id'}}" class="btn btn-ghost hover:bg-[transparent] btn-xs"><svg class="size-4" xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#fff" viewBox="0 0 256 256"><path d="M229.66,218.34l-50.07-50.06a88.11,88.11,0,1,0-11.31,11.31l50.06,50.07a8,8,0,0,0,11.32-11.32ZM40,112a72,72,0,1,1,72,72A72.08,72.08,0,0,1,40,112Z"></path></svg></a>
                                <a href="{{'users/' . $user->id . '/edit'}}" class="btn btn-ghost hover:bg-[transparent] btn-xs"><svg class="size-4" xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#fff" viewBox="0 0 256 256"><path d="M227.31,73.37,182.63,28.68a16,16,0,0,0-22.63,0L36.69,152A15.86,15.86,0,0,0,32,163.31V208a16,16,0,0,0,16,16H92.69A15.86,15.86,0,0,0,104,219.31L227.31,96a16,16,0,0,0,0-22.63ZM92.69,208H48V163.31l88-88L180.69,120ZM192,108.68,147.31,64l24-24L216,84.68Z"></path></svg></a>
                                <a href="javascript::" class="btn btn-ghost btn-xs">
                                    <svg class="size-4" xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#f00" viewBox="0 0 256 256"><path d="M216,48H176V40a24,24,0,0,0-24-24H104A24,24,0,0,0,80,40v8H40a8,8,0,0,0,0,16h8V208a16,16,0,0,0,16,16H192a16,16,0,0,0,16-16V64h8a8,8,0,0,0,0-16ZM96,40a8,8,0,0,1,8-8h48a8,8,0,0,1,8,8v8H96Zm96,168H64V64H192ZM112,104v64a8,8,0,0,1-16,0V104a8,8,0,0,1,16,0Zm48,0v64a8,8,0,0,1-16,0V104a8,8,0,0,1,16,0Z"></path></svg>
                                </a>
                                <form class="hidden" action="{{url('users/'.$user->id)}}" method="post">
                                    @csrf
                                    @method('delete')
                                </form>
                            </th>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>

            <div class="mt-4">
                {{$users->links('layouts.paginator')}}
            </div>
    </main>
@endsection


@section('js')
    <script>
        $(document).ready(function(){
            @if(session('message'))
                Swal.fire({
                    position: "top-end",
                    icon: "success",
                    title: "Congrats",
                    text: "{{session('message')}}",
                    showConfirmButton: true,
                    })
            @endif
        
        })
    </script>
@endsection
