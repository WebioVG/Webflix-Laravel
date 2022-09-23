@extends('layouts.base')

@section('title')
    Movies - @parent
@endsection

@section('content')
    <h2 class="text-center text-2xl font-semibold mb-8">Movies</h2>
    <article class="grid grid-cols-4 gap-5 max-w-[1000px] mx-auto">
        @foreach ($movies as $movie)
            <section class="border shadow-md">
                <div class="p-2">
                    <h3 class="underline">{{ $movie->title }}</h3>
                    <p>
                        @if ($movie->released_at) {{ date('j/m/Y', strToTime($movie->released_at)) }} | @endif
                        {{ $movie->duration }}min
                    </p>
                </div>
            </section>
        @endforeach
    </article>

    <div class="flex justify-center mt-5">
        <a class="py-1 px-2 bg-blue-600 text-white rounded-lg" href="{{ route('movies.create') }}">Add a new movie</a>
    </div>
@endsection