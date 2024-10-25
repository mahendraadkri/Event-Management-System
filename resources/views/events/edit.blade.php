@extends('layouts.app') 
@section('content')
<h2 class="font-bold text-4xl text-green-700">Edit Event</h2>
<hr class="h-1 bg-gray-600">

<form action="{{ route('events.update', $event->id) }}" method="POST" enctype="multipart/form-data" class="mt-5">
    @csrf
    @method('PUT') <!-- Use PUT method for updating -->

    <!-- Category Selection -->
    <select name="category_id" class="w-full rounded-lg bg-gray-300 border-gray-300 my-2">
        <option value="">Select Category</option>
        @foreach ($categories as $category)
            <option value="{{ $category->id }}" {{ old('category_id', $event->category_id) == $category->id ? 'selected' : '' }}>
                {{ $category->name }}
            </option>
        @endforeach
    </select>
    @error('category_id')
        <p class="text-red-600 text-xs -mt-2">{{ $message }}</p>
    @enderror

    <!-- Event Name -->
    <input type="text" placeholder="Event Name" name="title" class="w-full rounded-lg bg-gray-300 border-gray-300 my-2" value="{{ old('title', $event->title) }}">
    @error('title')
        <p class="text-red-600 text-xs -mt-2">{{ $message }}</p>
    @enderror

    <!-- Description -->
    <textarea placeholder="Description" name="description" class="w-full rounded-lg bg-gray-300 border-gray-300 my-2" rows="4">{{ old('description', $event->description) }}</textarea>
    @error('description')
        <p class="text-red-600 text-xs -mt-2">{{ $message }}</p>
    @enderror

    <!-- Date -->
    <input type="date" name="date" class="w-full rounded-lg bg-gray-300 border-gray-300 my-2" value="{{ old('date', $event->date) }}">
    @error('date')
        <p class="text-red-600 text-xs -mt-2">{{ $message }}</p>
    @enderror

    <!-- Location -->
    <input type="text" placeholder="Location" name="location" class="w-full rounded-lg bg-gray-300 border-gray-300 my-2" value="{{ old('location', $event->location) }}">
    @error('location')
        <p class="text-red-600 text-xs -mt-2">{{ $message }}</p>
    @enderror

    <!-- Submit Button -->
    <div class="flex">
        <input type="submit" class="bg-blue-600 text-white px-4 py-2 mx-2 rounded-lg" value="Update Event">
    </div>
</form>
@endsection
