<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stocks', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('item_id');
            $table->string('item_name');
            $table->double('quantity');
            $table->float('total_price');
            $table->string('remark')->nullable();
            $table->date('date');
            $table->integer('created_by');
            $table->integer('updated_by')->nullable();
            $table->boolean('deletation_status')->default(FALSE);
            $table->integer('version_number')->default(0);
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
        Schema::dropIfExists('stocks');
    }
}
