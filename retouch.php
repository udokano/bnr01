<?php
/*
Template Name: 修正について
*/
?>

<?php get_header();?>

<div class="pages__title retouch__bg">
<h1>バナーの修正について</h1>
<p>バナーの初稿デザインをクライアント様にチェックして頂き、<br class="pc">
変更や修正箇所の確認・指示をして頂きます。<br>
修正内容に関しましては、無料の場合と有料の場合がございます。<br class="pc">
簡単な文字変更、画像の修正などは<br class="pc">
無料で修正させて頂きます。</p>
</div>


<section class="retouch__desc desc01">
        <div class="section__inner">

        <h2>制作から修正回数と内容について</h2>

       <div class="desc_box flex">

            <dl>
                <dt>制作前の準備</dt>
                <dd>バナーに必要な素材（画像・テキスト）をできるだけご準備頂き、<br>バナー制作前に全てご提出いただきます｡<br>着手前までにご提出頂けなかった情報は､<br>修正時に有料となる場合がございます｡<br>予めご了承くださいませ。</dd>
            </dl>

             <dl>
                <dt>デザイン初稿提出</dt>
                <dd>内容とクオリティをご確認いただき､<br>修正内容をチェック頂きます｡<br>制作費用内での修正は2回まで<br>とさせて頂いております。3回目以降は､<br>デザインの最終調整程度とさせて頂きます｡</dd>
            </dl>

       </div><!-- ./desc__box -->

       <p class="txt">※誤字脱字の修正に関しましては､制作後も無料でご対応させて頂きますので､ご連絡下さいませ</p>
</div><!-- ./section__inner -->


</section>

<section class="retouch__desc desc02">
        <div class="section__inner">

        <h2>提出したデザイン案をご確認いただき､<br class="pc">修正箇所をご指示いただきます｡</h2>

        <p class="txt">修正には<span class="blue">［無料修正］</span>と<span class="pink">［有料修正］</span>がございます</p>

       <div class="desc_box flex">

            <dl>
                <dt class="bg-blue">無料修正</dt>
                <dd>・簡単なテキスト色修正・テキスト修正<br>・画像の差し替え（異なる商品画像）</dd>
            </dl>

             <dl>
                <dt class="bg-pink">有料修正</dt>
                <dd>・当初のデザインから大幅な変更等</dd>
            </dl>
       </div><!-- ./desc__box -->

</div><!-- ./section__inner -->
</section>

<section class="retouch__simulation">

<div class="section__inner">
    <h2>実際の修正から納品までのやりとりは<br class="pc">このようになります</h2>


<div class="retouch__simulation__flow">
    <dl class="desc__text">
        <dt>1回目</dt>
        <dd class="flex">
            <?php if (wp_is_mobile()) : ?>
            <div class="desc__contents">

                <div class="desc__wrap flex">
                    <div class="thumb">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/retouch/ retouch_thumb01.png" alt="サムネイル">
                    </div>

                    <div class="desc__text">
                        <div class="tit">
                            テキストの変更
                        </div>
                        <p>「海外コスメをお得に」を「輸入コスメをお得に」に変更する。</p>
                    </div>
                </div>

                 <div class="desc__wrap flex">
                    <div class="thumb">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/retouch/ retouch_thumb02.png" alt="サムネイル">
                    </div>

                    <div class="desc__text">
                        <div class="tit">
                            配置変更
                        </div>
                        <p>宣材写真の配置を入れ替えて少し小さく配置してほしい。</p>
                    </div>
                </div>

                 <div class="desc__wrap flex">
                    <div class="thumb">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/retouch/ retouch_thumb03.png" alt="サムネイル">
                    </div>

                    <div class="desc__text">
                        <div class="tit">
                            情報の追加
                        </div>
                        <p>制作前に頂いていなかった。ロゴを新たに配置してほしい。</p>
                    </div>
                </div>

                <div class="desc__wrap flex">
                    <div class="thumb">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/retouch/ retouch_thumb04.png" alt="サムネイル">
                    </div>

                    <div class="desc__text">
                        <div class="tit">
                            ボタンの色変更
                        </div>
                        <p>画像のボトルのようなメタリック調なグラデーションを追加したい。</p>
                    </div>
                </div>

                <div class="desc__img">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/retouch/retouch_img01.jpg?1458" alt="バナーサンプル">
                </div>

             </div><!-- ./desc__contents -->
<?php else: ?>
 <div class="desc__contents__wrap left">
                <div class="desc__text__contents top">
                    <div class="tit">
                        無料修正
                    </div>
                    <!-- ./tit -->
                    <div class="tit__sub">テキストの変更</div><!-- ./tit-sub -->
                    <p>「海外コスメをお得に」を「輸入コスメをお得に」に変更する。</p>
                </div><!-- ./desc__text__contents -->

                <div class="desc__text__contents bottom">
                    <div class="tit">
                        無料修正
                    </div>
                    <!-- ./tit -->
                    <div class="tit__sub">情報の追加</div><!-- ./tit-sub -->
                    <p>制作前に頂いていなかった、ロゴを新たに配置してほしい。</p>
                </div><!-- ./desc__text__contents -->
             </div><!-- ./desc__contents__wrap -->

             <div class="desc__img">
                 <img src="<?php echo get_template_directory_uri(); ?>/img/retouch/retouch_img01.jpg?1458" alt="バナーサンプル">
                 <img src="<?php echo get_template_directory_uri(); ?>/img/retouch/ retouch_img_sub01.png" alt="ポイント" class="sub__img">
             </div>

             <div class="desc__contents__wrap right">
                <div class="desc__text__contents top">
                    <div class="tit">
                        無料修正
                    </div>
                    <!-- ./tit -->
                    <div class="tit__sub">配置変更</div><!-- ./tit-sub -->
                    <p>宣材写真の配置を入れ替えて少し小さく配置してほしい。</p>
                </div><!-- ./desc__text__contents -->

                <div class="desc__text__contents bottom">
                    <div class="tit">
                        無料修正
                    </div>
                    <!-- ./tit -->
                    <div class="tit__sub">ボタンの色変更</div><!-- ./tit-sub -->
                    <p>画像のボトルのようなメタリック調なグラデーションを追加したい。</p>
                </div><!-- ./desc__text__contents -->
             </div><!-- ./desc__contents__wrap -->
