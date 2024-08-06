@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Timesheets</h1>
    <a href="{{ route('timesheets.create') }}" class="btn btn-primary">Add Timesheet</a>
    <table class="table">
        <thead>
            <tr>
                <th>Employee</th>
                <th>Labor Code</th>
                <th>Work Week</th>
                <th>Year</th>
                <th>View</th>
            </tr>
        </thead>
        <tbody>
            @foreach($timesheets as $timesheet)
            <tr>
                <td>{{ $timesheet->employee }}</td>
                <td>{{ $timesheet->labor_code }}</td>
                <td>{{ $timesheet->work_week }}</td>
                <td>{{ $timesheet->year }}</td>
                <td><a href="{{ route('timesheets.show', $timesheet->id) }}" class="btn btn-info">View</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
