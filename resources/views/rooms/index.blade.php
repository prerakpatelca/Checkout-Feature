@extends('layouts.app')

@section('content')

<a class="btn btn-primary enter" href="{{ route('rooms.create') }}"><i class="fa fa-plus" aria-hidden="true"></i> Add a new room</a>

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
                        <button type="submit" class="btn btn-link delete" title="Delete" value="DELETE"><i class="fa fa-minus-square fa-2x" aria-hidden="true"></i></button>
                    </form>
                </td>
                <td class="actions">
                    <a
                        class="edit"
                        href="{{ action('RoomsController@edit', ['room' => $room->id]) }}"
                        alt="Edit"
                        title="Edit"><i class="fa fa-pencil-square fa-2x" aria-hidden="true"></i>
                    </a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
