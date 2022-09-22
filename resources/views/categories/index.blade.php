@extends('layouts.base')

@section('title')
    Categories - @parent
@endsection

@section('content')
    <h2 class="text-center text-2xl font-semibold mb-8">Categories</h2>
    <table>
        <tr class="font-semibold text-center border-b border-black">
            <td class="mx-3 inline-block">ID</td>
            <td>Name</td>
        </tr>
        @foreach ($categories as $category)
            <tr class="border-b">
                <td class="mx-3 inline-block">{{ $category->id }}</td>
                <td>{{ $category->name }}</td>
            </tr>
        @endforeach
    </table>
@endsection