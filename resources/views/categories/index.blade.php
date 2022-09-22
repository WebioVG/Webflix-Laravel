@extends('layouts.base')

@section('title')
    Categories - @parent
@endsection

@section('content')
    <h2 class="text-center text-2xl font-semibold mb-8">Categories</h2>
    <table class="mb-6 mx-auto">
        <tr class="font-semibold text-center border-b border-black">
            <td class="mx-3 inline-block">ID</td>
            <td>Name</td>
            <td>Actions</td>
        </tr>
        @foreach ($categories as $category)
            <tr class="border-b">
                <td class="mx-3 inline-block">{{ $category->id }}</td>
                <td>{{ $category->name }}</td>
                <td>
                    <a class="text-blue-600" href="{{ route('categories.edit', $category->id) }}">Edit</a>
                     | 
                    <form class="inline" action="{{ route('categories.delete', $category->id) }}" method="post">
                        @csrf
                        @method('delete')
                        
                        <button class="text-blue-600">Remove</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    <div class="flex justify-center">
        <a class="py-1 px-2 bg-blue-600 text-white rounded-lg" href="{{ route('categories.create') }}">Create a new category</a>
    </div>
@endsection