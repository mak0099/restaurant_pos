<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('company_name');
            $table->string('company_address')->nullable();
            $table->string('company_email')->nullable();
            $table->string('company_phone')->nullable();
            $table->string('company_vat_reg_no')->nullable();
            $table->string('user_id');
            $table->integer('version_number')->default(0);
            $table->timestamps();
        });
        $company_profile = new App\Company([
            'company_name' => 'Shadowhite Animators Ltd.',
            'company_address' => '2B/8, Pallabi, Mirpur, Dhaka-1216',
            'company_email' => "faisaldiu@yahoo.com",
            'company_phone' => '01719482846',
            'company_vat_reg_no' => '',
            'user_id' => 0
        ]); 
        $company_profile->save();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('companies');
    }
}
