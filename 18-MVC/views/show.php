<!DOCTYPE html>
<html lang="en" class="bg-base-200" data-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>Show</title>
</head>
<body>
    
    <div id="latency-screen" class="flex w-[500px] flex-col gap-4 m-auto mt-20">
        <a href="/" class="btn btn-success m-auto">Back to pokemons <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 48 48"><path fill="none" stroke="#ffffff" stroke-linejoin="round" stroke-width="4" d="M44 40.836q-7.34-8.96-13.036-10.168t-10.846-.365V41L4 23.545L20.118 7v10.167q9.523.075 16.192 6.833q6.668 6.758 7.69 16.836Z" clip-rule="evenodd"/></svg></a>
        <div class="skeleton h-50 w-full"></div>
        <div class="flex justify-between  w-full ">
            <div id="" class="skeleton rounded-lg h-8 flex items-center w-60   capitalize"><span class="font-bold indent-2"></div>
            <div id="" class="skeleton rounded-lg h-8 flex items-center w-60   capitalize"><span class="font-bold indent-2"></div>

        </div>   
        <div id="" class="skeleton h-8 flex items-center w-full"></div>
        <div id="" class="skeleton h-8 flex items-center w-full"></div>
        <div id="" class="skeleton h-8 flex items-center w-full"></div>
        <div id="" class="skeleton h-8 flex items-center w-full"></div>
        <div id="" class="skeleton h-8 flex items-center w-full"></div>
    </div>
    
    <div id="real-screen" class="flex w-[500px] text-white flex-col gap-4 m-auto mt-20 hidden">
        <a href="/" class="btn btn-success m-auto">Back to pokemons <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 48 48"><path fill="none" stroke="#ffffff" stroke-linejoin="round" stroke-width="4" d="M44 40.836q-7.34-8.96-13.036-10.168t-10.846-.365V41L4 23.545L20.118 7v10.167q9.523.075 16.192 6.833q6.668 6.758 7.69 16.836Z" clip-rule="evenodd"/></svg></a>
        <div class="bg-white rounded-lg h-50 flex">
            <div class="tooltip tooltip-open tooltip-info translate-x-82 -translate-y-10 tooltip-right" data-tip="hover me!"></div>
            <div class="hover-3d w-1/3 m-auto">
            <!-- content -->
                <figure class="w-full rounded-2xl">
                    <img class="w-full" src="<?=$data['image_url']?>" alt="3D card" />
                </figure>
                <!-- 8 empty divs needed for the 3D effect -->
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>

        <div class="flex justify-between w-full ">
            <div id="name" class="bg-white text-black rounded-lg h-8 flex items-center w-60  capitalize"><span class="font-bold indent-2">Name:</span> <span class="indent-2"> <?=$data['name']?></span></div>
            <div id="tname" class="bg-white text-black rounded-lg h-8 flex items-center w-60  capitalize"><span class="font-bold indent-2">Trainer:</span> <span class="indent-2"> <?=$data['tname']?></span></div>

        </div>        
        <div id="type" class="bg-white text-black rounded-lg h-8 flex items-center w-full  capitalize"><span class="font-bold indent-2">Type:</span> <span class="indent-4"> <?=$data['type']?></span></div>
        <div id="strength" class="bg-white text-black rounded-lg h-10 flex items-center justify-evenly font-bold w-full capitalize">
            <span class="text-bold w-[80px]">strength</span>
            <div class="bg-info p-1  flex items-center rounded-full w-8 h-8 justify-center text-[14px] text-white"><?=$data['strength']?></div>
            <progress id="strength" class="progress progress-info w-90 h-1/3 striped" value="<?=$data['strength']?>" max="350"></progress>
        </div>
        <div id="staming" class="bg-white text-black rounded-lg h-10 flex items-center justify-evenly font-bold w-full capitalize">
            <span class="text-bold w-[80px]">Staming</span>
            <div class="bg-info p-1  flex items-center rounded-full w-8 h-8 justify-center text-[14px] text-white"><?=$data['staming']?></div>
            <progress class="progress progress-info w-90 h-1/3 striped" value="<?=$data['staming']?>" max="350"></progress>
        </div>
        <div id="speed" class="bg-white text-black rounded-lg h-10 flex items-center justify-evenly font-bold w-full capitalize">
            <span class="text-bold w-[80px]">speed</span>
            <div class="bg-info p-1  flex items-center rounded-full w-8 h-8 justify-center text-[14px] text-white"><?=$data['speed']?></div>
            <progress class="progress progress-info w-90 h-1/3 striped" value="<?=$data['speed']?>" max="350"></progress>
        </div>
        <div id="accuracy" class="bg-white text-black rounded-lg h-10 flex items-center justify-evenly font-bold w-full capitalize">
            <span class="text-bold w-[80px]">Accuracy</span>
            <div class="bg-info p-1  flex items-center rounded-full w-8 h-8 justify-center text-[14px] text-white"><?=$data['accuracy']?></div>
            <progress class="progress progress-info w-90 h-1/3 striped" value="<?=$data['accuracy']?>" max="350"></progress>
        </div>
    </div>


    <script>
        document.addEventListener('DOMContentLoaded', e => {
            const latencyScreen = document.getElementById('latency-screen')
            const realScreen = document.getElementById('real-screen')
            
            setTimeout(() => {
                latencyScreen.classList.add('hidden')
                realScreen.classList.remove('hidden')

            }, 2500)
            
        })
    </script>
</body>
</html>