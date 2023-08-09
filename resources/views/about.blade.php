<x-app-layout>
    <section class="flex flex-col items-center px-3 w-full">

        <article class=" w-full flex flex-col my-4 shadow">
            <!-- Article Image -->
            <a href="#" class="hover:opacity-75">
                <img src="/storage/{{ $widget->image }}" class="w-full">
            </a>
            <div class="flex flex-col justify-start p-6 bg-white">
                <h1 class="pb-4 text-3xl font-bold hover:text-gray-700">
                    {{ $widget->title }}
                </h1>
                <div>
                    {!! $widget->content !!}
                </div>
            </div>
        </article>
    </section>
</x-app-layout>
