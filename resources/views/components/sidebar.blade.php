<aside class="flex flex-col items-center px-3 w-full md:w-1/3">

    <div class="flex flex-col p-6 my-4 w-full bg-white shadow">
        <h3 class="mb-3 text-xl font-semibold"> All Categories</h3>

        @foreach ($categories as $category)
            <a href="{{ route('by-category', $category) }}"
                class="block px-3 py-2 rounded text-semibold hover:text-white hover:bg-blue-600">
                {{ $category->title }} ({{ $category->total }})
            </a>
        @endforeach
    </div>

    <div class="flex flex-col p-6 my-4 w-full bg-white shadow">
        <p class="pb-5 text-xl font-semibold">
            {{ \App\Models\TextWidget::getTitle('about-us-sidebar') }}
        </p>
        <p class="pb-2">
            {!! \App\Models\TextWidget::getContent('about-us-sidebar') !!}
        </p>
        <a href="#"
            class="flex justify-center items-center px-2 py-3 mt-4 w-full text-sm font-bold text-white uppercase bg-blue-800 rounded hover:bg-blue-700">
            Get to know us
        </a>
    </div>

</aside>
