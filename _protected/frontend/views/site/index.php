
    <?php $a=\Yii::$app->language;  ?>
    <!--===== mobil==== -->
  <section class="hbs-m">
    <div class="itemzero">
      <div class="search-div">
        <form>
          <input type="search" name="search">
          <button type="submit">
            <i class="fa fa-search"></i>
          </button>
        </form>
      </div>
      <div class="lang-m">
        <a href="#">O'zbek | </a>
        <a href="#">Русский</a>
      </div>
    </div>
    <div class="itemone">
      <span>
        O'zbekiston mudofasiga ko'maklashuvchi "Vatanparvar" tashkiloti 
      </span>
    </div>
  </section>
  <!--==and mobil==== -->
    <section class="slider-section">

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class=""></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2" class=""></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3" class=""></li>
    
          </ol>
          <div class="carousel-inner">
           <!--  -->
          <!--   <div class="carousel-item active">
              <video class="d-block w-100" autoplay="" loop=""
              src="<?=\yii\helpers\Url::to(["../themes/default/image/Saytga/FLAG.mp4"], true)?>" alt="Third slide"></video> 

            </div> -->
             <div class="carousel-item active">
              <img class="d-block w-100" 
              src="<?=\yii\helpers\Url::to(["../themes/default/image/Saytga/wal1.jpg"], true)?>" alt="Third slide">
              
            </div>
            <div class="carousel-item ">
              <img class="d-block w-100" 
              src="<?=\yii\helpers\Url::to(["../themes/default/image/Saytga/wal4.JPG"], true)?>" alt="Third slide">
              
            </div>
          
             <div class="carousel-item ">
              <img class="d-block w-100" 
              src="<?=\yii\helpers\Url::to(["../themes/default/image/Saytga/slider1.jpg"], true)?>" alt="Third slide">
              
            </div>
             <div class="carousel-item ">
              <img class="d-block w-100" 
              src="<?=\yii\helpers\Url::to(["../themes/default/image/Saytga/slider2.jpg"], true)?>" alt="Third slide">
              
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>

         <div class="slider-text-section">
            <div class="slider-left">
                <div class="h-h1-div">
                    <h1 style="color: #ffc145"> <?=\Yii::t('main', '"Vatanparvar" tashkiloti'); ?></h1>
                </div>
        <?php   $news2 = \common\models\News::find()->orderBy(['id' => SORT_DESC])->limit(1)->all(); ?>
                 <?php foreach($news2 as $new2):?>
                <div class="slider-text-div">
                   <!--  <div class="slider-left-span-div">
                        <span>

                             <?php   $a=\Yii::$app->language; 
                              
                if($a=='en-En'){
                   echo( mb_substr ($new2->name_lotin, 0, 245)."");
                }
                 if($a=='ru-Ru'){
                    echo( mb_substr ($new2->name_ru, 0, 245)."");
                }
             if($a=='uz-Uz'){
                   echo( mb_substr ($new2->name_kril, 0, 245)."");
                }
                
                ?>
                             
                        </span>
                    </div>
                    <a  href="<?=\yii\helpers\Url::to(["/site/news/?id=$new2->id"], true)?>">
                        <button class="slider-left-button">
                            <?=\Yii::t('main', 'Batafsil'); ?>
                            <i class="fa fa-angle-right ml-2"></i>
                        </button>
                    </a> -->
                </div>
                 <?php endforeach; ?>
                <div class="slider-left-container">
                    <div class="slider-hr"></div>
                    <aside>
                        <a target="blank" href="https://fb.me/evatanparvar"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    </aside>
                    <aside>
                        <a target="blank" href="http://"><i class="fa fa-instagram"></i></a>
                    </aside>
                    <aside>
                        <a target="blank" href="https://t.me/t_vatanparvar"><i class="fa fa-telegram" aria-hidden="true"></i></a>
                    </aside>
                </div>
            </div>
            <div class="slider-right">
                <div class="news-div"><span>   <?=\Yii::t('main', 'Yangiliklar'); ?></span></div>
                <?php   $news1 = \common\models\News::find()->orderBy(['id' => SORT_DESC])->limit(4)->all(); ?>
                 <?php foreach($news1 as $new):?>
                <div class="news-item-div">

                    <span>
                 <a href="<?=\yii\helpers\Url::to(["/site/news/?id=$new->id"], true)?>" style="color: white;">                   
                                 <?php   
                                              
                                if($a=='en-En'){
                                   echo( mb_substr ($new->name_lotin, 0, 55)."...");
                                }
                                 if($a=='ru-Ru'){
                                    echo( mb_substr ($new->name_ru, 0, 55)."...");
                                }
                             if($a=='uz-Uz'){
                                   echo( mb_substr ($new->name_kril, 0, 55)."...");
                                }
                                
                                ?>
                        </a> 
                    </span>

                </div>
                 <?php endforeach; ?>
         <a href="<?=\yii\helpers\Url::to(["/site/allnews/"], true)?>">
            <button class="all-news-button">
                <?=\Yii::t('main', 'Barcha yangiliklar'); ?>
        </button></a>
                <div class="news-slider-vid"><span>  <?=\Yii::t('main', 'Videolar'); ?></span></div>
                <div class="slider-vid-con">
<?php   
$video = \common\models\Videos::find()->orderBy(['id' => SORT_DESC])->where(['status'=>1])->limit(1)
->all(); ?>
                 <?php foreach($video as $vid):?>
                    <video class="slider-vid" src="<?=\yii\helpers\Url::to(["../uploads/$vid->video"], true)?>" controls="">
                        
                    </video>
                      <?php endforeach; ?>
                </div>
                <a href="#videos">
                    <button class="all-news-button"><?=\Yii::t('main', 'Barcha videolar'); ?></button>
                </a>
            </div>
         </div>
    </section>



<section class="news-section"> 
    <div class="container">
      <div class="row">
        <div class="news-container news-head-col">
          <div class="heading-content">
            <h2 class="heading-h2">So'ngi yangiliklar</h2>
          </div>
          <a href="">
            <button class="news-button">Barchasini ko'rish</button>
          </a>
        </div>
      </div>
    </div>

    <div class="container news-content">
      <div class="row">
        <div class="news-container">
          <div class="owl-carousel owl-theme news-carousel">
            <!-- item -->
             <?php foreach ($news as $new):?>
              <div class="item">
                <div class="news-col-inner">
                <img class="new-img" src="<?=\yii\helpers\Url::to(["../uploads/$new->image"], true)?>">
                <div class="news-text-div">
                  <div class="date-div">
                    <span><?=$new->date?></span>
                  </div>
                  <div>
                    <span class="new-text-head">
                       <?php   
                                                  
                                    if($a=='en-En'){
                                       echo( mb_substr ($new->name_lotin, 0, 90)."...");
                                    }
                                     if($a=='ru-Ru'){
                                        echo( mb_substr ($new->name_ru, 0, 90)."...");
                                    }
                                 if($a=='uz-Uz'){
                                       echo( mb_substr ($new->name_kril, 0,90)."...");
                                    }
                                    
                                    ?>
                    </span>
                  </div>
                  <div class="news-hr"></div>
                  <div>
                    <span class="new-text-body">
                     <?php   
                              
                                if($a=='en-En'){
                                 
                                   echo strip_tags( mb_substr ($new->title_lotin, 0, 110)."...");
                                            }
                                 if($a=='ru-Ru'){
                                 
                        echo strip_tags( mb_substr ($new->title_ru, 0, 110)."...");
                                            }
                                         if($a=='uz-Uz'){
                        echo strip_tags( mb_substr ($new->title_kril, 0,110)."...");
                                            }
                
                                                 ?>
                    </span>
                  </div>
                   <a href="<?=\yii\helpers\Url::to(["/site/news/?id=$new->id"], true)?>">
                                        <button class="new-button-bat">
                                        <?=\Yii::t('main', 'Batafsil'); ?>
                                            <i class="fa fa-angle-right"></i>
                                        </button>
                                    </a>
                </div>
              </div>
              </div>
             
                <?php endforeach?>

          </div>
        </div>
         <div class="news-right-col">
                    <div class="news-right-col-in">
                        <div class="news-right-item">
                            <img class="mr-2" 
                    src="<?=\yii\helpers\Url::to(["../themes/default/image/news/one.png"], true)?>">
                            <span>
                                <a href="http://test.articles.uz/login">
                                 <?=\Yii::t('main', 'Yagona test'); ?>
                                </a>
                                
                            </span>
                        </div>
                        <div class="news-right-item">
                            <img class="mr-2" 
                    src="<?=\yii\helpers\Url::to(["../themes/default/image/news/two.png"], true)?>">
                          <span> <a href="#">
                                 <?=\Yii::t('main', 'Elekron o`quv qo`llanma'); ?>
                          </a></span>
                        </div>
                        <div class="news-right-item">
                            <img class="mr-2" 
                  src="<?=\yii\helpers\Url::to(["../themes/default/image/news/three.png"], true)?>">
                            <span> <a href="http://www.whb.articles.uz/login">
<?=\Yii::t('main', 'Avtomatlashgan vatanparvar'); ?>
                            </a></span>
                        </div>
                    </div>
                </div>
      </div>
    </div>
    <!-- news mobil version -->
    <div class="nmr">
      <ul class="list-group">
        <li class="list-group-item">
         <img class="mr-2"  src="<?=\yii\helpers\Url::to(["../themes/default/image/news/one.png"], true)?>">

          <a href="http://www.whb.articles.uz/login">
                                 <?=\Yii::t('main', 'Yagona test'); ?>
                                </a>
        </li>
        <li class="list-group-item">
          <img class="mr-2" 
                    src="<?=\yii\helpers\Url::to(["../themes/default/image/news/two.png"], true)?>">

              <span> <a href="http://test.articles.uz/login">
                                 <?=\Yii::t('main', 'Elekron o`quv qo`llanma'); ?>
                          </a></span>
        </li>
        <li class="list-group-item">
          <img class="mr-2"    
           src="<?=\yii\helpers\Url::to(["../themes/default/image/news/three.png"], true)?>">
           <span> <a href="#">
<?=\Yii::t('main', 'Avtomatlashgan vatanparvar'); ?>
                            </a></span>
        </li>

      </ul>
    </div>
  </section>


    <section class="gallery-section">
        <div class="heading-content gallery-heading">
            <h2 class="heading-h2"><?=\Yii::t('main', 'Foto galereya'); ?></h2>
        </div>
        <div class="container gallery">
            <div class="row">
                <div class="news-container">
                    <div class="owl-carousel owl-theme gallery-carousel owl-loaded owl-drag">

                    <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 1819px;">
 <?php foreach ($category as $cat):?>

                    <div class="owl-item active" style="width: 249.75px; margin-right: 10px;">
<a href="<?=\yii\helpers\Url::to(["/site/galery/?id=$cat->id"], true)?>">
                        <div class="item">
                            <figure>
                      <img src="<?=\yii\helpers\Url::to(["../uploads/$cat->image"], true)?>">
                            </figure>
                            <div class="gallery-span-div">
                                <span class="gallery-span">
                                          <?php   
                              
                                            if($a=='en-En'){
                                               echo(($cat->title));
                                            }
                                             if($a=='ru-Ru'){
                                                 echo(($cat->title_ru));
                                            }
                                         if($a=='uz-Uz'){
                                                echo(($cat->title_kril));
                                            }
                                            ?>
                                </span>
                            </div>
                        </div> </a>
                    </div>
                   
                      <?php endforeach?>
                        </div></div><div class="owl-nav"><button type="button" role="presentation" class="owl-prev disabled"><span aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button></div><div class="owl-dots"><button role="button" class="owl-dot active"><span></span></button><button role="button" class="owl-dot"><span></span></button></div></div>
                </div>
                <div class="news-right-col">
                   <div class="gallery-right-col-in">
                        <ul class="list-group vazir-link">
                           <h5 style="text-align: center;"><?=\Yii::t('main', 'Foydali havolalar'); ?></h5>
                            <li class="list-group-item">
                                <a href="https://president.uz/ru">
 <img class="mr-2" src="<?=\yii\helpers\Url::to(["../themes/default/image/vazirlik/press.png"], true)?>">
                  <blockquote>
                           <?=\Yii::t('main', 'O`ZBEKISTON RESPUBLIKASI PREZIDENTI MATBUOT XIZMATI'); ?>
                            </blockquote>
                                </a>
                            </li>
                            <li class="list-group-item">
                                <a href="http://parliament.gov.uz/uz/">
    <img class="mr-2" src="<?=\yii\helpers\Url::to(["../themes/default/image/vazirlik/high.png"], true)?>">
 <blockquote>
                       <?=\Yii::t('main', 'O`ZBEKISTON RESPUBLIKASI OLIY MAJLISI QONUNCHILIK PALATASI'); ?>
                                    </blockquote>
                                </a>
                            </li>
                            <li class="list-group-item">
                                <a href="http://senat.uz/ru">
 <img class="mr-2" src="<?=\yii\helpers\Url::to(["../themes/default/image/vazirlik/portal.png"], true)?>">
 <blockquote>
                                 <?=\Yii::t('main', 'O`ZBEKISTON RESPUBLIKASI OLIY MAJLISINING SENATI'); ?>
                        
                              </blockquote>
                                </a>
                            </li>
                            <li class="list-group-item">
                                <a href="https://www.gov.uz/uz">
 <img class="mr-2" src="<?=\yii\helpers\Url::to(["../themes/default/image/vazirlik/senat.png"], true)?>">
                                 <blockquote>
                                 <?=\Yii::t('main', 'O`ZBEKISTON RESPUBLIKASI HUKUMATI PORTALI'); ?>              
                                    </blockquote>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="hvlm">
      <ul class="list-group">
        <li class="list-group-item">

        <a href="https://president.uz/ru">
            <img src="<?=\yii\helpers\Url::to(["../themes/default/image/vazirlik/press.png"], true)?>">
            <blockquote>O'ZBEKISTON RESPUBLIKASI PREZIDENTI MATBUOT XIZMATI</blockquote>
          </a>
        </li>
        <li class="list-group-item">
           <a href="http://parliament.gov.uz/uz/">
            <img src="<?=\yii\helpers\Url::to(["../themes/default/image/vazirlik/high.png"], true)?>">
            <blockquote>O'ZBEKISTON RESPUBLIKASI OLIY MAJLISI QONUNCHILIK PALATASI</blockquote>
          </a>
        </li>
        <li class="list-group-item">
          <a href="http://senat.uz/ru">
            <img src="<?=\yii\helpers\Url::to(["../themes/default/image/vazirlik/portal.png"], true)?>">
            <blockquote>O'ZBEKISTON RESPUBLIKASI OLIY MAJLISINING SENATI</blockquote>
          </a>
        </li>
        <li class="list-group-item">
          <a href="https://www.gov.uz/">
            <img src="<?=\yii\helpers\Url::to(["../themes/default/image/vazirlik/senat.png"], true)?>">
            <blockquote>O'ZBEKISTON RESPUBLIKASI HUKUMATI PORTALI</blockquote>
          </a>
        </li>
      </ul>
    </div>
    </section>

<section class="vs" id="videos">
        <div class="heading-content">
            <h2 class="heading-h2"><?=\Yii::t('main', 'Video lavhalar'); ?></h2>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 vsc-first">
                 <?php   
