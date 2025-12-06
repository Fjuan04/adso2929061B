<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>Show</title>
</head>
<body>
    
    <div id="latency-screen" class="flex w-[500px] flex-col gap-4 m-auto mt-50">
        <a href="/" class="btn btn-success m-auto">Back to pokemons <svg xmlns="http://www.w3.org/2000/svg" class="size-8"  viewBox="0 0 24 24"><path fill="#ffffff" d="M11 13v3q0 .425.288.713T12 17t.713-.288T13 16v-3h3q.425 0 .713-.288T17 12t-.288-.712T16 11h-3V8q0-.425-.288-.712T12 7t-.712.288T11 8v3H8q-.425 0-.712.288T7 12t.288.713T8 13zm1 9q-2.075 0-3.9-.788t-3.175-2.137T2.788 15.9T2 12t.788-3.9t2.137-3.175T8.1 2.788T12 2t3.9.788t3.175 2.137T21.213 8.1T22 12t-.788 3.9t-2.137 3.175t-3.175 2.138T12 22"/></svg></a>
        <div class="skeleton h-32 w-full"></div>
        <div id="name" class="skeleton h-8 flex items-center w-1/2"></div>
        <div id="type" class="skeleton h-8 flex items-center w-full"></div>
        <div id="strength" class="skeleton h-8 flex items-center w-full"></div>
        <div id="staming" class="skeleton h-8 flex items-center w-full"></div>
        <div id="speed" class="skeleton h-8 flex items-center w-full"></div>
        <div id="accuracy" class="skeleton h-8 flex items-center w-full"></div>
    </div>
    
    <div id="real-screen" class="flex w-[500px] text-white flex-col gap-4 m-auto mt-50 hidden">
        <a href="/" class="btn btn-success m-auto">Back to pokemons <svg xmlns="http://www.w3.org/2000/svg" class="size-8"  viewBox="0 0 24 24"><path fill="#ffffff" d="M11 13v3q0 .425.288.713T12 17t.713-.288T13 16v-3h3q.425 0 .713-.288T17 12t-.288-.712T16 11h-3V8q0-.425-.288-.712T12 7t-.712.288T11 8v3H8q-.425 0-.712.288T7 12t.288.713T8 13zm1 9q-2.075 0-3.9-.788t-3.175-2.137T2.788 15.9T2 12t.788-3.9t2.137-3.175T8.1 2.788T12 2t3.9.788t3.175 2.137T21.213 8.1T22 12t-.788 3.9t-2.137 3.175t-3.175 2.138T12 22"/></svg></a>
        <div class="bg-slate-600 rounded-lg h-32 "></div>

        <div class="flex justify-between w-full ">
            <div id="name" class="bg-slate-600 rounded-lg h-8 flex items-center w-60 h-8  capitalize"><span class="font-bold indent-2">Name:</span> <span class="indent-2"> <?=$data['name']?></span></div>
            <div id="tname" class="bg-slate-600 rounded-lg h-8 flex items-center w-60 h-8  capitalize"><span class="font-bold indent-2">Trainer:</span> <span class="indent-2"> <?=$data['tname']?></span></div>

        </div>        
        <div id="type" class="bg-slate-600 rounded-lg h-8 flex items-center w-full h-8  capitalize"><span class="font-bold indent-2">Type:</span> <span class="indent-4"> <?=$data['type']?></span></div>
        <div id="strength" class="bg-slate-600 rounded-lg h-10 flex items-center justify-evenly font-bold w-full capitalize">
            <span class="text-bold">strength</span>
            <div class="bg-info p-1 rounded flex items-center rounded-full w-8 h-8 justify-center text-[14px]"><?=$data['accuracy']?></div>
            <progress class="progress progress-info w-90 h-1/3 striped" value="50" max="350"></progress>
        </div>
        <div id="staming" class="bg-slate-600 rounded-lg h-10 flex items-center justify-evenly font-bold w-full capitalize">
            <span class="text-bold">Staming</span>
            <div class="bg-info p-1 rounded flex items-center rounded-full w-8 h-8 justify-center text-[14px]"><?=$data['accuracy']?></div>
            <progress class="progress progress-info w-90 h-1/3 striped" value="50" max="350"></progress>
        </div>
        <div id="speed" class="bg-slate-600 rounded-lg h-10 flex items-center justify-evenly font-bold w-full capitalize">
            <span class="text-bold">speed</span>
            <div class="bg-info p-1 rounded flex items-center rounded-full w-8 h-8 justify-center text-[14px]"><?=$data['accuracy']?></div>
            <progress class="progress progress-info w-90 h-1/3 striped" value="50" max="350"></progress>
        </div>
        <div id="accuracy" class="bg-slate-600 rounded-lg h-10 flex items-center justify-evenly font-bold w-full capitalize">
            <span class="text-bold">Accuracy</span>
            <div class="bg-info p-1 rounded flex items-center rounded-full w-8 h-8 justify-center text-[14px]"><?=$data['accuracy']?></div>
            <progress class="progress progress-info w-90 h-1/3 striped" value="50" max="350"></progress>
        </div>
    </div>


    <script>
        document.addEventListener('DOMContentLoaded', e => {
            const latencyScreen = document.getElementById('latency-screen')
            const realScreen = document.getElementById('real-screen')

            setTimeout(() => {
                latencyScreen.classList.add('hidden')
                realScreen.classList.remove('hidden')
            }, 1000)
        })
    </script>
</body>
</html>