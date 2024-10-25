@extends('layouts.app')
@section('content')



<h2 class="font-bold text-4xl text-green-700">Events</h2>
<hr class="h-1 bg-gray-600">

    <div class="my-4 text-right px-10 text-gray-200">
        <a href="{{route('events.create')}}" class="bg-amber-400 text-black px-4 py-2 rounded-lg shadow-md hover:shadow-amber-300 ">Add Events</a>
    </div>

    <table id="mytable" class="display text-gray-900">
        <thead>
            <th>ID</th>
            <th>Event Name</th>
            <th>Description</th>
            <th>Location</th>
            <th>Date</th>
            <th>Category</th>
            <th>Action</th>
        </thead>
        <tbody>
            @foreach ($events as $event )
            <tr>
                <td>{{$event->id}}</td>
                <td>{{$event->title}}</td>
                <th>{{$event->description}}</th>
                <th>{{$event->location}}</th>
                <th>{{$event->date}}</th>
                <th>{{$event->category->name}}</th>
                <td>
                   <a href="{{Route('events.edit',$event->id)}}" class="bg-blue-600 text-white px-2 py-1 rounded hover:shadow-blue-400 ">Edit</a>

                    <form action="{{ route('events.destroy', $event->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-red-600 text-white px-2 py-1 rounded hover:shadow-red-400">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>


    <script>
        let table = new DataTable('#mytable');
    </script>

    @endsection