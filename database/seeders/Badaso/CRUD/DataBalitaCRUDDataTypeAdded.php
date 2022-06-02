<?php

namespace Database\Seeders\Badaso\CRUD;

use Illuminate\Database\Seeder;
use Uasoft\Badaso\Facades\Badaso;
use Uasoft\Badaso\Models\MenuItem;

class DataBalitaCRUDDataTypeAdded extends Seeder
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

            $data_type = Badaso::model('DataType')->where('name', 'data_balita')->first();

            if ($data_type) {
                Badaso::model('DataType')->where('name', 'data_balita')->delete();
            }

            \DB::table('badaso_data_types')->insert(array (
                'name' => 'data_balita',
                'slug' => 'data-balita',
                'display_name_singular' => 'Data Balita',
                'display_name_plural' => 'Data Balita',
                'icon' => 'child_care',
                'model_name' => NULL,
                'policy_name' => NULL,
                'controller' => NULL,
                'order_column' => NULL,
                'order_display_column' => NULL,
                'order_direction' => NULL,
                'generate_permissions' => true,
                'server_side' => false,
                'description' => NULL,
                'details' => NULL,
                'notification' => '[]',
                'is_soft_delete' => false,
                'updated_at' => '2022-06-02T05:55:28.000000Z',
                'created_at' => '2022-06-02T05:55:28.000000Z',
                'id' => 3,
            ));

            Badaso::model('Permission')->generateFor('data_balita');

            $menu = Badaso::model('Menu')->where('key', config('badaso.default_menu'))->firstOrFail();

            $menu_item = Badaso::model('MenuItem')
                ->where('menu_id', $menu->id)
                ->where('url', '/general/data-balita')
                ->first();

            $order = Badaso::model('MenuItem')->highestOrderMenuItem($menu->id);

            if (!is_null($menu_item)) {
                $menu_item->fill([
                    'title' => 'Data Balita',
                    'target' => '_self',
                    'icon_class' => 'child_care',
                    'color' => null,
                    'parent_id' => null,
                    'permissions' => 'browse_data_balita',
                    'order' => $order,
                ])->save();
            } else {
                $menu_item = new MenuItem();
                $menu_item->menu_id = $menu->id;
                $menu_item->url = '/general/data-balita';
                $menu_item->title = 'Data Balita';
                $menu_item->target = '_self';
                $menu_item->icon_class = 'child_care';
                $menu_item->color = null;
                $menu_item->parent_id = null;
                $menu_item->permissions = 'browse_data_balita';
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
