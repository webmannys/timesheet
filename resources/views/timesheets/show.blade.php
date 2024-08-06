<!-- resources/views/timesheets/show.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h1>View Timesheet</h1>
    <div class="card">
        <div class="card-header">
            Timesheet Details
        </div>
        <div class="card-body">
            <p><strong>Employee:</strong> {{ $timesheet->employee }}</p>
            <p><strong>Labor Code:</strong> {{ $timesheet->labor_code }}</p>
            <p><strong>Work Week:</strong> {{ $timesheet->work_week }}</p>
            <p><strong>Year:</strong> {{ $timesheet->year }}</p>
            <a href="{{ route('timesheets.index') }}" class="btn btn-primary">Back to Timesheets</a>
        </div>
    </div>
</div>
@endsection
