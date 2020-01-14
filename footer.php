<footer id="site__footer">
  <ul class="footer__nav">
    <li><a href="<?php echo home_url('/');?>usces-cart" class="cart-view">カートを見る</a></li>
    <li><a href="<?php echo home_url('/');?>">制作依頼</a></li>
    <li><a href="<?php echo home_url('/');?>">お問い合わせ</a></li>
    <li><a href="<?php echo home_url('/');?>faq">よくある質問</a></li>
    <li><a href="<?php echo home_url('/');?>privacy">プライバシーポリシー</a></li>
    <li><a href="<?php echo home_url('/');?>company">会社概要</a></li>
    <li><a href="<?php echo home_url('/');?>company#company__info">特定商取引法に基づく表記</a></li>
  </ul>
</footer>
</div>
<!--  ./wrapper -->

<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.inview.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/scripts.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/top.js?"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/price.js"></script>
<?php wp_footer(); ?>
<!-- <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script> -->
<script>
$('input, textarea, select').on('keyup change', function(){
    $(window).on('beforeunload', function() {
      return "このページを離れると、入力したデータが削除されます。本当に移動しますか。";
    });
  });



  // 戻るリンクや送信ボタンなどの通常の方法で画面遷移した場合は、
  // 通常通りアラートは表示されずに遷移する
  $('a, input[type=submit]').on('click', function(e) {
    $(window).off('beforeunload');
  });



</script>
</body>
</html>