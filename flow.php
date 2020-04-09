<?php
/*
Template Name: 納品までの流れ
*/
?>

<?php get_header();?>

<div class="pages__title flow__bg">
<h1>納品までの流れ</h1>
<p>発注・納品までがスマート！<br>入力フォームに必要事項を記載するだけで<br class="">最短当日にバナーが完成いたします。</p>
<?php echo breadcrumb_func();?>
</div>


<section class="flow">
<div class="section__inner">


<div class="flow__step flex">
    <div class="thumb">
        <img src="<?php echo get_template_directory_uri(); ?>/img/flow/step_thumb01.jpg?0408" alt="サムネイル">
    </div><!-- ./thumb -->

    <div class="step__desc">
        <span>STEP1</span>
        <h3>ご注文フォーム入力</h3>
        <p>ご希望のバナーサイズや納期などを入力するとお見積りが算出されますので、<br>カートに入れてお支払いへお進みください。</p><p class="note">※複数ご依頼いただく際は、同じ手順を繰り返してカートへ入れた上で<br class="pc">お支払いにお進みください。</p>
    </div><!-- ./step__desc -->
</div>
<!-- ./flow__step -->

<div class="flow__step flex">
      <div class="step__desc">
        <span>STEP2</span>
        <h3>お客様情報の入力</h3>
        <p>注文フォームの入力が完了しましたら、お客様情報の入力をお願い致します。<br class="pc">メールアドレスの入力間違いの御座いませんよう、ご注意ください</p>
    </div><!-- ./step__desc -->
    <div class="thumb">
        <img src="<?php echo get_template_directory_uri(); ?>/img/flow/step_thumb02.jpg?0408" alt="サムネイル">
    </div><!-- ./thumb -->
</div>
<!-- ./flow__step -->

<div class="flow__step flex">
      <div class="thumb">
        <img src="<?php echo get_template_directory_uri(); ?>/img/flow/step_thumb03.jpg?0408" alt="サムネイル">
    </div><!-- ./thumb -->
      <div class="step__desc">
        <span>STEP3</span>
        <h3>お申し込み確定・クレジットカード決済</h3>
        <p>お申し込みを確定していただけましたら、お支払いのご案内をいたします。<br class="pc">クレジットカードにてのお支払いとなり「前払い」となります。<br class="pc">お支払いは一回払いのみとなり、また決済完了後のご注文内容の変更は一切お受けできませんので予めご了承ください。<br class="pc">ご入金確認後の作業となりますので、当日納品をご希望の際は１５時までに注文の確定をお願いいたします。</p>

<p class="note">※ご注文を確定され入金を確認しますと当サイトからご登録メールアドレスに確認用自動返信メールが届きます。</p>
    </div><!-- ./step__desc -->

</div>
<!-- ./flow__step -->

<div class="flow__step flex">

      <div class="step__desc">
        <span>STEP4</span>
        <h3>デザインのご指示</h3>
        <p>お支払い後、マイページにてデザインのご指示をお送りください。<br>『お任せ』であれば、掲載する文章だけでもかまいませんが、構成をご用意いただいた方が、<br class="pc">より理想に近い仕上がりになります。<br>その際、指示書ジェネレーターをお使いいただくと便利ですが、エクセルやパワーポイントやPDFファイルなど、作成しやすいファイル形態で作成し、<br class="pc">マイページより添付してお送りください。</p>

    </div><!-- ./step__desc -->

       <div class="thumb">
        <img src="<?php echo get_template_directory_uri(); ?>/img/flow/step_thumb06.jpg?0408" alt="サムネイル">
    </div><!-- ./thumb -->

</div>
<!-- ./flow__step -->


<div class="flow__step flex">
  <div class="thumb">
        <img src="<?php echo get_template_directory_uri(); ?>/img/flow/step_thumb04.jpg?0408" alt="サムネイル">
    </div><!-- ./thumb -->
      <div class="step__desc">
        <span>STEP5</span>
        <h3>バナー制作開始</h3>
        <p>ご入金が確認出来次第、ご入金確認のメールを送らせて頂きます。<br class="pc">その後バナー制作に取り掛かります。<br class="pc">通常1〜4営業日以内にて制作完了の運びとなります。<br class="pc">バナーが出来上がりましたら、お客様専用のURLにアップロードし、ご確認頂きます。</p>
        <p class="note">※修正対応は2回までとなります、サイズ変更、方向性の大幅変更は追加料金がかかります。<br class="pc">※お客様都合による修正・変更依頼に関しては、度合いに関わらず新規のご依頼としての<br class="pc">対応となりますので予めご了承ください。<br class="pc">※ファイルサイズ、レイアウトによってはお客様のご希望に添えない場合もございます、<br class="pc">制作に関するご指示のやりとりは原則メールのみの対応となります。</p>
    </div><!-- ./step__desc -->

</div>
<!-- ./flow__step -->

<div class="flow__step flex">

      <div class="step__desc">
        <span>STEP6</span>
        <h3>納品</h3>
        <p>修正後、お客様のご了承を頂けましたら添付ファイルにて納品します。</p>
        <p class="note">ご注意/免責事項<br>納品後の弊社による制作上の不具合は無性にて修正対応いたします。<br class="pc">それ以外の修正については新規のご依頼となります</p>
    </div><!-- ./step__desc -->
  <div class="thumb">
        <img src="<?php echo get_template_directory_uri(); ?>/img/flow/step_thumb05.jpg?0408" alt="サムネイル">
      </div><!-- ./thumb -->
</div>
<!-- ./flow__step -->






</div><!-- ./section__inner -->
</section>




<?php get_footer();?>
