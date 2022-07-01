<?php

namespace Database\Seeders\Badaso\CRUD;

use Illuminate\Database\Seeder;
use Uasoft\Badaso\Traits\Seedable;

class BadasoDeploymentOrchestratorSeeder extends Seeder
{
    use Seedable;

    protected $seedersPath = 'database/seeders/Badaso/CRUD/';

    /**
     * Run the database seeders.
     *
     * @return void
     */
    public function run()
    {
        
        
        $this->seed(DataBalitaCRUDDataDeleted::class);
        $this->seed(DataIbuHamilCRUDDataTypeAdded::class);
        $this->seed(DataIbuHamilCRUDDataRowAdded::class);
        $this->seed(DataBalitaCRUDDataTypeAdded::class);
        $this->seed(DataBalitaCRUDDataRowAdded::class);
        
        
        $this->seed(DataKaderCRUDDataTypeAdded::class);
        $this->seed(DataKaderCRUDDataRowAdded::class);
        $this->seed(DataPelayananIbuhamCRUDDataTypeAdded::class);
        $this->seed(DataPelayananIbuhamCRUDDataRowAdded::class);
        $this->seed(DataPenimbanganBalitaCRUDDataTypeAdded::class);
        $this->seed(DataPenimbanganBalitaCRUDDataRowAdded::class);
        $this->seed(LaporanKegPosyanduCRUDDataTypeAdded::class);
        $this->seed(LaporanKegPosyanduCRUDDataRowAdded::class);
        $this->seed(DataImunisasiCRUDDataDeleted::class);
        $this->seed(DataImunisasiCRUDDataTypeAdded::class);
        $this->seed(DataImunisasiCRUDDataRowAdded::class);
    }
}
