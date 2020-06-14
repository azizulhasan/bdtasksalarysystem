<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBDTaskSalariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('b_d_task_salaries', function (Blueprint $table) {
            $table->id();
            $table->float('monthly_salary');
            $table->float('provident_fund');
            $table->float('insurance');
            $table->float('profit_amount');
            $table->float('work_days');
            $table->float('per_day_hour');
            $table->float('per_hour_rate');
            $table->float('total_amount_monthly');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('b_d_task_salaries');
    }
}
