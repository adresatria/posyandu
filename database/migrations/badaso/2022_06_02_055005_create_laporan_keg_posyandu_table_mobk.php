<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLaporankegposyanduTableMobk extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        try {

                    Schema::create('laporan_keg_posyandu', function (Blueprint $table) {
            $table->bigInteger('id')->unsigned()->autoIncrement();
			$table->string('bulan', 20);
			$table->string('jml_balita', 100);
			$table->string('jml_balita_yg_ditimbang', 100);
			$table->string('jml_balita_diimunisasi', 100);
			$table->string('jml_balita_dapat_vitamin', 100);
			$table->string('jml_ibu_hamil', 100);
			$table->string('jml_ibu_hamil_umur_kurang_dari_20th_dan_lebih_35th', 100);
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
        Schema::dropIfExists('laporan_keg_posyandu');
    }
}
