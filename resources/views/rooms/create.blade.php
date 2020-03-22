<!-- StAuth10065: I Prerak Patel, 000825410 certify that this material is my original work. 
  No other person's work has been used without due acknowledgement. I have not made my work available to anyone else.-->
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
