<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Timesheet extends Model
{
    use HasFactory;
		
		
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', // Add this line
        'employee',
        'labor_code',
        'work_week',
        'year',
    ];

    /**
     * Get the user that owns the timesheet.
     */
		public function user()
		{
				return $this->belongsTo(User::class);
		}
		
		public function row()
		{
				return $this->belongsTo(Row::class);
		}
}
