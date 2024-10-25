@extends('layouts.app')
@section('content')
<h2 class="font-bold text-4xl text-green-700">Add Category</h2>
<hr class="h-1 bg-gray-600">

<form action="{{ route('events.store') }}" method="POST" enctype="multipart/form-data" class="mt-5">
    @csrf

    <select name="category_id" class="w-full rounded-lg bg-gray-300 border-gray-300 my-2">
        <option value="">Select Category</option>
        @foreach ($categories as $category)
            <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                {{ $category->name }}
            </option>
        @endforeach
    </select>
    @error('category_id')
        <p class="text-red-600 text-xs -mt-2">{{ $message }}</p>
    @enderror

    <input type="text" placeholder="Event Name" name="title" class="w-full rounded-lg bg-gray-300 border-gray-300 my-2" value="{{ old('title') }}">
    @error('title')
        <p class="text-red-600 text-xs -mt-2">{{ $message }}</p>
    @enderror

    <textarea placeholder="Description" name="description" class="w-full rounded-lg bg-gray-300 border-gray-300 my-2" rows="4">{{ old('description') }}</textarea>
    @error('description')
        <p class="text-red-600 text-xs -mt-2">{{ $message }}</p>
    @enderror

    <input type="date" name="date" class="w-full rounded-lg bg-gray-300 border-gray-300 my-2" value="{{ old('date') }}">
    @error('date')
        <p class="text-red-600 text-xs -mt-2">{{ $message }}</p>
    @enderror

    <input type="text" placeholder="Location" name="location" class="w-full rounded-lg bg-gray-300 border-gray-300 my-2" value="{{ old('location') }}">
    @error('location')
        <p class="text-red-600 text-xs -mt-2">{{ $message }}</p>
    @enderror

    <div class="flex">
        <input type="submit" class="bg-blue-600 text-white px-4 py-2 mx-2 rounded-lg" value="Add Event">
    </div>
</form>
@endsection