$video = \common\models\Videos::find()->orderBy(['id' => SORT_DESC])->where(['status'=>1])->limit(1)
->all(); ?>
                         <?php foreach ($video as $vid):?>
                    <article>
                        <video id="video-main" 
                        src="<?=\yii\helpers\Url::to(["../uploads/$vid->video"], true)?>" controls=""></video>
                        <div class="left-praz"></div>
                    </article>
                    <?php endforeach?>
                </div>
                <div class="col-lg-6 vsc">
                    <div class="owl-carousel owl-theme video-carousel">
           <?php foreach(\common\models\Videos::find()->where('status=0')->orderBy(['id'=>SORT_DESC])
           ->batch(2) as $cts): ?>
          
                    <div class="item">
                       <?php foreach ($cts as $ct):?>
                            <aside id="16">
                                <video 
               src="<?=\yii\helpers\Url::to(["../uploads/$ct->video"], true)?>"
     data-src="<?=\yii\helpers\Url::to(["../uploads/$ct->video"], true)?>"></video>
                                <div class="right-praz"></div>
                            </aside>
                          <?php endforeach?>  
                        </div>

    <?php endforeach?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="statistic-section">
        <div class="stat-h2-div">
            <h2 class="stat-h2"> <?=\Yii::t('main', 'Statistika'); ?></h2>
        </div>
         <?php foreach($statistika as $sta):?>
        <div class="container stat-container">
      <div class="row">
        <div class="col-lg-2 col-md-3 col-sm-6">
          <!-- <div class="stat-col-inner">
            <div class="stat-img-div">
           <img class="size one" 
           src="<?=\yii\helpers\Url::to(["../themes/default/image/statistik/2.svg"], true)?>">
            </div>
            <div class="stat-number-div">
              <span>
                <div class="box">
                  <input type='text' class='diala' value='0' data-number='1200' />
                  <div class="startKnoba"></div>
                </div>
              </span>
            </div>
            <div class="stat-text-div">
              <span>Аъзолар сони</span>
            </div>
          </div> -->
        </div>
        <div class="col-lg-2 col-md-3 col-sm-6">
          <div class="stat-col-inner">
            <div class="stat-img-div">
               <img src="<?=\yii\helpers\Url::to(["../themes/default/image/statistik/bino.png"], true)?>">
            </div>
            <div class="stat-number-div">
              <span>
                <div class="box">
                  <input type='text' class='dial' value='0' data-number='14' />
                  <div class="startKnob"></div>
                </div>
              </span>
            </div>
            <div class="stat-text-div">
              <span> <?=\Yii::t('main', 'Hududiy kengashlar soni'); ?></span>
            </div>
          </div>
        </div>
        
        <div class="col-lg-2 col-md-3 col-sm-6">
          <div class="stat-col-inner">
            <div class="stat-img-div">
              <img class="size three" 
              src="<?=\yii\helpers\Url::to(["../themes/default/image/statistik/3.svg"], true)?>">
            </div>
            <div class="stat-number-div">
              <span>
                <div class="box">
                  <input type='text' class='dialc' value='0' data-number='538' />
                  <div class="startKnobc"></div>
                </div>
              </span>
            </div>
            <div class="stat-text-div">
              <span><?=\Yii::t('main', 'Sport sektsiyalari soni'); ?></span>
            </div>
          </div>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-6">
          <div class="stat-col-inner">
            <div class="stat-img-div">
                 <img class="size four" src="<?=\yii\helpers\Url::to(["../themes/default/image/statistik/1.svg"], true)?>">
            </div>
            <div class="stat-number-div">
              <span>
                <div class="box">
                  <input type='text' class='diald' value='0' data-number='7672' />
                  <div class="startKnobd"></div>
                </div>
              </span>
            </div>
            <div class="stat-text-div">
              <span>Спортчилар сони</span>
            </div>
          </div>
        </div>
          <div class="col-lg-2 col-md-3 col-sm-6">
          <div class="stat-col-inner">
            <div class="stat-img-div">
         <img src="<?=\yii\helpers\Url::to(["../themes/default/image/statistik/student.png"], true)?>">
            </div>
            <div class="stat-number-div">
              <span>
                <div class="box">
                  <input type='text' class='dialb' value='0' data-number='37553' />
                  <div class="startKnobb"></div>
                </div>
              </span>
            </div>
            <div class="stat-text-div">
              <span>Ўқувчилар сони</span>
            </div>
          </div>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-6">
        <!--   <div class="stat-col-inner">
            <div class="stat-img-div">
              <img src="<?=\yii\helpers\Url::to(["../themes/default/image/statistik/car.png"], true)?>">
            </div>
            <div class="stat-number-div">
              <span>
                <div class="box">
                  <input type='text' class='diale' value='0' data-number='2377' />
                  <div class="startKnobe"></div>
                </div>
              </span>
            </div>
            <div class="stat-text-div">
              <span>Автомобиллар сони</span>
            </div>
          </div> -->
        </div>

      </div>
    </div>
          <?php endforeach?>
    </section>

<section class="hmap" id="maps">
    <div>

