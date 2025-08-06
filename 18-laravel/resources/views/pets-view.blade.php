<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List All Pets</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="bg-rose-800 py-10 min-h-[100dvh] flex flex-col gap-4 justify-center items-center">
    
    <h1 class="text-4xl text-white pb-4 border-b-2">
        List All Pets
    </h1>

    <div class="overflow-x-auto">
    <table class="table text-white">
        <thead>
            <tr>
                <th class="text-white">Name</th>
                <th class="text-white">Kind</th>
                <th class="text-white">Actions</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($pets as $pet)
            <tr class="hover:bg-rose-900">
                <td>
                <div class="flex items-center gap-3">
                    <div class="avatar">
                    <div class="mask bg-gray-50 mask-squircle h-12 w-12">
                        <img
                        src="{{ asset('images/'.$pet->image) }}"
                        alt="{{ $pet->name }}" />
                    </div>
                    </div>
                    <div>
                    <div class="font-bold">{{ $pet->name }}</div>
                    <div class="text-sm opacity-50">{{ $pet->location }}</div>
                    </div>
                </div>
                </td>
                <td>
                {{ $pet->kind }}
                <br />
                <span class="badge badge-ghost badge-sm">{{ $pet->breed }}</span>
                </td>
                <td>
                    <a href="{{ url('petsview/'.$pet->id) }}" class="btn btn-outline py-4 btn-xs">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                        </svg>
                    </a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

</body>
</html>