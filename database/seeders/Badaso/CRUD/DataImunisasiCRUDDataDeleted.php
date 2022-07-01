<?php

namespace Database\Seeders\Badaso\CRUD;

use Illuminate\Database\Seeder;
use Uasoft\Badaso\Facades\Badaso;

class DataImunisasiCRUDDataDeleted extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     *
     * @throws Exception
     */
    public function run()
    {
      	\DB::beginTransaction();
       	try {
			$data_type = Badaso::model('DataType')->where('name', 'data_imunisasi')->first();

            if ($data_type) {
                Badaso::model('DataType')->where('name', 'data_imunisasi')->delete();
            }

			Badaso::model('Permission')->removeFrom('data_imunisasi');

			$menuItem = Badaso::model('MenuItem')::where('url', '/general/data-imunisasi');

            if ($menuItem->exists()) {
                $menuItem->delete();
            }

			\DB::commit();
       	} catch(Exception $e) {
        	\DB::rollBack();

        	throw new Exception('Exception occur ' . $e);
       	}
    }
}
