@extends('layouts.app')
@section('content')



<h2 class="font-bold text-4xl text-green-700">Attendees</h2>
<hr class="h-1 bg-gray-600">

    <div class="my-4 text-right px-10 text-gray-200">
        <a href="{{route('attendees.create')}}" class="bg-amber-400 text-black px-4 py-2 rounded-lg shadow-md hover:shadow-amber-300 ">Add Attendees</a>
    </div>

    <table id="mytable" class="display text-gray-900">
        <thead>
            <th>Name</th>
            <th>email</th>
            <th>Event Name</th>
            <th>Action</th>
        </thead>
        <tbody>
            @foreach ($attendees as $attendee )
            <tr>
                <td>{{$attendee->name}}</td>
                <td>{{$attendee->email}}</td>
                <th>{{$attendee->event->title}}</th>
                <td>
                   <a href="{{Route('attendees.edit',$attendee->id)}}" class="bg-blue-600 text-white px-2 py-1 rounded hover:shadow-blue-400 ">Edit</a>

                    <form action="{{ route('attendees.destroy', $attendee->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete?')">
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