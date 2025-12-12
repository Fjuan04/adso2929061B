@extends('layouts.app')
@section('title', 'Adoptions Module')

@section('content')
@include('layouts.navbar')
<main class="bg-cover w-full min-h-[100dvh] bg-[#4085] flex flex-col justify-center items-center">
    <div class="bg-[#0006] md:w-10/12 w-96 text-white p-10 rounded-lg flex flex-col justify-center items-center">
        <h1 class="mt-10 text-2xl flex gap-2 items-center pb-2 border-b-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="size-12" fill="#fff" viewBox="0 0 256 256">
                <path d="M244.8,150.4a8,8,0,0,1-11.2-1.6A51.6,51.6,0,0,0,192,128a8,8,0,0,1-7.37-4.89,8,8,0,0,1,0-6.22A8,8,0,0,1,192,112a24,24,0,1,0-23.24-30,8,8,0,1,1-15.5-4A40,40,0,1,1,219,117.51a67.94,67.94,0,0,1,27.43,21.68A8,8,0,0,1,244.8,150.4ZM190.92,212a8,8,0,1,1-13.84,8,57,57,0,0,0-98.16,0,8,8,0,1,1-13.84-8,72.06,72.06,0,0,1,33.74-29.92,48,48,0,1,1,58.36,0A72.06,72.06,0,0,1,190.92,212ZM128,176a32,32,0,1,0-32-32A32,32,0,0,0,128,176ZM72,120a8,8,0,0,0-8-8A24,24,0,1,1,87.24,82a8,8,0,1,0,15.5-4A40,40,0,1,0,37,117.51,67.94,67.94,0,0,0,9.6,139.19a8,8,0,1,0,12.8,9.61A51.6,51.6,0,0,1,64,128,8,8,0,0,0,72,120Z"></path>
            </svg>
            Adoption Module:
        </h1>

        @if(Auth::user()->role == 'Admin')
            <div class="join mt-5">

            <!-- PDF -->
            <a href="{{ url('export/adoptions/pdf')}}" class="btn join-item"><svg xmlns="http://www.w3.org/2000/svg" class="size-6" fill="#000000" viewBox="0 0 256 256">
                    <path d="M224,152a8,8,0,0,1-8,8H192v16h16a8,8,0,0,1,0,16H192v16a8,8,0,0,1-16,0V152a8,8,0,0,1,8-8h32A8,8,0,0,1,224,152ZM92,172a28,28,0,0,1-28,28H56v8a8,8,0,0,1-16,0V152a8,8,0,0,1,8-8H64A28,28,0,0,1,92,172Zm-16,0a12,12,0,0,0-12-12H56v24h8A12,12,0,0,0,76,172Zm88,8a36,36,0,0,1-36,36H112a8,8,0,0,1-8-8V152a8,8,0,0,1,8-8h16A36,36,0,0,1,164,180Zm-16,0a20,20,0,0,0-20-20h-8v40h8A20,20,0,0,0,148,180ZM40,112V40A16,16,0,0,1,56,24h96a8,8,0,0,1,5.66,2.34l56,56A8,8,0,0,1,216,88v24a8,8,0,0,1-16,0V96H152a8,8,0,0,1-8-8V40H56v72a8,8,0,0,1-16,0ZM160,80h28.69L160,51.31Z"></path>
                </svg> Export</a>
            <!-- XSLX -->
            <a href="{{ url('export/adoptions/excel')}}" class="btn join-item"><svg class="size-6" xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000" viewBox="0 0 256 256">
                    <path d="M156,208a8,8,0,0,1-8,8H120a8,8,0,0,1-8-8V152a8,8,0,0,1,16,0v48h20A8,8,0,0,1,156,208ZM92.65,145.49a8,8,0,0,0-11.16,1.86L68,166.24,54.51,147.35a8,8,0,1,0-13,9.3L58.17,180,41.49,203.35a8,8,0,0,0,13,9.3L68,193.76l13.49,18.89a8,8,0,0,0,13-9.3L77.83,180l16.68-23.35A8,8,0,0,0,92.65,145.49Zm98.94,25.82c-4-1.16-8.14-2.35-10.45-3.84-1.25-.82-1.23-1-1.12-1.9a4.54,4.54,0,0,1,2-3.67c4.6-3.12,15.34-1.72,19.82-.56a8,8,0,0,0,4.07-15.48c-2.11-.55-21-5.22-32.83,2.76a20.58,20.58,0,0,0-8.95,14.95c-2,15.88,13.65,20.41,23,23.11,12.06,3.49,13.12,4.92,12.78,7.59-.31,2.41-1.26,3.33-2.15,3.93-4.6,3.06-15.16,1.55-19.54.35A8,8,0,0,0,173.93,214a60.63,60.63,0,0,0,15.19,2c5.82,0,12.3-1,17.49-4.46a20.81,20.81,0,0,0,9.18-15.23C218,179,201.48,174.17,191.59,171.31ZM40,112V40A16,16,0,0,1,56,24h96a8,8,0,0,1,5.66,2.34l56,56A8,8,0,0,1,216,88v24a8,8,0,1,1-16,0V96H152a8,8,0,0,1-8-8V40H56v72a8,8,0,0,1-16,0ZM160,80h28.68L160,51.31Z"></path>
                </svg>Export</a>

            </div>
                
            @else
                <a href="{{url('dashboard')}}" class="flex items-center mt-5">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6A2.25 2.25 0 0 1 6 3.75h2.25A2.25 2.25 0 0 1 10.5 6v2.25a2.25 2.25 0 0 1-2.25 2.25H6a2.25 2.25 0 0 1-2.25-2.25V6ZM3.75 15.75A2.25 2.25 0 0 1 6 13.5h2.25a2.25 2.25 0 0 1 2.25 2.25V18a2.25 2.25 0 0 1-2.25 2.25H6A2.25 2.25 0 0 1 3.75 18v-2.25ZM13.5 6a2.25 2.25 0 0 1 2.25-2.25H18A2.25 2.25 0 0 1 20.25 6v2.25A2.25 2.25 0 0 1 18 10.5h-2.25a2.25 2.25 0 0 1-2.25-2.25V6ZM13.5 15.75a2.25 2.25 0 0 1 2.25-2.25H18a2.25 2.25 0 0 1 2.25 2.25V18A2.25 2.25 0 0 1 18 20.25h-2.25A2.25 2.25 0 0 1 13.5 18v-2.25Z" />
                    </svg>
                    Dashboard
                </a>
            @endif



        <div class="overflow-x-auto mt-8 rounded-box ">
            @forelse($adoptions as $adoption)
            <div class="flex my-10">
                <div class="avatar-group  -space-x-6">
                    <div class="avatar">
                        <div class="w-34">
                            <img src="{{asset('images/'.$adoption->user->photo)}}" />
                        </div>
                    </div>
                    <div class="avatar">
                        <div class="w-34">
                            <img src="{{asset('images/'.$adoption->pet->image)}}" />

                        </div>
                    </div>
                </div>
                <div class="stats shadow">
                    <div class="stat">
                        <div class="stat-figure">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                                class="inline-block h-8 w-8 stroke-current">
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                            </svg>
                        </div>
                        <div class="stat-title text-[#fff] font-bold text-lg">Pet Adopter: <span class="text-base font-light text-[#fff9]">{{$adoption->user->fullname}}</span></div>
                        <div class="stat-title text-[#fff9] text-xs">{{$adoption->user->document}}</div>
                        <div class="stat-value text-[#fff]">{{$adoption->pet->name}} <span class="text-base font-light text-[#fff9]">{{$adoption->pet->kind}}</span> </div>
                        <div class="stat-desc text-[#fff]"><span class="text-base font-light text-[#fff9]">Adoption date:</span> {{$adoption->created_at}}</div>
                    </div>


                </div>
            </div>

            @empty
            <p>No adoptions yet</p>

            @endforelse
        </div>

        <div class="mt-4">
            {{$adoptions->links('layouts.paginator')}}
        </div>
