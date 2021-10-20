<?php
/*
Template Name: お問い合わせ
*/
?>

<?php get_header();?>

<div class="pages__title contact__bg">
<h1>お問い合わせ</h1>
<p>バナー制作依頼の課程で、<br>ご不明な点がございましたら、<br>
お気軽にお問い合わせください。<br>
※原則メールのみの対応となります。</p>
<?php echo breadcrumb_func();?>
</div><!-- ./pages__title -->




<section class="contact">
<div class="section__inner">


<div class="contact__form">
<h2>お問い合わせフォーム</h2>

<div class="contact__form__content">

<?php echo do_shortcode('[contact-form-7 id="56" title="お問い合わせ"]');?>

</div>
<!-- ./contact__form__content -->


</div><!-- ./contact__form -->






</div><!-- ./section__inner -->
</section>




<?php get_footer();?>