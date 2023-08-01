<x-app-layout>
    <!-- Posts Section -->
    <section class="flex flex-col items-center px-3 w-full md:w-2/3">

        @foreach ($posts as $post)
            <x-post-item :post="$post"></x-post-item>
        @endforeach

        {{ $posts->links() }}
    </section>
</x-app-layout>
