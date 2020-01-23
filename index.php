<?php get_header();?>
<div class="key__visual">
  <div class="content flex al-cent">
    <div class="key__visual__left">
      <h1 class="f-ryu">私たちはクリエイティビティを大事にし<br class="pc">
        数字を追いかけるバナー職人です。</h1>
      <p class="cach"> <img src="<?php echo get_template_directory_uri(); ?>/img/top/key_visual_cach.png" alt="短納期×高クオリティー"> </p>
    </div>
    <!-- ./key__visual__left -->

    <div class="key__visual__right">
      <p class="f-ryu"> バナー制作専門サービス </p>
      <a href="#infinite__banner__area"><img src="<?php echo get_template_directory_uri(); ?>/img/top/key_visual_btn.png" alt="制作実績はこちら"></a> </div>
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
        <dt><span class="col__cent">サイズ<br class="pc">
          用途</span></dt>
        <dd><span class="col__cent">選択してください</span></dd>
      </dl>
      <dl class="flex" id="out__list02">
        <dt><span class="col__cent">納期</span></dt>
        <dd><span class="col__cent">選択してください</span></dd>
      </dl>
      <dl class="flex" id="out__list03">
        <dt><span class="col__cent">実績として<br class="pc">
          公開</span></dt>
        <dd><span class="col__cent">選択してください</span></dd>
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
  <form action="<?php echo USCES_CART_URL ?>" method="post" id="fileupload" enctype="multipart/form-data">
    <div id="form__parts" class="narrowcolumn" role="main"> 　　　　　
      <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); usces_the_item("banner"); ?>
      <?php usces_have_skus();?>
      <!--  <div class="error_message">
        <?php usces_singleitem_error_message($post->ID, usces_the_itemSku('return')); ?>
      </div> -->

      <!--form__area__start-->
      <div class="form__area__out" id="form__area01">
        <div class="step__img"> <img src="<?php echo get_template_directory_uri(); ?>/img/top/step1.png" alt="step01"> </div>
        <!-- ./step__img -->
        <div class="section__inner form__inner">
          <dl>
            <dt>
              <div class="step__wrap"> <span>ステップ1</span>
                <div class="step__tit">サイズ用途選択</div>
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
                <h3>辺と短編の合計が601~1000px</h3>
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
            <dd class="select__zone select__time limit" id="limit"> <?php echo usces_the_itemOption("納期の選択");?>
              <p class="note">※即日コースは15時までの受付となります。<br class="pc">
                ※15時以降のご注文は翌営業日の対応となりますのでご了承ください</p>
            </dd>
          </dl>
        </div>
        <!--./section__inner-->
      </div>
      <!--./form__area__out -->

      <!--form__area__start-->
      <div class="form__area__out" id="form__area04">
        <div class="step__img"> <img src="<?php echo get_template_directory_uri(); ?>/img/top/step4.png" alt="step04"> </div>
        <!-- ./step__img -->
        <div class="section__inner form__inner">
          <dl class="select__public">
            <dt>
              <div class="step__wrap"> <span>ステップ4</span>
                <div class="step__tit">デザインの指示</div>
                <!-- ./step__tit -->
              </div>
              <!-- ./step__wrap -->
            </dt>
            <dd class="file__up__area">
              <div class="box__content flex">
                <noscript>
                <input
            type="hidden"
            name="redirect"
            value="https://blueimp.github.io/jQuery-File-Upload/"/>
                </noscript>
                <div class="file__drop">
                  <div class="row fileupload-buttonbar">
                    <div class="target">
                      <p class="sub__text">ここにファイルをドラッグして<br class="pc">アップロード</p>
                      <p class="sub__text02">※可能ファイル：JPG/PNG/GIF/PDF/PSD/AI/エクセル/パワーポイント/ワード/zip<br>※データ量上限：10MB</p>
                    </div>
                    <div class="input__wrap">

                    <!--   <span class="btn btn-success fileinput-button"><span>ファイルを選択</span> -->
                      <input type="file" name="files[]" multiple />
                      </span> <span class="fileupload-process"></span> </div>
                  </div>
                </div>
                <!-- ./file__drop -->
                <div class="text" id="instruction">
                  <?php echo usces_the_itemOption("デザイン指示");?>
                </div><!-- ./text -->
              </div>
              <!-- ./box__content -->

              <!-- この中の表にURL NAMEなどの情報が出力される -->
              <table role="presentation" class="table table-striped" id="url__out">
                <tbody class="files">
                </tbody>
              </table>


              <!-- 指示書作成ジェネレーターボタン  -->


              <div class="btn__to__content flex al-cent">

                  <div class="btn__to">
                      <a href="https://u-d.jp/instruction/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/top/btn_to.png" alt="デザイン指示作成支援ツールを起動"></a>
                  </div>

                  <p>※データ容量が大きい場合は別途、FIRE STRAGE等の外部ストレージサービスをご利用ください。<br>※複数ファイルある場合は、ZIP等で圧縮して1つのファイルにおまとめください。</p>

              </div>




            </dd>
          </dl>
        </div>
        <!--./section__inner-->
      </div>
      <!--./form__area__out -->

      <!--form__area__start-->
      <div class="form__area__out" id="form__area05">
        <div class="step__img"> <img src="<?php echo get_template_directory_uri(); ?>/img/top/step5.png" alt="step05"> </div>
        <!-- ./step__img -->
        <div class="section__inner form__inner">
          <dl class="select__btns">
            <dt>
              <div class="step__wrap"> <span>ステップ5</span>
                <div class="step__tit">元データ(PSD)のご提供</div>
                <!-- ./step__tit -->
              </div>
              <!-- ./step__wrap -->
            </dt>
            <dd class="select__zone select__time select__data " id="data"><?php echo usces_the_itemOption("データご納品");?>
              <p class="note">※ご自身でリサイズ等行う場合はご指定ください。なお、photoshopバージョンのご指定は出来ませんので予めご了承ください。</p>
            </dd>
          </dl>
        </div>
        <!--./section__inner-->
      </div>
      <!--./form__area__out -->

      <!--form__area__start-->
      <div class="form__area__out" id="form__area06">
        <div class="step__img"> <img src="<?php echo get_template_directory_uri(); ?>/img/top/step6.png" alt="step06"> </div>
        <!-- ./step__img -->
        <div class="section__inner form__inner">
          <dl class="select__public select__btns">
            <dt>
              <div class="step__wrap"> <span>ステップ6</span>
                <div class="step__tit">弊社実績として公開可否</div>
                <!-- ./step__tit -->
              </div>
              <!-- ./step__wrap -->
            </dt>
            <dd class="select__zone select__time public__btn " id="publish"><?php echo usces_the_itemOption("実績として公開");?>
              <p class="note">※当サイトでご紹介させて頂ければ500円お値引きさせて頂きます。</p>
            </dd>
          </dl>
        </div>
        <!--./section__inner-->
      </div>
      <!--./form__area__out -->
      <div class="form__area__out" id="form__area07">
        <div class="step__img"> <img src="<?php echo get_template_directory_uri(); ?>/img/top/step7.png" alt="step07"> </div>
        <!-- ./step__img -->
        <div class="section__inner form__inner">
          <div class="cart__in">
            <div class="cart__btn__cont">
              <?php usces_the_itemSkuButton('カートに入れて注文に進む');?>
            </div>
            <!-- ./step__wrap -->
          </div>
          <!--./section__inner-->
        </div>
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