<!-- Created for MapSVG plugin: http://mapsvg.com -->
<svg
   xmlns:mapsvg="http://mapsvg.com"
   xmlns:dc="http://purl.org/dc/elements/1.1/"
   xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
   xmlns:svg="http://www.w3.org/2000/svg"
   xmlns="http://www.w3.org/2000/svg"
   mapsvg:geoViewBox="55.997099 45.594337 73.133286 37.176101"
   width="792.4873"
   height="516.87848">
 
  <path
     style="fill:#ffffff;fill-opacity:1;stroke:#ffffff;stroke-width:0.5;stroke-opacity:1"
     d="m 134.41007,7.1297222 -3.4,6.4199998 -1,3.43 -0.61,3.82 2.02,2.82 1,3.02 -1.81,2.62 -2.82,5.23 -1.41,2.21 2.22,-1 1.61,-2.02 1.41,-1 3.82,0.6 2.42,0.6 0.2,3.23 -2.82,0.4 -0.2,8.25 -2.01,-1.01 -1.81,0.41 -1.82,2.01 0.61,2.42 3.22,2.61 3.02,1.81 -1.01,3.23 0,4.02 -1.41,3.02 -2.82,1.01 -1.81,-1.01 -1.2,-2.82 -1.62,0 0,3.42 1.21,1.61 0.2,6.24 0.41,4.03 3.02,1.81 2.21,-2.41 2.42,-4.23 1.81,-4.03 2.41,-1.41 3.02,1.61 2.42,-0.8 -0.81,-2.82 -1.21,-2.62 -0.8,-4.62 0.6,-2.62 1.41,-1.41 1.81,-0.2 2.22,0 1,-4.23 2.82,-6.04 3.22,-5.43 2.02,-5.84 -0.36,-7.73 0,0 56.78,40.99 0,0 -3.89,0.36 1.01,2.01 1.61,1.41 1.01,1.41 -0.81,3.82 -2.82,5.03 -4.63,4.63 -6.24,5.04 -1.61,3.42 1.01,1.81 -1.21,1.81 -3.42,0 -0.6,2.62 -7.05,2.819998 -4.83,1.61 -5.03,1 -3.63,-1.21 -2.01,0.61 -3.82,0.8 -1.21,-1 -2.42,-1.41 -3.62,2.21 -4.43,-0.2 -6.04,-0.6 -3.02,-0.41 -2.61,-2.21 -5.24,-0.799998 -1.81,-1.82 -2.21,-1 -1.01,-3.63 2.82,-1.81 1.81,-2.21 -0.8,-3.63 -1.61,-1 -2.62,1.21 -5.03,1.61 -1.82,0.8 -2.41,-0.2 -1.61,0.4 -1.01,2.02 -2.01,-0.61 -2.62,-2.01 -3.02,-0.2 -4.02,-1.61 -3.02,-1.41 -2.22,-2.62 -2.21,-5.23 -0.4,-5.24 3.02,-8.45 0.4,-2.62 -2.01,-3.62 -1.21,-2.82 -0.2,-6.04 0.4,-4.63 2.01,-5.43 3.02,-4.83 1.21,-5.64 2.62,-2.62 0.2,-5.83 2.01,-3.22 3.83,-3.43 0.2,-4.8299998 1.61,-3.22 0.17,-3.55 0,0"
     class="water"
     title="Aral Sea"
     id="UZ-AS" />
  <path
     d="m 676.69007,291.55972 -1.51,-1.77 -1.2,-0.52 0.27,-0.37 -0.73,0.55 -0.27,0.48 0.19,0.67 1.01,0.03 1.22,0.9 3.18,4.31 0.2,-0.35 -0.64,-1.58 -0.77,-0.98 z"
     title="Sarvan (Sughd Province, Tajikistan)"
     id="TJ-SU" />
  
  <a href="<?=\yii\helpers\Url::to(["/site/filial/?id=1"], true)?>">
    <path
  data-id="andijon"
     d="m 750.33007,320.40972 -0.11,-3.61 -0.31,-0.84 -4.01,-1.28 -2.25,-0.45 -0.24,0.17 -0.33,0 -9.25,-1.57 -2.24,-3.46 -0.62,-0.65 -3.02,-1.56 -4.16,-0.6 -0.2,1.45 -3.03,-4.48 0,0 1.9,-1.21 -2.2,-2.67 2.03,-1.9 1.19,-0.8 8.59,-2.19 3.68,0.03 0.57,0.26 0.73,0.56 3.33,0.74 1.46,0.15 4.88,-0.44 0.53,-0.27 0.4,-0.45 1.26,-5.87 0,0 0.24,0.15 0.67,-0.01 2.85,-1.35 0.76,-0.18 1.22,-0.92 1.13,-1.24 0.69,-0.07 0.15,0.18 1.32,0.35 0.97,0.68 0.89,0.05 0.79,0.4 0.86,-0.09 0.78,0.17 0.66,0.32 0.26,1.17 -0.1,0.65 -0.82,1.52 0.01,0.22 0.18,0.22 0.15,-0.02 0.46,-0.72 0.23,-0.05 0.24,-0.03 0.47,0.24 0.42,0.39 1.32,2.26 0.58,0.69 0.2,2 0.77,0.55 1.2,0.35 1.33,0.65 1.57,0.58 0.55,-0.2 1.82,0.29 0.94,-0.4 0.92,-0.19 0.68,0.21 2.21,-0.56 0.72,0.02 0.82,0.45 1.52,1.67 0.38,1.05 0.17,0.15 0.66,0.16 0.51,-0.04 0.65,-0.25 0.19,-0.3 0.64,-0.33 0.4,-0.48 0.58,-0.02 0.35,-0.21 -0.15,-0.54 -0.58,-0.4 -0.35,-0.49 0.43,-1.42 0.23,-0.23 0.43,0.01 1.01,1.46 0.9,0.2 1.13,0.76 0.95,-0.52 1.5,0.07 0.43,0.38 0.23,0.97 -0.43,1.74 -0.43,0.61 -0.45,0.31 -2.88,1.21 -1.66,0.24 -0.63,0.87 -1.16,0.8 -1.4,0.78 -0.81,0.17 -0.05,0.23 -0.87,0.2 -1.34,0.74 -1,0.96 -1.54,0.5 -1.13,-0.15 -0.79,0.11 -0.31,0.36 -0.05,0.32 0.14,0.44 0.38,0.46 0.03,0.34 -0.74,0.61 -0.1,0.42 0.18,2.74 -0.07,1.07 -0.65,0.21 -0.52,-0.3 -0.96,-0.98 -1.5,-0.34 -0.32,0.37 -0.05,0.76 -0.87,0.63 -0.14,0.24 -0.21,1.4 -0.58,1.07 -0.67,0.16 -0.42,-0.04 -1.39,-1.12 -1.47,-0.07 -0.69,-0.38 -0.91,-0.87 -0.51,-0.18 -0.68,0.29 -0.21,-0.04 -1.37,-1.67 -0.55,-1 -1.39,-1.17 -0.4,-0.19 -0.98,0.43 -1.1,0.01 -0.4,0.54 0.15,0.28 1.12,0.38 0.32,0.31 0.46,1.03 1.05,0.32 0.41,0.56 -0.04,0.55 -0.35,0.4 -1.03,0.1 -0.27,0.19 -0.17,0.51 0.14,0.45 1.08,-0.11 0.26,0.37 0.23,1.47 0.49,0.53 0.24,0.75 -1.14,2.67 0.28,0.83 -0.07,0.64 -0.17,0.16 -0.3,0.06 -1.48,-0.38 -0.45,-0.27 -1.55,-1.6 -0.65,-0.46 -0.29,-0.1 -0.8,0.3 -0.32,-0.21 -0.5,-0.71 -0.29,-0.21 -0.9,0.01 -0.27,-0.11 -0.18,-0.4 0.33,-1.13 -0.06,-0.25 -0.45,-0.27 z"
     title="Andijon"
     id="UZ-AN" /></a>
     <a href="<?=\yii\helpers\Url::to(["/site/filial/?id=2"], true)?>">
  <path data-id="buxoro"
     d="m 421.26007,383.36972 -3.77,3.59 -3.35,2.22 -0.57,0.11 -4.4,4.71 -0.35,1.03 0.15,0.86 0.71,1.2 0.83,0.88 0.82,1.17 0.23,0.51 -0.28,0.61 -18.12,6.64 -5.61,6.23 0,0 -2.13,-2.3 -0.41,-0.03 -1.18,0.3 -2.1,1.21 -1,0.26 -1.05,0.02 -1.38,-0.18 -0.85,-0.42 -2.95,-2.43 -2.87,-2 -6.79,-5.22 -1.82,-1.17 -4.68,-3.44 -1.31,-1.29 -1.15,-1.39 -0.29,-0.63 -0.41,-0.37 -0.78,-1.23 -3.57,-3.46 -2.02,-2.15 -3.97,-2.81 -4.38,-2.62 -4.45,-3.15 -4.24,-2.78 -10.26,-7.3 -6.96,-4.77 -14.33,-10.53 -1.18,-1.1 -0.91,-1.29 -0.16,-0.53 -0.2,-0.9 0.06,-0.55 -0.29,-0.7 -0.13,-1.75 -1.41,-2.07 0.02,-0.65 0.69,-1.19 0.08,-2.63 -0.38,-1.01 -0.14,-1.23 -0.59,-2.04 -0.06,-1.14 -0.23,-0.77 0.04,-0.6 0.36,-0.91 -0.03,-1.01 -0.75,-1.34 -1.16,-1.05 -0.72,-1.06 -0.06,-0.51 0.5,-1.54 0.29,-1.47 -0.04,-0.31 -1.32,-0.52 -1.32,-0.84 -1.32,-1.45 -1.27,-0.57 -1.32,-0.87 -0.4,-0.56 0,0 6.28,-7.61 4.59,-5.13 0.79,-3.8 0.03,-1.54 -0.68,-1.15 -5.91,-6.68 -3.24,-3.33 0,0 10.94,-5.06 -13.78,-19.18 0,0 0.56,-0.28 3.67,-0.92 13.55,-3.21 1.05,-0.08 3.34,6.7 1.39,2.06 2.15,2.32 2.39,1.55 3.54,1.9 1.57,1.58 2.08,4.35 1.4,5.15 0.57,1.39 0.88,-0.09 0.45,-0.37 2.04,-0.05 3.16,0.91 5.38,2.31 8.48,4.6 9.83,5.7 2.12,1.67 0.56,1.05 0.34,1.49 -0.48,2.23 3.4,-0.09 2.64,-0.23 0.55,-0.19 5.38,-12.19 1.04,-1.09 2.19,-1.17 0.88,0.15 1.67,1.93 0.1,7.61 16.19,1.89 0.19,-0.49 0.82,-4.49 0.57,-0.19 5.02,-0.58 3.79,-0.06 2.27,-0.38 1.13,-2.68 0.72,-2.1 0.45,-0.19 0.97,0.22 0.79,2.83 2.14,10.12 1.14,1.1 0.8,0.42 1.03,0.34 8.63,1.19 5.93,0.63 7.97,1.14 -1.4,9.26 -3.99,2.81 -0.17,1.03 -1.45,4.13 -3.35,4.14 -0.64,0.61 -0.94,0.38 -3.85,-0.23 -2.9,-0.54 -2.01,-0.99 -0.82,-0.79 -2,-1.3 -2.06,-0.12 -1.11,0.48 -0.36,0.62 0.36,3.32 -0.45,4.36 -1.29,5.71 -2.53,4.78 -2.13,2.47 -4.4,2.67 -0.89,0.33 -1.42,2.72 4.27,5.79 1.19,1.15 7.06,2.67 1.08,0.06 3.2,-0.78 4.91,3.69 4.39,9.39 0.36,1.15 z"
     title="Buxoro"
     id="UZ-BU" />
     </a>
     <a href="<?=\yii\helpers\Url::to(["/site/filial/?id=3"], true)?>">
  <path
  data-id="fargona"
     d="m 673.77007,331.35972 0.1,-0.66 -0.23,-0.55 -0.74,-0.66 -2.91,-1.31 -1.63,-0.33 -1,-0.4 -0.32,0 -0.9,0.43 -0.43,-0.03 -0.46,-0.21 -0.33,-0.37 -0.46,-1.11 -0.29,-0.31 -0.28,-0.1 -0.15,-0.74 -0.91,-1.77 -0.06,-0.61 0.13,-0.2 0.81,-0.22 1,-0.81 1.19,-0.22 1.1,-0.57 2.05,-0.72 0.8,0 0.47,-0.41 0.12,-0.81 0.44,-0.44 0.14,-0.89 0.19,-0.4 0.4,-0.22 0.59,-0.08 0.77,0.07 0.48,-0.36 0.72,-0.02 0.43,-0.16 0.87,-1.11 1.11,-2.22 0.36,-0.38 0.65,-0.18 0.68,-0.73 0.51,-0.17 0.15,-0.28 0.41,-0.08 0.41,-0.5 0.97,-0.22 0.4,0.28 0.32,0.03 0.05,-0.66 -0.18,-0.99 0.31,-0.23 0.28,0.25 0.66,-0.04 0.44,-0.58 0.3,-1 0.58,-0.53 0.06,-0.26 0,0 0.34,-0.09 0.26,-0.26 4.87,-1.25 3.37,-0.61 6.76,-0.1 0,0.22 -0.37,0.52 -1.36,1.66 0.83,1.97 1.87,1.86 5.59,2.73 0.4,0.08 0.75,-0.42 3.02,-2.85 0.76,-0.99 0.74,-1.45 1.24,-0.8 4.11,-2.23 3.44,-1.03 0,0 3.03,4.48 0.2,-1.45 4.16,0.6 3.02,1.56 0.62,0.65 2.24,3.46 9.25,1.57 0.33,0 0.24,-0.17 2.25,0.45 4.01,1.28 0.31,0.84 0.11,3.61 0,0 -0.49,0.04 -1.07,-0.26 -0.39,0.08 -0.51,1.38 -0.3,0.5 -0.63,0.6 -0.46,0.24 -0.37,0.07 -0.59,-0.2 -0.89,-0.59 -0.46,1.04 0.45,1.71 -0.14,0.34 -0.64,0.71 -0.07,0.57 -0.29,0.4 -1.37,0.41 -1.04,1.34 -0.51,0.38 -0.8,1.13 -1.19,0.52 -0.93,0.86 -0.12,0.26 0.21,0.5 0.98,0.23 0.98,0.89 -0.07,0.49 -1.11,1.03 -0.46,1.08 -0.29,0.32 -0.66,0.33 -0.62,-0.02 -1.27,-0.92 -2.02,-0.47 -0.48,0.39 -0.13,0.48 0.05,0.27 0.74,1.13 0.02,0.53 -0.75,0.5 -0.54,-0.03 -2.49,1.59 -1.32,0.42 -0.92,0.66 -0.35,0.06 -0.25,-0.14 -0.46,-0.85 -0.43,-0.51 -0.24,-0.07 -0.36,-0.4 -0.15,-0.36 0.17,-1.9 -0.19,-0.81 -0.68,-0.91 -0.52,-0.36 -0.77,-0.08 -1.23,0.12 -0.11,0.84 0.24,1.43 -0.21,0.95 0.08,0.56 -0.12,0.2 -0.29,-0.03 -0.81,-0.96 -1,0 -0.55,0.19 -0.92,-0.58 -1.77,-0.79 -0.22,-0.54 0.19,-1.35 -0.24,-0.52 -1.3,-0.03 -1.54,-0.4 -0.63,-0.5 -1.09,-1.23 -0.41,-0.27 -0.49,-0.15 -0.5,0.22 -0.62,0.06 -0.16,-0.31 0.09,-0.39 -0.32,-0.25 -1.53,0.64 -0.75,0.1 -0.27,-0.1 -0.15,-0.27 -0.02,-1 -1.54,0.11 -1.01,-0.34 -1,-0.09 -0.83,0.11 -1.38,0.46 -0.98,-0.02 -0.61,0.21 -2.56,1.78 -1.95,0.35 -2.07,0.9 -0.45,0.29 -0.14,0.27 0.31,0.92 -0.11,0.97 -2.38,0.07 -1.95,0.35 -0.27,-0.09 -1.7,1.26 -2.47,1.1 -1.58,0.33 -1.4,0.12 -3.13,0.69 -0.83,-0.34 -1.18,-2.14 -0.32,-0.88 -0.72,-0.39 -0.53,-0.94 0.13,-0.11 0.07,-1.28 0.37,-0.99 -0.55,-1.75 z"
     title="Farg‘ona"
     id="UZ-FA" /></a>
     <a href="<?=\yii\helpers\Url::to(["/site/filial/?id=6"], true)?>">
  <path
  data-id="jizzax"
     d="m 580.63007,374.69972 -0.48,0.25 -0.21,1.54 -0.32,1.02 -0.82,0.73 -1.08,-0.38 -1.15,0.26 -2.96,-0.47 -1.86,0.81 -0.39,-0.12 -0.79,-0.76 -0.51,-0.24 -1.42,-0.32 -1.77,-0.21 -1.26,0.14 -0.93,0.26 -0.74,-0.13 -1.02,-0.59 -0.74,0.1 -2.23,-0.16 -0.97,-0.48 -0.74,-0.19 -1.09,0.09 -0.6,-0.15 -1.1,-0.85 -0.91,-0.37 -1.37,-0.08 -0.92,0.1 -1.87,-0.84 -0.96,-0.88 -1.38,-0.08 -2.43,-1.65 -0.7,0.39 -1.21,0.32 -1.93,-0.83 -0.4,-0.01 -0.88,1.02 -1.09,0.38 -0.64,0.45 -0.94,1.53 -0.58,0.16 -1.43,0.03 -3.98,1.49 -0.12,0.68 0.2,1.61 -0.41,0.51 -2.22,-0.55 -0.46,0.11 -0.35,0.8 -0.02,1.31 0.32,0.51 0,0 -4.53,-3.82 -1.03,-1.05 -0.65,-0.96 -0.21,-0.95 -0.02,-4.16 0.1,-0.37 3.22,-5.24 0.76,-0.91 0.69,-0.54 2.16,-1.03 1.54,-0.38 1.3,-0.15 -0.08,-1.02 -1.07,-5.96 -0.21,-0.24 -11.87,-2.53 -4.81,-0.4 -2.12,-0.8 -5.83,-3.93 -0.35,-3.71 0.1,-0.35 1.24,-0.29 0.24,-0.16 0.45,-1.34 0.07,-0.81 -1.44,-2.81 -1.86,-1.66 -0.84,-4.1 -0.1,-3.93 0.14,-0.77 0.83,-1.83 -0.01,-1.1 -0.96,-2.18 -4.61,-0.1 -7.79,-0.92 0,0 0.73,-1.79 4.43,-8.59 3.12,-5.32 0.28,-0.74 -1.57,-6.86 -0.23,-0.53 -0.25,-0.23 -4.27,-1.05 -0.95,-0.58 -0.72,-1.27 -1.13,-10.64 6.71,-0.22 0.29,-2.93 0.22,0.04 0.52,-4.76 0,0 17.4,1.31 4.64,0.52 2.72,0.01 0.85,0.56 0.87,0.13 1.25,-0.41 1.27,-0.2 15.41,0.47 1.41,1.29 0.87,0.23 2.05,2.49 3.32,3.08 1.47,-1.3 0.84,1.19 3.05,-1.98 1.38,1.29 0.59,-0.26 0.79,0.47 -2.47,0.53 -1.41,1.48 1.39,3.45 -1.48,1.47 0.08,5.22 -4.07,0.15 -0.73,2.28 1.44,2 2.44,0.68 5.77,3.4 3.59,4.03 3.79,1.34 0.44,0.38 0,0 -0.17,2.84 -0.34,0.61 -1.86,-0.1 -2.1,0.54 -0.48,4.89 0.16,0.27 2.11,-1.02 0.33,-0.1 0.16,0.2 -0.15,0.77 -0.77,2 -4.95,11.04 -0.2,1.52 0.15,0.96 0.34,0.9 0.66,0.97 0.32,0.05 6.55,0.31 4.57,-0.17 4.02,-0.82 2.28,-0.79 7.13,-1.64 0.31,0.68 -1.01,6.41 0,0 -1.55,0.28 -0.09,0.14 -2.89,0.84 -0.24,0.6 0.86,0.8 2.62,1.54 1.23,-0.03 2.15,-0.45 1.31,-0.56 2.87,-0.81 1.23,-0.55 3.43,-0.89 1.68,-0.21 3.15,-0.11 0.84,0.65 0.41,1.28 0.45,2.38 -0.32,0.66 -0.75,0.06 -1.53,-0.36 -0.9,-0.01 -0.75,0.03 -1.52,0.35 -1.17,0.88 -0.21,1.04 -0.15,0.12 -0.46,-0.26 -0.3,-1.29 -0.73,-1.1 -0.65,-0.1 -0.58,0.2 -0.24,0.28 -0.03,0.53 0.35,0.57 0.94,0.94 0.05,0.63 -0.41,1.35 0.03,0.3 1.5,1.4 2.61,3.24 0.54,1.1 0.04,0.75 -0.2,0.69 -0.71,0.72 -0.81,0.1 -0.62,-0.31 -0.6,-0.94 -0.07,-1.78 -1.35,-3.21 -0.72,-0.88 -0.4,-0.07 -0.47,0.22 -0.12,0.4 0.08,1.1 1.04,1.98 0.81,1.92 0.03,0.69 -0.36,0.8 -0.36,0.27 -0.92,0.21 -0.3,0.39 -0.27,1.43 -0.24,0.22 -0.46,0.11 -0.56,-0.42 -0.31,-1.27 -0.78,-0.89 -0.46,-0.13 -1.47,1.23 -0.51,-0.3 -1.2,-0.15 -0.09,1.15 0.3,1.67 -0.32,1.31 -0.49,0.85 -0.25,0.92 -0.3,0.56 -0.64,0.27 -0.63,0.04 -0.42,0.51 0.27,0.64 1.88,2.68 -0.27,1.72 -2.37,2.68 z"
     title="Jizzax"
     id="UZ-JI" /></a>
     <a href="<?=\yii\helpers\Url::to(["/site/filial/?id=4"], true)?>">
  <path
  data-id="namangan"
     d="m 749.31007,281.14972 -0.5,-0.84 -0.46,-0.29 -0.45,-0.07 -0.45,0.24 -1.05,-0.35 -0.76,-0.03 -1.88,1.36 -0.35,0.08 -0.68,-0.3 -1.74,-1.12 -1.14,-0.31 -1.22,-0.14 -1.16,0.79 -0.46,-0.22 -0.56,-0.05 -1.62,-0.65 -0.32,-0.41 0.02,-0.88 -0.56,-0.06 -0.37,-0.2 -0.07,-0.21 0.64,-2 0.92,-1.61 0.78,-0.8 0.47,-0.82 0.56,-1.35 -0.05,-0.25 -1.08,-0.58 -0.85,-1.03 -0.28,-0.65 0.13,-1.3 -0.14,-0.37 -0.38,-0.28 -0.41,0.24 -0.34,0.56 -0.81,0.17 -0.25,-0.17 -0.06,-0.19 0.26,-1.3 -0.62,-1.06 -1.4,-1.35 -1.05,-2.21 -0.37,-0.1 -0.14,0.12 -0.11,1.69 -0.17,0.26 -0.31,0.07 -0.21,-0.41 -0.1,-0.68 -0.31,-0.27 -0.38,-0.03 -0.63,0.45 -0.12,0.4 0.41,0.66 -0.06,0.56 -0.27,0.21 -0.42,-0.26 -0.41,-0.71 -0.1,-0.46 0.09,-0.43 0.84,-1.1 0.46,-0.83 0.07,-0.47 -0.24,-1.41 0.13,-0.3 -0.06,-0.74 0.43,-0.9 -0.35,-0.61 -1.14,-0.05 -0.36,0.1 -0.77,0.72 -0.76,1.36 -0.44,0.5 -1.26,0.43 -0.24,0.35 0.05,0.42 0.32,0.24 1.14,0.11 0.57,0.23 0.5,0.78 0.13,0.68 -0.34,1.22 -0.44,0.81 -0.04,0.41 0.8,1.23 -0.29,0.66 -0.66,0.72 -0.36,0.7 -0.27,0.98 -0.22,0.01 -0.36,-0.25 -0.26,0.25 -0.32,0.72 -0.6,0.49 -0.17,0.58 -0.17,0.04 -0.25,0.95 -0.38,0.32 -0.6,-0.16 -0.61,-0.69 -0.4,-0.22 -0.88,-0.02 -0.42,0.35 -0.67,0.14 -0.82,-0.51 -0.32,0.07 -1.44,1.72 -0.05,0.41 0.25,0.77 -0.26,0.85 0,0.53 0.18,0.37 0.86,0.37 0.3,0.72 -0.89,2 -0.32,1.99 -0.71,1.61 -0.03,0.37 -1.03,1.12 -0.53,0.04 -0.26,-0.17 -0.15,-0.29 -0.23,-1.77 -0.23,-0.49 -0.79,-0.83 -0.39,-0.19 -0.54,0.01 -0.51,0.3 -0.35,0.41 -0.23,1.41 -0.4,0.76 -0.8,0.75 -0.51,0.12 -0.38,-0.11 -0.14,-0.3 0.22,-2.39 -0.26,-1.43 -0.26,-0.42 -0.95,-0.63 -0.3,-0.04 -0.62,0.29 -0.13,0.4 0.04,0.54 -0.31,0.23 -0.28,-0.06 -0.43,-1.06 -0.32,-0.01 -0.35,0.3 -0.47,0.72 -0.48,-0.02 -0.26,0.15 -0.83,0.88 -0.5,0.29 -0.4,0.03 -1.21,-0.43 -0.41,-0.37 -0.61,-1.02 -0.8,-0.19 -1.23,-0.8 -0.59,0.03 -2.66,1.81 -0.56,-0.2 -0.54,-1.23 -0.92,-0.86 -0.86,-0.54 -0.58,-0.85 -0.53,-0.5 -0.27,-0.04 -0.71,0.32 -0.47,0.68 -0.83,2.06 -0.3,0.44 -0.33,0.16 -0.86,-0.35 -0.5,-0.61 -0.22,-0.9 0.03,-1.09 0.74,-0.95 0.18,-0.6 -0.1,-0.35 -0.62,-0.91 -0.25,-0.74 -0.07,-1.79 0.42,-0.92 0.25,-1.16 -0.49,-2.05 -2.55,-4.08 -0.42,-1.17 -0.19,-0.16 -1.21,-0.34 -0.31,0.03 -1.14,0.85 -1.23,-0.06 -1.52,0.48 -0.98,0.84 -0.41,0.74 -1.68,1.39 -2.08,0 -0.5,-0.54 0,0 -0.68,1.93 -2.97,4.11 0.67,7.3 1.91,2.62 0.66,1.34 0.24,2.33 0.03,1.75 -0.15,0.88 0.2,0.42 0,0 0.45,-0.02 0.73,0.4 0.27,0.68 1.1,0.89 0.07,0.62 0.32,0.24 0.88,1.19 0.68,0.02 0.55,1.37 1.01,1.25 0.39,0.89 1.11,1.65 0.46,1.18 0.27,0.01 0.12,0.37 0.97,0.83 0.56,1.37 0.83,0.31 0.53,0.47 0.73,0.99 -0.48,0.38 -0.17,-0.09 -0.29,0.18 0.08,0.32 -0.19,0.29 -0.37,0.1 -0.57,-0.25 -0.47,-1.21 -0.37,1.24 0.04,0.71 0.32,0.64 0.83,-0.24 1.23,0.1 0.85,0.45 -0.28,0.18 0.9,0.04 0.43,0.23 1,0.85 0.22,0.49 0,0 0.34,-0.09 0.26,-0.26 4.87,-1.25 3.38,-0.61 6.75,-0.1 0,0.22 -0.37,0.52 -1.36,1.66 0.83,1.97 1.88,1.85 5.58,2.73 0.4,0.08 0.76,-0.42 3.02,-2.85 0.76,-1 0.75,-1.45 1.23,-0.79 4.11,-2.23 3.44,-1.03 0,0 1.9,-1.21 -2.2,-2.67 2.03,-1.89 1.2,-0.8 8.59,-2.19 3.67,0.03 0.58,0.25 0.73,0.56 3.33,0.75 1.46,0.15 4.88,-0.44 0.53,-0.27 0.4,-0.46 1.26,-5.86 0,0 -0.42,-0.26 -0.45,-0.58 0.16,-0.33 1.26,-0.3 0.53,-0.41 0.47,-1.02 -0.45,-0.82 -0.77,-4.63 z m -70.46,14.69 -3.18,-4.31 -1.22,-0.9 -1.01,-0.03 -0.19,-0.68 0.27,-0.47 0.73,-0.56 -0.27,0.38 1.2,0.51 1.51,1.77 1.73,2.35 0.64,1.58 -0.21,0.36 z"
     title="Namangan"
     id="UZ-NG" /></a>
     <a href="<?=\yii\helpers\Url::to(["/site/filial/?id=8"], true)?>">
  <path
    data-id="navoiy"
     d="m 498.40007,274.98972 -0.52,4.76 -0.22,-0.04 -0.29,2.93 -6.71,0.22 1.13,10.64 0.72,1.27 0.95,0.58 4.27,1.05 0.25,0.23 0.23,0.53 1.57,6.86 -0.28,0.74 -3.12,5.32 -4.43,8.59 -0.73,1.79 0,0 -1.26,-3.47 -1.86,-2.66 -0.97,-1.12 -0.58,-0.27 -2.11,1.92 -2.35,1.29 -1.38,0.11 -1.83,-0.25 -1.04,-0.79 -1.03,-1.55 -1.19,-0.09 -1.11,0.19 -0.91,1.08 -2.15,4.68 -0.59,4.91 0.25,0.35 0.54,0.2 0.37,0.72 -0.17,2.27 -0.88,6.12 -0.86,1.34 -2.3,6.07 0.2,0.98 0.8,0.1 1.43,-0.92 0.82,0.07 0.18,0.45 -0.14,1.12 -0.43,0.62 -3.49,3.29 -1.63,0.76 -8.91,1.93 -1.22,-0.2 -5.38,-2.3 -2.09,-1.14 -0.46,-1.04 -1,-1.55 -5.48,-2.07 -1.01,-0.17 -0.52,0.28 -0.35,0.57 -0.16,0.7 0.05,0.97 -0.42,5.8 -1.83,5.54 -0.71,1.29 -0.52,0.3 -0.59,0.01 -2.85,-0.88 -1,-0.49 -8.65,2.92 -0.5,0.35 -0.08,0.37 0.33,0.77 1.48,1.53 0.97,0.81 0.94,1.45 1.35,5.22 -0.17,0.97 -0.51,1.46 -1.17,2.34 -0.04,0.63 0.17,0.81 0.81,1.81 2.12,3.8 0,0 -0.4,0.43 -0.53,0.21 -2.6,0.4 -1.39,0.37 -0.8,0.38 -1.17,0.81 0,0 0,0 0,0 -0.29,-3.38 -0.36,-1.15 -4.39,-9.39 -4.91,-3.69 -3.2,0.78 -1.08,-0.06 -7.06,-2.67 -1.19,-1.15 -4.27,-5.79 1.42,-2.72 0.89,-0.33 4.4,-2.67 2.13,-2.47 2.53,-4.78 1.29,-5.71 0.45,-4.36 -0.36,-3.32 0.36,-0.62 1.11,-0.48 2.06,0.12 2,1.3 0.82,0.79 2.01,0.99 2.9,0.54 3.85,0.23 0.94,-0.38 0.64,-0.61 3.35,-4.14 1.45,-4.13 0.17,-1.03 3.99,-2.81 1.4,-9.26 -7.97,-1.14 -5.93,-0.63 -8.63,-1.19 -1.03,-0.34 -0.8,-0.42 -1.14,-1.1 -2.14,-10.12 -0.79,-2.83 -0.97,-0.22 -0.45,0.19 -0.72,2.1 -1.13,2.68 -2.27,0.38 -3.79,0.06 -5.02,0.58 -0.57,0.19 -0.82,4.49 -0.19,0.49 -16.19,-1.89 -0.1,-7.61 -1.67,-1.93 -0.88,-0.15 -2.19,1.17 -1.04,1.09 -5.38,12.19 -0.55,0.19 -2.64,0.23 -3.4,0.09 0.48,-2.23 -0.34,-1.49 -0.56,-1.05 -2.12,-1.67 -9.83,-5.7 -8.48,-4.6 -5.38,-2.31 -3.16,-0.91 -2.04,0.05 -0.45,0.37 -0.88,0.09 -0.57,-1.39 -1.4,-5.15 -2.08,-4.35 -1.57,-1.58 -3.54,-1.9 -2.39,-1.55 -2.15,-2.32 -1.39,-2.06 -3.34,-6.7 -1.05,0.08 -13.55,3.21 -3.67,0.92 -0.56,0.28 0,0 -20.92,-28.67 12.85,-7.1 -6.74,-12.15 1.26,-15.77 27.66,-52.21 -15.44,-4.18 -5.85,-10.49 0,0 42.36,-8.25 20.45,-3.61 3.48,0.68 3.01,0.36 9.7,1.05 5.93,0.38 2.4,0.42 14.18,1.09 13.64,0.67 0.2,-0.15 0.85,-0.04 10.52,-5.17 7,-3.06 4.38,-2.19 2.06,-0.51 1.08,-0.11 1.67,0.07 0.83,0.32 0.76,0.58 0.99,1.14 5.73,12.62 2.02,1.91 3.6,3.74 10.88,9.68 1.5,6.07 6.64,21.39 12.57,-5.92 0.35,31.3 -0.05,7.21 -0.58,-0.18 -2.42,-1.23 -0.25,0 -0.1,6.6 -0.91,1.1 -0.3,16.64 0.07,2.15 24.14,2.92 3.48,39.7 z"
     title="Navoiy"
     id="UZ-NW" /></a>
     <a href="<?=\yii\helpers\Url::to(["/site/filial/?id=7"], true)?>">
  <path
  data-id="qashqadaryo"
     d="m 421.26007,383.36972 1.17,-0.81 0.8,-0.38 1.39,-0.37 2.6,-0.4 0.53,-0.21 0.4,-0.43 0,0 0.69,0.16 17.55,0.53 1.49,-0.18 1.31,-0.55 1.43,-1.07 0.19,-0.27 0.04,-0.33 4.31,0.88 3.3,3.81 2.77,4.65 0.09,1.49 0.22,0.21 0.72,0.25 3.08,0.78 1.53,-0.04 2.21,-1.38 3.27,-1.67 7.55,-1.87 0.63,0.16 1.17,0.75 1.65,1.44 1.64,1.15 0.69,0.33 0.3,-0.01 3.64,-1.56 0.82,-0.96 1.1,-1.78 0.83,-0.95 0.81,-0.28 1.19,-0.06 8.57,1.53 0.63,0.67 0.49,1.32 -0.11,1.26 -0.46,1.7 0.06,0.58 0.33,0.48 0.93,0.53 1.89,0.15 3.88,-0.24 0.82,-0.21 0.42,-0.48 0.11,-0.35 -0.07,-1.78 0.43,-0.48 0.88,-0.05 4.46,1.27 2.56,1.09 3.84,1.19 1.65,0.32 1,-0.23 0,0 0.38,1.58 1.39,2.41 0.73,0.75 0.96,0.53 1.76,0.37 0.62,0.41 0.85,0.29 0.8,0.02 1.03,-0.22 1.08,0.19 1.02,0.47 0.65,1.67 0.57,0.23 1.59,0.08 0.28,0.29 -0.01,0.57 -0.35,0.51 -0.21,2.5 0.44,1.26 0.13,2.05 0.39,0.56 0,0 -0.8,0.82 -0.98,0.58 -3.99,0.23 -0.86,0.26 -0.51,0.25 -0.67,0.57 -0.45,0.84 -0.06,0.4 0.54,3.14 1.02,2.1 0.38,0.46 0.15,0.52 0.13,4.2 -1.34,4.3 -0.54,-0.18 -1.41,-1.43 -1,-0.32 -1.43,-0.07 -1.14,0.33 -0.45,0.34 -0.59,0.64 -0.81,1.3 -1.19,2.22 -8.89,8.88 -0.72,3.35 -0.16,1.52 -0.37,1.4 -0.45,0.87 -2.42,2.43 -1.83,1.28 -3.54,1.85 -11.58,12.1 -0.43,1.25 -1.04,4.27 0.27,0.9 0,0 -2.39,-2.79 -1.05,-0.67 -1.48,-0.61 -3.19,-0.35 -2.63,0.82 -0.57,0.06 -1.26,-0.33 -1.23,-1.07 -2.79,-1.64 -1.83,-2.07 -1.29,-2.33 -0.47,-0.3 -1.9,-0.11 -3.5,-1.03 -0.63,-0.4 -0.5,-0.97 -1.17,-0.4 -0.87,-0.13 -0.76,-0.8 -0.47,-0.17 -1.37,0.07 -0.83,-0.27 -0.9,-0.6 -1.91,-1.96 -0.9,-0.24 -1.07,0.01 -0.97,0.27 -0.73,1.4 -0.56,-0.07 -0.14,0.1 -0.16,0.64 -0.37,0.17 -0.53,0 -4.68,-0.96 -9.93,-3.92 -1.95,-1.12 -6.41,-4.13 -1.85,-1.49 -2.7,-2.52 -7.61,-7.6 -0.58,-0.39 -2.73,-1.25 -3.5,-1.33 -2.94,-1.37 -1.73,-1.26 -0.61,-0.66 -8.98,-5.55 -2.72,-1.9 -5.54,-5.13 -1.19,-1.31 0,0 5.61,-6.23 18.12,-6.64 0.28,-0.61 -0.23,-0.51 -0.82,-1.17 -0.83,-0.88 -0.71,-1.2 -0.15,-0.86 0.35,-1.03 4.4,-4.71 0.57,-0.11 3.35,-2.22 z"
     title="Qashqadaryo"
     id="UZ-QA" /></a>
     <a href="<?=\yii\helpers\Url::to(["/site/filial/?id=5"], true)?>">
  <path
  data-id="qoraqalpoq"
     d="m 157.43007,23.739722 0.35,7.72 -2.01,5.84 -3.22,5.44 -2.82,6.04 -1.01,4.23 -2.21,0 -1.81,0.2 -1.41,1.41 -0.6,2.62 0.81,4.63 1.21,2.62 0.81,2.82 -2.42,0.81 -3.02,-1.61 -2.42,1.41 -1.81,4.03 -2.42,4.23 -2.21,2.42 -3.02,-1.81 -0.4,-4.03 -0.2,-6.24 -1.21,-1.61 0,-3.45 1.61,0 1.21,2.82 1.81,1.01 2.82,-1.01 1.41,-3.02 0,-4.03 1.01,-3.22 -3.03,-1.81 -3.22,-2.62 -0.6,-2.42 1.81,-2.01 1.81,-0.4 2.01,1.01 0.2,-8.25 2.82,-0.4 -0.2,-3.22 -2.42,-0.6 -3.82,-0.6 -1.41,1.01 -1.61,2.01 -2.21,1.01 1.41,-2.21 2.82,-5.23 1.81,-2.62 -1.01,-3.02 -2.01,-2.82 0.6,-3.82 1.01,-3.42 3.4,-6.4299998 0,0 23.01,16.5899998 z m -38.32,-23.3999998 -0.18,3.55 -1.61,3.22 -0.2,4.8299998 -3.82,3.42 -2.01,3.22 -0.2,5.84 -2.62,2.62 -1.21,5.64 -3.02,4.83 -2.01,5.43 -0.4,4.63 0.2,6.04 1.21,2.82 2.01,3.62 -0.4,2.62 -3.02,8.45 0.4,5.23 2.21,5.23 2.21,2.62 3.02,1.41 4.03,1.61 3.02,0.2 2.62,2.01 2.01,0.6 1.01,-2.01 1.61,-0.4 2.42,0.2 1.81,-0.81 5.03,-1.61 2.62,-1.21 1.61,1.01 0.81,3.62 -1.81,2.21 -2.83,1.83 1.01,3.62 2.21,1.01 1.81,1.81 5.23,0.809998 2.62,2.21 3.02,0.4 6.04,0.6 4.43,0.2 3.62,-2.21 2.42,1.41 1.21,1.01 3.82,-0.81 2.01,-0.6 3.62,1.21 5.03,-1.01 4.83,-1.61 7.05,-2.819998 0.6,-2.62 3.42,0 1.21,-1.81 -1,-1.8 1.61,-3.42 6.24,-5.03 4.63,-4.63 2.82,-5.03 0.81,-3.82 -1.01,-1.41 -1.61,-1.41 -1.01,-2.01 3.88,-0.35 0,0 21.68,15.65 2.21,7.05 6.07,6.13 6.39,7.709998 0.29,0.64 0.64,0.59 2.53,3.01 5.7,7.01 16.83,20.9 1.63,1.56 0.55,0.05 0,0 5.85,10.5 15.43,4.18 -27.66,52.2 -1.26,15.77 6.74,12.15 -12.85,7.1 20.92,28.67 0,0 13.79,19.18 -10.94,5.06 0,0 -2.55,1.21 -0.65,-0.19 -0.27,-0.22 -4.56,-7.41 -1.5,-2.77 -8,-8.81 -3.08,-1.91 -3.52,-1.86 -8.95,-2.06 -3.04,-0.02 -0.62,0.2 -1.39,0.77 -0.78,0.89 -1.17,2.3 -0.51,1.87 -0.72,0.77 -1.49,0 -2.25,-1.44 -0.25,-1.16 -0.37,-0.87 -2.02,-2.27 -0.71,-0.61 -0.74,-0.29 -2.16,-0.36 -1.41,-0.58 -5.96,-4.54 -8.23,-7.31 -1.57,-1.5 -3.35,-3.9 -5.17,-4.83 -0.69,-0.31 -0.67,-0.65 -0.37,-0.46 -3.08,-5.39 -0.41,-2.46 -0.04,-2.63 -0.17,-0.58 -0.39,-0.48 -5.28,-1.12 -4.26,1.39 -1.9,0.84 -2.67,5.23 0,0 -0.22,-0.53 -0.5,-0.6 -0.55,-0.39 -2.42,-0.83 -0.81,-0.51 -1.78,-2.19 -0.17,0.04 -0.33,-0.35 -0.88,0.2 -1.26,-1.24 -0.19,-0.81 0.19,-0.34 0.56,-0.45 2.82,-0.2 0.35,-0.45 -0.2,-0.8 -0.51,-0.73 -0.41,-0.97 -0.22,-0.94 -0.16,-2.27 -1.26,-1.64 -0.03,-0.67 0.18,-0.48 1.09,-0.58 0.42,0.19 0.85,0.1 0.46,-0.11 0.45,-0.43 0.25,-0.39 0.02,-0.64 -0.49,-1.19 -0.48,-0.56 -0.99,-0.6 -1.75,-0.24 -0.58,-0.24 -0.82,-0.71 -0.83,-1.12 -0.68,-1.36 -0.63,-0.56 -1.97,-0.64 -1.04,-0.84 -0.31,0.55 -0.46,1.43 -0.36,0.35 -0.5,0.01 -1.8,-0.55 -0.68,-0.35 -0.46,0.02 -0.54,-0.21 -1.97,-0.04 -1.57,0.37 -1.51,0 -1.34,0.16 -7.41,0.1 -0.57,-0.45 -0.73,-1.4 -0.65,-0.3 -0.88,-1.06 -4.04,-4.03 -0.04,-0.4 0.46,-1.24 -0.11,-1.23 -3.41,-4.45 -0.47,-0.46 -1.11,-0.66 -0.4,-0.06 -1.09,0.3 -0.96,0.77 -0.57,0.24 -2.6,-0.17 -0.7,-0.22 -1.58,-0.86 -2.27,-0.66 -0.67,-0.32 -1.73,-1.5 -4.19,-4.6 -4.81,-5.35 -3.08,-3.9 -0.48,-0.43 -0.03,0.85 -0.31,1.18 0.1,0.55 0.89,0.89 0.04,0.29 -0.17,0.52 -0.34,0.22 -0.42,-0.01 -0.55,-0.31 -0.63,0 -0.51,0.63 0,0.17 0.69,0.57 0.26,0.42 -0.42,2.18 -0.31,0.49 -0.49,0.3 -1.15,-0.37 -2.65,0.5 -1.07,0.06 -1.32,-0.64 -1.21,-0.24 -1.19,-0.57 -1.49,-0.41 -2.9,-0.6 -0.9,0.03 -1.42,0.57 -1.04,0.6 -2.33,1.94 -0.62,0.06 -0.410003,0.35 -0.18,0.69 0.32,0.76 1.860003,1.35 2.37,1.33 0.99,0.38 1.35,0.25 0.45,0.54 2.67,6.2 1.3,2.05 0.57,0.68 0.19,0.94 -0.04,1.21 0.44,0.4 0.53,-0.13 3.15,1.98 0.96,0.79 0.13,0.71 -0.51,1.04 -0.37,0.26 -0.43,0.02 -2.11,-0.5 -1.87,0.38 -0.19,-0.67 0.12,-2.02 -0.11,-1.05 -0.81,-2.86 -0.71,-1.34 -0.89,-0.99 -1.25,-0.84 -4.85,-1.25 -0.8,0.05 -2.180003,1.13 -1.3,0.48 -0.19,-0.1 -0.19,-0.72 -0.92,-0.65 -0.29,-0.37 -0.27,-1.2 -0.85,-0.75 -0.96,-0.18 -1.43,0.31 -0.99,0.68 -0.53,-0.01 -0.27,0.29 -0.4,1.83 -0.29,0.75 -0.32,-0.13 -0.74,-0.86 -0.44,-0.11 -0.67,0.22 -0.22,0.39 -0.28,1.55 0.34,0.78 0.89,0.82 0.44,0.72 0.33,1.08 -0.02,0.54 -0.37,1.05 0.03,1.41 -0.24,1.11 0.12,1.55 -0.2,1.61 -0.18,0.6 -0.34,0.39 -0.47,0.16 -0.85,-0.03 -1.66,-0.69 -0.44,0.1 -0.28,0.52 -0.34,1.2 0.7,1.2 0.44,1.1 -0.19,0.42 -0.87,0.12 -3.06,-0.52 -2.59,0.89 -1.77,0.93 -0.74,0.18 -0.6,-0.02 -1.62,-0.99 -1.87,-0.37 -2.29,-0.18 -5.17,0.28 -1.96,0.73 -2.52,1.24 -2.19,1.6 -1.26,1.09 -1.12,1.61 -0.41,0.87 -0.68,1.59 -1.07,3.33 -0.61,0.85 -1.13,1.1 -0.71,0.43 -1.37,0.51 -2.16,0.64 -0.73,0.44 -0.86,0.79 -0.92,1.92 -0.31,2.04 -0.45,1.83 0.05,2.75 0.3,2.68 -0.14,2.73 0.56,2.37 0.4,0.99 0.38,0.5 -0.02,0.24 0.36,0.16 0.53,1.03 0.24,1.15 0.09,0.8 -0.2,1.22 0,2.34 0.42,3.14 0.3,0.99 0.38,0.72 1.85,2.64 0.91,0.02 1.95,-0.6 0.43,0.4 0.04,0.52 -0.32,0.71 -0.4,0.4 -0.53,0.33 -1.98,0.69 -0.84,0.79 -0.46,0.88 -0.04,1.5 -0.32,0.67 -0.49,0.54 -0.55,0.29 -1.32,0 -1.8,-0.44 -3.96,-0.34 -4.15,-0.59 -6.75,-0.42 -3.77,-0.08 -5.88,-0.68 -3.49,-0.26 -1.88,0.01 -5.1800003,-0.47 -9.41999997,-0.39 -0.08,-232.559998 1.51999997,-0.39 1.43,-0.63 30.1400003,-9.85 0.02,-0.13 1.67,-0.29 0.34,-0.35 1.01,-0.34 13.14,-4.2 43.66,-13.4999998 6.65,-2.22 2.220003,-0.46 17.06,-5.04 z"
     title="Qoraqalpog‘iston Respublikasi"
     id="UZ-QR" /></a>
     <a href="<?=\yii\helpers\Url::to(["/site/filial/?id=9"], true)?>">
  <path
  data-id="samarqand"
     d="m 532.92007,390.83972 -0.11,0.3 -1.6,-0.31 -0.97,0.21 -3.33,1.15 -0.23,0.29 0,0.19 0,0 -1,0.23 -1.65,-0.32 -3.84,-1.19 -2.56,-1.09 -4.46,-1.27 -0.88,0.05 -0.43,0.48 0.07,1.78 -0.11,0.35 -0.42,0.48 -0.82,0.21 -3.88,0.24 -1.89,-0.15 -0.93,-0.53 -0.33,-0.48 -0.06,-0.58 0.46,-1.7 0.11,-1.26 -0.49,-1.32 -0.63,-0.67 -8.57,-1.53 -1.19,0.06 -0.81,0.28 -0.83,0.95 -1.1,1.78 -0.82,0.96 -3.64,1.56 -0.3,0.01 -0.69,-0.33 -1.64,-1.15 -1.65,-1.44 -1.17,-0.75 -0.63,-0.16 -7.55,1.87 -3.27,1.67 -2.21,1.38 -1.53,0.04 -3.08,-0.78 -0.72,-0.25 -0.22,-0.21 -0.09,-1.49 -2.77,-4.65 -3.3,-3.81 -4.31,-0.88 -0.04,0.33 -0.19,0.27 -1.43,1.07 -1.31,0.55 -1.49,0.18 -17.55,-0.53 -0.69,-0.16 0,0 -2.12,-3.8 -0.81,-1.81 -0.17,-0.81 0.04,-0.63 1.17,-2.34 0.51,-1.46 0.17,-0.97 -1.35,-5.22 -0.94,-1.45 -0.97,-0.81 -1.48,-1.53 -0.33,-0.77 0.08,-0.37 0.5,-0.35 8.65,-2.92 1,0.49 2.85,0.88 0.59,-0.01 0.52,-0.3 0.71,-1.29 1.83,-5.54 0.42,-5.8 -0.05,-0.97 0.16,-0.7 0.35,-0.57 0.52,-0.28 1.01,0.17 5.48,2.07 1,1.55 0.46,1.04 2.09,1.14 5.38,2.3 1.22,0.2 8.91,-1.93 1.63,-0.76 3.49,-3.29 0.43,-0.62 0.14,-1.12 -0.18,-0.45 -0.82,-0.07 -1.43,0.92 -0.8,-0.1 -0.2,-0.98 2.3,-6.07 0.86,-1.34 0.88,-6.12 0.17,-2.27 -0.37,-0.72 -0.54,-0.2 -0.25,-0.35 0.59,-4.91 2.15,-4.68 0.91,-1.08 1.11,-0.19 1.19,0.09 1.03,1.55 1.04,0.79 1.83,0.25 1.38,-0.11 2.35,-1.29 2.11,-1.92 0.58,0.27 0.97,1.12 1.86,2.66 1.26,3.47 0,0 7.79,0.92 4.61,0.1 0.96,2.18 0.01,1.1 -0.83,1.83 -0.14,0.77 0.1,3.93 0.84,4.1 1.86,1.66 1.44,2.81 -0.07,0.81 -0.45,1.34 -0.24,0.16 -1.24,0.29 -0.1,0.35 0.35,3.71 5.83,3.93 2.12,0.8 4.81,0.4 11.87,2.53 0.21,0.24 1.07,5.96 0.08,1.02 -1.3,0.15 -1.54,0.38 -2.16,1.03 -0.69,0.54 -0.76,0.91 -3.22,5.24 -0.1,0.37 0.02,4.16 0.21,0.95 0.65,0.96 1.03,1.05 4.53,3.82 0,0 2.23,4.67 0.83,2.3 0.94,1.95 0.21,0.81 z"
     title="Samarqand"
     id="UZ-SA" /></a>
     <a href="<?=\yii\helpers\Url::to(["/site/filial/?id=11"], true)?>">
  <path
  data-id="sirdaryo"
     d="m 596.13007,337.79972 -1.61,0.97 -1.29,0.33 -2.39,-0.67 -0.98,0.44 -5.44,1.74 0,0 1.01,-6.41 -0.31,-0.68 -7.13,1.64 -2.28,0.79 -4.02,0.82 -4.57,0.17 -6.55,-0.31 -0.32,-0.05 -0.66,-0.97 -0.34,-0.9 -0.15,-0.96 0.2,-1.52 4.95,-11.04 0.77,-2 0.15,-0.77 -0.16,-0.2 -0.33,0.1 -2.11,1.02 -0.16,-0.27 0.48,-4.89 2.1,-0.54 1.86,0.1 0.34,-0.61 0.17,-2.84 0,0 3.65,3.11 1.89,-0.5 1.91,1.57 -0.54,1.14 4.87,1.43 0.81,-1.12 2.4,0.18 4.31,-1.73 -0.84,-2.09 -2.41,-1.29 -1.13,-3.29 -3.28,-4.53 0.87,-7.45 -1,-2.53 0.86,-0.9 -0.88,-1.39 -3.62,-0.23 -0.01,-1.3 4.92,0.31 0.32,0.6 2.36,-1.47 -0.02,0.24 0.31,0.09 0.2,1.2 0.67,0.25 0.8,-0.37 0.94,0.21 0.37,0.38 -0.14,0.33 -1.44,0.55 -0.19,0.35 -0.03,0.56 0.54,1.06 0.4,-0.33 0,0 4.86,5.52 3.47,3.47 4.92,4.44 4.71,3.91 0.62,0.08 3.03,4.23 -0.5,4.7 -0.86,5.32 -1.01,4.96 0.02,1.06 0.14,0.62 0.5,1.05 -0.25,4.73 0,0 -1.11,-0.35 -2.57,-0.02 -3.36,0.35 z"
     title="Sirdaryo"
     id="UZ-SI" /></a>
     <a href="<?=\yii\helpers\Url::to(["/site/filial/?id=10"], true)?>">
  <path
  data-id="surxondaryo"
     d="m 573.27007,459.46972 -1.03,3.53 -0.14,1.23 -2.3,2.42 -1.64,3.1 0.07,1.57 -0.47,1.11 0.09,0.79 -0.35,0.89 -2.5,1.17 -4.05,0.7 -0.81,1.44 -3.16,6.75 -1.15,1.66 -1.37,0.98 -2.29,2.97 -1.05,2.43 -1.27,2.43 -1.59,1.53 -1.19,3.88 -0.05,2.56 0.26,4.01 -0.56,6.66 -0.71,2.43 -0.68,0.44 -0.59,-1.11 -1.5,-1.2 -0.74,-0.22 -1.38,0.15 -0.42,-0.06 -0.86,-0.76 -1,-0.59 -0.61,0.09 -1.37,0.55 -0.67,0.54 -0.39,0.5 -0.7,0.09 -0.42,-0.65 -0.42,-1.37 -0.74,-0.72 -0.82,-0.4 -0.67,0.14 -0.57,0.38 -1.87,1.72 -1.35,0.46 -1.15,0.68 -1.26,0.11 -1.84,0.47 -0.96,1.03 -1.5,0.63 -0.54,-0.2 -0.86,-0.77 -0.17,-1.53 -0.28,-0.49 -0.77,-0.37 -0.37,-0.87 -0.27,-0.27 -0.97,-0.38 -0.45,-0.34 -0.7,0.15 -0.46,-0.12 -1.52,-0.85 -0.46,-0.71 0.36,-1.53 -0.32,-0.84 -1.73,-0.86 -1.36,-1.41 -0.43,-0.26 -1.93,-0.72 -1.88,0.13 -3.58,1.59 -1.58,-0.19 -0.82,0.07 -2.23,0.76 -1.95,-0.49 -0.95,0.01 -1.1,0.37 -1.6,-0.37 -1.45,0.23 -1.17,-0.12 -1.79,0.07 -1.31,0.54 -0.4,-2.01 0.17,-0.66 0.43,-0.62 0.86,-0.63 1.13,-0.58 3.04,-0.91 0.3,-0.73 0.01,-0.75 -0.43,-1.1 -4.56,-5.54 -0.26,-1.49 0.56,-5.62 -0.29,-1.53 0,-0.6 0.45,-3.11 0.74,-1.79 0.73,-1.12 0.77,-0.76 0.54,-1.27 0.56,-0.73 2.28,-1.33 0.43,-0.4 0.24,-0.83 -0.03,-0.89 -0.54,-1.05 0,0 -0.27,-0.9 1.04,-4.27 0.43,-1.25 11.58,-12.1 3.54,-1.85 1.83,-1.28 2.42,-2.43 0.45,-0.87 0.37,-1.4 0.16,-1.52 0.72,-3.35 8.89,-8.88 1.19,-2.22 0.81,-1.3 0.59,-0.64 0.45,-0.34 1.14,-0.33 1.43,0.07 1,0.32 1.41,1.43 0.54,0.18 1.34,-4.3 -0.13,-4.2 -0.15,-0.52 -0.38,-0.46 -1.02,-2.1 -0.54,-3.14 0.06,-0.4 0.45,-0.84 0.67,-0.57 0.51,-0.25 0.86,-0.26 3.99,-0.23 0.98,-0.58 0.8,-0.82 0,0 0.39,0.53 0.68,0.29 0.91,-0.32 0.62,0.24 1.04,-0.72 2.05,-0.19 1.35,0.82 1.47,0.14 1.05,-1.35 2.05,-0.07 1.04,-0.55 0.45,0.01 1.11,1.16 1.02,0.25 1.84,-0.99 1.25,0.14 1.24,0.82 0.87,1.84 0.31,1.03 2.69,2.1 0.09,0.8 -0.14,1.24 -0.35,0.22 0.3,2.16 -1.26,0.65 -0.59,0.9 -1.03,0.32 -2.5,0.4 -0.35,0.56 2.53,3.68 -0.36,0.67 -1.59,0.19 -1.27,1.22 0.42,1.48 0.87,1.94 -0.01,0.45 -0.47,0.56 -0.33,5.31 2.42,3.21 1,0.81 -0.37,1.12 -0.93,1.45 -0.25,1.01 0.45,0.01 1.48,-0.65 0.46,0.01 1.67,0.94 1.41,2.4 0.21,0.79 0.08,1.36 0.22,0.23 1.34,0.48 1.45,0.71 1,0.69 1.97,2.53 0.02,0.38 0.72,1.32 1.09,1.49 -0.01,0.79 z"
     title="Surxondaryo"
     id="UZ-SU" /></a>
     <a href="<?=\yii\helpers\Url::to(["/site/filial/?id=15"], true)?>">
  <path
  data-id="toshkent-city"
     d="m 618.94007,266.48972 0.05,-0.57 -0.09,-0.14 -0.24,0 -0.3,0.25 -0.13,0.37 -0.75,0.23 -0.71,0.75 -0.7,-0.07 -0.36,0.66 -0.55,-0.27 -0.57,0.11 -1.6,-0.84 -0.2,0.02 -0.26,0.34 -0.82,0.37 -1.03,-0.21 -0.11,-0.18 -0.14,0 -1.2,1.32 -0.1,0.85 -0.45,1.25 -0.14,0.87 -0.12,1.46 0.09,0.34 0.93,0.22 0.29,0.21 0.33,-0.18 0.48,0.25 0.32,0.84 0.16,0.05 0.36,-0.23 0.17,0.25 0.69,0.13 0.57,-0.06 0.01,-0.48 1.08,-0.87 1.09,0.09 0.72,0.23 -0.16,0.41 0.43,0.94 0.37,0.25 0.63,-0.09 1.05,-1.05 0.38,-0.87 -0.07,-1.18 -0.38,-0.73 -0.29,-0.27 0.48,-0.76 0.34,-0.25 -0.13,-0.34 0.05,-0.48 0.29,-0.68 0.15,-0.12 0.4,0.05 -0.09,-0.66 0.28,-0.27 0.12,-0.48 -0.11,-0.32 -0.24,-0.14 z"
     title="Toshkent City"
     id="UZ-TK" /></a>
     <a href="<?=\yii\helpers\Url::to(["/site/filial/?id=13"], true)?>">
  <path
  data-id="toshkent"
     d="m 705.74007,216.12972 -0.15,-0.38 -0.65,-0.51 -0.79,-0.38 -3.33,-3 -0.94,-0.54 -1.75,-0.21 -1.22,-0.7 -0.46,-0.02 -0.86,0.21 -1.14,0.5 -1.25,1.16 -0.68,0.03 -0.94,-0.34 -0.42,0.04 -1.77,2.24 -1.02,0.69 -0.96,0.43 -1.18,0.89 -0.7,0.02 -1.06,-1.01 -0.52,0.16 -0.58,0.56 -0.67,0.73 -0.84,1.38 -0.82,0.66 -0.55,0.9 -0.98,0.78 -0.75,1.09 -0.15,1.26 -0.91,1.8 -1.1,2.99 0.05,0.2 -0.22,0.48 -0.74,0.26 -0.42,-0.02 -1.23,-1.13 -0.75,-0.21 -0.15,-0.63 0.11,-1.61 -0.55,-0.91 -2.54,-1.39 -2.69,-2.37 -0.37,-0.16 -0.69,0.14 -0.37,0.46 -0.3,2.12 -0.22,0.37 -0.97,0.87 -0.3,0.69 -1.58,0.96 -0.31,0.5 0.13,1.17 0.34,1.39 -0.08,1.08 -1.04,0.74 -0.96,0.31 -0.49,0.55 -0.54,-0.02 -1.16,0.55 -0.89,1.3 -1.07,0.9 -0.44,0.76 -0.74,2.01 -0.59,1.01 -3.19,1.6 -1.34,0.96 -0.73,2.14 -0.32,0.3 -0.33,0.12 -0.36,-0.12 -0.16,-0.29 0.05,-0.56 -0.38,-0.67 -0.39,-0.07 -0.68,0.2 -0.26,0.31 -1.65,3.99 -2.93,1.2 -1.2,-1.04 -0.74,-0.33 -0.5,0 -1.67,1.05 -2.04,0.33 -0.25,-0.13 -0.84,0.13 -0.31,0.2 -0.2,0.44 -0.53,0.53 -0.68,0.33 -2.74,0.65 -0.52,0.23 -1.22,1.14 -0.29,0.51 -0.95,0.71 -1.3,1.39 -0.4,0.54 -0.5,1.56 -0.23,0.28 -0.74,0.38 -1.22,0.35 -0.38,-0.06 -0.33,0.12 -1.68,1.43 -0.67,1.1 0.02,0.52 0.33,0.54 1.17,0.76 -0.34,1.01 -0.41,0.21 -2.21,-0.35 -0.53,0.23 -0.83,0.04 -1.31,0.35 -0.47,-0.02 -1,-0.58 -0.56,-0.14 -1.1,0.13 -0.36,-0.12 -1.5,0.32 -1.15,0.69 -0.64,1.9 -0.44,0.5 -2.23,1.26 -1.14,2.84 -0.66,0.46 -0.51,-0.06 -0.59,-0.58 -0.29,-0.12 -0.51,0.16 -1.98,3.07 -0.19,2.71 -0.23,0.37 -1.39,1.17 -0.3,1.8 -0.21,0.14 -0.85,-0.15 -0.68,0.46 -0.65,0.86 -1.41,1.37 -1.53,2.02 -0.74,1.15 -0.48,1.1 -1.66,2.09 -0.72,1.67 -0.15,1.51 -0.17,0.35 -1.33,1.21 -1.83,0.72 -1.04,0.86 0,0 4.86,5.52 3.47,3.47 4.92,4.44 4.71,3.91 0.62,0.08 3.03,4.23 -0.5,4.7 -0.86,5.32 -1.01,4.96 0.01,1.06 0.14,0.62 0.5,1.06 -0.25,4.73 0,0 2.55,0.22 0.64,-0.05 1.05,0.37 1.09,-0.09 0.77,-0.25 1.3,0.31 1.96,0.04 1.12,0.62 0.48,-0.4 -0.84,-2.12 -0.41,-0.42 -1.38,-0.27 -0.41,-0.42 0.24,-0.85 -0.35,-0.58 0.18,-0.62 1.75,0.24 0.83,-0.06 1.13,-1.07 0.01,-0.91 0.33,-0.55 -0.02,-1.21 -1.04,-0.83 -0.42,-0.5 0.01,-0.83 -0.29,-0.81 -0.4,-0.35 0.24,-0.85 -0.47,-0.19 -0.61,-2.07 -0.42,-0.5 0.01,-0.83 0.35,-0.41 0.04,-0.76 -0.66,-0.57 -1.34,-1.85 -0.07,-0.33 0.27,-0.64 1.56,-1.05 1.82,-0.24 0.87,0.17 0.3,-0.08 0.26,-0.27 -0.03,-0.18 0.4,-0.75 0.48,-0.23 0.26,-1.27 -0.56,-1.23 -0.34,-1.13 0.21,-3.51 0.06,-0.32 0.33,-0.39 0.2,-0.95 1.84,-2.59 1.64,-0.2 0.66,0.33 2.53,0.7 1.21,0.15 0.75,0.74 0.85,1.71 0.25,1.19 0.55,0.78 1.26,0.9 0.73,0.88 0.69,0.11 0.4,0.21 0.5,1.3 0.3,0.41 0.66,0.15 1.62,-0.11 0.93,-0.59 1.4,-3.02 0.45,-0.4 0.71,-0.21 1.43,0.41 0.3,-0.03 0.94,-1.01 1.11,-0.66 0.43,-0.01 1.59,0.98 0.21,0.01 1.18,-1.12 0.76,-0.49 2.03,-0.29 0.83,-0.36 1.06,-0.9 1.43,-0.56 2.38,-2.32 0.31,-0.44 0.28,-0.87 0.49,-0.59 0.59,-0.11 1.03,0.41 1.14,0.18 1.46,-0.94 0.88,-0.39 0.72,-1.02 1.64,-0.99 1.2,-0.03 0.68,-0.23 0.37,-0.36 0.51,-1.01 0.01,-0.36 -0.29,-0.93 0.15,-0.72 0.68,-0.82 0.03,-0.76 0.3,-0.53 -0.28,-1.28 0.11,-0.46 0.38,-0.28 0.4,-0.94 0.55,-0.6 1.3,-0.52 1.03,0.25 0,0 -0.2,-0.42 0.15,-0.88 -0.03,-1.75 -0.24,-2.33 -0.66,-1.34 -1.91,-2.62 -0.67,-7.3 2.97,-4.11 0.68,-1.93 0,0 -0.49,-1.01 -0.48,-0.56 -0.85,-0.56 -1.21,-1.45 -1.17,-0.12 -0.5,-0.52 -0.63,-1.47 -0.4,-0.27 -1.31,-0.56 -1.07,-0.18 -0.97,0.06 -0.52,0.28 -0.82,0.1 -0.94,-0.24 -1.25,0.09 -0.63,-0.37 -0.16,-0.37 -0.17,-1.24 0.08,-1.97 0.28,-0.74 0.41,-0.58 1.27,-0.54 0.69,-0.12 1.28,0.11 1.66,-1.54 1.3,0.05 0.85,-0.4 1.51,-1.46 0.58,-0.9 0.3,-0.23 2.07,-1.13 0.54,-0.16 1.66,-1.13 0.67,-1.34 0.09,-2.21 0.24,-0.49 0.62,-0.59 1.24,-0.56 2.17,-1.52 0.33,-1.21 1.12,-0.8 0.37,-0.42 0.74,-1.53 1.05,-1.08 1.19,-0.57 0.65,-0.05 0.88,0.32 0.41,-0.01 0.17,-0.19 0.17,-0.82 0.22,-0.2 0.68,0.46 1.04,0.36 0.88,0.01 0.43,-0.15 0.89,-0.9 0.3,-0.51 0.16,-1.82 -0.91,-1.58 0.34,-0.9 0.65,-0.66 0.12,-0.73 0.17,-0.29 0.6,-0.29 0.8,0 1.87,1.04 0.81,0.2 0.77,0 1.05,-0.52 1.29,-1.1 0.68,-0.3 1.76,-1.81 0.81,-0.31 2.68,-2.56 1.08,-0.41 0.82,-0.03 1.27,0.31 0.4,-0.62 0.7,-0.54 0.45,-0.18 0.2,-0.28 0.1,-1.57 0.33,-0.45 z m -86.22,51.43 -0.36,0.46 0.09,0.66 -0.39,-0.05 -0.16,0.11 -0.29,0.68 -0.05,0.48 0.14,0.34 -0.34,0.25 -0.48,0.75 0.57,0.75 0.17,0.55 0,0.89 -0.15,0.55 -0.95,1.14 -0.33,0.23 -0.64,0.09 -0.36,-0.25 -0.43,-0.93 0.16,-0.41 -0.72,-0.23 -1.08,-0.09 -1.08,0.87 -0.02,0.48 -0.57,0.07 -0.69,-0.14 -0.17,-0.25 -0.36,0.23 -0.16,-0.05 -0.33,-0.84 -0.48,-0.25 -0.33,0.18 -0.29,-0.21 -0.93,-0.23 -0.09,-0.34 0.12,-1.46 0.14,-0.87 0.45,-1.25 0.1,-0.84 1.2,-1.32 0.14,0 0.1,0.18 1.03,0.21 0.83,-0.37 0.26,-0.34 0.21,-0.02 1.6,0.84 0.57,-0.11 0.55,0.27 0.36,-0.66 0.71,0.07 0.7,-0.75 0.6,-0.11 0.38,-0.62 0.45,-0.11 0.04,0.71 0.51,0.46 0.05,0.6 z"
     title="Toshkent"
     id="UZ-TO" /></a>
     <a href="<?=\yii\helpers\Url::to(["/site/filial/?id=14"], true)?>">
  <path
  data-id="xorazm"
     d="m 282.54007,312.32972 -1.26,-2.86 -0.52,-0.75 -0.69,-0.61 -0.3,-0.81 -0.16,-2.77 -0.46,-0.74 -0.26,-1.03 -1.22,-2.04 -0.09,-1.22 0.16,-1.18 -0.07,-1.98 -0.15,-0.48 -0.25,-2.85 0.23,-1.62 -0.22,-0.4 -0.51,-0.21 -0.18,-0.72 0.02,-0.64 -0.29,-0.81 -0.74,-0.94 -1.47,-0.78 -0.57,-0.11 -0.45,-0.26 -0.3,-0.56 0.19,-0.94 -0.37,-1.05 -0.47,-0.87 -1.22,-0.73 -1.88,-1.98 -1.13,-0.34 -1.49,-1.01 -2.03,-2.41 -0.48,-0.3 -1.27,-0.13 -0.66,-0.23 -0.49,-0.34 -0.41,-0.38 -0.28,-0.95 -0.38,-0.72 -0.85,-0.64 -0.47,-0.01 -1.3,0.57 -1.77,-0.14 -0.74,-0.22 -1.61,-0.9 -1.76,-0.29 -0.52,0.04 -0.47,0.31 -0.82,1.47 0.06,2.65 -0.45,0.8 -0.28,1.57 -0.43,0.91 -0.35,0.39 -0.49,0.33 -1.05,0.16 -0.15,0.14 -1.67,0.19 -0.33,-0.1 -1.32,0.05 -0.2,-0.13 -0.28,0.1 -0.7,-0.16 -3.1,-1.48 -2.13,-2.23 -0.34,-0.15 -2.01,0.18 -1.32,-1.56 -4.91,-0.22 -0.42,0.21 -1.04,-0.07 -2.18,0.32 -2.58,-0.12 -1.68,0.31 -3.93,0.01 -4.76,0.3 -0.88,-0.05 -2.6,0.43 -0.95,-0.06 -0.72,-0.24 -3.24,-1.94 -2.91,-2.6 -6.11,-4.17 -3.37,-1.93 -1.16,-1.04 -0.57,-1.24 -0.02,-0.69 0.16,-0.79 0.04,-2.99 0.28,-1.86 0.38,-0.81 2.14,-2 0.25,-0.61 0,-1.17 -0.27,-0.89 -1.13,-2.02 -1.15,-1.53 -1.85,-2.89 -0.38,-1.5 0.52,-1.24 0.56,-2.25 0.24,-0.14 0.31,0.02 0.9,0.49 1,-0.02 1.98,0.72 1.11,0.53 1.28,1.05 1.19,-0.03 0.78,0.63 0.82,0.27 0.26,-0.4 0.73,0.01 0.26,-0.16 0.03,-0.44 -0.52,-0.7 -1.13,-0.89 -1.16,-1.32 -1.25,-0.57 -1.65,-0.37 -1.39,-0.87 -0.76,-0.85 -0.31,-0.72 0,0 2.67,-5.23 1.9,-0.85 4.26,-1.39 5.28,1.12 0.39,0.48 0.16,0.58 0.04,2.64 0.41,2.45 3.08,5.39 0.38,0.47 0.66,0.65 0.7,0.31 5.17,4.83 3.35,3.9 1.57,1.51 8.23,7.31 5.96,4.54 1.41,0.58 2.16,0.36 0.74,0.29 0.71,0.61 2.01,2.27 0.37,0.87 0.26,1.16 2.25,1.44 1.49,0 0.72,-0.76 0.51,-1.88 1.17,-2.3 0.78,-0.88 1.39,-0.77 0.62,-0.2 3.04,0.01 8.95,2.06 3.52,1.86 3.08,1.91 8,8.81 1.5,2.77 4.56,7.41 0.27,0.22 0.65,0.19 2.55,-1.22 0,0 3.24,3.33 5.91,6.68 0.68,1.15 -0.03,1.54 -0.79,3.8 -4.59,5.13 -6.28,7.61 0,0 z"
     title="Xorazm"
     id="UZ-XO" /></a>
