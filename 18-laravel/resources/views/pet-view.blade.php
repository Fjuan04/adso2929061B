<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show Pet</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="bg-rose-800 py-10 min-h-[100dvh] flex flex-col gap-4 justify-center items-center">
    
    <h1 class="text-4xl text-white pb-4 border-b-2">
        Show Pet
    </h1>

    <div class="card card-side mt-10 md:flex-row flex-col bg-base-100 shadow-sm">
        <figure>
            <img
            class="w-[360px]"
            src="{{ asset('images/'.$pet->image) }}"
            alt="Pet" />
        </figure>
        <div class="card-body w-[360px]">
            <h2><strong>Name:</strong>      {{ $pet->name }}</h2>
            <h2><strong>Kind:</strong>      {{ $pet->kind }}</h2>
            <h2><strong>Weight:</strong>    {{ $pet->weight }} Kl</h2>
            <h2><strong>Age:</strong>       {{ $pet->age }} Years old</h2>
            <h2><strong>Breed:</strong>     {{ $pet->breed }}</h2>
            <h2><strong>Location:</strong>  {{ $pet->location }}</h2>
            <h2>
                <strong>Is Active:</strong>
                @if ($pet->active == 0)
                    <span class="bg-red-800 text-red-3200 p-1 rounded-md">No</span>
                @else 
                    <span class="bg-green-800 text-green-200 p-1 rounded-md">Yes</span>
                @endif
            </h2>
            <h2>
                <strong>Status:</strong>    
                @if ($pet->status == 1)
                    <span class="bg-red-800 text-red-200 p-1 rounded-md">Adopted</span>
                @else 
                    <span class="bg-green-800 text-green-200 p-1 rounded-md">Unadopted</span>
                @endif
            </h2>
            <h2><strong>Description:</strong></h2>
            <p>{{ $pet->description }}</p>
            <div class="card-actions justify-end">
            <a href="{{ url('petsview') }}" class="btn bg-rose-800 text-white"> &larr; Back to List</a>
            </div>
        </div>
    </div>

</body>
</html>