<?php
$controller = Yii::$app->controller->id;
$action = Yii::$app->controller->action->id;
$m_o = "menu-open";
$ac = "active";
?>

<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

<? $user = \common\models\User::find()
            ->where(['=', 'user.id', Yii::$app->user->id])
            ->one(); ?>
        <li class="nav-item has-treeview
        <?php if (($controller == "faculty" || $controller == "direction" || $controller == "group" || $controller == "kafedra")) { echo $m_o; }?>">
            <a href="#" class="nav-link
            <?php if (($controller == "faculty" || $controller == "direction" || $controller == "group" || $controller == "kafedra")) { echo $ac; }?>">
                <i class="nav-icon fas fa-university"></i>
                <p>
                	<? if ($user->uni_id == 4){?>
                		Markaz
                	<? } else {?>
                        Universitet
                        <?}?>
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview ml-3" style="display: <?php if (($controller == "faculty" || $controller == "direction" || $controller == "group" || $controller == "kafedra")) { echo 'block'; } else { echo 'none';}?> ;">
            	<? if ($user->uni_id == 4){} else {?>
                <li class="nav-item">
                    <a href="<?= \Yii\helpers\Url::to(["/faculty/index"], true) ?>" class="nav-link
                        <?php if (($controller == "faculty")) { echo $ac; }?>">
                        <i class="fab fa-atlassian nav-icon"></i>
                        <p>Fakultetlar</p>
                    </a>
                </li>
            	<? }?>
                <li class="nav-item">
                    <a href="<?= \Yii\helpers\Url::to(["/kafedra/index"], true) ?>" class="nav-link
                        <?php if (($controller == "kafedra")) { echo $ac; }?>">
                        <i class="nav-icon fab glyphicon glyphicon-adjust"></i>
                        <p>Kafedra</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= \Yii\helpers\Url::to(["/direction/index"], true) ?>" class="nav-link
                        <?php if (($controller == "direction")) { echo $ac; }?>">
                        <i class="fab fa-asymmetrik nav-icon"></i>
                        <p>Mutaxasisliklar</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= \Yii\helpers\Url::to(["/group/edu-type"], true) ?>" class="nav-link
                        <?php if (($controller == "group")) { echo $ac; }?>">
                        <i class="fas fa-atom nav-icon"></i>
                        <p>Guruhlar</p>
                    </a>
                </li>
            </ul>
        </li>


        <li class="nav-item has-treeview
        <?php if (($controller == "user") || ($controller == "student") || ($controller == "teacher")  ) { echo $m_o; }?>">
            <a href="#" class="nav-link
            <?php if (($controller == "user" || $controller == "studentprofile" || $controller == "teacher" || $controller == "student")) { echo $ac; }?>">
                <i class="nav-icon fa fa-users"></i>
                <p>
                    Foydalanuvchilar
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview ml-3" style="display: <?php if (($controller == "user" || $controller == "teacher" || $controller == "student" || $controller == "studentprofile")) { echo 'block'; } else { echo 'none';}?> ;">
                <li class="nav-item">
                    <a href="<?= \Yii\helpers\Url::to(["/user/index"], true) ?>" class="nav-link <?php if (($controller == "user")) { echo $ac; }?>">
                        <i class="fas fa-users-cog nav-icon"></i>
                        <p>Admin</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= \Yii\helpers\Url::to(["/teacher/index"], true) ?>" class="nav-link
                        <?php if (($controller == "teacher")) { echo $ac; }?>">
                        <i class="fas fa-chalkboard-teacher nav-icon"></i>
                        <p>O`qituvchilar</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= \Yii\helpers\Url::to(["/student/index"], true) ?>" class="nav-link <?php if (($controller == "student" || $controller == "studentprofile")) { echo $ac; }?>">
                        <i class="fas fa-user-graduate nav-icon"></i>
                        <p>Tinglovchilar</p>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item has-treeview
        <?php if (($controller == "exam" || $controller == "permission")) { echo $m_o; }?>">
            <a href="#" class="nav-link
            <?php if (($controller == "exam" || $controller == "permission")) { echo $ac; }?>
            ">
                <i class="fas fa-money-check nav-icon"></i>
                <p>Nazoratlar<i class="right fas fa-angle-left"></i></p>
            </a>
            <ul class="nav nav-treeview ml-3" style="display: <?php if (($controller == "exam" || $controller == "permission" )) { echo 'block'; } else { echo 'none';}?>;">
                <li class="nav-item">
                    <a href="<?= \Yii\helpers\Url::to(["/exam/index"], true) ?>" class="nav-link <?php if (($controller == "exam") && ($action == "index" || $action == "create" || $action == "update")) { echo $ac; }?>">
                        <i class="fab fa-microsoft nav-icon"></i>
                        <p>Nazoratlar ro`yxati</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= \Yii\helpers\Url::to(["/permission/index"], true) ?>" class="nav-link
                        <?php if (($controller == "permission") && ($action == "index")) { echo $ac; }?>">
                        <i class="fab fa-expeditedssl nav-icon"></i>

                        <p>Fanlarga ruxsat berish</p>
                    </a>
                </li>

            </ul>
        </li>

        <li class="nav-item has-treeview
        <?php if (($controller == 'exam-permission' || $controller == 'final-work') ) { echo $m_o; }?>">
            <a href="#" class="nav-link
            <?php if (($controller == 'exam-permission' || $controller == 'final-work') ) { echo $ac; }?>">
                <i class="nav-icon fa fa-gift"></i>
                <p>Imtihonlar<i class="right fas fa-angle-left"></i></p>
            </a>
            <ul class="nav nav-treeview ml-3" style="display: <?php if (($controller == "exam-permission" || $controller == "final-work" )) { echo 'block'; } else { echo 'none';}?>;">
                <li class="nav-item">
                    <a href="<?= \Yii\helpers\Url::to(["/exam-permission/index"], true) ?>" class="nav-link <?php if (($controller == "exam-permission") && ($action == "index" || $action == "exam-name" || $action == "update" || $action == "answer" || $action == "result" || $action == "teacher")) { echo $ac; }?>">
                        <i class="fas fa-charging-station nav-icon"></i>
                        <p>Imtihonlar</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= \Yii\helpers\Url::to(["/exam-permission/question"], true) ?>" class="nav-link
                        <?php if (($controller == "exam-permission") && ($action == "question" || $action == "questionupdate" )) { echo $ac; }?>">
                        <i class="fab fa-acquisitions-incorporated nav-icon"></i>
                        <p>Savollar</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?=\Yii\helpers\Url::to(["/final-work"], true)?>" class="nav-link
                       <?php if (($controller == "final-work") && ($action == "index" || $action == "create" )) { echo $ac; }?> ">
                    <i class="fab fa-acquisitions-incorporated nav-icon"></i>
                        <p>Yakuniy</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?=\Yii\helpers\Url::to(["/exam-permission/exam"], true)?>" class="nav-link
                        <?php if (($controller == "exam-permission") && ($action == "exam" || $action == "javoblar" || $action == "ansgr" || $action == "ansstd" || $action == "results" )) { echo $ac; }?>">
                    <i class="nav-icon glyphicon glyphicon-tint"></i>
                        <p>Natijalar</p>
                    </a>
                </li>

            </ul>
        </li>

        <li class="nav-item">
            <a href="<?= \Yii\helpers\Url::to(["/time-table/index"], true) ?>" class="nav-link
                <?php if (($controller == "time-table") ) { echo $ac; }?>">
                <i class="fas fa-tv nav-icon"></i>
                <p>Dars jadval</p>
            </a>
        </li>

        <li class="nav-item">
            <a href="<?= \Yii\helpers\Url::to(["/exam-student/groups"], true) ?>" class="nav-link
                <?php if (($controller == "exam-student") ) { echo $ac; }?>">
                <i class="fas fa-marker nav-icon"></i>
                <p>Baholash</p>
            </a>
        </li>

        <li class="nav-item">
            <a href="<?= \Yii\helpers\Url::to(["/monitoring/index"], true) ?>" class="nav-link
                <?php if (($controller == "monitoring") ) { echo $ac; }?>">
                <i class="fas fa-check-double nav-icon "></i>
                <p>Yo`qlama</p>
            </a>
        </li>



        <li class="nav-item has-treeview
        <?php if (($controller == 'para' || $controller == 'room' || $controller == 'degree' || $controller == 'edu-type' || $controller == 'course' || $controller == 'fan') ) { echo $m_o; }?>">
            <a href="#" class="nav-link
            <?php if (($controller == 'para' || $controller == 'room' || $controller == 'degree' || $controller == 'edu-type' || $controller == 'course' || $controller == 'fan') ) { echo $ac; }?>">
                <i class="nav-icon fas fa-cog"></i>
                <p>Sozlamalar<i class="right fas fa-angle-left"></i></p>
            </a>
            <ul class="nav nav-treeview ml-3" style="display: <?php if (($controller == 'para' || $controller == 'room' || $controller == 'degree' || $controller == 'edu-type' || $controller == 'course' || $controller == 'fan')) { echo 'block'; } else { echo 'none';}?>;">

            <li class="nav-item">
                    <a href="<?=\Yii\helpers\Url::to(["/fan/index"], true)?>" class="nav-link
                        <?php if ($controller == 'fan') { echo $ac; }?>">
                        <i class="nav-icon fas fa-atom"></i>
                        <p>Fanlar</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?=\Yii\helpers\Url::to(["/edu-type/index"], true)?>" class="nav-link
                        <?php if ($controller == 'edu-type') { echo $ac; }?>">
                        <i class="nav-icon glyphicon glyphicon-record"></i>
                        <p>Ta`lim turi</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?=\Yii\helpers\Url::to(["/course/index"], true)?>" class="nav-link
                        <?php if ($controller == 'course') { echo $ac; }?>">
                        <i class="nav-icon glyphicon glyphicon-tower"></i>
                        <p>Kurslar</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?=\Yii\helpers\Url::to(["/para/index"], true)?>" class="nav-link
                        <?php if ($controller == 'para') { echo $ac; }?>">
                        <i class="nav-icon glyphicon glyphicon-book"></i>
                        <p>Darslar</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?=\Yii\helpers\Url::to(["/degree/index"], true)?>" class="nav-link
                        <?php if ($controller == 'degree') { echo $ac; }?>">
                        <i class="nav-icon fas fa-atom nav-icon"></i>
                        <p>Ilmiy darajalar</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?=\Yii\helpers\Url::to(["/room/index"], true)?>" class="nav-link
                        <?php if ($controller == 'room') { echo $ac; }?>">
                        <i class="nav-icon glyphicon glyphicon-record"></i>
                        <p>Xonalar</p>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item">
            <a href="<?=\Yii\helpers\Url::to(["/admin/stat"], true)?>" class="nav-link
                <?php if (($controller == 'admin')&& ( $action == 'fan' || $action == 'mark' || $action == 'stat' || $action == 'monitoring') ) { echo $ac; }?>">
                <i class="nav-icon glyphicon glyphicon-stats"></i>
                <p>Tahlillar</p>
            </a>
        </li>

        <li class="nav-item">
            <a href="<?=\Yii\helpers\Url::to(["/library"], true)?>" class="nav-link
                <?php if (($controller == 'library') ) { echo $ac; }?>">
                <i class="nav-icon glyphicon glyphicon-book"></i>
                <p>Kutubxona</p>
            </a>
        </li>
        <!-- /**/ -->

        <li class="nav-item has-treeview
        <?php if (($controller == "document")) { echo $m_o; }?>">
            <a href="#" class="nav-link
            <?php if (($controller == "document")) { echo $ac; }?>
            ">
                <i class="fas fa-file nav-icon"></i>
                <p>Hujjatlar<i class="right fas fa-angle-left"></i></p>
            </a>
            <ul class="nav nav-treeview ml-3" style="display: <?php if (($controller == "document" )) { echo 'block'; } else { echo 'none';}?>;">
                <li class="nav-item">
                    <a href="<?= \Yii\helpers\Url::to(["/document/index"], true) ?>" class="nav-link <?php if (($action == "index")) { echo $ac; }?>">
                        <i class="fab fa-microsoft nav-icon"></i>
                        <p>Mening hujjatlarim</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= \Yii\helpers\Url::to(["/document/teacher"], true) ?>" class="nav-link
                        <?php if (($controller == "document") && ($action == "teacher")) { echo $ac; }?>">
                        <i class="fas fa-file nav-icon"></i>

                        <p>O`qituvchilar</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= \Yii\helpers\Url::to(["/document/student"], true) ?>" class="nav-link
                        <?php if (($controller == "document") && ($action == "student")) { echo $ac; }?>">
                        <i class="fas fa-file nav-icon"></i>

                        <p>Tinglovchilar</p>
                    </a>
                </li>

            </ul>
        </li>
        <!-- /**/ -->
        <? if ($user->uni_id == 4){?>
        <li class="nav-item">
            <a href="http://qabul.centertsul.uz/" class="nav-link">
                <i class="nav-icon glyphicon glyphicon-globe"></i>
                <p>Qabul</p>
            </a>
        </li>
    <? } ?>

    </ul>
</nav>