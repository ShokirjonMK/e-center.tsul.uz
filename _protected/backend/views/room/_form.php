<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>

<style>
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
                                <h2 style="text-align:center"> Xona qo`shish </h2>
                            </h3>
                        </div>
                        <br>
                        <div class="room-form">
                            <?php $form = ActiveForm::begin(); ?>
                            <div class="row">
                                <div class="col-sm-6">
                                    <?= $form->field($model, 'name')->textInput(['maxlength' => true])->label('Nomi') ?>
                                </div>
                                <div class="col-sm-6">
                                    <?= $form->field($model, 'status')->dropDownList([1=>'Aktiv',2=>'Passiv'])->label('Holati')  ?>
                                    <?= Html::submitButton('Saqlash', ['class' => 'btn btn-success', 'style'=>'width:100%;margin-top:32px ']) ?>
                                </div>
                            </div>
                            <?php ActiveForm::end(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

