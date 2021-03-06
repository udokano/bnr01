<?php if (is_home() || is_front_page()) : ?>
<div class="cards">
  <p><img src="<?php echo get_template_directory_uri(); ?>/img/top/cards.jpg?2015" alt="クレジットカード"></p>
</div>
<?php endif; ?>

<footer id="site__footer">
  <div class="footer__logo"> <img src="<?php echo get_template_directory_uri(); ?>/img/common/bottom_logo.png" alt="バナー屋さん"> </div>
  <ul class="footer__nav">
    <li><a href="<?php echo home_url('/');?>usces-cart" class="cart-view">カートを見る</a></li>
    <li><a href="<?php echo home_url('/');?>#form__head">制作依頼</a></li>
    <li><a href="<?php echo home_url('/');?>contact">お問い合わせ</a></li>
    <li><a href="<?php echo home_url('/');?>faq">よくある質問</a></li>
    <li><a href="<?php echo home_url('/');?>privacy">プライバシーポリシー</a></li>
    <li><a href="<?php echo home_url('/');?>company">会社概要</a></li>
    <li><a href="<?php echo home_url('/');?>company#company__info">特定商取引法に基づく表記</a></li>
  </ul>
  <p class="tc copy">© バナー屋さん.</p>
</footer>
</div>
<!--  ./wrapper -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.1/js/swiper.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.inview.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/scripts.js?var=1.3"></script>




<?php if (is_home() || is_front_page()) : ?>

<script src="<?php echo get_template_directory_uri(); ?>/js/top.js?var=1.1.7"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/price.js"></script>

<?php endif; ?>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.autoKana.js"></script>
<?php if (is_page('direction')): ?>

