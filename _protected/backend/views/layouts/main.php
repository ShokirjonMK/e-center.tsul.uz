<?php

use backend\assets\AppAsset;
use frontend\widgets\Alert;
use yii\helpers\Html;

// $feedback = \common\models\Feedback::find()->andWhere(['status' => 0])->count();
/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);
?>
<?php $this->beginPage(); ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language; ?>">

<head>
    <meta charset="<?= Yii::$app->charset; ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags(); ?>
    <title><?= Html::encode($this->title); ?></title>
    <?php $this->head(); ?>
</head>
<style>
    .fade:not(.show) {
        opacity: 1 !important;
    }
</style>


<body class="sidebar-mini layout-navbar-fixed sidebar-close" style=" background-image: url('uploads/Logo.jpg');">
    <?php $this->beginBody(); ?>
    <div class="wrapper">
        <?php
        $user = \common\models\User::find()
            ->where(['=', 'user.id', Yii::$app->user->id])
            ->one();

        ?>
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#"><i style="font-size: 35px;" class="fas fa-bars"></i></a>
                </li>
            </ul>

            <?php if ($user->role_id == "theCreator") {
                require '_theCreator_nav.php';
            } ?>

            <?php if ($user->role_id == "Admin") {
                require 'Admin_nav.php';
            } ?>

            <?php if ($user->role_id == "Student") {
                require 'student_nav.php';
            } ?>

            <?php if ($user->role_id == "Teacher") {
                require 'teacher_nav.php';
            } ?>


        </nav>
        <aside class="main-sidebar sidebar-dark-primary elevation-4" style="margin-top: 55px; position: fixed;">
            <!-- Brand Logo -->

            <a style="display: flex;
    align-items: center;" href="<?= \Yii\helpers\Url::to(["/site"], true) ?>" class="brand-link elevation-4">
<? $user = \common\models\User::find()
            ->where(['=', 'user.id', Yii::$app->user->id])
            ->one(); ?>

                <span class="brand-text font-weight-light">
                <? if ($user->uni_id == 4){?> 
                        Markaz
                    <? } else {?>
                    Universitet
                    <?}?></span>
            </a>

            <style type="text/css">
                .zafar_side::-webkit-scrollbar {
                  width: 6px;
                }

                /* Track */
                .zafar_side::-webkit-scrollbar-track {
                  box-shadow: inset 0 0 5px silver; 
                  border-radius: 5px;
                }
                 
                /* Handle */
                .zafar_side::-webkit-scrollbar-thumb {
                  background: #17A2B8;
                  height: 100px !important; 
                  border-radius: 5px;
                }

                /* Handle on hover */
                .zafar_side::-webkit-scrollbar-thumb:hover {
                  background: grey; 
                }
            </style>


            <!-- Sidebar -->
            <div class="sidebar zafar_side" style="height: 100vh !important;">
                
                <!-- Sidebar user (optional) -->
                <!-- Sidebar Menu -->

                <?php $user = \common\models\User::find()->where(['=', 'user.id', Yii::$app->user->id])->one(); ?>

                <?php if ($user->role_id == "theCreator") {
                    require '_theCreator.php';
                } ?>

                <?php if ($user->role_id == "Admin") {
                    require 'Admin_left.php';
                } ?>

                <?php if ($user->role_id == "Student") {
                    require 'student_left.php';
                } ?>

                <?php if ($user->role_id == "Teacher") {
                    require 'teacher_left.php';
                } ?>




                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <br>
            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <!-- Default box -->
                            <?= Alert::widget(); ?>
                            <?php if (Yii::$app->session->hasFlash('success')) : ?>
                                <div class="alert alert-success alert-dismissible show">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                    <h5><i class="icon fas fa-check"></i> Alert!</h5>
                                    <?php echo Yii::$app->session->getFlash('success'); ?>
                                </div>
                            <?php endif; ?>

                            <?= $content; ?>
                            <!-- /.card -->
                        </div>
                    </div>
                </div>
            </section>
            <!-- /.content -->
        </div>

        <?php $this->endBody(); ?>
    </div>
</body>

</html>
<?php
$this->endPage();
?>