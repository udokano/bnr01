<?php get_header();?>








<div class="key__visual">
  <div class="content flex al-cent">
    <div class="key__visual__left">
      <h1 class="f-ryu">Web広告屋さんのバナー制作<br class="pc">かんたんお見積り＆かんたん発注！！</h1>
      <p class="cach"> <img src="<?php echo get_template_directory_uri(); ?>/img/top/key_visual_cach.png" alt="短納期×高クオリティー"> </p>
    </div>
    <!-- ./key__visual__left -->

    <div class="key__visual__right">
      <p class="f-ryu"> バナー制作専門サービス </p>
      <a href="#infinite__banner__area" id="js-anchor"><img src="<?php echo get_template_directory_uri(); ?>/img/top/key_visual_btn.png" alt="制作実績はこちら"></a> </div>
    <!-- ./key__visual__right -->
  </div>
  <!-- ./content -->
</div>
<!-- ./key__visual -->

<!-- output__list -->
<div class="output__list" id="js-fixed-bottom">
  <div class="section__inner">
    <div class="output__content flex">
      <dl class="flex" id="out__list01">
        <dt><span class="col__cent">サイズ<br class="pc">用途</span></dt>
        <dd><span class="col__cent" id="output__type">選択してください</span></dd>
      </dl>
      <dl class="flex" id="out__list02">
        <dt><span class="col__cent">納期</span></dt>
        <dd><span class="col__cent" id="output__option">選択してください</span></dd>
      </dl>
      <dl class="flex" id="out__list03">
        <dt><span class="col__cent">実績として<br class="pc">公開</span></dt>
        <dd><span class="col__cent" id="output__publish">選択してください</span></dd>
      </dl>
      <dl class="flex" id="out__list04">
        <dt><span class="col__cent">合計金額</span></dt>
        <dd><span class="col__cent"><span id="output__price">0</span>円</span></dd>
      </dl>
    </div>
    <!-- ./output__content -->
  </div>
  <!-- ./section__inner -->
</div>
<!-- ./output__list -->

