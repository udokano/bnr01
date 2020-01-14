<?php get_header();?>
<div class="key__visual">
  <div class="content">
    <h1><img src="<?php echo get_template_directory_uri(); ?>/img/top/key_visual_cach.png" alt="バナー制作のお悩みを解決し、アクセス数・収益の向上に貢献します"></h1>
    <ul class="key__visual__btn flex">

      <li><img src="<?php echo get_template_directory_uri(); ?>/img/top/key_visual_btn01.png" alt="最短当日納品"></li>
      <li><img src="<?php echo get_template_directory_uri(); ?>/img/top/key_visual_btn02.png" alt="クレカ払い可"></li>

    </ul>

  </div>
  <!-- ./content -->
</div>
<!-- ./key__visual -->


<section class="purchase__form">
  <div class="section__inner form__inner">
    <form action="<?php echo USCES_CART_URL ?>" data-persist="garlic" method="post" id="form">
      <div id="form__parts" class="narrowcolumn" role="main"> 　　　　　
        <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); usces_the_item("banner"); ?>
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
                <span>サイズ用途選択</span> </div>
              <!-- ./num__wrap -->
            </dt>
            <dd class="select__zone size__select" id="size__select"> <?php echo usces_the_itemOption("サイズ指定");?> </dd>
            <div class="hidden control__num" id="control__num">
              <p class="tc">管理番号を入力してください</p>
              <div><?php echo usces_the_itemOption("管理番号");?></div>
            </div>
            <div class="hidden special__size" id="special__size">
              <p class="tc">サイズを選択してください</p>
              <div class="special__size-box"> <?php echo usces_the_itemOption("特殊サイズ");?> </div>
              <!-- ./special__size-box -->
            </div>
          </dl>
          <dl class="select__btns">
            <dt>
              <div class="num__wrap">
                <div class="num__tit">2</div>
                <span>バナー形式</span> </div>
              <!-- ./num__wrap -->
            </dt>
            <dd class="select__zone" id="format"> <?php echo usces_the_itemOption("バナー形式");?> </dd>
          </dl>
          <dl class="select__btns">
            <dt>
              <div class="num__wrap">
                <div class="num__tit">3</div>
                <span>納期の選択</span> </div>
              <!-- ./num__wrap -->
            </dt>
            <dd class="select__btn__zone flex limit" id="limit"> <?php echo usces_the_itemOption("納期の選択");?>
              <p class="note">※即日コースは15時までの受付となります。<br class="pc">
                ※15時以降のご注文は翌営業日の対応となりますのでご了承ください</p>
            </dd>
          </dl>
          <dl class="select__public">
            <dt>
              <div class="num__wrap">
                <div class="num__tit">4</div>
                <span>デザイン指示</span> </div>
              <!-- ./num__wrap -->
            </dt>
            <dd>
              <div class="text" id="instruction"> <?php echo usces_the_itemOption("デザイン指示");?>
                <p class="note">※写真原稿をお持ちでない方はシチュエーションなどを記載ください</p>
              </div>
            </dd>

          </dl>
          <dl class="select__btns">
            <dt>
              <div class="num__wrap">
                <div class="num__tit">5</div>
                <span>データご納品</span> </div>
              <!-- ./num__wrap -->
            </dt>
            <dd class="select__btn__zone select__data flex" id="data"><?php echo usces_the_itemOption("データご納品");?>
              <p class="note">※ご自身でリサイズ等行う場合はご指定ください。なお、photoshopバージョンのご指定は出来ませんので予めご了承ください。</p>
            </dd>
          </dl>
          <dl class="select__public select__btns">
            <dt>
              <div class="num__wrap">
                <div class="num__tit">6</div>
                <span>実績として公開</span> </div>
              <!-- ./num__wrap -->
            </dt>
            <dd class="select__btn__zone public__btn flex" id="publish"><?php echo usces_the_itemOption("実績として公開");?>
              <p class="note">※当サイトでご紹介させて頂ければ500円お値引きさせて頂きます。</p>
            </dd>
          </dl>
          <dl class="total">
            <dt>
              <div class="num__wrap">
                <div class="num__tit">7</div>
                <span>ご注文確認</span> </div>
              <!-- ./num__wrap -->
            </dt>
            <dd>
              <!-- output__table -->
              <table class="output__table">
                <thead>
                  <tr>
                    <th>サイズ用途</th>
                    <th>納期</th>
                    <th>実績として公開</th>
                    <th class="last">合計金額（税別）</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td id="output__type"></td>
                    <td id="output__option"></td>
                    <td id="output__publish"></td>
                    <td class="last" id="output__rice">
                      <span>¥</span><span id="output__price">0</span>
                    </td>
                  </tr>
                </tbody>
              </table>
              <!-- ./ output__table-->
              <!-- <p>商品単位<?php echo usces_the_itemPriceCr();?></p>
          <p>カート内の合計金額¥<?php echo usces_totalprice_in_cart(); ?></p> -->

              <div class="cart__in">
                <div class="cart__btn__cont">
                  <?php usces_the_itemSkuButton('カートへ入れる');?>
                </div>
              </div>
              <!-- ./cart-in -->

            </dd>
          </dl>
        </div>
        <!--./form__entry-->
        <?php endwhile; endif; ?>
      </div>
      <!--./form__parts-->
    </form>
  </div>
</section>




<?php if (have_rows('bnr__list', 102)): ?>
<section class="infinite__banner__area">
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