</svg>

        </div>
        <div class="hlist-content">
      <div class="hmhead">
        <h2>  <?=\Yii::t('main', 'Hududiy kengash'); ?></h2>
      </div>
      <!-- item -->

      <?php foreach ($regions as $reg):?>
     <?php if ($reg->id==15):?>
      <div class="hlist" id="toshkent-city">
        <h5><?php if($a=='en-En'){echo(($reg->title_lotin));}                           if($a=='ru-Ru'){echo(($reg->title_ru)); }  if($a=='uz-Uz'){ echo(($reg->title_kril));}?></h5>
        <div class="hlist-item">
          <span class="name">  <?=\Yii::t('main', 'Manzili'); ?>:</span>
          <span class="text"><?php if($a=='en-En') {echo(($reg->addres_lotin));} if($a=='ru-Ru'){echo(($reg->addres_ru)); }   if($a=='uz-Uz') { echo(($reg->addres_kril));}?></span>
        </div>
        <div class="hlist-item">
          <span class="name">  <?=\Yii::t('main', 'Viloyat kengash raisi'); ?>:</span>
          <span class="text"><?php if($a=='en-En') {echo(($reg->director_lotin));} if($a=='ru-Ru'){echo(($reg->director_ru)); }   if($a=='uz-Uz') { echo(($reg->director_kril));}?></span>
        </div>
        <div class="hlist-item">
          <span class="name">  <?=\Yii::t('main', 'Telefon'); ?>:</span>
          <span class="text"><?=$reg->number?></span>
        </div>
        <div class="hlist-item">
          <span class="name">  <?=\Yii::t('main', 'Fax'); ?>:</span>
          <span class="text"><?=$reg->fax?></span>
        </div>
        <div class="hlist-item">
          <span class="name">  <?=\Yii::t('main', 'E-mail'); ?>:</span>
          <span class="text"><?=$reg->email?></span>
        </div>
        <div class="hlist-item">
          <span class="name">  <?=\Yii::t('main',  'Pochta index'); ?>:</span>
          <span class="text"><?=$reg->pochta_index?></span>
        </div>
      </div>
        <?php endif?> 
       <?php endforeach?>


   <?php foreach ($regions as $reg):?>
     <?php if ($reg->id==8):?>
      <div class="hlist" id="navoiy">
        <h5>
          <?php 
          if($a=='en-En'){echo(($reg->title_lotin));}                           
        if($a=='ru-Ru'){echo(($reg->title_ru)); } 
         if($a=='uz-Uz'){ echo(($reg->title_kril));}
         ?>
       </h5>
        <div class="hlist-item">
          <span class="name">  <?=\Yii::t('main', 'Manzili'); ?>:</span>
          <span class="text"><?php if($a=='en-En') {echo(($reg->addres_lotin));} if($a=='ru-Ru'){echo(($reg->addres_ru)); }   if($a=='uz-Uz') { echo(($reg->addres_kril));}?></span>
        </div>
        <div class="hlist-item">
          <span class="name">  <?=\Yii::t('main', 'Viloyat kengash raisi'); ?>:</span>
          <span class="text"><?php if($a=='en-En') {echo(($reg->director_lotin));} if($a=='ru-Ru'){echo(($reg->director_ru)); }   if($a=='uz-Uz') { echo(($reg->director_kril));}?></span>
        </div>
        <div class="hlist-item">
          <span class="name">  <?=\Yii::t('main', 'Telefon'); ?>:</span>
          <span class="text"><?=$reg->number?></span>
        </div>
        <div class="hlist-item">
          <span class="name">  <?=\Yii::t('main', 'Fax'); ?>:</span>
          <span class="text"><?=$reg->fax?></span>
        </div>
        <div class="hlist-item">
          <span class="name">  <?=\Yii::t('main', 'E-mail'); ?>:</span>
          <span class="text"><?=$reg->email?></span>
        </div>
        <div class="hlist-item">
          <span class="name">  <?=\Yii::t('main',  'Pochta index'); ?>:</span>
          <span class="text"><?=$reg->pochta_index?></span>
        </div>
      </div>
        <?php endif?> 
       <?php endforeach?>
      <!-- item -->
       <?php foreach ($regions as $reg):?>
     <?php if ($reg->id==13):?>
      <div class="hlist" id="toshkent">
        <h5><?php if($a=='en-En'){echo(($reg->title_lotin));}                           if($a=='ru-Ru'){echo(($reg->title_ru)); }  if($a=='uz-Uz'){ echo(($reg->title_kril));}?></h5>
        <div class="hlist-item">
          <span class="name">  <?=\Yii::t('main', 'Manzili'); ?>:</span>
          <span class="text"><?php if($a=='en-En') {echo(($reg->addres_lotin));} if($a=='ru-Ru'){echo(($reg->addres_ru)); }   if($a=='uz-Uz') { echo(($reg->addres_kril));}?></span>
        </div>
        <div class="hlist-item">
          <span class="name">  <?=\Yii::t('main', 'Viloyat kengash raisi'); ?>:</span>
          <span class="text"><?php if($a=='en-En') {echo(($reg->director_lotin));} if($a=='ru-Ru'){echo(($reg->director_ru)); }   if($a=='uz-Uz') { echo(($reg->director_kril));}?></span>
        </div>
        <div class="hlist-item">
          <span class="name">  <?=\Yii::t('main', 'Telefon'); ?>:</span>
          <span class="text"><?=$reg->number?></span>
        </div>
        <div class="hlist-item">
          <span class="name">  <?=\Yii::t('main', 'Fax'); ?>:</span>
          <span class="text"><?=$reg->fax?></span>
        </div>
        <div class="hlist-item">
          <span class="name">  <?=\Yii::t('main', 'E-mail'); ?>:</span>
          <span class="text"><?=$reg->email?></span>
        </div>
        <div class="hlist-item">
          <span class="name">  <?=\Yii::t('main',  'Pochta index'); ?>:</span>
          <span class="text"><?=$reg->pochta_index?></span>
        </div>
      </div>
        <?php endif?> 
       <?php endforeach?>

