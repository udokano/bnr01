<script>

$(function(){



	var itemNav = $(".js-item-nav");




	   //パラメータつけてページ繊維
			 //パラメーターの値で出力する購入ページを切り替える
		   var urlParam = location.search.substring(1);
		   var paramValue = urlParam.split("=");
		console.log(paramValue[1]);

		   itemNav.each(function(){
				var itemData = $(this).data("kind");

				if(urlParam) {
					 if(itemData === paramValue[1]){
						$(this).addClass("is-item-current");
					}

					if(paramValue[1] === "item-leave"){
						 itemNav.eq(0).addClass("is-item-current");
					}

				}

				else if(!urlParam ) {
					itemNav.eq(0).addClass("is-item-current");
				}


		   });

   itemNav.click(function(){

		//itemNav.removeClass('is-item-current');

		//$(this).addClass('is-item-current');

		//クリック下ナビのData属性を取得
		var currentItem =  $(this).data("kind");

		//商品購入フォームの要素取得
		var item_kindElm = $(".js-item-kind");
		//一回非表示にする
		item_kindElm.removeClass("is-item-show");

		//購入フォームのラッパー取得
		var item_kindWrap = $("#js-item-area");
		//ローディングアニメーション挿入
		item_kindWrap.append('<div class="is-item-loading"></div>');

		$.ajax({
			//url: '<?php echo esc_url( get_template_directory_uri() ); ?>/inc/item-kind/ajax.php',
		   /*  type: 'GET', */
			dataType: 'html',
			data : {
				kind : $(this).data("kind"),
			}
		}).done(function(data){
			/* 通信成功時 */


			//history.pushState(null,null,url);
			//ページ更新
			 var url = document.location.href.substring(window.location.href.lastIndexOf('/') + 1).split('?');
			var url = url[0]+"?item="+currentItem;
			location.href = url + '#js-item-area';

			//パラメーターの値で出力する購入ページを切り替える
		   var urlParam = location.search.substring(1);
		   var paramValue = urlParam.split("=");
		   console.log(paramValue[1]);

			$(".is-item-loading").remove();


				//$("#"+currentItem).addClass("is-item-show");


		}).fail(function(data){
			/* 通信失敗時 */
			alert('通信失敗！');

		});
	});
});

</script>
