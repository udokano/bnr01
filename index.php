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
                    <dd>1.お客様は権利者の許可を得ずに、本サービスを通じて提供されるいかなる情報についても、著作権法で認められるお客様個人の私的複製など著作権による制約を受けない範囲を超えての使用をすることはできません。<br>2.本項の規定に違反して権利者あるいは第三者との間で問題が生じた場合、お客様は自己の責任と費用においてその問題を解決するとともに、弊社に何の迷惑または損害を与えないものとします。<br>
3.本サービスに関する知的財産権及び著作権は、全て弊社または弊社にライセンスを許諾している者に帰属していることをお客様は確認するものとします。<br>4.弊社のサイトに属する画像データの全部、一部を複製して第三者に販売、譲渡貸与、配布等の行為を禁じます。<br>5.お客様は当該データおよび使用提供素材の利用が第三者の著作権、知的財産権、肖像権、プライバシー権、名誉権等の類する一切の権利を侵害しないことを弊社に表明・保証することを前提にこれが真実ではなかった場合、一切の損害、費用、弁護士費用等全ての費用を賠償するものとします。</dd>
                  </dl>

                  <dl>
                    <dt><span>第5条</span>接続設定及び環境等</dt>
                    <dd>1.お客様が本サービスを利用するのに必要なコンピューター機器、スマートフォン、及びその他通信機器及びインターネット利用等に必要なソフトウェアなどの設置に関する費用、本サービスを利用するために要した電話料金、LANなどの利用料及び申請料金などは、お客様ご自身にご負担いただきます。<br>2.弊社は本サービスがお客様の利用するあらゆる電子機器に適合することを保証しません。<br>3.複数のネットワークの接続上システム障害、通信エラーやバグの発生、その他の通信上の障害によってお客様が受ける損害等については当社は一切の責任を負いかねます。<br>※ご注文後、1～2営業日を経過しても弊社から連絡がない場合、弊社00-0000-0000までご連絡下さい。</dd>
                  </dl>

                  <dl>
                    <dt><span>第6条</span>個人情報の利用</dt>
                    <dd>
                      <p>本サービスの利用に関連して弊社が知り得たお客様の個人情報について、弊社は以下の項目に該当する場合を除き、第三者に開示または提供しないものとします。</p>
                      <p class="mb0">1.お客様が自己の氏名、メールアドレスなどの開示に同意している場合<br>2.弊社が本サービスの利用動向を把握する目的で集計した個人情報の統計を、個々の情報として特定のできない形式で第三者に提供する場合。<br>3.本サービスの提供に必要な場合（弊社からお客様に商品を発送する際に運送会社に対して住所、氏名を開示する場合など）その他、通産省の「民間部門における電子計算機処理に係る個人情報の保護に関するガイドライン」（平成9年3月4日告示第98号）により認められている場合。</p>
                    </dd>
                  </dl>

                  <dl>
                    <dt><span>第7条</span>商品の購入</dt>
                    <dd>
                    1.お客様は本サービスを利用して制作依頼をすることができます。<br>2.お客様は制作依頼注文を希望する場合、弊社が指定する方法に従って商品の購入を申し
込むものとします。<br>3.前項の申し込みに対して、注文確定をされた時点でお客様と弊社との間に当該商品などに関する売買契約が成立するものとします。<br>4.本サービスによるデータ入稿は、原則当サイトから受け取るものとします。<br>5.第2項の申し込み取り消しについて、原則としてデータの入稿後の取り消しはできないものとします。データをよくお確かめのうえで入力ください。
                    </dd>
                  </dl>

                  <dl>
                    <dt><span>第8条</span>支払い</dt>
                    <dd>1.本サービスによって購入された商品のお支払い方法は弊社ウェブサイトにおいて定めるクレジットカード決済によるものとします。<br>なお、品質不良・サービス不備によってお客様が被った被害に関して、弊社はいかなる場合においても契約に係る本料金（商品購入代金）の金額を超えて保証しないものとします。
                    </dd>
                  </dl>

                  <dl>
                    <dt><span>第9条</span>保証の否認及び免責</dt>
                    <dd>1.本サービス又は弊社ウェブサイトに関連して第三者、お客様、他のお客様との間に生じた取引、何らかの問題、連絡、紛争等に関して弊社は一切の責任を負いません。</dd>
                  </dl>

                  <dl>
                    <dt><span>第10条</span>サービスの停止</dt>
                    <dd>
                      <p>弊社は本サービスの稼働状態を良好に保つために、次の項目に該当する場合、お客様に事前に通知を行うことなく本サービスの提供の全部あるいは一部を停止することができるものとします。</p>
                      <p class="mb0">1.システムの定期保守及び緊急保守のために必要な場合<br>2.弊社のコンピューター及び通信回線等、運営においての当サービスの提供に必要な設備等が事故により使用不可能になった場合<br>3.地震、落電、風災害、天災地変、火災、停電、第三者による妨害行為などによりシステムの運用が困難になった場合<br>4.戦争、変乱、暴動、騒乱、労働争議等のようにその他不可抗力により当サービスの提供が不可能な場合<br>5.サービスの運営に支障が生じると弊社が判断した場合<br>6.お客様のセキュリティを確保する必要が生じた場合<br>7.その他、やむをえずシステムの停止が必要と弊社が判断した場合、またこのことによっ
