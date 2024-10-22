<section class="bg-white border-l-4 rounded-lg shadow p-4 w-80">
    <article class="mb-4">
        {{ $img }} 
    </article>
    <h2 class="text-lg font-semibold mb-2">{{ $title }}</h2> 
    <p>{{ $slot }}</p> 
    <article class="mt-4 flex justify-between">
        <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Comprar</button>
    </article>
</section>
