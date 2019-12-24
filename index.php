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

              <div class="term__text__box">

                  <dl>
                    <dt></dt>
                    <dd>株式会社 U design（以下「弊社」）は、インターネット上で運営する「弊社」運営サイトバナー屋さん（以下、「本サイト」）において提供するサービスの利用規約として、本規約を定めます。</dd>
                  </dl>

                  <ul>
                    <li><span>第1条</span>規約の適用範囲及び変更について</li>
                    <li><span>第2条</span>本サービスの提供停止について</li>
                    <li><span>第3条</span>禁止事項</li>
                    <li><span>第4条</span>著作権</li>
                    <li><span>第5条</span>接続設定及び環境等</li>
                    <li><span>第6条</span>個人情報の利用</li>
                    <li><span>第7条</span>商品の購入</li>
                    <li><span>第8条</span>支払い</li>
                    <li><span>第9条</span>保証の否認及び免責</li>
                    <li><span>第10条</span>サービスの停止</li>
                    <li><span>第11条</span>契約の解除</li>
                    <li><span>第12条</span>損害賠償請求</li>
                    <li><span>第13条</span>連絡、通知</li>
                    <li><span>第14条</span>その他免責事項</li>
                    <li><span>第15条</span>その他</li>
                    <li><span>第16条</span>専門的合意管轄裁判所及び準拠法</li>
                    <li><span>第17条</span>準拠法及び管轄裁判所</li>
                  </ul>

                  <dl>
                    <dt><span>第1条</span>規約の適用範囲及び変更について</dt>
                    <dd>1.本規約は本サービスの提供またはその利用に関し、本サイト及びお客様に適用されるものとします。<br>2.本サービスをご利用いただいたお客様は、本規約ならびにサイトに記載されている内容に同意されたものとみなします。<br>3.弊社は、お客様の事前の承諾を得る事なく、本規約を変更できるものとします。</dd>
                  </dl>

                  <dl>
                    <dt><span>第2条</span>本サービスの提供停止について</dt>
                    <dd>弊社は、お客様が以下の項目に該当すると判断した場合、弊社が受注後でもお客様に事前通知することなく本サービスの利用の一時停止あるいは本サービス提供の停止、利用資格の取り消しを行うことができるものとします。</dd>
                  </dl>

                  <ul>
                    <li>1.過去に本利用規約違反などにより、警告及び解約処分を受けていることが判明した場合</li>
                     <li>2.本サービスに関する料金などの支払い債務遅延その他の不履行があった場合</li>
                      <li>3.本規約第３条禁止事項に定められている行為を行った場合</li>
                       <li>4.アカウント登録事項に虚偽があったり、不正に使用または使用させた場合</li>
                        <li>5.児童ポルノやわいせつ物の作成、名誉や信用の毀損等、犯罪行為や法令に違反する行為があった場合</li>
                         <li>6.本サービスの運営を妨害した場合</li>
                          <li>7.制作物が著作権及び商法権を侵害しているおそれがある場合</li>
                           <li>8.その他本規約および法令に違反した場合</li>
                  </ul>

                  <dl>
                    <dt><span>第3条</span>禁止事項</dt>
                    <dd>お客様は本サービスの利用に当たり、以下の行為を行ってはならないものとします。</dd>
                  </dl>

                  <ul>
                    <li>1.本サービスの運営を妨げる行為、その他本サービスに支障をきたす恐れのある行為</li>
                    <li>2.メールアドレスを不正に使用する行為</li>
                    <li>3.弊社または第三者に迷惑、不利益もしくは経済的損害を与える行為、またはそれらの恐れのある行為</li>
                    <li>4.他の利用者、第三者もしくは弊社の商標権、著作権、プライバシーその他の権利を侵害する行為、またはそれらのおそれのある行為</li>
                    <li>5.公序良俗に反する行為、その他法令に違反する行為、またはそれらの恐れのある行為</li>
                    <li>6.第三者に成りすます行為当方または第三者に対する脅迫的な行為</li>
                    <li>7.本サービス利用に関する規約に違反する行為</li>
                    <li>8.第三者の名誉権、知的財産権、肖像権、プライバシー権等、その他一切の権利を侵害する行為</li>
                    <li>9.弊社のネットワーク、システム等に不正にアクセスする行為</li>
                    <li>10.その他、弊社が不適当と判断する行為</li>
                  </ul>

                  <dl>
                    <dt><span>第4条</span>著作権</dt>
                    <dd>も、著作権法で認められるお客様個人の私的複製など著作権による制約を受けない範囲を超えての使用をすることはできません。<br>2.本項の規定に違反して権利者あるいは第三者との間で問題が生じた場合、お客様は自己の責任と費用においてその問題を解決するとともに、弊社に何の迷惑または損害を与えないものとします。<br>
3.本サービスに関する知的財産権及び著作権は、全て弊社または弊社にライセンスを許諾している者に帰属していることをお客様は確認するものとします。<br>4.弊社のサイトに属する画像データの全部、一部を複製して第三者に販売、譲渡貸与、配布等の行為を禁じます。<br>5.お客様は当該データおよび使用提供素材の利用が第三者の著作権、知的財産権、肖像権、プライバシー権、名誉権等の類する一切の権利を侵害しないことを弊社に表明・保証することを前提にこれが真実ではなかった場合、一切の損害、費用、弁護士費用等全ての費用を賠償するものとします。</dd>
                  </dl>

              </div><!-- ./term__text__box -->


          </div><!-- ./term -->
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
