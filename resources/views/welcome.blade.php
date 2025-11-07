<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tailwind CSS</title>
    
    @vite(['resources/css/app.css'])
</head>
<body>
    <div class="container mx-auto">
        <div class="grid grid-cols-4 grid-rows-3 gap-4 text-center">
            <div class="bg-red-500 col-start-1 col-span-3 row-span-2">A</div>
            <div class="bg-slate-300 col-start-4">B</div>
            <div class="bg-blue-300">C</div>
            <div class="bg-green-300">D</div>
            <div class="bg-green-400">E</div>
            <div class="bg-green-500">F</div>

        </div>
    </div>

    <div class="container mx-auto">

        <div class="grid grid-flow-col">
            <div class="bg-blue-100">1</div>
            <div class="bg-blue-200">2</div>
            <div class="bg-blue-300">3</div>
            <div class="bg-blue-400">4</div>
            <div class="bg-blue-500">5</div>
            <div class="bg-blue-600">6</div>
            <div class="bg-blue-700">7</div>
            <div class="bg-blue-800">8</div>
            <div class="bg-blue-900">9</div>
        </div>

    </div>

</body>
</html>