</main>
@endsection


@section('js')
<script>
    $(document).ready(function() {
        //import

        $('.btn-import').click(function(e) {
            $('#file').click()
        })
        $('#file').change(function(event) {
            $(this).parent().submit()
        })

        //Search
        $('body').on('input', '#qsearch', function(e) {
            event.preventDefault()
            $query = $(this).val()
            $token = $('[name=_token]').val()
            $('.datalist').empty()
            // $('.datalist').hide()
            $('.datalist').html(`<tr>
                                    <td colspan="4" class="text-center py-20">
                                        <span class="loading loading-ring loading-xl "></span>
                                    </td>
                                </tr>

            `),
                setTimeout(() => {
                    $.post('search/users', {
                        q: $query,
                        _token: $token
                    }, function(data) {
                        $('.datalist').html(data).hide().fadeIn(2000)
                    })
                }, 2000)

        })


        // Delete
        $('table').on('click', '.btn-delete', function() {
            // alert($(this).data('fullname'))
            $username = $(this).data('fullname')

            Swal.fire({
                title: "Are you sure?",
                text: `${$username} will be delete`,
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#d33",
                cancelButtonColor: "#333",
                confirmButtonText: "Yes, delete it!"
            }).then((result) => {
                if (result.isConfirmed) {
                    $(this).next().submit()
                }
            });

        })


        //Messages
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