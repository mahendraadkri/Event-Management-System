{{-- @extends('layouts.app')
@section('content')
<h2 class="font-bold text-4xl text-blue-700">Edit Category</h2>
<hr class="h-1 bg-gray-600">

<form action="{{route('category.update', $category->id)}}" method="POST" enctype="multipart/form-data" class="mt-5">
    @csrf
    @method('PUT')
    <input type="text" placeholder="Category Name" name="name" class="w-full rounded-lg border-gray-300 my-2" value="{{$category->name}}">
    @error('name')
    <p class="text-red-600 text-xs -mt-2">{{$message}}</p>
    @enderror
        

    <div class="flex">
        <input type="submit" class="bg-green-600 text-white px-4 py-2 mx-2 rounded-lg" value="Update">
        <a href="{{route('categories.index')}}" class="bg-blue-600 text-white px-10 py-2 mx-2 rounded-lg">Exit</a>
    </div>
</form>

@endsection --}}

@extends('layouts.app')
@section('content')

<h2 class="font-bold text-4xl text-green-700">Edit Category</h2>
<hr class="h-1 bg-gray-600">

<div class="my-4">
    <form action="{{ route('categories.update', $category->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label for="name" class="block text-gray-700">Category Name:</label>
            <input type="text" id="name" name="name" value="{{ old('name', $category->name) }}" class="border border-gray-300 rounded p-2 w-full" required>
            @error('name')
                <div class="text-red-600 mt-2">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Update Category</button>
    </form>
</div>

@endsection
