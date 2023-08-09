<x-app-layout>
    <section class="flex flex-col items-center px-3 w-full md:w-2/3">

        <article class="flex flex-col my-4 shadow">
            <!-- Article Image -->
            <a href="#" class="hover:opacity-75">
                <img src="{{ $post->getThumbnail() }}">
            </a>
            <div class="flex flex-col justify-start p-6 bg-white">
                <div class="flex gap-4">
                    @foreach ($post->categories as $category)
                        <a href="{{ route('by-category', $category) }}"
                            class="pb-4 text-sm font-bold text-blue-700 uppercase">
                            {{ $category->title }}
                        </a>
                    @endforeach
                </div>

                <h1 class="pb-4 text-3xl font-bold hover:text-gray-700">
                    {{ $post->title }}
                </h1>
                <p href="#" class="pb-8 text-sm">
                    By <a href="#" class="font-semibold hover:text-gray-800">{{ $post->user->name }}</a>,
                    Published on {{ $post->getDate() }}
                </p>
                <div>
                    {!! $post->body !!}
                </div>
            </div>
        </article>

        <div class="flex pt-6 w-full">
            <div class="w-1/2">
                @if ($prev)
                    <a href="{{ route('show', $prev) }}"
                        class="block p-6 w-full text-left bg-white shadow hover:shadow-md">
                        <p class="flex items-center text-lg font-bold text-blue-800"><i
                                class="pr-1 fas fa-arrow-left"></i>
                            Previous</p>
                        <p class="pt-2">
                            {{ \Illuminate\Support\Str::words($prev->title, 5) }}
                        </p>
                    </a>
                @endif
            </div>
            <div class="w-1/2">
                @if ($next)
                    <a href="{{ route('show', $next) }}"
                        class="block p-6 w-full text-right bg-white shadow hover:shadow-md">
                        <p class="flex justify-end items-center text-lg font-bold text-blue-800">Next <i
                                class="pl-1 fas fa-arrow-right"></i></p>
                        <p class="pt-2">
                            {{ \Illuminate\Support\Str::words($next->title, 5) }}
                        </p>
                    </a>
                @endif
            </div>
        </div>
    </section>

    <x-sidebar />
</x-app-layout>
