@extends('layouts.base')

@section('title')
    About - @parent
@endsection

@section('content')
    <h2 class="text-center text-2xl font-semibold mb-8">About our team</h2>

    <ul class="">
        @foreach ($team as $member)
            <li class="ml-2">- {{ $member }}</li>
        @endforeach
    </ul>
@endsection