<!-- The template to display files available for upload -->
    <script id="template-upload" type="text/x-tmpl">
      {% for (var i=0, file; file=o.files[i]; i++) { %}
          <tr class="template-upload fade">
          <td>
            <strong class="error text-danger"></strong>
          </td>
              <td>
                  <span class="preview"></span>
              </td>
              <td>
                  {% if (window.innerWidth > 480 || !o.options.loadImageFileTypes.test(file.type)) { %}
                      <p class="name">{%=file.name%}</p>
                  {% } %}

              </td>
              <td>
                  <p class="size">Processing...</p>
                  <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0"><div class="progress-bar progress-bar-success" style="width:0%;"></div></div>
              </td>
              <td class="btn__cell">
                  {% if (!o.options.autoUpload && o.options.edit && o.options.loadImageFileTypes.test(file.type)) { %}
                    <button class="btn btn-success edit" data-index="{%=i%}" disabled>
                        <i class="glyphicon glyphicon-edit"></i>
                        <span>Edit</span>
                    </button>
                  {% } %}
                  {% if (!i && !o.options.autoUpload) { %}
                      <button class="btn btn-primary start" disabled>
                          <i class="glyphicon glyphicon-upload"></i>
                          <span>Start</span>
                      </button>
                  {% } %}
                  {% if (!i) { %}
                      <button class="btn btn-warning cancel">
                          <i class="glyphicon glyphicon-ban-circle"></i>
                          <span>Cancel</span>
                      </button>
                  {% } %}
              </td>
          </tr>
      {% } %}
    </script>
    <!-- The template to display files available for download -->
    <script id="template-download" type="text/x-tmpl">
      {% for (var i=0, file; file=o.files[i]; i++) { %}
          <tr class="template-download fade">
                         {% if (file.error) { %}
                          {% } else { %}
                              <td class="fw600 tc">アップロード完了</td>
                          {% } %}

              <td>
                  <span class="preview">
                      {% if (file.thumbnailUrl) { %}
                          <a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" data-gallery><img src="{%=file.thumbnailUrl%}"></a>
                      {% } %}
                  </span>
              </td>
              <td>

                      <p class="name">
                          {% if (file.url) { %}
                              <a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" {%=file.thumbnailUrl?'data-gallery':''%}>{%=file.name%}</a><br class="pc-display">
							  <input type="text" name="url__input" value="{%=file.url%}" id="aa" class="sp__hidden ">
                          {% } else { %}
                              <span>{%=file.name%}</span>
                          {% } %}
                      </p>

                  {% if (file.error) { %}
                      <div><span class="label label-danger">エラー</span>許可されていないファイル形式です</div>
                  {% } %}
              </td>
              <td class="pc-display">
                  <span class="size">{%=o.formatFileSize(file.size)%}</span>
              </td>
              <td class="btn__cell">
                  {% if (file.deleteUrl) { %}
                      <button class="btn btn-danger delete" data-type="{%=file.deleteType%}" data-url="{%=file.deleteUrl%}"{% if (file.deleteWithCredentials) { %} data-xhr-fields='{"withCredentials":true}'{% } %}>
                          <i class="glyphicon glyphicon-trash"></i>
                          <span>削除</span>
                      </button>
                      <!--<input type="checkbox" name="delete" value="1" class="toggle">-->
                  {% } else { %}
                      <button class="btn btn-warning cancel">
                          <i class="glyphicon glyphicon-ban-circle"></i>
                          <span>取り消し</span>
                      </button>
                  {% } %}
              </td>
          </tr>
      {% } %}
    </script>
    <script
      src="<?php echo get_template_directory_uri(); ?>/js/jquery.min.js"
      integrity="sha384-xBuQ/xzmlsLoJpyjoggmTEz8OWUFM0/RC5BsqQBDX2v5cMvDHcMakNTNrHIW2I5f"
      crossorigin="anonymous"
    ></script>
    <!-- The jQuery UI widget factory, can be omitted if jQuery UI is already included -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/vendor/jquery.ui.widget.js"></script>
    <!-- The Templates plugin is included to render the upload/download listings -->
    <script src="https://blueimp.github.io/JavaScript-Templates/js/tmpl.min.js"></script>
    <!-- The Load Image plugin is included for the preview images and image resizing functionality -->
    <script src="https://blueimp.github.io/JavaScript-Load-Image/js/load-image.all.min.js"></script>
    <!-- The Canvas to Blob plugin is included for image resizing functionality -->
    <script src="https://blueimp.github.io/JavaScript-Canvas-to-Blob/js/canvas-to-blob.min.js"></script>
    <!-- Bootstrap JS is not required, but included for the responsive demo navigation -->
    <script
      src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"
      integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
      crossorigin="anonymous"
    ></script>
    <!-- blueimp Gallery script -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.blueimp-gallery.min.js"></script>
    <!-- The Iframe Transport is required for browsers without support for XHR file uploads -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.iframe-transport.js"></script>
    <!-- The basic File Upload plugin -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.fileupload.js"></script>
    <!-- The File Upload processing plugin -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.fileupload-process.js"></script>
    <!-- The File Upload image preview & resize plugin -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.fileupload-image.js"></script>
    <!-- The File Upload audio preview plugin -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.fileupload-audio.js"></script>
    <!-- The File Upload video preview plugin -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.fileupload-video.js"></script>
    <!-- The File Upload validation plugin -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.fileupload-validate.js"></script>
    <!-- The File Upload user interface plugin -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.fileupload-ui.js"></script>
    <!-- The main application script -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/demo.js"></script>
    <!-- The XDomainRequest Transport is included for cross-domain file deletion for IE 8 and IE 9 -->
    <!--[if (gte IE 8)&(lt IE 10)]>
      <script src="js/cors/jquery.xdr-transport.js"></script>
    <![endif]-->

    <script>



    /*
    ファイルアップロード関連の記述
    ----------------------------- */

$(function () {
    $('#fileupload').fileupload({
	autoUpload: true,
	maxFileSize: 10240000, // 10 MB
	maxNumberOfFiles: 1, //3個までを、1個に変更
    dropZone: $(".target")
});


});
</script>

<?php endif; ?>

<?php if (is_page('usces-cart')): ?>
<script>
/*
戻るボタン押したらバリデーション無効化する
-------------*/
  jQuery(".back_cart_button").on("click", function () {
      jQuery("input").removeClass("validate[required]");
      jQuery("input").removeClass("validate[required,equals[mailaddress1]]");
      jQuery("input").removeClass("validate[required,equals[pass01]]");
  });

</script>
<?php endif; ?>
<?php wp_footer(); ?>
</body>
</html>
