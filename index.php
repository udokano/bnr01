<?php get_header();?>
<div class="key__visual">
  <div class="content">
    <h1><img src="<?php echo get_template_directory_uri(); ?>/img/top/key_visual_logo.png" alt="バナー制作をもっと手軽にバナー屋さん"></h1>
    <ul class="flex">
      <li> <em>最短当日納品</em> <i><img src="<?php echo get_template_directory_uri(); ?>/img/top/key_visual_icon01.png" alt="アイコン"></i> </li>
      <li> <em>面倒な<br>
        見積もりいらず</em> <i><img src="<?php echo get_template_directory_uri(); ?>/img/top/key_visual_icon02.png" alt="アイコン"></i> </li>
      <li> <em class="pc-display">多種多様なサイズが<br>
        制作可能</em><em class="sp-display">特殊サイズが<br>制作可能</em> <i><img src="<?php echo get_template_directory_uri(); ?>/img/top/key_visual_icon03.png" alt="アイコン"></i> </li>
    </ul>

    <p class="read__text">
       誰でも手軽に制作依頼をモットーに運営している制作代理店です<br class="pc">ネット広告は、たった1%のクリック率向上で収益が<br class="pc">数千万単位で変動することもある業界です。<br class="pc">私たちはそんな世界で日々、お客様の売り上げ向上の為<br class="pc">サイトアクセス数の増加の為に切磋琢磨しております。
    </p>
  </div>
  <!-- ./content -->

</div>
<!-- ./key__visual -->

<section class="purchase__form">
<div class="section__inner form__inner">



<form action="<?php echo USCES_CART_URL ?>" method="post">
  <div id="form__parts" class="narrowcolumn" role="main"> 　　　　　
    <?php if (have_posts()) : ?>
    　
    　　
    <?php while (have_posts()) : the_post(); usces_the_item("bnr"); ?>
    <?php usces_have_skus();?>
      <div class="error_message">
        <?php usces_singleitem_error_message($post->ID, usces_the_itemSku('return')); ?>
      </div>

    <div class="form__entry"> 　
      <h1 class="band">ご注文はこちらから</h1>
      <dl>
        <dt>
            <div class="num__wrap">
              <div class="num__tit">1</div>
              <span>サイズ用途選択</span>
            </div><!-- ./num__wrap -->
         </dt>
        <dd class="select__zone" id="size__select"> <?php echo usces_the_itemOption("サイズ選択");?> </dd>

         <dl class="hidden control__num" id="control__num">
            <dt class="tc">管理番号を入力してください</dt>
            <dd><?php echo usces_the_itemOption("管理番号");?></dd>
        </dl>
         <dl class="hidden special__size" id="special__size">
            <dt>特殊サイズ希望の場合はこちら</dt>
            <dd class="">
              <div class="special__size-box flex al-cent">
                  <?php echo usces_the_itemOption("特殊サイズおおよその横サイズ");?><span>×</span><?php echo usces_the_itemOption("特殊サイズおおよその縦サイズ");?>
              </div><!-- ./special__size-box -->

               <div class="special__size-box mb0">
                 <p>詳細サイズを入力してください</p>
                 <div class="size__box-text flex al-cent">
                      <?php echo usces_the_itemOption("特殊サイズ詳細の横サイズ");?><span>×</span><?php echo usces_the_itemOption("特殊サイズ詳細の縦サイズ");?>
                 </div><!-- ./size__box-text -->
              </div><!-- ./special__size-box -->
            </dd>
        </dl>
      </dl>

      <dl class="select__btns">
        <dt>
            <div class="num__wrap">
              <div class="num__tit">2</div>
              <span>オプション選択</span>
            </div><!-- ./num__wrap -->

        </dt>
        <dd class="select__btn__zone flex" id="option">
          <?php echo usces_the_itemOption("オプション選択");?>
            <p class="note">※即日コースは15時までの受付となります。<br class="pc">※15時以降のご注文は翌営業日の対応となりますのでご了承ください</p>
      </dd>
      </dl>
         <dl class="select__public">
        <dt>
             <div class="num__wrap">
                <div class="num__tit">3</div>
                <span>デザイン指示</span>
            </div><!-- ./num__wrap -->
        </dt>
        <dd>
        <div class="text">
                  <?php echo usces_the_itemOption("デザイン指示");?>

                  <p class="note">※写真原稿をお持ちでない方はシチュエーションなどを記載ください</p>
        </div>
<!-- 追加方法が不明なので非表示 -->
       <!--  <div class="file__up">

        </div> -->


      </dl>
      <dl class="select__public select__btns">
        <dt>
            <div class="num__wrap">
                <div class="num__tit">4</div>
                <span>実績として公開</span>
            </div><!-- ./num__wrap -->
        </dt>
        <dd class="select__btn__zone public__btn flex" id="publish"><?php echo usces_the_itemOption("実績として公開");?>
      <p class="note">※当サイトでご紹介させて頂ければ００円お値引きさせて頂きます。</p></dd>
      </dl>
      <dl class="">
        <dt>
            <div class="num__wrap">
                <div class="num__tit">5</div>
                <span>お客様情報</span>
            </div><!-- ./num__wrap -->
        </dt>
        <dd class="info__customer flex">
          <div class="text__area"><span>会社名</span><?php echo usces_the_itemOption("会社名");?></div>
          <div class="text__area"><span>お名前</span><?php echo usces_the_itemOption("お名前");?></div>
          <div class="text__area"><span>メールアドレス</span><?php echo usces_the_itemOption("メールアドレス");?></div>
        </dd>
      </dl>
      <dl class="total">
        <dt> <div class="num__wrap">
                <div class="num__tit">6</div>
                <span>ご注文確認</span>
            </div><!-- ./num__wrap --></dt>
        <dd>
          <table class="output__table">

              <thead>
                <tr>
                  <th>サイズ</th>
                  <th>オプション</th>
                  <th>実績として公開</th>
                  <th class="last">合計金額</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td id="output__type"></td>
                  <td id="output__option"></td>
                  <td id="output__publish"></td>
                  <td class="last" id="output__price">¥<?php echo usces_totalprice_in_cart();?></td>

                </tr>


              </tbody>


          </table>

          <!-- <p>商品単位<?php echo usces_the_itemPriceCr();?></p>
          <p>カート内の合計金額¥<?php echo usces_totalprice_in_cart(); ?></p> -->


           <div class="cart__in">
             <div class="cart__btn__cont"><?php usces_the_itemSkuButton('カートへ入れる');?></div>
          </div><!-- ./cart-in -->


          <div class="term">
              <h3>利用規約</h3>

              <p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテ
                キストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>


          </div>
        </dd>
        　
      </dl>

      　 </div><!--./form__entry-->
    <?php endwhile; endif; ?>
  </div><!--./form__parts-->
</form>
</section>
<?php if (have_rows('bnr__list', 102)): ?>
<section class="infinite__banner__area">
  <div class="section__inner">

  <h2>制作実績</h2>

    <ul class="banners flex" id="infinite__banners">
      <?php while (have_rows('bnr__list', 102)) : the_row(); ?>
      <li class="js-modal-open　banner__item"> <img src="<?php the_sub_field('bnr__img', 102);?>" >
        <div class="bnr__modal__box modal js-modal">
          <div class="modal__bg js-modal-close">×</div>
          <div class="modal__inner">
            <div class="bnr__img"> <img src="<?php the_sub_field('bnr__img', 102);?>" > </div>
            <button value="<?php the_sub_field('number', 102);?>">このテイストで注文する</button>
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
