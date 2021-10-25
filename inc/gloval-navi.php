<!-- Gナビ -->



<nav class="l-gNav" id="js-spNav">

	<ul class="l-gNav__list">
		<li class="l-gNav__item">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>work" class="l-gNav__link">制作実績</a>
		</li>
		<li class="l-gNav__item">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="l-gNav__link">制作物について</a>
		</li>
		<li class="l-gNav__item">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>flow" class="l-gNav__link">納品までの流れ</a>
		</li>
		<li class="l-gNav__item">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>retouch" class="l-gNav__link">修正について</a>
		</li>
		<li class="l-gNav__item">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>faq" class="l-gNav__link">Q&A</a>
		</li>
		 <li class="l-gNav__item l-gNav__item--pc-hidden">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>company" class="l-gNav__link">会社概要</a>
		</li>
	</ul>

	<ul class="l-gNav__sp-actions u-sp">
	<?php if ( usces_is_login() ) : ?>
		<li class="l-gNav__sp-item">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>usces-member" class="l-gNav__sp-btn">マイページ</a>
		</li>
		 <li class="l-gNav__sp-item l-gNav__sp-item--contact">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>contact" class="l-gNav__sp-btn">お問い合わせ</a>
		</li>
	<?php else : ?>
		 <li class="l-gNav__sp-item">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>usces-member/?page=newmember" class="l-gNav__sp-btn">新規会員登録(無料)</a>
		</li>
		<li class="l-gNav__sp-item">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>usces-member" class="l-gNav__sp-btn">ログイン</a>
		</li>
		 <li class="l-gNav__sp-item l-gNav__sp-item--wide l-gNav__sp-item--contact">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>contact" class="l-gNav__sp-btn">お問い合わせ</a>
		</li>
	<?php endif; ?>

	</ul>

</nav>
