<!-- SEARCH FORM -->
<form class="form-inline ml-3">
    <div class="input-group input-group-sm">

        <h5>

        </h5>
    </div>
</form>
<ul class="navbar-nav ml-auto">
    <br>
    <h5>
        <a href="<?=\Yii\helpers\Url::to(["/user/viewuser?id=$user->id"])?>">
            <?php echo $user->username ;?>
        </a>
    </h5>
<!--    <li class="nav-item dropdown">-->
<!--        <a class="nav-link" data-toggle="dropdown" href="#">-->
<!--            <i class="far fa-bell"></i>-->
<!--            <span class="badge badge-warning navbar-badge">-->
<!--                        </span>-->
<!--        </a>-->
<!--        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">-->
<!--            <span class="dropdown-item dropdown-header"></span>-->
<!---->
<!--            <div class="dropdown-divider"></div>-->
<!--            <a href="--><?//=\Yii\helpers\Url::to(["/elon/view?id=$elon->id"], true)?><!--" class="dropdown-item">-->
<!--                <i class="fas fa-envelope mr-2"></i> --><?//=$elon->mavzu?>
<!--                <span class="float-right text-muted text-sm">--><?//=$elon->date?><!--</span>-->
<!--            </a>-->
<!---->
<!--            <div class="dropdown-divider"></div>-->
<!--            <a href="--><?//=\Yii\helpers\Url::to(["/elon/index"], true)?><!--"-->
<!--               class="dropdown-item dropdown-footer">Barchasini ko`rish</a>-->
<!--        </div>-->
<!---->
<!---->
<!--    </li>-->
    <!-- Messages Dropdown Menu -->

<!--    <li class="nav-item dropdown">-->
<!--    <li class="nav-item dropdown">-->
<!--        <a class="nav-link" data-toggle="dropdown" href="#">-->
<!--            <i class="far fa-envelope"></i>-->
<!--            <span class="badge badge-warning navbar-badge">-->
<!---->
<!--                        </span>-->
<!--        </a>-->
<!--    </li>-->



    <li class="nav-item">
        <a href="<?=toRoute('/site/logout'); ?>" data-method="get" data-toggle="tooltip"
           data-placement="bottom" title="Logout">
            <i style="font-size: 35px; margin-left: 30px;" class="fas fa-sign-out-alt"></i>
        </a>

    </li>




</ul>