<?php foreach ($regions as $reg):?>
     <?php if ($reg->id==4):?>
      <div class="hlist" id="namangan">
        <h5><?php if($a=='en-En'){echo(($reg->title_lotin));}                           if($a=='ru-Ru'){echo(($reg->title_ru)); }  if($a=='uz-Uz'){ echo(($reg->title_kril));}?></h5>
        <div class="hlist-item">
          <span class="name">  <?=\Yii::t('main', 'Manzili'); ?>:</span>
          <span class="text"><?php if($a=='en-En') {echo(($reg->addres_lotin));} if($a=='ru-Ru'){echo(($reg->addres_ru)); }   if($a=='uz-Uz') { echo(($reg->addres_kril));}?></span>
        </div>
        <div class="hlist-item">
          <span class="name">  <?=\Yii::t('main', 'Viloyat kengash raisi'); ?>:</span>
          <span class="text"><?php if($a=='en-En') {echo(($reg->director_lotin));} if($a=='ru-Ru'){echo(($reg->director_ru)); }   if($a=='uz-Uz') { echo(($reg->director_kril));}?></span>
        </div>
        <div class="hlist-item">
          <span class="name">  <?=\Yii::t('main', 'Telefon'); ?>:</span>
          <span class="text"><?=$reg->number?></span>
        </div>
        <div class="hlist-item">
          <span class="name">  <?=\Yii::t('main', 'Fax'); ?>:</span>
          <span class="text"><?=$reg->fax?></span>
        </div>
        <div class="hlist-item">
          <span class="name">  <?=\Yii::t('main', 'E-mail'); ?>:</span>
          <span class="text"><?=$reg->email?></span>
        </div>
        <div class="hlist-item">
          <span class="name">  <?=\Yii::t('main',  'Pochta index'); ?>:</span>
          <span class="text"><?=$reg->pochta_index?></span>
        </div>
      </div>
        <?php endif?> 
       <?php endforeach?>

