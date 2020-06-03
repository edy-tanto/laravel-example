<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('customer_id')->unsigned();
            $table->bigInteger('work_type_id')->unsigned();
            $table->string('name');
            $table->date('deadline')->nullable();
            $table->decimal('value', 20, 2)->unsigned();
            $table->timestamps();

            $table->foreign('customer_id')
                ->references('id')
                ->on('customer');
            $table->foreign('work_type_id')
                ->references('id')
                ->on('work_type');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('project');
    }
}
