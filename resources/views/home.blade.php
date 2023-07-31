<x-app-layout>
    <!-- Posts Section -->
    <section class="flex flex-col items-center px-3 w-full md:w-2/3">

        <article class="flex flex-col my-4 shadow">
            <!-- Article Image -->
            <a href="#" class="hover:opacity-75">
                <img src="https://source.unsplash.com/collection/1346951/1000x500?sig=1">
            </a>
            <div class="flex flex-col justify-start p-6 bg-white">
                <a href="#" class="pb-4 text-sm font-bold text-blue-700 uppercase">Technology</a>
                <a href="#" class="pb-4 text-3xl font-bold hover:text-gray-700">Lorem Ipsum Dolor Sit Amet Dolor Sit
                    Amet</a>
                <p href="#" class="pb-3 text-sm">
                    By <a href="#" class="font-semibold hover:text-gray-800">David Grzyb</a>, Published on April
                    25th, 2020
                </p>
                <a href="#" class="pb-6">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus quis
                    porta dui. Ut eu iaculis massa. Sed ornare ligula lacus, quis iaculis dui porta volutpat. In sit
                    amet posuere magna..</a>
                <a href="#" class="text-gray-800 uppercase hover:text-black">Continue Reading <i
                        class="fas fa-arrow-right"></i></a>
            </div>
        </article>


        <!-- Pagination -->
        <div class="flex items-center py-8">
            <a href="#"
                class="flex justify-center items-center w-10 h-10 text-sm font-semibold text-white bg-blue-800 hover:bg-blue-600">1</a>
            <a href="#"
                class="flex justify-center items-center w-10 h-10 text-sm font-semibold text-gray-800 hover:bg-blue-600 hover:text-white">2</a>
            <a href="#"
                class="flex justify-center items-center ml-3 w-10 h-10 text-sm font-semibold text-gray-800 hover:text-gray-900">Next
                <i class="ml-2 fas fa-arrow-right"></i></a>
        </div>

    </section>
</x-app-layout>