<?php foreach ($regions as $reg):?>
     <?php if ($reg->id==1):?>
      <div class="hlist" id="andijon">
        <h5><?php if($a=='en-En'){echo(($reg->title_lotin));}                           if($a=='ru-Ru'){echo(($reg->title_ru)); }  if($a=='uz-Uz'){ echo(($reg->title_kril));}?></h5>
        <div class="hlist-item">
          <span class="name">  <?=\Yii::t('main', 'Manzili'); ?>:</span>
          <span class="text"><?php if($a=='en-En') {echo(($reg->addres_lotin));} if($a=='ru-Ru'){echo(($reg->addres_ru)); }   if($a=='uz-Uz') { echo(($reg->addres_kril));}?></span>
        </div>
        <div class="hlist-item">
          <span class="name">  <?=\Yii::t('main', 'Viloyat kengash raisi'); ?>:</span>
          <span class="text"><?php if($a=='en-En') {echo(($reg->director_lotin));} if($a=='ru-Ru'){echo(($reg->director_ru)); }   if($a=='uz-Uz') { echo(($reg->director_kril));}?></span>
        </div>
        <div class="hlist-item">
          <span class="name">  <?=\Yii::t('main', 'Telefon'); ?>:</span>
          <span class="text"><?=$reg->number?></span>
        </div>
        <div class="hlist-item">
          <span class="name">  <?=\Yii::t('main', 'Fax'); ?>:</span>
          <span class="text"><?=$reg->fax?></span>
        </div>
        <div class="hlist-item">
          <span class="name">  <?=\Yii::t('main', 'E-mail'); ?>:</span>
          <span class="text"><?=$reg->email?></span>
        </div>
        <div class="hlist-item">
          <span class="name">  <?=\Yii::t('main',  'Pochta index'); ?>:</span>
          <span class="text"><?=$reg->pochta_index?></span>
        </div>
      </div>
        <?php endif?> 
       <?php endforeach?>

       <?php foreach ($regions as $reg):?>
     <?php if ($reg->id==3):?>
      <div class="hlist" id="fargona">
        <h5><?php if($a=='en-En'){echo(($reg->title_lotin));}                           if($a=='ru-Ru'){echo(($reg->title_ru)); }  if($a=='uz-Uz'){ echo(($reg->title_kril));}?></h5>
        <div class="hlist-item">
          <span class="name">  <?=\Yii::t('main', 'Manzili'); ?>:</span>
          <span class="text"><?php if($a=='en-En') {echo(($reg->addres_lotin));} if($a=='ru-Ru'){echo(($reg->addres_ru)); }   if($a=='uz-Uz') { echo(($reg->addres_kril));}?></span>
        </div>
        <div class="hlist-item">
          <span class="name">  <?=\Yii::t('main', 'Viloyat kengash raisi'); ?>:</span>
          <span class="text"><?php if($a=='en-En') {echo(($reg->director_lotin));} if($a=='ru-Ru'){echo(($reg->director_ru)); }   if($a=='uz-Uz') { echo(($reg->director_kril));}?></span>
        </div>
        <div class="hlist-item">
          <span class="name">  <?=\Yii::t('main', 'Telefon'); ?>:</span>
          <span class="text"><?=$reg->number?></span>
        </div>
        <div class="hlist-item">
          <span class="name">  <?=\Yii::t('main', 'Fax'); ?>:</span>
          <span class="text"><?=$reg->fax?></span>
        </div>
        <div class="hlist-item">
          <span class="name">  <?=\Yii::t('main', 'E-mail'); ?>:</span>
          <span class="text"><?=$reg->email?></span>
        </div>
        <div class="hlist-item">
          <span class="name">  <?=\Yii::t('main',  'Pochta index'); ?>:</span>
          <span class="text"><?=$reg->pochta_index?></span>
        </div>
      </div>
        <?php endif?> 
       <?php endforeach?>

    <?php foreach ($regions as $reg):?>
     <?php if ($reg->id==11):?>
      <div class="hlist" id="sirdaryo">
        <h5><?php if($a=='en-En'){echo(($reg->title_lotin));}                           if($a=='ru-Ru'){echo(($reg->title_ru)); }  if($a=='uz-Uz'){ echo(($reg->title_kril));}?></h5>
        <div class="hlist-item">
          <span class="name">  <?=\Yii::t('main', 'Manzili'); ?>:</span>
          <span class="text"><?php if($a=='en-En') {echo(($reg->addres_lotin));} if($a=='ru-Ru'){echo(($reg->addres_ru)); }   if($a=='uz-Uz') { echo(($reg->addres_kril));}?></span>
        </div>
        <div class="hlist-item">
          <span class="name">  <?=\Yii::t('main', 'Viloyat kengash raisi'); ?>:</span>
          <span class="text"><?php if($a=='en-En') {echo(($reg->director_lotin));} if($a=='ru-Ru'){echo(($reg->director_ru)); }   if($a=='uz-Uz') { echo(($reg->director_kril));}?></span>
        </div>
        <div class="hlist-item">
          <span class="name">  <?=\Yii::t('main', 'Telefon'); ?>:</span>
          <span class="text"><?=$reg->number?></span>
        </div>
        <div class="hlist-item">
          <span class="name">  <?=\Yii::t('main', 'Fax'); ?>:</span>
          <span class="text"><?=$reg->fax?></span>
        </div>
        <div class="hlist-item">
          <span class="name">  <?=\Yii::t('main', 'E-mail'); ?>:</span>
          <span class="text"><?=$reg->email?></span>
        </div>
        <div class="hlist-item">
          <span class="name">  <?=\Yii::t('main',  'Pochta index'); ?>:</span>
          <span class="text"><?=$reg->pochta_index?></span>
        </div>
      </div>
        <?php endif?> 
       <?php endforeach?>
 <?php foreach ($regions as $reg):?>
     <?php if ($reg->id==6):?>
      <div class="hlist" id="jizzax">
        <h5><?php if($a=='en-En'){echo(($reg->title_lotin));}                           if($a=='ru-Ru'){echo(($reg->title_ru)); }  if($a=='uz-Uz'){ echo(($reg->title_kril));}?></h5>
        <div class="hlist-item">
          <span class="name">  <?=\Yii::t('main', 'Manzili'); ?>:</span>
          <span class="text"><?php if($a=='en-En') {echo(($reg->addres_lotin));} if($a=='ru-Ru'){echo(($reg->addres_ru)); }   if($a=='uz-Uz') { echo(($reg->addres_kril));}?></span>
        </div>
        <div class="hlist-item">
          <span class="name">  <?=\Yii::t('main', 'Viloyat kengash raisi'); ?>:</span>
          <span class="text"><?php if($a=='en-En') {echo(($reg->director_lotin));} if($a=='ru-Ru'){echo(($reg->director_ru)); }   if($a=='uz-Uz') { echo(($reg->director_kril));}?></span>
        </div>
        <div class="hlist-item">
          <span class="name">  <?=\Yii::t('main', 'Telefon'); ?>:</span>
          <span class="text"><?=$reg->number?></span>
        </div>
        <div class="hlist-item">
          <span class="name">  <?=\Yii::t('main', 'Fax'); ?>:</span>
          <span class="text"><?=$reg->fax?></span>
        </div>
        <div class="hlist-item">
          <span class="name">  <?=\Yii::t('main', 'E-mail'); ?>:</span>
          <span class="text"><?=$reg->email?></span>
        </div>
        <div class="hlist-item">
          <span class="name">  <?=\Yii::t('main',  'Pochta index'); ?>:</span>
          <span class="text"><?=$reg->pochta_index?></span>
        </div>
      </div>
        <?php endif?> 
       <?php endforeach?>

