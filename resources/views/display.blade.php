<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Display</title>
    @vite('resources/css/app.css')
</head>
<body>
    
    <div class="container mx-auto py-12">
        
        <div class="flex">
            <div>1</div>
            <div>2</div>
            <div>3</div>
        </div>
        


        <!-- Etiquetas de bloque -->
        <p class="bg-red-200 hidden lg:inline-block mb-4">Esta es una etiqueta en bloque</p> <!-- Etiquetas inline no le puedes poner magin  -->
        <div class="bg-red-200">Esta tambien es una etiqueta en bloque</div>
        <blockquote class="bg-red-200">Esta tambien es una etiqueta en bloque</blockquote>

        <!-- Etiquetas inline -->
        <span class="bg-blue-300 block">Etiqueta inline</span>
        <a  class="bg-green-300 block">Esta tambien es una etiqueta inline</a>
    </div>
    
    


</body>
</html>