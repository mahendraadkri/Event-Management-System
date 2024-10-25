@extends('layouts.app')
@section('content')
<h2 class="font-bold text-4xl text-green-700">Add Attendees</h2>
<hr class="h-1 bg-gray-600">

<form action="{{ route('attendees.store') }}" method="POST" enctype="multipart/form-data" class="mt-5">
    @csrf

    <select name="event_id" class="w-full rounded-lg bg-gray-300 border-gray-300 my-2">
        <option value="">Select Event</option>
        @foreach ($events as $event)
            <option value="{{ $event->id }}" {{ old('event_id') == $event->id ? 'selected' : '' }}>
                {{ $event->title }}
            </option>
        @endforeach
    </select>
    @error('event_id')
        <p class="text-red-600 text-xs -mt-2">{{ $message }}</p>
    @enderror

    <input type="text" placeholder="Name" name="name" class="w-full rounded-lg bg-gray-300 border-gray-300 my-2" value="{{ old('name') }}">
    @error('name')
        <p class="text-red-600 text-xs -mt-2">{{ $message }}</p>
    @enderror

    <input type="email" name="email" placeholder="Email" class="w-full rounded-lg bg-gray-300 border-gray-300 my-2" value="{{ old('email') }}">
    @error('email')
        <p class="text-red-600 text-xs -mt-2">{{ $message }}</p>
    @enderror

    <div class="flex">
        <input type="submit" class="bg-blue-600 text-white px-4 py-2 mx-2 rounded-lg" value="Add Event">
    </div>
</form>
@endsection
