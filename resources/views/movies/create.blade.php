@extends('layouts.base')

@section('title')
    Movies - @parent
@endsection

@section('content')
    <h2 class="text-center text-2xl font-semibold mb-8">Create a movie</h2>
    <form class="flex flex-col items-center" method="post">
        @csrf

        <div class="flex items-center w-[500px] border-b py-2">
            <label class="inline-block w-[100px] font-semibold" for="title">Title</label>
            <input class="grow border rounded pl-2" type="text" id="title" name="title">
        </div>
        <div class="flex items-center w-[500px] border-b py-2">
            <label class="inline-block w-[100px] font-semibold" for="synopsys">Synopsys</label>
            <textarea class="grow border rounded pl-2" name="synopsys" id="synopsys" cols="30" rows="5"></textarea>
        </div>
        <div class="flex items-center w-[500px] border-b py-2">
            <label class="inline-block w-[100px] font-semibold" for="duration">Duration</label>
            <input class="grow border rounded pl-2" type="number" min="0" max="600" id="duration" name="duration">
        </div>
        <div class="flex items-center w-[500px] border-b py-2">
            <label class="inline-block w-[100px] font-semibold" for="youtube">Youtube</label>
            <input class="grow border rounded pl-2" type="text" id="youtube" name="youtube">
        </div>
        <div class="flex items-center w-[500px] border-b py-2">
            <label class="inline-block w-[100px] font-semibold" for="cover">Cover</label>
            <input class="grow border rounded pl-2" type="text" id="cover" name="cover">
        </div>
        <div class="flex items-center w-[500px] border-b py-2">
            <label class="inline-block w-[100px] font-semibold" for="released_at">Release date</label>
            <input class="grow border rounded pl-2" type="date" id="released_at" name="released_at">
        </div>
        <div class="flex items-center w-[500px] border-b py-2">
            <label class="inline-block w-[100px] font-semibold" for="category_id">Category</label>
            <select class="grow border rounded pl-2" name="category_id" id="category_id">
                <option value="">-----</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="flex justify-center mt-8">
            <button class="py-1 px-2 bg-blue-600 text-white rounded-lg">Create</button>
        </div>
    </form>
@endsection