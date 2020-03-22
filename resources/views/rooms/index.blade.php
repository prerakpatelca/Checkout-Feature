@extends('layouts.app')

@section('content')
<br>

<a class="btn btn-primary" href="{{ route('rooms.create') }}">Add New Room</a>

<table class="table">
    <thead>
        <tr>
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
                Actions
            </th>
        </tr>
    </thead>
    <tbody>
        @foreach($rooms as $room)
            <tr>
                <td>{{ $room->room_number }}</td>
                <td>{{ $room->room_name }}</td>
                <td>{{ $room->room_desc }}</td>
                <td>{{ $room->max_occupancy }}</td>
                <td class="actions">
                    <form action="{{ action('RoomsController@destroy', ['room' => $room->id]) }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-link" title="Delete" value="DELETE">Delete</button>
                    </form>
                </td>
                <td>
                    <a
                        href="{{ action('RoomsController@edit', ['room' => $room->id]) }}"
                        alt="Edit"
                        title="Edit">Edit
                    </a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
