@extends('layouts.app')

@section('content')
<div class="container">
    
    <h1 class="text-center">Add </h1>
    <form action="{{ route('store') }}" method="POST">
        @csrf
        <label class="fw-bold"> Activity Name</label>
        <input type="text" class="form-control" name="activity_name"/>
        <br>
        <label class="fw-bold"> Description</label>
        <input type="text" class="form-control" name="description"/>
        <br>
        <input type="submit" class="btn btn-success" value="submit" />
    </form>
</div>
@endsection
