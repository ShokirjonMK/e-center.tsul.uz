<?php
$this->registerCssFile("https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700");
$this->registerCssFile("../../themes/default/lib/lib/bootstrap/css/bootstrap.min.csss");
$this->registerCssFile("../../themes/default/lib/lib/font-awesome/css/font-awesome.min.css");
$this->registerCssFile("../../themes/default/lib/lib/animate/animate.min.css");
$this->registerCssFile("../../themes/default/lib/lib/ionicons/css/ionicons.min.cs");
$this->registerCssFile("../themes/default/lib/lib/owlcarousel/assets/owl.carousel.min.css");
$this->registerCssFile("../../themes/default/lib/css/style.css");
?>
    <section id="services" class="section-bg"   style="margin-top: -24px;">
        <div class="container">
            <header class="section-header">
                <h3   style="margin-top: -57px;">Universitet</h3>
                <p><?php $user = \common\models\User::findOne(['id'=>Yii::$app->user->id]);
                $univ = \common\models\University::findOne(['id'=>$user->uni_id]);
                echo $univ->name; ?></p>
            </header>

            <div class="row"  style="margin-top: -34px;">
                <div class="col-md-6 col-lg-5 offset-lg-1 wow bounceInUp btn1" data-wow-duration="1.4s">
                    <div class="box">
                        <div class="icon ml-2"><i class="fa fa-line-chart" style="color: #ff689b;margin-left: 16px;"></i></div>
                        <h4 class="title"><a href="">TAHLILLAR</a></h4>
                        <p class="description">Ushbu band universitet statistikasini ko'rsatib beradi. </p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-5 wow bounceInUp btn2" data-wow-duration="1.4s">
                    <div class="box">
                        <div class="icon ml-4"><i class="fas fa-chalkboard-teacher" style="color: #e9bf06;margin-left: 5px;"></i>
                        </div>
                        <h4 class="title" style="margin-left: 60px"><a href="">O'QITUVCHILAR</a></h4>
                        <p class="description" style="margin-left: 60px">Tizimdagi o'qituvchilar haqida ma'lumotlar.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-5 offset-lg-1 wow bounceInUp btn3" data-wow-delay="0.1s" data-wow-duration="1.4s">
                    <div class="box">
                        <div class="icon ml-2"><i class="fas fa-user-graduate nav-icon" style="color: #3fcdc7;margin-left: 16px;"></i></div>
                        <h4 class="title"><a href="">TINGLOVCHILAR</a></h4>
                        <p class="description">Tizimdagi tinglovchilar hqaida ma'lumotlar.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-5 wow bounceInUp btn4" data-wow-delay="0.1s" data-wow-duration="1.4s">
                    <div class="box">
                        <div class="icon ml-2"><i class="fas fa-charging-station nav-icon" style="color:#41cf2e;height: 145px;margin-left: 16px;"></i></div>
                        <h4 class="title" style="margin-left: 50px;"><a href="">IMTIHONLAR</a></h4>
                        <p class="description" style="margin-left: 50px;">Imtihonlar bandiga o'tish.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-5 offset-lg-1 wow bounceInUp btn5" data-wow-delay="0.2s" data-wow-duration="1.4s">
                    <div class="box">
                        <div class="icon ml-2"><i class="fas fa-check-double nav-icon" style="color: #d6ff22;margin-left: 16px;"></i></div>
                        <h4 class="title"><a href="">YO'QLAMALAR</a></h4>
                        <p class="description">Tinglovchilarni darsga qatnashishini nazorat qilish.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-5 wow bounceInUp btn6" data-wow-delay="0.2s" data-wow-duration="1.4s">
                    <div class="box">
                        <div class="icon ml-2"><i class="fas fa-marker nav-icon" style="color: #4680ff;margin-left: 16px;"></i></div>
                        <h4 class="title"><a href="">BAHOLASH</a></h4>
                        <p class="description">Tinglovchilar baholarini nazorat qilish.</p>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- #services -->

<?php
$this->registerJs(<<<JS
    $('.btn1').on('click', function() { window.location.assign("admin/stat") });
    $('.btn2').on('click', function() { window.location.assign("teacher/index") });
    $('.btn3').on('click', function() { window.location.assign("student/index") });
    $('.btn4').on('click', function() { window.location.assign("exam-permission/index") });
    $('.btn5').on('click', function() { window.location.assign("monitoring/index") });
    $('.btn6').on('click', function() { window.location.assign("exam-student/groups") });
JS
);
?>

<?php
$this->registerJsFile("../../themes/default/lib/lib/jquery/jquery.min.js");
$this->registerJsFile("../../themes/default/lib/lib/jquery/jquery-migrate.min.js");
$this->registerJsFile("../../themes/default/lib/lib/bootstrap/js/bootstrap.bundle.min.js");
$this->registerJsFile("../../themes/default/lib/lib/easing/easing.min.js");
$this->registerJsFile("../../themes/default/lib/lib/mobile-nav/mobile-nav.js");
$this->registerJsFile("../../themes/default/lib/lib/wow/wow.min.js");
$this->registerJsFile("../../themes/default/lib/lib/waypoints/waypoints.min.js");
$this->registerJsFile("../../themes/default/lib/lib/counterup/counterup.min.js");
$this->registerJsFile("../../themes/default/lib/lib/owlcarousel/owl.carousel.min.js");
$this->registerJsFile("../../themes/default/lib/lib/isotope/isotope.pkgd.min.js");
$this->registerJsFile("../../themes/default/lib/lib/lightbox/js/lightbox.min.js");
$this->registerJsFile("../../themes/default/lib/contactform/contactform.js");
$this->registerJsFile("../../themes/default/lib/js/main.js");
//?>

