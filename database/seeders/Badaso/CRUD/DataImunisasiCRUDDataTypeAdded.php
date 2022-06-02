<?php

namespace Database\Seeders\Badaso\CRUD;

use Illuminate\Database\Seeder;
use Uasoft\Badaso\Facades\Badaso;
use Uasoft\Badaso\Models\MenuItem;

class DataImunisasiCRUDDataTypeAdded extends Seeder
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

            \DB::table('badaso_data_types')->insert(array (
                'id' => 4,
                'name' => 'data_imunisasi',
                'slug' => 'data-imunisasi',
                'display_name_singular' => 'Data Imunisasi',
                'display_name_plural' => 'Data Imunisasi',
                'icon' => 'folder',
                'model_name' => NULL,
                'policy_name' => NULL,
                'controller' => NULL,
                'order_column' => NULL,
                'order_display_column' => NULL,
                'order_direction' => NULL,
                'generate_permissions' => true,
                'server_side' => false,
                'is_maintenance' => 0,
                'description' => NULL,
                'details' => NULL,
                'notification' => '[]',
                'is_soft_delete' => false,
                'created_at' => '2022-06-02T05:56:24.000000Z',
                'updated_at' => '2022-06-02T06:00:38.000000Z',
            ));

            Badaso::model('Permission')->generateFor('data_imunisasi');

            $menu = Badaso::model('Menu')->where('key', config('badaso.default_menu'))->firstOrFail();

            $menu_item = Badaso::model('MenuItem')
                ->where('menu_id', $menu->id)
                ->where('url', '/general/data-imunisasi')
                ->first();

            $order = Badaso::model('MenuItem')->highestOrderMenuItem($menu->id);

            if (!is_null($menu_item)) {
                $menu_item->fill([
                    'title' => 'Data Imunisasi',
                    'target' => '_self',
                    'icon_class' => 'folder',
                    'color' => null,
                    'parent_id' => null,
                    'permissions' => 'browse_data_imunisasi',
                    'order' => $order,
                ])->save();
            } else {
                $menu_item = new MenuItem();
                $menu_item->menu_id = $menu->id;
                $menu_item->url = '/general/data-imunisasi';
                $menu_item->title = 'Data Imunisasi';
                $menu_item->target = '_self';
                $menu_item->icon_class = 'folder';
                $menu_item->color = null;
                $menu_item->parent_id = null;
                $menu_item->permissions = 'browse_data_imunisasi';
                $menu_item->order = $order;
                $menu_item->save();
            }

            \DB::commit();
        } catch(Exception $e) {
            \DB::rollBack();

           throw new Exception('Exception occur ' . $e);
        }
    }
}
