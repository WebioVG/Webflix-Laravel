@extends('layouts.base')

@section('title')
    Categories - @parent
@endsection

@section('content')
    <h2 class="text-center text-2xl font-semibold mb-8">Create a category</h2>
    <form class="max-w-[600px] mx-auto" method="post">
        @csrf

        <div class="flex justify-center mb-5">
            <label class="mr-3" for="name">Name</label>
            <input class="pl-2 border rounded" type="text" id="name" name="name" placeholder="Category name...">
        </div>

        <div class="flex justify-center">
            <button class="py-1 px-2 bg-blue-600 text-white rounded-lg">Create</button>
        </div>
    </form>
@endsection