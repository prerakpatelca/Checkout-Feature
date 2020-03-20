@extends('layouts.app')

@section('content')

<div class="col">
<form action="{{ route('rooms.update',['room' => $rooms->id]) }}" method="POST">
    @method('PUT')
    @include('rooms.fields')

    <div class="form-group row">
        <div class="col-sm-3">
            <button type="submit" class="btn btn-primary">Update Room</button>
        </div>
        <div class="col-sm-9">
            <a href="{{ route('rooms.index') }}" class="btn btn-secondary">Cancel</a>
        </div>
    </div>
</form>
</div>

@endsection
