<?php
    /*
    | Author : Ata amini
    | Email  : ata.aminie@gmail.com
    | Date   : 2018-02-22
    | TIME   : 12:12 AM
    */

    namespace Modules\ModulesManager\Http\Controllers\Backend;

    use Ebooking\Web\Controllers\BackendController;

    class ManagerController extends BackendController
    {
        public function actionIndex()
        {
            return $this->render('/Modules-manager/Backend/Manager/ModulesList');
        }
    }