@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Add Timesheet</h1>
    <form action="{{ route('timesheets.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="employee">Employee</label>
            <input type="text" name="employee" id="employee" class="form-control" value="{{ $user->first_name." ".$user->last_name }}" readonly>
        </div>
        <div class="form-group">
            <label for="labor_code">Labor Code</label>
            <input type="number" name="labor_code" id="labor_code" class="form-control" value="{{ $user->labor_code }}" readonly>
        </div>
        <div class="form-group">
            <label for="work_week">Work Week</label>
						<select name="work_week" id="work_week" class="form-control">
							<option value="1-Jan to 7-Jan">1-Jan to 7-Jan</option>
							<option value="8-Jan to 14-Jan">8-Jan to 14-Jan</option>
							<option value="15-Jan to 21-Jan">15-Jan to 21-Jan</option>
							<option value="22-Jan to 28-Jan">22-Jan to 28-Jan</option>
							<option value="29-Jan to 4-Feb">29-Jan to 4-Feb</option>
							<option value="5-Feb to 11-Feb">5-Feb to 11-Feb</option>
							<option value="12-Feb to 18-Feb">12-Feb to 18-Feb</option>
							<option value="19-Feb to 25-Feb">19-Feb to 25-Feb</option>
							<option value="26-Feb to 3-Mar">26-Feb to 3-Mar</option>
							<option value="4-Mar to 10-Mar">4-Mar to 10-Mar</option>
							<option value="11-Mar to 17-Mar">11-Mar to 17-Mar</option>
							<option value="18-Mar to 24-Mar">18-Mar to 24-Mar</option>
							<option value="25-Mar to 31-Mar">25-Mar to 31-Mar</option>
							<option value="1-Apr to 7-Apr">1-Apr to 7-Apr</option>
							<option value="8-Apr to 14-Apr">8-Apr to 14-Apr</option>
							<option value="15-Apr to 21-Apr">15-Apr to 21-Apr</option>
							<option value="22-Apr to 28-Apr">22-Apr to 28-Apr</option>
							<option value="29-Apr to 5-May">29-Apr to 5-May</option>
							<option value="6-May to 12-May">6-May to 12-May</option>
							<option value="13-May to 19-May">13-May to 19-May</option>
							<option value="20-May to 26-May">20-May to 26-May</option>
							<option value="27-May to 2-Jun">27-May to 2-Jun</option>
							<option value="3-Jun to 9-Jun">3-Jun to 9-Jun</option>
							<option value="10-Jun to 16-Jun">10-Jun to 16-Jun</option>
							<option value="17-Jun to 23-Jun">17-Jun to 23-Jun</option>
							<option value="24-Jun to 30-Jun">24-Jun to 30-Jun</option>
							<option value="1-Jul to 7-Jul">1-Jul to 7-Jul</option>
							<option value="8-Jul to 14-Jul">8-Jul to 14-Jul</option>
							<option value="15-Jul to 21-Jul">15-Jul to 21-Jul</option>
							<option value="22-Jul to 28-Jul">22-Jul to 28-Jul</option>
							<option value="29-Jul to 4-Aug">29-Jul to 4-Aug</option>
							<option value="5-Aug to 11-Aug">5-Aug to 11-Aug</option>
							<option value="12-Aug to 18-Aug">12-Aug to 18-Aug</option>
							<option value="19-Aug to 25-Aug">19-Aug to 25-Aug</option>
							<option value="26-Aug to 1-Sep">26-Aug to 1-Sep</option>
							<option value="2-Sep to 8-Sep">2-Sep to 8-Sep</option>
							<option value="9-Sep to 15-Sep">9-Sep to 15-Sep</option>
							<option value="16-Sep to 22-Sep">16-Sep to 22-Sep</option>
							<option value="23-Sep to 29-Sep">23-Sep to 29-Sep</option>
							<option value="30-Sep to 6-Oct">30-Sep to 6-Oct</option>
							<option value="7-Oct to 13-Oct">7-Oct to 13-Oct</option>
							<option value="14-Oct to 20-Oct">14-Oct to 20-Oct</option>
							<option value="21-Oct to 27-Oct">21-Oct to 27-Oct</option>
							<option value="28-Oct to 3-Nov">28-Oct to 3-Nov</option>
							<option value="4-Nov to 10-Nov">4-Nov to 10-Nov</option>
							<option value="11-Nov to 17-Nov">11-Nov to 17-Nov</option>
							<option value="18-Nov to 24-Nov">18-Nov to 24-Nov</option>
							<option value="25-Nov to 1-Dec">25-Nov to 1-Dec</option>
							<option value="2-Dec to 8-Dec">2-Dec to 8-Dec</option>
							<option value="9-Dec to 15-Dec">9-Dec to 15-Dec</option>
							<option value="16-Dec to 22-Dec">16-Dec to 22-Dec</option>
							<option value="23-Dec to 29-Dec">23-Dec to 29-Dec</option>
						</select>
        </div>
        <div class="form-group">
            <label for="year">Year</label>
						<select name="year" id="year" class="form-control">
							<option value="2024">2024</option>
						</select>
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
</div>
@endsection