<?php foreach ($regions as $reg):?>
     <?php if ($reg->id==9):?>
      <div class="hlist" id="samarqand">
        <h5><?php if($a=='en-En'){echo(($reg->title_lotin));}                           if($a=='ru-Ru'){echo(($reg->title_ru)); }  if($a=='uz-Uz'){ echo(($reg->title_kril));}?></h5>
        <div class="hlist-item">
          <span class="name">  <?=\Yii::t('main', 'Manzili'); ?>:</span>
          <span class="text"><?php if($a=='en-En') {echo(($reg->addres_lotin));} if($a=='ru-Ru'){echo(($reg->addres_ru)); }   if($a=='uz-Uz') { echo(($reg->addres_kril));}?></span>
        </div>
        <div class="hlist-item">
          <span class="name">  <?=\Yii::t('main', 'Viloyat kengash raisi'); ?>:</span>
          <span class="text"><?php if($a=='en-En') {echo(($reg->director_lotin));} if($a=='ru-Ru'){echo(($reg->director_ru)); }   if($a=='uz-Uz') { echo(($reg->director_kril));}?></span>
        </div>
        <div class="hlist-item">
          <span class="name">  <?=\Yii::t('main', 'Telefon'); ?>:</span>
          <span class="text"><?=$reg->number?></span>
        </div>
        <div class="hlist-item">
          <span class="name">  <?=\Yii::t('main', 'Fax'); ?>:</span>
          <span class="text"><?=$reg->fax?></span>
        </div>
        <div class="hlist-item">
          <span class="name">  <?=\Yii::t('main', 'E-mail'); ?>:</span>
          <span class="text"><?=$reg->email?></span>
        </div>
        <div class="hlist-item">
          <span class="name">  <?=\Yii::t('main',  'Pochta index'); ?>:</span>
          <span class="text"><?=$reg->pochta_index?></span>
        </div>
      </div>
        <?php endif?> 
       <?php endforeach?>

