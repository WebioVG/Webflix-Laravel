@extends('layouts.base')

@section('title')
    Categories - @parent
@endsection

@section('content')
    <h2 class="text-center text-2xl font-semibold mb-8">Categories</h2>
    <ul>
        @foreach ($categories as $category)
            <li>{{ $category }}</li>
        @endforeach
    </ul>
@endsection