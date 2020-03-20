<div class="form-group row">
        <label class="col-sm-2 col-form-label"for="room_number">Room Number</label>
        <div class="col-sm-10">
            <input name="room_number" type="text" class="form-control" placeholder="Room Number"/>
            <small class="form-text text-muted">The room name being booked.</small>
        </div>
    </div>

    <div class="form-group row">
        <label class="col-sm-2 col-form-label"for="room_name">Room Name</label>
        <div class="col-sm-10">
            <input name="room_name" type="text" class="form-control" placeholder="Room Name"/>
            <small class="form-text text-muted">The room name being booked.</small>
        </div>
    </div>

    <div class="form-group row">
        <label class="col-sm-2 col-form-label" for="room_desc">Room Description</label>
        <div class="col-sm-10">
            <input name="room_desc" type="text" class="form-control" placeholder="Room Description"/>
            <small class="form-text text-muted">Room description for the room being booked.</small>
        </div>
    </div>

    <div class="form-group row">
        <label class="col-sm-2 col-form-label" for="max_occ">Max Occupancy</label>
        <div class="col-sm-10">
            <select name="max_occ" class="form-control" id="max_occ" required>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
            </select>
            <small class="form-text text-muted">Maximum occupancy for the room being booked.</small>
        </div>
    </div>

    @csrf