<section class="purchase__form" id="form__head">
  <h1>バナーを注文する</h1>
  <form action="<?php echo USCES_CART_URL ?>" method="post">
    <div id="form__parts" class="narrowcolumn" role="main"> 　　　　　
      <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); usces_the_item("banner"); ?>
      <?php usces_have_skus();?>

      <!--form__area__start-->
      <div class="form__area__out" id="form__area01">
        <div class="step__img"> <img src="<?php echo get_template_directory_uri(); ?>/img/top/step1.png" alt="step01"> </div>
        <!-- ./step__img -->
        <div class="section__inner form__inner">
          <dl>
            <dt>
              <div class="step__wrap"> <span>ステップ1</span>
                <div class="step__tit">サイズ・用途選択</div>
                <!-- ./step__tit -->
              </div>
              <!-- ./step__wrap -->
            </dt>
            <dd class="select__zone size__select" id="size__select"> <?php echo usces_the_itemOption("サイズ指定");?> </dd>

            <!-- sample__modal -->
            <div class="sample__modal modal__box modal js-modal" id="sample01">
              <div class="modal__bg js-modal-close"></div>
              <!-- ./modal__bg -->
              <div class="modal__inner">
                <h3>長辺と短編の合計が600px未満</h3>
                <div class="sample__img"> <img src="<?php echo get_template_directory_uri(); ?>/img/top/s_size_sample02.jpg" alt="サンプル" width="400" height="200"> <img src="<?php echo get_template_directory_uri(); ?>/img/top/s_size_sample03.jpg" alt="サンプル" width="200" height="400"> <img src="<?php echo get_template_directory_uri(); ?>/img/top/s_size_sample01.jpg" alt="サンプル" width="300" height="300"> </div>
                <!-- ./sample__img -->
                <div class="close__btn js-modal-close">閉じる</div>
                <!-- ./close__btn -->
              </div>
              <!-- ./modal__inner -->
            </div>
            <!-- ./sample__modal -->

            <!-- sample__modal -->
            <div class="sample__modal modal__box modal js-modal" id="sample02">
              <div class="modal__bg js-modal-close"></div>
              <!-- ./modal__bg -->
              <div class="modal__inner">
                <h3>長辺と短編の合計が601~1000px</h3>
                <div class="sample__img"> <img src="<?php echo get_template_directory_uri(); ?>/img/top/m_size_sample03.jpg" alt="サンプル" width="500" height="500"> <img src="<?php echo get_template_directory_uri(); ?>/img/top/m_size_sample02.jpg" alt="サンプル" width="150" height="500"> <img src="<?php echo get_template_directory_uri(); ?>/img/top/m_size_sample01.jpg" alt="サンプル" width="700" height="300"> </div>
                <!-- ./sample__img -->
                <div class="close__btn js-modal-close">閉じる</div>
                <!-- ./close__btn -->
              </div>
              <!-- ./modal__inner -->
            </div>
            <!-- ./sample__modal -->

            <div class="hidden__box control__num" id="control__num">
              <p class="tc">管理番号を入力してください</p>
              <div><?php echo usces_the_itemOption("管理番号");?></div>
            </div>
            <!--./control__num-->
            <div class="hidden__box special__size" id="special__size">
              <p class="tc">サイズを選択してください</p>
              <div class="special__size-box"> <?php echo usces_the_itemOption("特殊サイズ");?> </div>
              <!-- ./special__size-box -->
            </div>
            <!--./special__size-->
          </dl>
        </div>
        <!--./section__inner-->
      </div>
      <!--./form__area__out -->

      <!--form__area__start-->
      <div class="form__area__out" id="form__area02">
        <div class="step__img"> <img src="<?php echo get_template_directory_uri(); ?>/img/top/step2.png" alt="step02"> </div>
        <!-- ./step__img -->
        <div class="section__inner form__inner">
          <dl class="">
            <dt>
              <div class="step__wrap"> <span>ステップ2</span>
                <div class="step__tit">形式を選択</div>
                <!-- ./step__tit -->
              </div>
              <!-- ./step__wrap -->
            </dt>
            <dd class="select__zone" id="format"> <?php echo usces_the_itemOption("バナー形式");?> </dd>
          </dl>
        </div>
        <!--./section__inner-->
      </div>
      <!--./form__area__out -->

      <!--form__area__start-->
      <div class="form__area__out" id="form__area03">
        <div class="step__img"> <img src="<?php echo get_template_directory_uri(); ?>/img/top/step3.png" alt="step03"> </div>
        <!-- ./step__img -->
        <div class="section__inner form__inner">
          <dl class="">
            <dt>
              <div class="step__wrap"> <span>ステップ3</span>
                <div class="step__tit">納期を選択</div>
                <!-- ./step__tit -->
              </div>
              <!-- ./step__wrap -->
            </dt>
            <dd class="select__zone select__time limit type02" id="limit"> <?php echo usces_the_itemOption("納期の選択");?>
              <p class="note">※即日コースは15時までの受付となります。<br class="pc">
                ※15時以降のご注文は翌営業日の対応となりますのでご了承ください</p>
            </dd>
          </dl>
        </div>
        <!--./section__inner-->
      </div>
      <!--./form__area__out -->



      <!--form__area__start-->
      <div class="form__area__out" id="form__area05">
        <div class="step__img"> <img src="<?php echo get_template_directory_uri(); ?>/img/top/step4.png" alt="step04"> </div>
        <!-- ./step__img -->
        <div class="section__inner form__inner">
          <dl class="select__btns">
            <dt>
              <div class="step__wrap"> <span>ステップ4</span>
                <div class="step__tit">元データ(PSD)のご提供</div>
                <!-- ./step__tit -->
              </div>
              <!-- ./step__wrap -->
            </dt>
            <dd class="select__zone  select__data type02" id="data"><?php echo usces_the_itemOption("データご納品");?>
              <p class="note">※ご自身でリサイズ等行う場合はご指定ください。<br>なお、photoshopバージョンのご指定は出来ませんので予めご了承ください。</p>
            </dd>
          </dl>
        </div>
        <!--./section__inner-->
      </div>
      <!--./form__area__out -->

      <!--form__area__start-->
      <div class="form__area__out" id="form__area06">
        <div class="step__img"> <img src="<?php echo get_template_directory_uri(); ?>/img/top/step5.png" alt="step05"> </div>
        <!-- ./step__img -->
        <div class="section__inner form__inner">
          <dl class="select__public select__btns">
            <dt>
              <div class="step__wrap"> <span>ステップ5</span>
                <div class="step__tit">弊社実績として公開可否</div>
                <!-- ./step__tit -->
              </div>
              <!-- ./step__wrap -->
            </dt>
            <dd class="select__zone  public__btn type02" id="publish"><?php echo usces_the_itemOption("実績として公開");?>
              <p class="note">※当サイトでご紹介させて頂ければ500円お値引きさせて頂きます。</p>
            </dd>
          </dl>
        </div>
        <!--./section__inner-->
      </div>
      <!--./form__area__out -->
      <div class="form__area__out" id="form__area07">
        <div class="step__img"> <img src="<?php echo get_template_directory_uri(); ?>/img/top/step6.png" alt="step06"> </div>
        <!-- ./step__img -->
        <div class="section__inner form__inner">
          <div class="cart__in">
            <div class="cart__btn__cont">
            <div class="cart__ballon animation__ballon js-modal-open" data-target="direction__flow"><img src="<?php echo get_template_directory_uri(); ?>/img/top/tip02.png" alt="デザインのご指示方法を見る"></div>
              <?php usces_the_itemSkuButton('カートに入れて注文に進む');?>
            </div>
            <!-- ./step__wrap -->
          </div>
          <!-- ./cart__in -->
           <!-- sample__modal -->
            <div class="sample__modal direction__flow__modal modal__box modal js-modal" id="direction__flow">
              <div class="modal__bg js-modal-close"></div>
              <!-- ./modal__bg -->
              <div class="modal__inner">
                <h3>指示書作成方法</h3>
                    <div class="swiper-container direction__slider">
                      <div class="swiper-wrapper">
                        <div class="swiper-slide">
                          <div class="slide-img">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/top/direction_flow01.jpg" alt="指示書作成方法スライド">
                        </div>
                          <!-- ./slide-img -->
                        </div>
                         <!-- ./swiper-slide -->
                        <div class="swiper-slide">
                          <div class="slide-img">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/top/direction_flow02.jpg" alt="指示書作成方法スライド">
                          </div>
                            <!-- ./slide-img -->
                        </div>
                         <!-- ./swiper-slide -->
                        <div class="swiper-slide">
                          <div class="slide-img">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/top/direction_flow03.jpg" alt="指示書作成方法スライド">
                          </div>
                          <!-- ./slide-img -->
                        </div>
                        <!-- ./swiper-slide -->
                          <div class="swiper-slide">
                          <div class="slide-img">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/top/direction_flow04.jpg" alt="指示書作成方法スライド">
                          </div>
                          <!-- ./slide-img -->
                        </div>
                        <!-- ./swiper-slide -->
                          <div class="swiper-slide">
                          <div class="slide-img">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/top/direction_flow05.jpg" alt="指示書作成方法スライド">
                          </div>
                          <!-- ./slide-img -->
                        </div>
                        <!-- ./swiper-slide -->
                          <div class="swiper-slide">
                          <div class="slide-img">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/top/direction_flow06.jpg" alt="指示書作成方法スライド">
                          </div>
                          <!-- ./slide-img -->
                        </div>
                        <!-- ./swiper-slide -->
                          <!-- ./swiper-slide -->
                          <div class="swiper-slide">
                          <div class="slide-img">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/top/direction_flow07.jpg" alt="指示書作成方法スライド">
                          </div>
                          <!-- ./slide-img -->
                        </div>
                        <!-- ./swiper-slide -->
                      </div>
                      <!-- ./swiper-wrapper -->

                          <div class="swiper-button-prev swiper-button"></div>
                          <div class="swiper-button-next swiper-button"></div>

                    </div>
                    <!-- ./swiper-container -->

                <div class="close__btn js-modal-close">閉じる</div>
                <!-- ./close__btn -->
              </div>
              <!-- ./modal__inner -->
            </div>
            <!-- ./sample__modal -->

          <div class="term__inc" id="term">
            <?php get_template_part('inc/trems');?>

          </div>

        </div>
          <!--./section__inner-->
      </div>
      <!--./form__entry-->
      <?php endwhile; endif; ?>
    </div>
    <!--./form__parts-->
  </form>
