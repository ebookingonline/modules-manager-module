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
         *
         * @return mixed
         */
        public function extend(Menu $menu)
        {
            $menu->group('modules', null, $this->trans('Modules'), 'icon-power-cord', function (Menu $utilities) {
                $utilities->link(['/modules-manager/manager/index'], $this->trans('Modules list'), 'icon-make-group');
            });
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