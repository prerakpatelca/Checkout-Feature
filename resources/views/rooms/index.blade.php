@extends('layouts.app')

@section('content')

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
                    <a
                        href="{{ action('RoomsController@show', ['rooms' => $rooms->id]) }}"
                        alt="View"
                        title="View">
                      View
                    </a>
                    <a
                        href="{{ action('RoomsController@edit', ['rooms' => $rooms->id]) }}"
                        alt="Edit"
                        title="Edit">
                      Edit
                    </a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
