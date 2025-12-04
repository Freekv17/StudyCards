<x-layouts.default>
    <section class="relative h-[60vh] w-full bg-cover bg-center flex items-center justify-center"
        style="background-image: url('/images/banner.jpg');">

        <div class="absolute inset-0 bg-black/40"></div>

        <div class="relative text-center text-white px-6">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">Welcome to StudyCards</h1>
            <p class="text-lg md:text-xl max-w-2xl mx-auto">
                Learn faster. Remember longer. Study smarter.
            </p>
        </div>
    </section>

    <section class="container mx-auto px-6 py-16 flex flex-col md:flex-row items-center gap-10">
        <div class="w-full md:w-1/2">
            <img src="/images/ban.png" class="w-full  h-full rounded-lg shadow" alt="">
        </div>

        <div class="w-full md:w-1/2">
            <h2 class="text-3xl font-bold mb-4">Organize Your Knowledge</h2>
            <p class="text-gray-700 mb-4">
                Create detailed study cards that help you structure your thoughts and master new material.
            </p>
            <p class="text-gray-700">
                Our tools make studying intuitive and efficient.
            </p>
        </div>
    </section>

    <section class="container mx-auto px-6 py-16 flex flex-col md:flex-row items-center gap-10">
        <div class="w-full md:w-1/2 order-2 md:order-1">
            <h2 class="text-3xl font-bold mb-4">Learn Anywhere</h2>
            <p class="text-gray-700 mb-4">
                Access your study materials from any device and pick up where you left off.
            </p>
            <p class="text-gray-700">
                Designed for convenience, whether you're at home or on the move.
            </p>
        </div>

        <div class="w-full md:w-1/2 order-1 md:order-2">
            <img src="/images/anywhere.webp" class="w-full h-auto rounded-lg shadow" alt="">
        </div>
    </section>
</x-layouts.default>
