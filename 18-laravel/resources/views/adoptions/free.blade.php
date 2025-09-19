@extends('layouts.app')
@section('title', 'Adoptions Module')

@section('content')
@include('layouts.navbar')
<main class="bg-cover w-full min-h-[100dvh] bg-[#4085] flex flex-col justify-center items-center">
    <div class="bg-[#0006] md:w-10/12 w-96 text-white p-10 rounded-lg flex flex-col justify-center items-center">
        <h1 class="text-2xl flex gap-2 items-center pb-2 border-b-2 mt-10">
            <svg xmlns="http://www.w3.org/2000/svg" class="size-12" fill="#fff" viewBox="0 0 256 256">
                <path d="M244.8,150.4a8,8,0,0,1-11.2-1.6A51.6,51.6,0,0,0,192,128a8,8,0,0,1-7.37-4.89,8,8,0,0,1,0-6.22A8,8,0,0,1,192,112a24,24,0,1,0-23.24-30,8,8,0,1,1-15.5-4A40,40,0,1,1,219,117.51a67.94,67.94,0,0,1,27.43,21.68A8,8,0,0,1,244.8,150.4ZM190.92,212a8,8,0,1,1-13.84,8,57,57,0,0,0-98.16,0,8,8,0,1,1-13.84-8,72.06,72.06,0,0,1,33.74-29.92,48,48,0,1,1,58.36,0A72.06,72.06,0,0,1,190.92,212ZM128,176a32,32,0,1,0-32-32A32,32,0,0,0,128,176ZM72,120a8,8,0,0,0-8-8A24,24,0,1,1,87.24,82a8,8,0,1,0,15.5-4A40,40,0,1,0,37,117.51,67.94,67.94,0,0,0,9.6,139.19a8,8,0,1,0,12.8,9.61A51.6,51.6,0,0,1,64,128,8,8,0,0,0,72,120Z"></path>
            </svg>
            Free Pets:
        </h1>


        <div class="join mt-5">


            <a href="{{ url('export/adoptions/excel')}}" class="btn join-item">Kind</a>

            <input type="search" name="qsearch" id="qsearch" placeholder="Search" class="outline-0 rounded-tr-sm rounded-br-sm indent-2 bg-white/10">
        </div>



        <div class="mt-8 rounded-box  ">
            @forelse($pets as $pet)
            <div class="flex flex-col  sm:flex-row items-center gap-4 px-5 py-3 border border-gray-200 rounded-lg shadow-sm bg-[#f0f4ff] my-5 max-w-2xl mx-auto">
                <img class="w-16 h-16 object-cover rounded-full border hover:scale-130 transition-transform ease " src="{{ asset('images/' . $pet->image) }}" alt="Photo of {{ $pet->name }}">

                <div class="flex-1 text-center sm:text-left pr-10">
                    <h3 class="text-lg font-semibold text-gray-800">{{ $pet->name }}</h3>
                    <p class="text-sm text-gray-500">{{ $pet->kind }}</p>
                </div>

                <a href="{{route('showpet', $pet->id)}}" class="text-sm bg-[#408] text-white hover:scale-110 hover:cursor-pointer px-4 py-1.5 rounded transition duration-200">
                    See
                </a>
            </div>



            @empty
            <p>No pets</p>

            @endforelse
        </div>

        <div class="mt-4">
            {{$pets->links('layouts.paginator')}}
        </div>
</main>
@endsection


@section('js')
<script>
    $(document).ready(function() {

        
        

        // Search
            function debounce(func, wait) {
                let timeout
                return function executedFunction(...args) {
                    const later = () => {
                        clearTimeout(timeout)
                        func(...args)
                    };
                    clearTimeout(timeout)
                    timeout = setTimeout(later, wait)
                }
            }
            const search = debounce(function(query) {
                
                $token = $('input[name=_token]').val()
                
                $.post("search/users", {'q': query, '_token': $token},
                    function (data) {
                        $('.datalist').html(data).hide().fadeIn(1000)
                    }
                )
            }, 500)
            $('body').on('input', '#qsearch', function(event) {
                event.preventDefault()
                const query = $(this).val()
                
                $('.datalist').html(`<tr>
                                        <td colspan="4" class="text-center py-18">
                                            <span class="loading loading-spinner loading-xl"></span>
                                        </td>
                                    </tr>`)
                
                search(query)
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