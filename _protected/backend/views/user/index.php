<?php
use common\helpers\CssHelper;
use yii\helpers\Html;
use yii\grid\GridView;

$this->title = Yii::t('app', 'Users');
$this->params['breadcrumbs'][] = $this->title;
?>

<style>
    input[type=checkbox] {
        box-sizing: border-box;
        padding: 0;
        width: 50px;
        height: 38px;
    }

    .field-user-first {
        margin-top: 25px;
    }

    .weekDays-selector input {
        display: none !important;
    }

    .weekDays-selector input[type=checkbox]+label {
        display: inline-block;
        border-radius: 6px;
        background: #dddddd;
        height: 40px;
        width: 30px;
        margin-right: 3px;
        line-height: 40px;
        text-align: center;
        cursor: pointer;
    }

    .weekDays-selector input[type=checkbox]:checked+label {
        background: #2AD705;
        color: #ffffff;
    }
    td {
        vertical-align: middle !important
    }
</style>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="course-teacher-view">
                    <div class="card card-info" style="padding: 40px; overflow-x: scroll;">
                        <div class="card-header" style="text-align: center;">
                            <h3 class="card-title1 " style="text-align: center;">
                                <h2 style="text-align:center">Barcha foydalanuvchilar</h2>
                            </h3>
                        </div>
                        <br>
                        <h1>
                            <a href="<?=\yii\helpers\Url::to(['../user/create'])?>">
                                <button  class="btn btn-success" style="width: 20%; float: right">
                                    Foydalanuvchi yaratish
                                </button>
                            </a>
                         </h1>
                        <table id="example" class="table table-striped table-bordered" >
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Login</th>
                                <th>Ism Familiya</th>
                                <th>Rol</th>
                                <!-- <th>Holati</th> -->
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>

                            <?php $i =1;  foreach ($users as $usr): ?>
                            
                                <tr>
                                    <td><?=$i++?></td>
                                    <td><?=$usr->username;?></td>
                                    <td><?=$usr->full_name;?></td>


                                    <td><?=$usr->role_id;?></td>

                                
                                    <td>
                                        <a href="<?=\yii\helpers\Url::to(['../user/viewuser?id='.$usr->id])?>"><span class="glyphicon glyphicon-eye-open"></span></a>
                                        <a href="<?=\yii\helpers\Url::to(['../user/update?id='.$usr->id])?>"><span class="glyphicon glyphicon-pencil"></span></a>
                                        <!-- <a href="<?//=\yii\helpers\Url::to(['../user/del?id='.$usr->id])?>"><span class="glyphicon glyphicon-trash"></span></a> -->
                                    </td>
                                </tr>
                                    <?php endforeach; ?>
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>