て損害が発生した場合一切の責任を負わないものとします。</p>
                    </dd>
                  </dl>

                  <dl>
                    <dt><span>第11条</span>契約の解除</dt>
                    <dd>1.下記の項目にあたる事由のあるとき、弊社は当該契約を解除することができるものとします。またその場合、お客様が指定されたメールアドレスにその旨をご連絡させていただきます。<br>
・お客様が本規約に違反した場合<br>
・注文登録事項に虚偽の事実が生じ判明した場合<br>
・お客様の支払い能力が危うくなったと認めうる事情が判明した場合<br>
・破産手続き、民事再生手続き開始、特別清算手続き、会社更生手続き開始等、これらに類似する手続きの開始の申し立てがあったとき<br>
・弊社からのご連絡に長期間ご返信がない場合前項の規定に関わらず、本サービス利用に関して不正行為または不適切な行為があった場合、弊社は売買契約を取り消しもしくは解除、その他適切な措置をとることができるものとします。契約の解除への弊社の措置によりお客様に生じた損害に関して弊社は一切の責任を負いません。</dd>
                  </dl>

                  <dl>
                    <dt><span>第12条</span>損害賠償請求</dt>
                    <dd>1.弊社は商品入稿時の不測の事態（交通事情、自然災害等）ならびに弊社の不備もあわせまして、いかなる理由であっても納期の遅延が生じた場合の二次的（※）に発生する損害の一切の賠償責任を負わないものとします。<br>※ お店のオープンやイベントでの使用に間に合わなかった、エンドユーザーへの納品が遅れた等する損害、損失、不利益などに関して前項に定める以外の責任を負わないものとします。<br>2.弊社は、法律上の請求原因にかかわらず、いかなる場合においても本サービスにおいて売買される商品に関する損害、損失、不利益などに関して前項に定める以外の責任を負わないものとします。<br>3.弊社は、お客様が本サービスをご利用になれなかったことにより発生した一切の損害について、いかなる責任を負わないものとします。お客様の売買代金不払いその他本規約違反行為によって、損害賠償義務が発生し、その請求回収のために弊社が弁護士を用いた場合には、弁護士報酬規定基づく弁護士費用についてもお客様の負担とします。</dd>
                  </dl>

                  <dl>
                    <dt><span>第13条</span>連絡、通知</dt>
                    <dd>弊社はお客様に対して通知義務を負う場合は、お客様があらかじめ登録しているEメールアドレスまたは本サイトを通じて通知することにより、商品を入稿することによりその義務を果たしたものとします。</dd>
                  </dl>

                  <dl>
                    <dt><span>第14条</span>その他免責事項</dt>
                    <dd>1.弊社は、お客様から頂いた入力情報に従い事務を処理することにより免責されるものとします。<br>2.お客様が本サービスをご利用になることにより、他のお客様または第三者に対して損害などを与えた場合には、当該者は自己の責任と費用において解決し、弊社には切一切迷惑を与えないものとします。</dd>
                  </dl>

                  <dl>
                    <dt><span>第15条</span>その他</dt>
                    <dd>1.弊社と利用者との連絡方法は、Eメール及び本サイトによるものとします。弊社はオンラインサービスサイトとなりご来訪やその他対面での対応は行っておりません。<br>2.弊社にてサービスに何らかの変更があった場合は、HP上のNEWS(お知らせ)にてご案内をいたします。<br>3.本サービスのご利用に関して、本利用者規約により解決出来ない問題が生じた場合には、弊社とお客様との間で双方誠意を持って話し合い、これを解決するものとします。</dd>
                  </dl>

                  <dl>
                    <dt><span>第16条</span>利用規約の変更</dt>
                    <dd>弊社は、本規約を任意に改定できるものとします。 弊社は本利用規約を変更する場合には、利用規約を変更する旨を当社WEBサイトに掲示するものとし、ユーザーは利用規約変更後、サービスを利用した時点で、変更後の利用規約が適用されるものとします。</dd>
                  </dl>

                  <dl>
                    <dt>
                      <span>第17条</span>　準拠法及び管轄裁判所
                    </dt>
                    <dd>本規約の有効性、解釈及び履行については、日本法に準拠し、日本法に従って解釈されるものとします。 本規約、本サービスの利用に関して訴訟の必要が発生した場合には、弊社所在地を管轄する裁判所を唯一の合意管轄裁判所とします。</dd>
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
