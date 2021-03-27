<?php

use yii\helpers\Html;
use yii\grid\GridView;
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
                                <h2 style="text-align:center"> Xonalar </h2>
                            </h3>
                        </div>
                        <br>
                        <h1><a href="<?=\yii\helpers\Url::to(['../room/create'])?>">
                            <button class="btn btn-success" style="width: 20%; float: right"> Xona qo`shish</button>
                        </a></h1>
                        <table id="example" class="table table-striped table-bordered" >
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Xona</th>
                                <th>Holati</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>

                            <?php $i =1;  foreach ($room as $rooms): ?>
                                <?php  $unversitet = \common\models\University::find()->where(['id'=>$rooms->uni_id])->one();?>
                                <tr>
                                    <td><?=$i++?></td>
                                    <td><?=$rooms->name.'-xona';?></td>
                                    <td>
                                        <?php if($rooms->status == 1){
                                            echo "Aktiv";
                                        }else{
                                            echo "Passiv";
                                        }
                                        ?>
                                    <td>
                                        <a href="<?=\yii\helpers\Url::to(['../room/update?id='.$rooms->id])?>"><span class="glyphicon glyphicon-pencil"></span></a>
                                    </td>
                                </tr>
                            <?php  endforeach; ?>
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



