@extends('layouts.app')
@section('content')
<h2 class="font-bold text-4xl text-green-700">Add Category</h2>
<hr class="h-1 bg-gray-600">

<form action="{{route('categories.store')}}" method="POST" enctype="multipart/form-data" class="mt-5" >
    @csrf
    <input type="text" placeholder="Category Name" name="name" class="w-full rounded-lg bg-gray-300 border-gray-300 my-2 " value="{{old('name')}}">
    @error('name')
    <p class="text-red-600 text-xs -mt-2">{{$message}}</p>
    @enderror

    <div class="flex">
        <input type="submit" class="bg-blue-600 text-white px-4 py-2 mx-2 rounded-lg" value="Add Category">
    </div>
</form>

@endsection