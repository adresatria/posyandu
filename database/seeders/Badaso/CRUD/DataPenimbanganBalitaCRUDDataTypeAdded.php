<?php

namespace Database\Seeders\Badaso\CRUD;

use Illuminate\Database\Seeder;
use Uasoft\Badaso\Facades\Badaso;
use Uasoft\Badaso\Models\MenuItem;

class DataPenimbanganBalitaCRUDDataTypeAdded extends Seeder
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

            $data_type = Badaso::model('DataType')->where('name', 'data_penimbangan_balita')->first();

            if ($data_type) {
                Badaso::model('DataType')->where('name', 'data_penimbangan_balita')->delete();
            }

            \DB::table('badaso_data_types')->insert(array (
                'id' => 7,
                'name' => 'data_penimbangan_balita',
                'slug' => 'data-penimbangan-balita',
                'display_name_singular' => 'Data Penimbangan Balita',
                'display_name_plural' => 'Data Penimbangan Balita',
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
                'created_at' => '2022-06-02T06:03:06.000000Z',
                'updated_at' => '2022-06-02T06:03:57.000000Z',
            ));

            Badaso::model('Permission')->generateFor('data_penimbangan_balita');

            $menu = Badaso::model('Menu')->where('key', config('badaso.default_menu'))->firstOrFail();

            $menu_item = Badaso::model('MenuItem')
                ->where('menu_id', $menu->id)
                ->where('url', '/general/data-penimbangan-balita')
                ->first();

            $order = Badaso::model('MenuItem')->highestOrderMenuItem($menu->id);

            if (!is_null($menu_item)) {
                $menu_item->fill([
                    'title' => 'Data Penimbangan Balita',
                    'target' => '_self',
                    'icon_class' => 'folder',
                    'color' => null,
                    'parent_id' => null,
                    'permissions' => 'browse_data_penimbangan_balita',
                    'order' => $order,
                ])->save();
            } else {
                $menu_item = new MenuItem();
                $menu_item->menu_id = $menu->id;
                $menu_item->url = '/general/data-penimbangan-balita';
                $menu_item->title = 'Data Penimbangan Balita';
                $menu_item->target = '_self';
                $menu_item->icon_class = 'folder';
                $menu_item->color = null;
                $menu_item->parent_id = null;
                $menu_item->permissions = 'browse_data_penimbangan_balita';
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
