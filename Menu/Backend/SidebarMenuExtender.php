<?php
    /*
    | Author : Ata amini
    | Email  : ata.aminie@gmail.com
    | Date   : 2018-01-26
    | TIME   : 7:24 PM
    */

    namespace Modules\ModulesManager\Menu\Backend;


    use Ebooking\Menu\Extender;
    use Ebooking\Menu\Menu;
    use yii\helpers\Url;

    class SidebarMenuExtender extends Extender
    {

        /**
         * extend menu
         *
         * @param Menu $menu
         * @return mixed
         */
        public function extend(Menu $menu)
        {
            //dd(\Yii::$aliases, Url::toRoute(['@dash.test']));

            //echo \yii\helpers\Url::toRoute(['@admin.menu.delete', 'id' => 1]);
            //dd(\Yii::$aliases);
        }
    }