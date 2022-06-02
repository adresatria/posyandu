<?php

namespace Database\Seeders\Badaso\CRUD;

use Illuminate\Database\Seeder;
use Uasoft\Badaso\Facades\Badaso;
use Uasoft\Badaso\Models\MenuItem;

class DataIbuHamilCRUDDataTypeAdded extends Seeder
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

            $data_type = Badaso::model('DataType')->where('name', 'data_ibu_hamil')->first();

            if ($data_type) {
                Badaso::model('DataType')->where('name', 'data_ibu_hamil')->delete();
            }

            \DB::table('badaso_data_types')->insert(array (
                'id' => 2,
                'name' => 'data_ibu_hamil',
                'slug' => 'data-ibu-hamil',
                'display_name_singular' => 'Data Ibu Hamil',
                'display_name_plural' => 'Data Ibu Hamil',
                'icon' => 'pregnant_woman',
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
                'created_at' => '2022-06-02T05:19:26.000000Z',
                'updated_at' => '2022-06-02T05:54:16.000000Z',
            ));

            Badaso::model('Permission')->generateFor('data_ibu_hamil');

            $menu = Badaso::model('Menu')->where('key', config('badaso.default_menu'))->firstOrFail();

            $menu_item = Badaso::model('MenuItem')
                ->where('menu_id', $menu->id)
                ->where('url', '/general/data-ibu-hamil')
                ->first();

            $order = Badaso::model('MenuItem')->highestOrderMenuItem($menu->id);

            if (!is_null($menu_item)) {
                $menu_item->fill([
                    'title' => 'Data Ibu Hamil',
                    'target' => '_self',
                    'icon_class' => 'pregnant_woman',
                    'color' => null,
                    'parent_id' => null,
                    'permissions' => 'browse_data_ibu_hamil',
                    'order' => $order,
                ])->save();
            } else {
                $menu_item = new MenuItem();
                $menu_item->menu_id = $menu->id;
                $menu_item->url = '/general/data-ibu-hamil';
                $menu_item->title = 'Data Ibu Hamil';
                $menu_item->target = '_self';
                $menu_item->icon_class = 'pregnant_woman';
                $menu_item->color = null;
                $menu_item->parent_id = null;
                $menu_item->permissions = 'browse_data_ibu_hamil';
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