<?php foreach ($regions as $reg):?>
     <?php if ($reg->id==7):?>
      <div class="hlist" id="qashqadaryo">
        <h5><?php if($a=='en-En'){echo(($reg->title_lotin));}                           if($a=='ru-Ru'){echo(($reg->title_ru)); }  if($a=='uz-Uz'){ echo(($reg->title_kril));}?></h5>
        <div class="hlist-item">
          <span class="name">  <?=\Yii::t('main', 'Manzili'); ?>:</span>
          <span class="text"><?php if($a=='en-En') {echo(($reg->addres_lotin));} if($a=='ru-Ru'){echo(($reg->addres_ru)); }   if($a=='uz-Uz') { echo(($reg->addres_kril));}?></span>
        </div>
        <div class="hlist-item">
          <span class="name">  <?=\Yii::t('main', 'Viloyat kengash raisi'); ?>:</span>
          <span class="text"><?php if($a=='en-En') {echo(($reg->director_lotin));} if($a=='ru-Ru'){echo(($reg->director_ru)); }   if($a=='uz-Uz') { echo(($reg->director_kril));}?></span>
        </div>
        <div class="hlist-item">
          <span class="name">  <?=\Yii::t('main', 'Telefon'); ?>:</span>
          <span class="text"><?=$reg->number?></span>
        </div>
        <div class="hlist-item">
          <span class="name">  <?=\Yii::t('main', 'Fax'); ?>:</span>
          <span class="text"><?=$reg->fax?></span>
        </div>
        <div class="hlist-item">
          <span class="name">  <?=\Yii::t('main', 'E-mail'); ?>:</span>
          <span class="text"><?=$reg->email?></span>
        </div>
        <div class="hlist-item">
          <span class="name">  <?=\Yii::t('main',  'Pochta index'); ?>:</span>
          <span class="text"><?=$reg->pochta_index?></span>
        </div>
      </div>
        <?php endif?> 
       <?php endforeach?>

<?php foreach ($regions as $reg):?>
     <?php if ($reg->id==7):?>
      <div class="hlist" id="qashqadaryo">
        <h5><?php if($a=='en-En'){echo(($reg->title_lotin));}                           if($a=='ru-Ru'){echo(($reg->title_ru)); }  if($a=='uz-Uz'){ echo(($reg->title_kril));}?></h5>
        <div class="hlist-item">
          <span class="name">  <?=\Yii::t('main', 'Manzili'); ?>:</span>
          <span class="text"><?php if($a=='en-En') {echo(($reg->addres_lotin));} if($a=='ru-Ru'){echo(($reg->addres_ru)); }   if($a=='uz-Uz') { echo(($reg->addres_kril));}?></span>
        </div>
        <div class="hlist-item">
          <span class="name">  <?=\Yii::t('main', 'Viloyat kengash raisi'); ?>:</span>
          <span class="text"><?php if($a=='en-En') {echo(($reg->director_lotin));} if($a=='ru-Ru'){echo(($reg->director_ru)); }   if($a=='uz-Uz') { echo(($reg->director_kril));}?></span>
        </div>
        <div class="hlist-item">
          <span class="name">  <?=\Yii::t('main', 'Telefon'); ?>:</span>
          <span class="text"><?=$reg->number?></span>
        </div>
        <div class="hlist-item">
          <span class="name">  <?=\Yii::t('main', 'Fax'); ?>:</span>
          <span class="text"><?=$reg->fax?></span>
        </div>
        <div class="hlist-item">
          <span class="name">  <?=\Yii::t('main', 'E-mail'); ?>:</span>
          <span class="text"><?=$reg->email?></span>
        </div>
        <div class="hlist-item">
          <span class="name">  <?=\Yii::t('main',  'Pochta index'); ?>:</span>
          <span class="text"><?=$reg->pochta_index?></span>
        </div>
      </div>
        <?php endif?> 
       <?php endforeach?>

<?php foreach ($regions as $reg):?>
     <?php if ($reg->id==10):?>
      <div class="hlist" id="surxondaryo">
        <h5><?php if($a=='en-En'){echo(($reg->title_lotin));}                           if($a=='ru-Ru'){echo(($reg->title_ru)); }  if($a=='uz-Uz'){ echo(($reg->title_kril));}?></h5>
        <div class="hlist-item">
          <span class="name">  <?=\Yii::t('main', 'Manzili'); ?>:</span>
          <span class="text"><?php if($a=='en-En') {echo(($reg->addres_lotin));} if($a=='ru-Ru'){echo(($reg->addres_ru)); }   if($a=='uz-Uz') { echo(($reg->addres_kril));}?></span>
        </div>
        <div class="hlist-item">
          <span class="name">  <?=\Yii::t('main', 'Viloyat kengash raisi'); ?>:</span>
          <span class="text"><?php if($a=='en-En') {echo(($reg->director_lotin));} if($a=='ru-Ru'){echo(($reg->director_ru)); }   if($a=='uz-Uz') { echo(($reg->director_kril));}?></span>
        </div>
        <div class="hlist-item">
          <span class="name">  <?=\Yii::t('main', 'Telefon'); ?>:</span>
          <span class="text"><?=$reg->number?></span>
        </div>
        <div class="hlist-item">
          <span class="name">  <?=\Yii::t('main', 'Fax'); ?>:</span>
          <span class="text"><?=$reg->fax?></span>
        </div>
        <div class="hlist-item">
          <span class="name">  <?=\Yii::t('main', 'E-mail'); ?>:</span>
          <span class="text"><?=$reg->email?></span>
        </div>
        <div class="hlist-item">
          <span class="name">  <?=\Yii::t('main',  'Pochta index'); ?>:</span>
          <span class="text"><?=$reg->pochta_index?></span>
        </div>
      </div>
        <?php endif?> 
       <?php endforeach?>


<?php foreach ($regions as $reg):?>
     <?php if ($reg->id==2):?>
      <div class="hlist" id="buxoro">
        <h5><?php if($a=='en-En'){echo(($reg->title_lotin));}                           if($a=='ru-Ru'){echo(($reg->title_ru)); }  if($a=='uz-Uz'){ echo(($reg->title_kril));}?></h5>
        <div class="hlist-item">
          <span class="name">  <?=\Yii::t('main', 'Manzili'); ?>:</span>
          <span class="text"><?php if($a=='en-En') {echo(($reg->addres_lotin));} if($a=='ru-Ru'){echo(($reg->addres_ru)); }   if($a=='uz-Uz') { echo(($reg->addres_kril));}?></span>
        </div>
        <div class="hlist-item">
          <span class="name">  <?=\Yii::t('main', 'Viloyat kengash raisi'); ?>:</span>
          <span class="text"><?php if($a=='en-En') {echo(($reg->director_lotin));} if($a=='ru-Ru'){echo(($reg->director_ru)); }   if($a=='uz-Uz') { echo(($reg->director_kril));}?></span>
        </div>
        <div class="hlist-item">
          <span class="name">  <?=\Yii::t('main', 'Telefon'); ?>:</span>
          <span class="text"><?=$reg->number?></span>
        </div>
        <div class="hlist-item">
          <span class="name">  <?=\Yii::t('main', 'Fax'); ?>:</span>
          <span class="text"><?=$reg->fax?></span>
        </div>
        <div class="hlist-item">
          <span class="name">  <?=\Yii::t('main', 'E-mail'); ?>:</span>
          <span class="text"><?=$reg->email?></span>
        </div>
        <div class="hlist-item">
          <span class="name">  <?=\Yii::t('main',  'Pochta index'); ?>:</span>
          <span class="text"><?=$reg->pochta_index?></span>
        </div>
      </div>
        <?php endif?> 
       <?php endforeach?>

<?php foreach ($regions as $reg):?>
     <?php if ($reg->id==14):?>
      <div class="hlist" id="xorazm">
        <h5><?php if($a=='en-En'){echo(($reg->title_lotin));}                           if($a=='ru-Ru'){echo(($reg->title_ru)); }  if($a=='uz-Uz'){ echo(($reg->title_kril));}?></h5>
        <div class="hlist-item">
          <span class="name">  <?=\Yii::t('main', 'Manzili'); ?>:</span>
          <span class="text"><?php if($a=='en-En') {echo(($reg->addres_lotin));} if($a=='ru-Ru'){echo(($reg->addres_ru)); }   if($a=='uz-Uz') { echo(($reg->addres_kril));}?></span>
        </div>
        <div class="hlist-item">
          <span class="name">  <?=\Yii::t('main', 'Viloyat kengash raisi'); ?>:</span>
          <span class="text"><?php if($a=='en-En') {echo(($reg->director_lotin));} if($a=='ru-Ru'){echo(($reg->director_ru)); }   if($a=='uz-Uz') { echo(($reg->director_kril));}?></span>
        </div>
        <div class="hlist-item">
          <span class="name">  <?=\Yii::t('main', 'Telefon'); ?>:</span>
          <span class="text"><?=$reg->number?></span>
        </div>
        <div class="hlist-item">
          <span class="name">  <?=\Yii::t('main', 'Fax'); ?>:</span>
          <span class="text"><?=$reg->fax?></span>
        </div>
        <div class="hlist-item">
          <span class="name">  <?=\Yii::t('main', 'E-mail'); ?>:</span>
          <span class="text"><?=$reg->email?></span>
        </div>
        <div class="hlist-item">
          <span class="name">  <?=\Yii::t('main',  'Pochta index'); ?>:</span>
          <span class="text"><?=$reg->pochta_index?></span>
        </div>
      </div>
        <?php endif?> 
       <?php endforeach?>

<?php foreach ($regions as $reg):?>
     <?php if ($reg->id==5):?>
      <div class="hlist" id="qoraqalpoq">
        <h5><?php if($a=='en-En'){echo(($reg->title_lotin));}                           if($a=='ru-Ru'){echo(($reg->title_ru)); }  if($a=='uz-Uz'){ echo(($reg->title_kril));}?></h5>
        <div class="hlist-item">
          <span class="name">  <?=\Yii::t('main', 'Manzili'); ?>:</span>
          <span class="text"><?php if($a=='en-En') {echo(($reg->addres_lotin));} if($a=='ru-Ru'){echo(($reg->addres_ru)); }   if($a=='uz-Uz') { echo(($reg->addres_kril));}?></span>
        </div>
        <div class="hlist-item">
          <span class="name">  <?=\Yii::t('main', 'Viloyat kengash raisi'); ?>:</span>
          <span class="text"><?php if($a=='en-En') {echo(($reg->director_lotin));} if($a=='ru-Ru'){echo(($reg->director_ru)); }   if($a=='uz-Uz') { echo(($reg->director_kril));}?></span>
        </div>
        <div class="hlist-item">
          <span class="name">  <?=\Yii::t('main', 'Telefon'); ?>:</span>
          <span class="text"><?=$reg->number?></span>
        </div>
        <div class="hlist-item">
          <span class="name">  <?=\Yii::t('main', 'Fax'); ?>:</span>
          <span class="text"><?=$reg->fax?></span>
        </div>
        <div class="hlist-item">
          <span class="name">  <?=\Yii::t('main', 'E-mail'); ?>:</span>
          <span class="text"><?=$reg->email?></span>
        </div>
        <div class="hlist-item">
          <span class="name">  <?=\Yii::t('main',  'Pochta index'); ?>:</span>
          <span class="text"><?=$reg->pochta_index?></span>
        </div>
      </div>
        <?php endif?> 
       <?php endforeach?>

    </div>
    </section>
   <section class="partners-section">
        <div class="heading-partner">
            <h2 class="partner-h2"> <?=\Yii::t('main', 'Hamkorlarimiz'); ?> </h2>
        </div>
        <div class="container part-container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <a href="http://mudofaa.uz/">
                        <div class="part-col-inner">
                           <img src="<?=\yii\helpers\Url::to(["../themes/default/image/hamkor/gerb.png"], true)?>">
                            <div class="part-span-div">
                                <span class="partner-span">
                               <?=\Yii::t('main', 'O`zbekiston Respublikasi Mudofaa vazirligi'); ?>    
                                </span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="https://www.minsport.uz/">
                        <div class="part-col-inner">
                            <img src="<?=\yii\helpers\Url::to(["../themes/default/image/hamkor/gerb.png"], true)?>">
                            <div class="part-span-div">
                                <span class="partner-span">
                   <?=\Yii::t('main', 'O`zbekiston Respublikasi Jismoniy tarbiya va sport vazirligi'); ?> 
                                </span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="https://mvd.uz/uz">
                        <div class="part-col-inner">
                       <img src="<?=\yii\helpers\Url::to(["../themes/default/image/hamkor/gerb.png"], true)?>">
                            <div class="part-span-div">
                                <span class="partner-span">
                             <?=\Yii::t('main', 'O`zbekiston Respublikasi Ichki ishlar vazirligi'); ?>     
                                </span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="http://yoshlarittifoqi.uz/">
                        <div class="part-col-inner">
                            <img class="part-img" src="<?=\yii\helpers\Url::to(["../themes/default/image/hamkor/bayroq.png"], true)?>">
                            <div class="part-span-div">
                                <span class="partner-span">
                                  <?=\Yii::t('main', 'O`zbekiston Yoshlar ittifoqi'); ?> 
                                </span>
                            </div>
                        </div>
                    </a>
                </div>

            </div>
        </div>
    </section>
    
