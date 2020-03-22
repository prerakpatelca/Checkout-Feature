<!-- StAuth10065: I Prerak Patel, 000825410 certify that this material is my original work. 
  No other person's work has been used without due acknowledgement. I have not made my work available to anyone else.-->
@extends('layouts.app')

@section('content')

<div class="col">
<form action="{{ route('bookings.store') }}" method="POST">
    <div class="form-group row">
        <label class="col-sm-2 col-form-label"for="room_number">Room Number</label>
        <div class="col-sm-2">
            <select name="room_number" class="form-control" id="room_number" required>
                @foreach($rooms as $room)
                    <option value="{{ $room->room_number }}">{{ $room->room_number }} - {{ $room->room_name }}</option>
                @endforeach
            </select>
            <small class="form-text text-muted">The room name being booked.</small>
        </div>
    </div>

    <div class="form-group row">
        <label class="col-sm-2 col-form-label"for="room_name">Room Name</label>
        <div class="col-sm-5">
            <input name="room_name" type="text" class="form-control" placeholder="Room Name" required />
            <small class="form-text text-muted">The room name being booked.</small>
        </div>
    </div>

    <div class="form-group row">
        <label class="col-sm-2 col-form-label" for="guest_name">Guest Name</label>
        <div class="col-sm-5">
            <input name="guest_name" type="text" class="form-control" placeholder="Guest Name" required />
            <small class="form-text text-muted">Guest name for the room being booked.</small>
        </div>
    </div>

    <div class="form-group row">
        <label class="col-sm-2 col-form-label" for="date">Date</label>
        <div class="col-sm-3">
            <input name="date" type="date" class="form-control" placeholder="Date" required />
            <small class="form-text text-muted">Booking date for the room being booked.</small>
        </div>
    </div>

    @csrf

    <div class="form-group row">
        <div class="col-sm-3 spacing">
            <button type="submit" class="btn btn-primary">Add a Booking</button>
        </div>
        <div class="col-sm-4">
            <a href="{{ route('bookings.index') }}" class="btn btn-secondary">Cancel</a>
        </div>
    </div>
</form>
</div>

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
            <th>
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
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
