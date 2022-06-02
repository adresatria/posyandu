<?php

namespace Database\Seeders\Badaso\CRUD;

use Illuminate\Database\Seeder;
use Uasoft\Badaso\Facades\Badaso;
use Uasoft\Badaso\Models\MenuItem;

class DataKaderCRUDDataTypeAdded extends Seeder
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

            $data_type = Badaso::model('DataType')->where('name', 'data_kader')->first();

            if ($data_type) {
                Badaso::model('DataType')->where('name', 'data_kader')->delete();
            }

            \DB::table('badaso_data_types')->insert(array (
                'name' => 'data_kader',
                'slug' => 'data-kader',
                'display_name_singular' => 'Data Kader',
                'display_name_plural' => 'Data Kader',
                'icon' => 'person',
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
                'updated_at' => '2022-06-02T06:01:29.000000Z',
                'created_at' => '2022-06-02T06:01:29.000000Z',
                'id' => 5,
            ));

            Badaso::model('Permission')->generateFor('data_kader');

            $menu = Badaso::model('Menu')->where('key', config('badaso.default_menu'))->firstOrFail();

            $menu_item = Badaso::model('MenuItem')
                ->where('menu_id', $menu->id)
                ->where('url', '/general/data-kader')
                ->first();

            $order = Badaso::model('MenuItem')->highestOrderMenuItem($menu->id);

            if (!is_null($menu_item)) {
                $menu_item->fill([
                    'title' => 'Data Kader',
                    'target' => '_self',
                    'icon_class' => 'person',
                    'color' => null,
                    'parent_id' => null,
                    'permissions' => 'browse_data_kader',
                    'order' => $order,
                ])->save();
            } else {
                $menu_item = new MenuItem();
                $menu_item->menu_id = $menu->id;
                $menu_item->url = '/general/data-kader';
                $menu_item->title = 'Data Kader';
                $menu_item->target = '_self';
                $menu_item->icon_class = 'person';
                $menu_item->color = null;
                $menu_item->parent_id = null;
                $menu_item->permissions = 'browse_data_kader';
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
