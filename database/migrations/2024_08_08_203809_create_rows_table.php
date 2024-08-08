<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('rows', function (Blueprint $table) {
            $table->id();
						$table->integer('timesheet_id');
						$table->string('job');
						$table->string('cn_swo');
						$table->string('description');
						$table->string('lc');
						$table->string('task');
						$table->string('st');
						$table->text('comment')->nullable();
						$table->decimal('monday', total: 2, places: 1)->nullable();
						$table->decimal('tuesday', total: 2, places: 1)->nullable();
						$table->decimal('wednesday', total: 2, places: 1)->nullable();
						$table->decimal('thursday', total: 2, places: 1)->nullable();
						$table->decimal('friday', total: 2, places: 1)->nullable();
						$table->decimal('saturday', total: 2, places: 1)->nullable();
						$table->decimal('sunday', total: 2, places: 1)->nullable();
						$table->text('status_monday')->nullable();
						$table->text('status_tuesday')->nullable();
						$table->text('status_wednesday')->nullable();
						$table->text('status_thursday')->nullable();
						$table->text('status_friday')->nullable();
						$table->text('status_saturday')->nullable();
						$table->text('status_sunday')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rows');
    }
};
