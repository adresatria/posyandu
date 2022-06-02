<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterDatabalitaTableBzcn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        try {

                    Schema::table('data_balita', function (Blueprint $table) {
            $table->string('nik', 50)->charset('')->collation('')->change();
			$table->string('usia', 50)->charset('')->collation('')->change();
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
        Schema::table('data_balita', function (Blueprint $table) {
            $table->integer('nik')->charset('')->collation('')->change();
			$table->integer('usia')->charset('')->collation('')->change();
        });
    }
}
