<?php

get_header();
?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
<section class="cart__area">

<div class="section__inner">
<div id="content" class="two-column">
<div class="catbox">


<script>



jQuery(function(){



//会員情報を指示書作成ボタンのリンクにパラメーターを追加
    jQuery(".direction__links a").each(function(i) {
		var user__name = $("#hidden__name__full").val();
		var user__mail = $("#hidden__mail").val();
        var obj = jQuery(this);
        var link = obj.attr("href");

        obj.attr("href",link +"&氏名=" + user__name + "&メールアドレス=" + user__mail );
    });

	//会員情報を指示書作成ボタンのリンクにパラメーターを追加
    /* jQuery(".direction__links a").each(function(i) {
		var order__number = $(".order_head_value .order_number").text();
        var obj = jQuery(this);


        obj.attr("data-num",order__number );
    }); */




//会員情報編集画面に、『氏名』『氏名カナ』『TEL』の値を飛ばす
	const tel__num = $("#hidden__tel").val();
	const name__value01 = $("#hidden__name01").val();
	const name__value02 = $("#hidden__name02").val();
	const name__value03 = $("#hidden__name03").val();
	const name__value04 = $("#hidden__name04").val();
	$("#tel").val(tel__num);
	$("#name1").val(name__value01);
	$("#name2").val(name__value02);
	$("#name3").val(name__value03);
	$("#name4").val(name__value04);

});

</script>

<div id="aa"></div>

<?php if (have_posts()) : usces_remove_filter(); ?>

	<div class="post" id="wc_<?php usces_page_name(); ?>">

<!-- <input type="text" id="kk" value="">
<button type="button" id="keep1">cookie1の保存</button>
<div id="cookie1__out"></div>

<button type="button" id="delete1">cookie1の削除</button> -->

		<h1 class="member_page_title tc"><?php _e('Membership', 'usces'); ?></h1>
		<input type="hidden" id="hidden__tel" value="<?php usces_memberinfo("tel");?>">
		<input type="hidden" id="hidden__name__full" value="<?php usces_the_member_name();?>">
			<input type="hidden" id="hidden__mail" value="<?php usces_memberinfo('mailaddress1');?>">
		<input type="hidden" id="hidden__name01" value="<?php usces_memberinfo("name1");?>">
		<input type="hidden" id="hidden__name02" value="<?php usces_memberinfo("name2");?>">
		<input type="hidden" id="hidden__name03" value="<?php usces_memberinfo("name3");?>">
		<input type="hidden" id="hidden__name04" value="<?php usces_memberinfo("name4");?>">
		<input type="hidden" id="hidden__pass01" value="<?php usces_memberinfo("password1");?>">

		<div class="entry">

			<div id="memberpages">

				<div class="whitebox">
					<div id="memberinfo">

					<ul class="member_submenu">
						<li class="edit_member"><a href="#edit"><?php _e('To member information editing', 'usces'); ?></a></li>
						<?php do_action('usces_action_member_submenu_list'); ?>
						<li class="logout_member"><?php usces_loginout(); ?></li>
					</ul>

					<div class="header_explanation">
					<?php do_action('usces_action_memberinfo_page_header'); ?>
					</div>

					<h3><?php _e('Purchase history', 'usces'); ?></h3>

					<?php usces_member_history(); ?>

					<h3><a name="edit"></a><?php _e('Member information editing', 'usces'); ?></h3>
					<div class="error_message"><?php usces_error_message(); ?></div>
					<form action="<?php usces_url('member'); ?>#edit" method="post" onKeyDown="if (event.keyCode == 13) {return false;}">
						<table class="customer_form" id="customer_form">
							<tr>
						<th scope="row"><?php _e('member number', 'usces');?></th>
						<td colspan="2"><?php usces_memberinfo('ID');?></td>
						</tr>
						<tr>
						<th scope="row"><?php _e('Strated date', 'usces');?></th>
						<td colspan="2"><?php usces_memberinfo('registered'); ?></td>
						</tr>
							<?php uesces_addressform('member', usces_memberinfo(null), 'echo'); ?>

							<tr>
								<th scope="row"><?php _e('e-mail adress', 'usces'); ?></th>
								<td colspan="2"><input name="member[mailaddress1]" id="mailaddress1" type="text" value="<?php usces_memberinfo('mailaddress1'); ?>" /></td>
							</tr>
							<tr>
								<th scope="row"><?php _e('password', 'usces'); ?></th>
								<td colspan="2"><input class="hidden" value=" " /><input name="member[password1]" id="password1" type="password" value="<?php usces_memberinfo('password1'); ?>" autocomplete="off" />
								<?php _e('Leave it blank in case of no change.', 'usces'); ?></td>
							</tr>
							<tr>
								<th scope="row"><?php _e('Password (confirm)', 'usces'); ?></th>
								<td colspan="2"><input name="member[password2]" id="password2" type="password" value="<?php usces_memberinfo('password2'); ?>" />
								<?php _e('Leave it blank in case of no change.', 'usces'); ?></td>
							</tr>
						</table>
						<input name="member_regmode" type="hidden" value="editmemberform" />
						<div class="send">
							<input name="top" type="button" value="<?php _e('Back to the top page.', 'usces'); ?>" onclick="location.href='<?php echo home_url(); ?>'" />
							<input name="editmember" type="submit" value="<?php _e('update it', 'usces'); ?>" />
							<input name="deletemember" type="submit" class="reave__btn" value="<?php _e('delete it', 'usces'); ?>" onclick="return confirm('<?php _e('All information about the member is deleted. Are you all right?', 'usces'); ?>');" />
						</div>
						<?php do_action('usces_action_memberinfo_page_inform'); ?>
					</form>

					<div class="footer_explanation">
					<?php do_action('usces_action_memberinfo_page_footer'); ?>
					</div>
					</div><!-- end of memberinfo -->
				</div><!-- end of whitebox -->
			</div><!-- end of memberpages -->

		</div><!-- end of entry -->
	</div><!-- end of post -->
<?php else: ?>
<p><?php _e('Sorry, no posts matched your criteria.', 'usces'); ?></p>
<?php endif; ?>
</div><!-- end of catbox -->
</div><!-- end of content -->
</div><!-- ./ section__inner -->

</section>


<?php get_footer(); ?>

<script>
//クッキーテスト





$(function() {
//$.cookie("form", "none");

//テスト記述
var kk = $("#kk").val();

$('#keep1').click(function(){
    $.cookie("cookie1", "kk", {expires: 7, path: "/"});
	alert(kk + "を保存しました");
});

$('#kk').val($.cookie('cookie1'));

$('#delete1').click(function(){

    $.removeCookie("form");


});


//ボタン非活性テスト

const c__names = $.cookie("form");

console.log(c__names);

const c__names01 = $.cookie();

console.log(c__names01);
$("#aa").text(c__names01);


jQuery(".direction__links a").each(function(i) {
        var c__names = $.cookie("form");
		console.log(c__names);
        var obj = jQuery(this);
		var href = obj.attr("href");
		console.log(href);
		if(href.indexOf(c__names) > -1) {
			obj.css("background-color","#666");
			obj.text("送信済み");//文字列を変更する。
			obj.attr("href","");//リンク先を消す。
		}


        //obj.attr("data-num",order__number );
    });


});


</script>