</section>
<?php if (have_rows('bnr__list', 102)): ?>
<section class="infinite__banner__area" id="infinite__banner__area">
  <div class="section__inner">
    <h2>制作実績</h2>
    <ul class="banners flex" id="infinite__banners">
      <?php while (have_rows('bnr__list', 102)) : the_row(); ?>
      <li class="js-modal-open banner__item in-view"> <img src="<?php the_sub_field('bnr__img', 102);?>" alt="制作実績">
        <div class="bnr__modal__box modal js-modal">
          <div class="modal__bg js-modal-close"></div>
          <div class="modal__inner">
            <div class="bnr__img"> <img src="<?php the_sub_field('bnr__img', 102);?>" alt="制作実績"> </div>
            <p class="sample__bnr__text tc">
              <?php
              $cf_color = the_sub_field('sample_bnr', 102);
              if ($cf_color == 1) {
                  echo 'バナー屋さんサンプルバナー';
              } else {
                  echo '';
              }
              ?>
            </p>
            <button value="<?php the_sub_field('number', 102);?>" class="tc js-modal-close">このテイストで注文する</button>
          </div>
        </div>
      </li>
      <?php endwhile; ?>
    </ul>
  </div>
</section>
<?php else: ?>
<?php endif; ?>
<?php get_footer(); ?>
<!-- 5月12日までのキャンペーンバナー -->
<div class="campaign">
<div class="campaign__bg js-campaign--close">
</div>
<!-- ./campaign__bg -->

<div class="campaign__box">
  <div class="campaign__box__inner">
      <div class="campaign__box__banner">
        <img src="<?php echo get_template_directory_uri(); ?>/img/top/campaign.jpg" alt="テレワーク応援">
      </div>
      <!-- ./campaign__box__banner -->
      <p class="campaign__box__close js-campaign--close"><span class="campaign__close__batu">×</span>閉じる</p>
  </div>
  <!-- ./campaign__box__inner -->
</div>
<!-- ./campaign__box -->
</div>
<!-- ./campaign -->
<!-- キャンペーンバナー END -->
