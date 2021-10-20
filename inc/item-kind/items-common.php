<?php
$item_kind = $_GET['item'];
?>

<!-- リザイズ依頼の時は出力しない -->
 <?php if ( $item_kind !== 'item-resize' ) : ?>
<div class="p-order-row">
	<div class="p-order-row__inner">
			<dl class="p-option">
			  <dt class="p-option__name">デザイン指示・素材のアップロード
			  <span class="p-option__note">仕様書（手書きのラフスケッチ等）がございましましたら。こちらにアップロードをお願い致します。</span>
			  </dt>
			  <dd class="p-option__field">
				  <div class="p-direction">
					   <div class="p-direction__drop">
									<div class="row fileupload-buttonbar">
										<div class="input__wrap">
											<div id="fileuploader" class="p-new-upload">ファイル選択</div>
										</div>
										<!-- ./input__wrap -->
									</div>
									<!-- ./fileupload-buttonbar -->
								</div>
								<!-- ./file__drop -->
								<div class="p-direction__textarea js-placeholder">
								  <?php echo usces_the_itemOption( '作業のご指示' ); ?>
									<div class="placeholder js-placeholder01">
										こちらにデザイン指示を入力<br>例：明るい感じでロゴは右下に配置
									</div>
								</div>
								<!-- ./text -->
				  </div>
				   <!-- この中にアップロードしたファイルの詳細情報が出力される -->
							<div id="eventsmessage" class="p-eventsmessage"></div>
							 <div id="error" class="p-eventsmessage"></div>
							<div id="js-upload-container" class="p-upload-status"></div>

							  <!-- hidden__url__text URLを受け取るためだけのインプットテキスト -->
							<div class="hidden__url__text" id="url__input01">
								<?php echo usces_the_itemOption( 'ファイルURL01' ); ?>
							</div>

							<div class="hidden__url__text" id="url__input02">
								<?php echo usces_the_itemOption( 'ファイルURL02' ); ?>
							</div>

							<div class="hidden__url__text" id="url__input03">
								<?php echo usces_the_itemOption( 'ファイルURL03' ); ?>
							</div>
							<!-- ./hidden__url__text -->
			  </dd>
		  </dl>
	</div>
	<!-- __inner -->
  </div>
  <!-- __row -->
  <?php endif; ?>

	 <div class="p-order-row">
			<div class="p-order-row__inner">
				<ul class="p-check-list">
				  <li class="p-check-list__field c-check" id="js-record">
						<?php echo usces_the_itemOption( '実績として公開' ); ?>
				  </li>
				  <li class="p-check-list__note">
					  ※公開OKの場合500円お値引きさせて頂きます。
				  </li>
				</ul>
			</div>
			<!-- __inner -->
	  </div>
	  <!-- __row -->


	 <div class="p-order-row">
			<div class="p-order-row__inner">
				<ul class="p-check-list">
				  <li class="p-check-list__field c-check" id="js-data">
						<?php echo usces_the_itemOption( 'データご納品' ); ?>
				  </li>
				  <li class="p-check-list__add">
					  +1,500円
				  </li>
				  <li class="p-check-list__bottom-note">
					  ※ご自身でリサイズ等行う場合はご指定ください。なお、photoshopバージョンのご指定は出来ませんので予めご了承ください。
				  </li>
				</ul>
			</div>
			<!-- __inner -->
	  </div>
	  <!-- __row -->

	  <div class="p-order-row" id="js-cart-area">
			<div class="p-order-row__inner">
				  <div class="p-output__wrap">
						<dl class="p-output" id="js-scroll-fixed">
						  <dt class="p-output__left">
							<span class="p-output__link js-modal-open" data-id="js-modal-calender">納品スケジュールはこちらをご確認ください</span>
						  </dt>
						  <dd class="p-output__right">
							<p class="p-output__caption">小計</p>
							<p class="p-output__total">
							  <span class="p-output__price" id="js-output-total">0,000</span>
							  <span class="p-output__yen">円</span>
							</p>
						  </dd>
						</dl>
				  </div>

				   <p class="p-to-cart"><?php usces_the_itemSkuButton( 'カートに入れて注文に進む' ); ?></p>
			</div>
			<!-- __inner -->
	  </div>
	  <!-- __row -->
