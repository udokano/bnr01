<footer id="site__footer">

<ul class="footer__nav">
    <li><a href="<?php echo home_url('/');?>">注文履歴</a></li>
    <li><a href="<?php echo home_url('/');?>">制作依頼</a></li>
    <li><a href="<?php echo home_url('/');?>">お問い合わせ</a></li>
    <li><a href="<?php echo home_url('/');?>">よくある質問</a></li>
    <li><a href="<?php echo home_url('/');?>">プライバシーポリシー</a></li>
    <li><a href="https://www.u-d.jp/" target="_blank">会社概要</a></li>
     <li><a href="https://www.u-d.jp/" target="_blank"">特定商取引法に基づく表記</a></li>

</ul>


</footer>

</div><!--  ./wrapper -->
<!-- なぜかフォームリピートのJSファイルが読み込まれないため直接読み込み -->
<script src="<?php echo home_url('/');?>wp-content/plugins/cf7-fields-repeater-2.1.0/js/front.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- 無限スクロール -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jscroll/2.4.1/jquery.jscroll.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/scripts.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/top.js"></script>
<?php wp_footer(); ?>
</body>
</html>