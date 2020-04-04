<!-- StAuth10065: I Prerak Patel, 000825410 certify that this material is my original work. 
  No other person's work has been used without due acknowledgement. I have not made my work available to anyone else.-->
@extends('layouts.app')

@section('content')

<a class="btn btn-primary enter" href="{{ route('rooms.create') }}"><i class="fa fa-plus" aria-hidden="true"></i> Add a new room</a>

<table class="table">
    <thead>
        <tr>
            <th>
                Delete
            </th>
            <th>
                Room Number
            </th>
            <th>
                Room Name
            </th>
            <th>
                Room Description
            </th>
            <th>
                Max Occupancy
            </th>
            <th colspan=2>
                Edit
            </th>
        </tr>
    </thead>
    <tbody>
        @foreach($rooms as $room)
            <tr>
                <td class="actions">
                    <form action="{{ action('RoomsController@destroy', ['room' => $room->room_number]) }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-link delete" title="Delete" value="DELETE">Delete</button>
                    </form>
                </td>
                <td>{{ $room->room_number }}</td>
                <td>{{ $room->room_name }}</td>
                <td>{{ $room->room_desc }}</td>
                <td>{{ $room->max_occupancy }}</td>
                
                <td class="actions">
                    <a
                        class="edit"
                        href="{{ action('RoomsController@edit', ['room' => $room->room_number]) }}"
                        alt="Edit"
                        title="Edit"><i class="fa fa-pencil-square fa-2x" aria-hidden="true"></i>
                    </a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
