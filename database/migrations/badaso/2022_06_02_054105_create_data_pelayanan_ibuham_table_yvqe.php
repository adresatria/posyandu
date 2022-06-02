<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDatapelayananibuhamTableYvqe extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        try {

                    Schema::create('data_pelayanan_ibuham', function (Blueprint $table) {
            $table->bigInteger('id')->unsigned()->autoIncrement();
			$table->string('nama', 200);
			$table->string('alamat', 100);
			$table->string('tempat_lahir', 100);
			$table->date('tgl_lahir');
			$table->string('usia', 10);
			$table->string('berat_badan', 10);
			$table->string('tensi', 20);
			$table->string('lingkar_lengan', 10);
			$table->timestamps();
        });

        } catch (PDOException $ex) {
            $this->down();
            throw $ex;
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data_pelayanan_ibuham');
    }
}
