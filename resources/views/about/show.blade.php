@extends('layouts.base')

@section('title')
    About - @parent
@endsection

@section('content')
    <h2 class="text-center text-2xl font-semibold mb-8">About our user <span class="text-blue-500 italic">{{ $user }}</span></h2>
@endsection