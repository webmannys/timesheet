<?php

namespace App\Http\Controllers;

use App\Models\Timesheet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TimesheetController extends Controller
{
	public function index()
	{
			$timesheets = Timesheet::with(['user'])->get();
			return view('timesheets.index', compact('timesheets'));
	}

	public function create()
	{
			$user = auth()->user();
			return view('timesheets.create', compact('user'));
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
