<?php
    /*
    | Author : Ata amini
    | Email  : ata.aminie@gmail.com
    | Date   : 2018-02-22
    | TIME   : 1:11 AM
    */

    /** @var \Ebooking\Base\View $this */

    $this->title = Yii::t('module.modules-manager.default', 'Modules');

    ?>
<ul class="list-group box">
    <li class="list-group-item">
        <a href="#" class="float-left w-40">
            <img alt="." src="../assets/images/a1.jpg" class="w-100 circle">
        </a>
        <div class="clear px-3">
            <a href="#" class="_500 d-block">Jonathan Doe</a>
            <span class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit</span>
        </div>
    </li>
    <li class="list-group-item">
        <a href="#" class="float-left w-40">
            <img alt="." src="../assets/images/a2.jpg" class="w-100 circle">
        </a>
        <div class="clear px-3">
            <a href="#" class="_500 d-block">Jack Michale</a>
            <span class="text-muted">Sectetur adipiscing elit</span>
        </div>
    </li>
    <li class="list-group-item">
        <a href="#" class="float-left w-40">
            <img alt="." src="../assets/images/a3.jpg" class="w-100 circle">
        </a>
        <div class="clear px-3">
            <a href="#" class="_500 d-block">Jessi</a>
            <span class="text-muted">Sectetur adipiscing elit</span>
        </div>
    </li>
    <li class="list-group-item">
        <a href="#" class="float-left w-40">
            <img alt="." src="../assets/images/a4.jpg" class="w-100 circle">
        </a>
        <div class="clear px-3">
            <a href="#" class="_500 d-block">Sodake</a>
            <span class="text-muted">Vestibulum ullamcorper sodales nisi nec condimentum</span>
        </div>
    </li>
</ul>

<section class="panel"> <header class="panel-heading"> <ul class="nav nav-tabs pull-right"> <li class=""><a href="#messages-1" data-toggle="tab"><i class="fa fa-comments fa-lg text-default"></i></a></li> <li class=""><a href="#profile-1" data-toggle="tab"><i class="fa fa-user fa-lg text-default"></i> Profile</a></li> <li class="active"><a href="#settings-1" data-toggle="tab"><i class="fa fa-cog fa-lg text-default"></i> Settings</a></li> </ul> <span class="hidden-sm">Right tab</span> </header> <div class="panel-body"> <div class="tab-content"> <div class="tab-pane" id="messages-1">message</div> <div class="tab-pane" id="profile-1">profile</div> <div class="tab-pane active" id="settings-1">settings</div> </div> </div> </section>