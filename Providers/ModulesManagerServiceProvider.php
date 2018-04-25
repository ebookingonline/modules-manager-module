<?php
    /*
    | Author : Ata amini
    | Email  : ata.aminie@gmail.com
    | Date   : 2018-02-22
    | TIME   : 1:16 AM
    */

    namespace Modules\ModulesManager\Providers;

    use Smart\Engine\ServiceProvider;

    /**
     * Class ModulesManagerServiceProvider
     *
     * @package Modules\ModulesManager\Providers
     */
    class ModulesManagerServiceProvider extends ServiceProvider
    {
        /**
         * register views
         *
         * @return void
         */
        public function backendRegisterViews()
        {
            $this->registerViews($this->moduleId, $this->modulePath . '/Views');
        }
    }