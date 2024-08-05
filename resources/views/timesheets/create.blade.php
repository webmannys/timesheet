@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Add Timesheet</h1>
    <form action="{{ route('timesheets.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="employee">Employee</label>
            <input type="string" name="employee" id="employee" class="form-control">
        </div>
        <div class="form-group">
            <label for="labor_code">Labor Code</label>
            <input type="number" name="labor_code" id="labor_code" class="form-control">
        </div>
        <div class="form-group">
            <label for="work_week">Work Week</label>
            <input type="string" name="work_week" id="work_week" class="form-control">
        </div>
        <div class="form-group">
            <label for="year">Year</label>
            <input type="number" name="year" id="year" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
</div>
@endsection
