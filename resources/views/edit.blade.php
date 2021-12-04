@extends('layouts.app')

@section('content')
<div class="container">
    
    <h1 class="text-center">Edit </h1>
    <form action="{{ route('edit') }}" method="POST">
        @csrf
        <input type="hidden" class="form-control" name="id"value="{{ $activity->id }}"/>
        <label class="fw-bold"> Activity Name</label>
        <input type="text" class="form-control" name="activity_name"value="{{ $activity->activity_name }}"/>
        <br>
		<label class="fw-bold"> Description</label>
        <input type="text" class="form-control" name="description"value=" {{ $activity->description }}"/>
        <br>
        <input type="submit" class="btn btn-success" value="submit" />
    </form>
</div>
@endsection
