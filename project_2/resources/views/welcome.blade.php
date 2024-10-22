@extends('layouts.app')
@section('name', 'welcome')


@section('contain')
    <section class="text-center mb-6">
        <h1 class="text-3xl font-bold">Macdonald</h1> 
    </section>

    <section class="flex justify-between space-x-4">
        @for ($i = 0; $i < 3; $i++)
            @component('components.card')
                @slot('img')
                    <img src="https://cache-backend-mcd.mcdonaldscupones.com/media/image/product$kNXTDwnc/200/200/original?country=co" alt="Placeholder" class="w-full h- object-cover">
                @endslot
                @slot('title', 'Hamburguesa ')
            @endcomponent
        @endfor
    </section>
@endsection

@section('footer')
    @include('components.footer') 
@endsection
