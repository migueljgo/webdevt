@extends('layouts.app')

@section('content')
<div class="container">
    <a class="btn btn-primary float-end" href="{{ route('add') }}">Add</a>
    <br> <br>
    <table class="table" id="myTable">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Activity Name</th>
                <th scope="col">Description</th>
                <th scope="col">Created At</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($activities as $activity)
            <tr>
                <td>{{ $activity->id }}</td>
                <td>{{ $activity->activity_name }}</td>
                <td>{{ $activity->description }}</td>
                <td>{{ $activity->created_at }}</td>
                <td>
                    <a href="{{ route('show', $activity->id) }}" class="btn btn-secondary"> Edit </a>
                    <form action="{{ route('destroy') }}" method="post">
                        @csrf
                        <input type="hidden" value="{{ $activity->id }}" name="id"/>
                        <button class="btn btn-danger" > Delete </button>
                    </form> 
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

 
</div>
@endsection
