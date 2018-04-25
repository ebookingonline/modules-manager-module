<?php
    /*
    | Author : Ata amini
    | Email  : ata.aminie@gmail.com
    | Date   : 2018-01-26
    | TIME   : 7:24 PM
    */

    namespace Modules\ModulesManager\Menu\Backend;


    use Smart\Menu\Extender;
    use Smart\Menu\Menu;

    class SidebarMenuExtender extends Extender
    {

        /**
         * extend menu
         *
         * @param Menu $menu
         *
         * @return mixed
         */
        public function extend(Menu $menu)
        {
        }

        /**
         * translation module message
         *
         * @param $message
         *
         * @return string
         * @internal
         */
        private function trans($message)
        {
            return \Yii::t('module.modules-manager.default', $message);
        }
    }