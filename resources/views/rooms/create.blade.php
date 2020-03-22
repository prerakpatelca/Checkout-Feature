@extends('layouts.app')

@section('content')

<div class="col">
<form action="{{ route('rooms.store') }}" method="POST">
    @include('rooms.fields')

    <div class="form-group row">
        <div class="col-sm-3 spacing">
            <button type="submit" class="btn btn-primary">Add Room</button>
        </div>
        <div class="col-sm-9">
            <a href="{{ route('rooms.index') }}" class="btn btn-secondary">Cancel</a>
        </div>
    </div>
</form>
</div>

@endsection