<?php endif; ?>

        </dd>
    </dl>

    <dl class="desc__text">
        <dt><span class="count">2回目</span><div class="sub__text"><span class="sub__text__in">ページ修正</span></div></dt>
        <dd class="flex">
            <?php if (wp_is_mobile()) : ?>
   <div class="desc__contents">

                <div class="desc__wrap flex">
                    <div class="thumb">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/retouch/ retouch_thumb05.png" alt="サムネイル">
                    </div>

                    <div class="desc__text">
                        <div class="tit">
                            テキストの変更
                        </div>
                        <p>色をもう少し濃くしたい。</p>
                    </div>
                </div>

                 <div class="desc__wrap flex">
                    <div class="thumb">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/retouch/ retouch_thumb06.png" alt="サムネイル">
                    </div>

                    <div class="desc__text">
                        <div class="tit">
                            画像の色調整
                        </div>
                        <p>背景の色をもっと明るく加工。</p>
                    </div>
                </div>

                 <div class="desc__wrap flex">
                    <div class="thumb">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/retouch/ retouch_thumb07.png" alt="サムネイル">
                    </div>

                    <div class="desc__text">
                        <div class="tit">
                            テキストの変更
                        </div>
                        <p>「詳しくみる」を「詳しくはこちら」に変更する。</p>
                    </div>
                </div>

                <div class="desc__wrap flex">
                    <div class="thumb">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/retouch/ retouch_thumb08.png" alt="サムネイル">
                    </div>

                    <div class="desc__text">
                        <div class="tit pink">
                            デザインの変更
                        </div>
                        <p>「若い女性が好きそうなデザインで」との依頼だったが、大人な女性が好むデザインに変更したい。</p>
                    </div>
                </div>

                <div class="desc__img">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/retouch/retouch_img02.jpg?1450" alt="バナーサンプル">
                </div>

             </div><!-- ./desc__contents -->
<?php else: ?>
    <div class="desc__contents__wrap left">
                <div class="desc__text__contents top">
                    <div class="tit">
                        無料修正
                    </div>
                    <!-- ./tit -->
                    <div class="tit__sub">テキストの変更</div><!-- ./tit-sub -->
                    <p>色をもう少し濃く変更したい。</p>
                </div><!-- ./desc__text__contents -->

                <div class="desc__text__contents bottom">
                    <div class="tit bg-pink">
                        有料修正
                    </div>
                    <!-- ./tit -->
                    <div class="tit__sub pink">デザイン変更</div><!-- ./tit-sub -->
                    <p>「若い女性が好きそうなデザインで」との依頼だったが、大人な女性が好むデザインに変更したい。</p>
                </div><!-- ./desc__text__contents -->
             </div><!-- ./desc__contents__wrap -->

             <div class="desc__img">
                 <img src="<?php echo get_template_directory_uri(); ?>/img/retouch/retouch_img02.jpg?1458" alt="バナーサンプル">
                 <img src="<?php echo get_template_directory_uri(); ?>/img/retouch/ retouch_img_sub02.png" alt="ポイント" class="sub__img">
             </div>

             <div class="desc__contents__wrap right">
                <div class="desc__text__contents top">
                    <div class="tit">
                        無料修正
                    </div>
                    <!-- ./tit -->
                    <div class="tit__sub">画像の色調整</div><!-- ./tit-sub -->
                    <p>背景の色をもっと明るく加工。</p>
                </div><!-- ./desc__text__contents -->

                <div class="desc__text__contents bottom">
                    <div class="tit">
                        無料修正
                    </div>
                    <!-- ./tit -->
                    <div class="tit__sub">テキストの変更</div><!-- ./tit-sub -->
                    <p>「詳しくみる」を詳しくはこちらに変更する。</p>
                </div><!-- ./desc__text__contents -->
             </div><!-- ./desc__contents__wrap -->
<?php endif; ?>

        </dd>
    </dl>

    <dl class="desc__text">
        <dt><span class="count">3回目</span><div class="sub__text"><span class="sub__text__in">ページ修正</span></div></dt>
        <dd class="text__only">
            テキストの色修正や、画像の差し替え等、2回目の修正を行った部分を最終詰めて修正させて頂きます。3回目以降の場合は、テキスト内容の修正も有料となりますので、予めご了承ください。（誤字脱字は対象外）
        </dd>
    </dl>
  </div><!-- ./section__inner -->
</section>




<?php get_footer();?>