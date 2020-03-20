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
                Guest Name
            </th>
            <th>
                Date
            </th>
            <th colspan=2>
                Actions
            </th>
        </tr>
    </thead>
    <tbody>
        @foreach($bookings as $booking)
            <tr>
                <td>{{ $booking->room_number }}</td>
                <td>{{ $booking->room_name }}</td>
                <td>{{ $booking->guest_name }}</td>
                <td>{{ $booking->date }}</td>
                <td class="actions">
                    <form action="{{ action('BookingController@destroy', ['booking' => $booking->id]) }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-link" title="Delete" value="DELETE">Delete</button>
                    </form>
                </td>
                <td>
                    <a
                        href="{{ action('BookingController@edit', ['booking' => $booking->id]) }}"
                        alt="Edit"
                        title="Edit">Edit
                    </a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
