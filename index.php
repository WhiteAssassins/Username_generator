<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generador de Nombres de Usuario</title>

    <!-- Agrega los enlaces CDN para Tailwind CSS y Animate.css -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

    
    <!-- Enlaza tu archivo CSS personalizado -->
    <link rel="stylesheet" href="main.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/chance/1.1.7/chance.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Faker/3.1.0/faker.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">


</head>
<body>
<div class="container mx-auto flex justify-center items-center h-screen">
        <div class="w-96 transparent-card p-6 rounded-lg shadow-md animate__animated animate__flip">
            <h1 class="text-2xl font-semibold mb-4 animate__animated animate__fadeIn">Generador de Nombres de Usuario</h1>
            <form id="username-form" class="mb-4 animate__animated animate__slideInDown">
                <div class="mb-4">
                    <label for="name" class="block text-gray-600">Nombre:</label>
                    <input type="text" id="name" name="name" class="w-full p-2 border border-gray-300 rounded-md">
                </div>
                <div class="mb-4 relative">
                    <label for="generated-username" class="block text-gray-600">Nombre de Usuario Generado:</label>
                    <div class="relative">
                        <input type="text" id="generated-username" readonly class="w-full p-2 border border-gray-300 rounded-md pr-10">
                        <div id="copy-icon" class="absolute top-2 right-2 cursor-pointer text-gray-600">
                            <i class="far fa-copy animate__animated animate__pulse"></i> <!-- Icono de copia con animación -->
                        </div>
                    </div>
                </div>
                <div class="flex mb-4">
                    <button type="button" id="generate-btn" class="flex-1 bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 transition duration-300 ease-in-out animate__animated animate__pulse focus:outline-none">Generar</button>
                    <button type="button" id="randomize-btn" class="flex-1 ml-2 bg-gray-500 text-white px-4 py-2 rounded-md hover:bg-gray-600 transition duration-300 ease-in-out animate__animated animate__tada focus:outline-none">Generar Aleatorio</button>
                    <button type="button" id="reset-btn" class="flex-1 ml-2 bg-red-500 text-white px-4 py-2 rounded-md hover:bg-red-600 transition duration-300 ease-in-out animate__animated animate__bounce focus:outline-none">Reiniciar</button>
                </div>
            </form>
            <div class="mb-4 animate__animated animate__fadeIn">
                <label for="custom-options" class="block text-gray-600">Opciones de Personalización:</label>
                <input type="text" id="custom-options" class="w-full p-2 border border-gray-300 rounded-md" placeholder="Agrega números, caracteres especiales, etc.">
            </div>
            <div class="animate__animated animate__fadeIn">
                <label class="block text-gray-600">Historial de Nombres Generados:</label>
                <ul id="history-list" class="list-disc list-inside text-gray-700"></ul>
            </div>
        </div>
    </div>
<script src="script.js"></script>
</body>
</html>

