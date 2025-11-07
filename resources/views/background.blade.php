<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Background | Tailwind CSS</title>
    @vite('resources/css/app.css')
    <style>
        .imagen{
            background-image: url("{{ asset('img/RipCode.png') }}");
            height: 400px;
            width: 315px;
            margin-left: auto;
            margin-right: auto;
        }
    </style>
</head>
<body>
    <div class="container mx-auto">
        <h1 class="text-center font-bold mb-3 text-3xl">Background</h1>

        <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. At ab facere assumenda a beatae similique animi sed, quas facilis eum quasi accusantium obcaecati omnis non magnam nam, libero ullam repudiandae.</p>

        <div class="imagen bg-cover bg-center border-4 border-blue-600">

        </div>
    </div>
</body>
</html>