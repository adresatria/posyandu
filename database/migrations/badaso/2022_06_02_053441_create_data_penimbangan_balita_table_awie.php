<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDatapenimbanganbalitaTableAwie extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        try {

                    Schema::create('data_penimbangan_balita', function (Blueprint $table) {
            $table->bigInteger('id')->unsigned()->autoIncrement();
			$table->string('nama', 70);
			$table->string('nama_ibu', 70);
			$table->string('alamat', 120);
			$table->string('jenis_kelamin', 20);
			$table->date('tgl_lahir');
			$table->string('tempat_lahir', 50);
			$table->string('berat_badan', 10);
			$table->string('tinggi_badan', 10);
			$table->date('tgl_penimbangan');
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
        Schema::dropIfExists('data_penimbangan_balita');
    }
}
