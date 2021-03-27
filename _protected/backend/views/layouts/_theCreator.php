<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">


        <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-university"></i>
                <p>
                    Universitet
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview" style="display: none;">
                <li class="nav-item">
                    <a href="<?= \Yii\helpers\Url::to(["/university/index"], true) ?>" class="nav-link">
                        <i class="nav-icon fa fa-university" aria-hidden="true"></i>
                        <p>University</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= \Yii\helpers\Url::to(["/faculty/index"], true) ?>" class="nav-link">
                        <i class="fab fa-atlassian nav-icon"></i>
                        <p>Fakultetlar</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= \Yii\helpers\Url::to(["/kafedra/index"], true) ?>" class="nav-link">
                        <i class="nav-icon fab glyphicon glyphicon-adjust"></i>
                        <p>Kafedra</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= \Yii\helpers\Url::to(["/direction/index"], true) ?>" class="nav-link">
                        <i class="fab fa-asymmetrik nav-icon"></i>
                        <p>Mutaxasisliklar</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= \Yii\helpers\Url::to(["/group/index"], true) ?>" class="nav-link">
                        <i class="fas fa-atom nav-icon"></i>
                        <p>Guruhlar</p>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
                <i class="nav-icon fa fa-users"></i>
                <p>
                    Foydalanuvchilar
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview" style="display: none;">
                <li class="nav-item">
                    <a href="<?= \Yii\helpers\Url::to(["/admin/index"], true) ?>" class="nav-link">
                        <i class="fas fa-users-cog nav-icon"></i>
                        <p>Adminlar</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= \Yii\helpers\Url::to(["/user/index"], true) ?>" class="nav-link">
                        <i class="fas fa-users-cog nav-icon"></i>
                        <p>Barcha</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= \Yii\helpers\Url::to(["/teacher/index"], true) ?>" class="nav-link">
                        <i class="fas fa-chalkboard-teacher nav-icon"></i>
                        <p>O`qituvchilar</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= \Yii\helpers\Url::to(["/student/index"], true) ?>" class="nav-link">
                        <i class="fas fa-user-graduate nav-icon"></i>
                        <p>Talabalar</p>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
                <i class="fas fa-money-check nav-icon"></i>
                <p>Nazoratlar<i class="right fas fa-angle-left"></i></p>
            </a>
            <ul class="nav nav-treeview" style="display: none;">
                <li class="nav-item">
                    <a href="<?= \Yii\helpers\Url::to(["/exam/index"], true) ?>" class="nav-link">
                        <i class="fab fa-microsoft nav-icon"></i>
                        <p>Nazoratlar ro`yxati</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= \Yii\helpers\Url::to(["/permission/index"], true) ?>" class="nav-link">
                        <i class="fab fa-expeditedssl nav-icon"></i>

                        <p>Fanlarga Rusat berish</p>
                    </a>
                </li>

            </ul>
        </li>

        <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
                <i class="nav-icon fa fa-gift"></i>
                <p>Imtixonlar<i class="right fas fa-angle-left"></i></p>
            </a>
            <ul class="nav nav-treeview" style="display: none;">
                <li class="nav-item">
                    <a href="<?= \Yii\helpers\Url::to(["/exam-permission/index"], true) ?>" class="nav-link">
                        <i class="fas fa-charging-station nav-icon"></i>
                        <p>Imtixonlar ro`yxati</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= \Yii\helpers\Url::to(["/exam-permission/question"], true) ?>" class="nav-link">
                        <i class="fab fa-acquisitions-incorporated nav-icon"></i>
                        <p>Savollar</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?=\Yii\helpers\Url::to(["/final-work"], true)?>" class="nav-link">
                    <i class="fab fa-acquisitions-incorporated nav-icon"></i>
                        <p>Yakuniy</p>
                    </a>
                </li>

            </ul>
        </li>

        <li class="nav-item">
            <a href="<?= \Yii\helpers\Url::to(["/time-table/index"], true) ?>" class="nav-link">
                <i class="fas fa-tv nav-icon"></i>
                <p>Dars Jadval</p>
            </a>
        </li>

        <li class="nav-item">
            <a href="<?= \Yii\helpers\Url::to(["/exam-student/groups"], true) ?>" class="nav-link">
                <i class="fas fa-marker nav-icon"></i>
                <p>Baholash</p>
            </a>
        </li>

        <li class="nav-item">
            <a href="<?= \Yii\helpers\Url::to(["/monitoring/index"], true) ?>" class="nav-link">
                <i class="fas fa-check-double nav-icon "></i>
                <p>Yo`qlama</p>
            </a>
        </li>



        <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-cog"></i>
                <p>Sozlamalar<i class="right fas fa-angle-left"></i></p>
            </a>
            <ul class="nav nav-treeview" style="display: none;">

            <li class="nav-item">
                    <a href="<?=\Yii\helpers\Url::to(["/fan/index"], true)?>" class="nav-link">
                        <i class="nav-icon fas fa-atom"></i>
                        <p>Fanlar</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?=\Yii\helpers\Url::to(["/course/index"], true)?>" class="nav-link">
                        <i class="nav-icon glyphicon glyphicon-tower"></i>
                        <p>Kurslar</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?=\Yii\helpers\Url::to(["/para/index"], true)?>" class="nav-link">
                        <i class="nav-icon glyphicon glyphicon-book"></i>
                        <p>Darslar</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?=\Yii\helpers\Url::to(["/room/index"], true)?>" class="nav-link">
                        <i class="nav-icon glyphicon glyphicon-record"></i>
                        <p>Xonalar</p>
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</nav>