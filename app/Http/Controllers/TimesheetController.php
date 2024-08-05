<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TimesheetController extends Controller
{
	public function index()
	{
			$timesheets = Timesheet::with(['user'])->get();
			return view('timesheets.index', compact('timesheets'));
	}

	public function create()
	{
			return view('timesheets.create');
	}

	public function store(Request $request)
	{
			$request->validate([
					'employee' => 'required|string',
					'labor_code' => 'required|integer',
					'work_week' => 'required|string',
					'year' => 'required|integer',
			]);

			Timesheet::create([
					'user_id' => auth()->id(),
					'employee' => $request->employee,
					'labor_code' => $request->labor_code,
					'work_week' => $request->work_week,
					'year' => $request->year,
			]);

			return redirect()->route('timesheets.index');
	}
}
