<!-- StAuth10065: I Prerak Patel, 000825410 certify that this material is my original work. 
  No other person's work has been used without due acknowledgement. I have not made my work available to anyone else.-->
<div class="form-group row">
        <label class="col-sm-2 col-form-label"for="room_number">Room Number</label>
        <div class="col-sm-10">
            <input name="room_number" type="number" class="form-control" placeholder="Room Number" value="{{ $rooms->room_number ?? '' }}" required/>
            <small class="form-text text-muted">The room name being booked.</small>
        </div>
    </div>

    <div class="form-group row">
        <label class="col-sm-2 col-form-label"for="room_name">Room Name</label>
        <div class="col-sm-10">
            <input name="room_name" type="text" class="form-control" placeholder="Room Name" value="{{ $rooms->room_name ?? '' }}" required/>
            <small class="form-text text-muted">The room name being booked.</small>
        </div>
    </div>

    <div class="form-group row">
        <label class="col-sm-2 col-form-label" for="room_desc">Room Description</label>
        <div class="col-sm-10">
            <input name="room_desc" type="text" class="form-control" placeholder="Room Description" value="{{ $rooms->room_desc ?? '' }}" required/>
            <small class="form-text text-muted">Room description for the room being booked.</small>
        </div>
    </div>

    <div class="form-group row">
        <label class="col-sm-2 col-form-label" for="max_occupancy">Max Occupancy</label>
        <div class="col-sm-10">
            <select name="max_occupancy" class="form-control" id="max_occupancy" required>
                <option value="1" {{ (isset($rooms->max_occupancy) && 1 === $rooms->max_occupancy) ? 'selected' : '' }}>1</option>
                <option value="2" {{ (isset($rooms->max_occupancy) && 2 === $rooms->max_occupancy) ? 'selected' : '' }}>2</option>
                <option value="3" {{ (isset($rooms->max_occupancy) && 3 === $rooms->max_occupancy) ? 'selected' : '' }}>3</option>
                <option value="4" {{ (isset($rooms->max_occupancy) && 4 === $rooms->max_occupancy) ? 'selected' : '' }}>4</option>
                <option value="5" {{ (isset($rooms->max_occupancy) && 5 === $rooms->max_occupancy) ? 'selected' : '' }}>5</option>
                <option value="6" {{ (isset($rooms->max_occupancy) && 6 === $rooms->max_occupancy) ? 'selected' : '' }}>6</option>
            </select>
            <small class="form-text text-muted">Maximum occupancy for the room being booked.</small>
        </div>
    </div>

    @csrf
