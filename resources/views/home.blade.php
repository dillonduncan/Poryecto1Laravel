<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <div class="max-w-4xl mx-auto px-4">
        <h1>Bienvenido la vista principal</h1>

        <x-alert2 type="danger" class="mb-4">
            <x-slot name="title">
                contenido de la alerta
            </x-slot>
            Bienvenido la vista principal
        </x-alert2>
        <p>habla parce</p>
    </div>
</body>

</html>
