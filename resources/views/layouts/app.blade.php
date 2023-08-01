<!DOCTYPE html>
<html lang{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tailwind Blog Template</title>
    <meta name="author" content="">
    <meta name="description" content="">

    <!-- Tailwind -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Karla:400,700&display=swap');

        .font-family-karla {
            font-family: karla;
        }
    </style>

    <!-- AlpineJS -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"
        integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>
</head>

<body class="bg-white font-family-karla">

    <!-- Text Header -->
    <header class="container mx-auto w-full">
        <div class="flex flex-col items-center py-12">
            <a class="text-5xl font-bold text-gray-800 uppercase hover:text-gray-700" href="#">
                Doug's Blog
            </a>
            <p class="text-lg text-gray-600">
                Lorem Ipsum Dolor Sit Amet
            </p>
        </div>
    </header>

    <!-- Topic Nav -->
    <nav class="py-4 w-full bg-gray-100 border-t border-b" x-data="{ open: false }">
        <div class="block sm:hidden">
            <a href="#"
                class="flex justify-center items-center text-base font-bold text-center uppercase md:hidden"
                @click="open = !open">
                Topics <i :class="open ? 'fa-chevron-down' : 'fa-chevron-up'" class="ml-2 fas"></i>
            </a>
        </div>
        <div :class="open ? 'block' : 'hidden'" class="flex-grow w-full sm:flex sm:items-center sm:w-auto">
            <div
                class="container flex flex-col justify-center items-center px-6 py-2 mx-auto mt-0 w-full text-sm font-bold uppercase sm:flex-row">
                <a href="#" class="px-4 py-2 mx-2 rounded hover:bg-gray-400">Technology</a>
                <a href="#" class="px-4 py-2 mx-2 rounded hover:bg-gray-400">Automotive</a>
                <a href="#" class="px-4 py-2 mx-2 rounded hover:bg-gray-400">Finance</a>
                <a href="#" class="px-4 py-2 mx-2 rounded hover:bg-gray-400">Politics</a>
                <a href="#" class="px-4 py-2 mx-2 rounded hover:bg-gray-400">Culture</a>
                <a href="#" class="px-4 py-2 mx-2 rounded hover:bg-gray-400">Sports</a>
            </div>
        </div>
    </nav>


    <div class="container flex flex-wrap py-6 mx-auto">

        {{ $slot }}

        <!-- Sidebar Section -->
        <aside class="flex flex-col items-center px-3 w-full md:w-1/3">

            <div class="flex flex-col p-6 my-4 w-full bg-white shadow">
                <p class="pb-5 text-xl font-semibold">About Us</p>
                <p class="pb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas mattis est eu odio
                    sagittis tristique. Vestibulum ut finibus leo. In hac habitasse platea dictumst.</p>
                <a href="#"
                    class="flex justify-center items-center px-2 py-3 mt-4 w-full text-sm font-bold text-white uppercase bg-blue-800 rounded hover:bg-blue-700">
                    Get to know us
                </a>
            </div>

            <div class="flex flex-col p-6 my-4 w-full bg-white shadow">

            </div>

        </aside>

    </div>

    <footer class="pb-12 w-full bg-white border-t">
        <div class="container flex flex-col items-center mx-auto w-full">
            <div class="pb-6 uppercase">&copy; dougsblog.com</div>
        </div>
    </footer>

</body>

</html>
