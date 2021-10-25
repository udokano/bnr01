<!--
ファイルアップロードの設定
-------------------------------------->


<script>
//ステータスが出力されるタグを移動



$(document).ready(function() {

	// protocol
	var protocol = location.protocol;
	// host
	var host = location.hostname;
	//$(".ajax-file-upload-container").appendTo("#js-upload-container");
	$("#fileuploader").uploadFile({
		url: "<?php echo esc_url( home_url( '/' ) ); ?>/fileup/upload02.php",
		fileName: "myfile",
		showDelete: true,
		maxFileCount: 3,
		dragDrop: true,
		multiple:true,
		dragdropWidth: "100%",
		autoSubmit: true,
		showFileCounter: false,
		dragDropStr: '<div class="target"><div class="sub__text">ここにファイルをドラッグして<br class="pc">アップロード<div class="up_icon"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/icons/img_up_icon.png" alt="画像アップロード"></div></div><p class="sub__text02">※可能ファイル：JPG/PNG/GIF/PDF/PSD/AI/エクセル/パワーポイント/ワード/zip<br>※データ量上限：10MB</p></div>',
		  showFileSize: true,
		statusBarWidth: "100%",
		previewWidth: "100%",
		showPreview: true,
		showError:true,
		acceptFiles: "save02/*",
		//previewHeight: "auto",
		//previewWidth: "10rem",
		returnType: "json",
		deleteStr: "削除",
		extErrorStr: "アップロード失敗しました。",
		/* アップロードさせるファイルを拡張子制限をかけるなら以下を設定 */
		//allowedTypes: "jpg,png,gif",
		uploadStr: "ファイル選択",

		//ステータスバーのタグの順序を変更

		customProgressBar: function(obj, s) {

			var createDOM = $("<div class='p-statusbar-top'></div>");
			this.statusbar = $("<div class='ajax-file-upload-statusbar'></div>");
			this.statusbar.append(createDOM);

			this.preview = $("<img class='ajax-file-upload-preview' />").width(s.previewWidth)
				.height(s.previewHeight).appendTo(createDOM).wrap(
					'<div class="p-upload-preview"></div>');
			this.filename = $("<div class='ajax-file-upload-filename'></div>").appendTo(
				createDOM);

			var createDOM02 = $("<div class='p-statusbar-right'></div>");
			createDOM.prepend(createDOM02);

			this.filename.prependTo(createDOM02);

			var createDOM03 = $("<div class='p-statusbar-bar-wrap'></div>");
			createDOM02.prepend(createDOM03);

			this.progressDiv = $("<div class='ajax-file-upload-progress'>").appendTo(this
					.statusbar)
				.hide();

			this.progressDiv.prependTo(createDOM03);

			this.progressbar = $("<div class='ajax-file-upload-bar'></div>").appendTo(this
				.progressDiv);
			this.abort = $("<div>" + s.abortStr + "</div>").appendTo(this.statusbar).hide();
			this.cancel = $("<div>" + s.cancelStr + "</div>").appendTo(this.statusbar).hide();
			this.done = $("<div>" + s.doneStr + "</div>").appendTo(this.statusbar).hide();
			this.download = $("<div>" + s.downloadStr + "</div>").appendTo(this.statusbar)
				.hide();
			this.del = $("<div>" + s.deleteStr + "</div>").appendTo(this.statusbar).hide();

			this.del.prependTo(createDOM03);

			this.abort.addClass("ajax-file-upload-red");
			this.done.addClass("ajax-file-upload-green");
			this.download.addClass("ajax-file-upload-green");
			this.cancel.addClass("ajax-file-upload-red");
			this.del.addClass("ajax-file-upload-red");


		},

		onLoad: function(obj) {

			//エラーメッセージの初期化
			$("#eventsmessage").html($("#eventsmessage").html() + "");
			//ステータスを別の要素に移動させる
			$(".ajax-file-upload-container").appendTo("#js-upload-container");
		},
		onSubmit: function(files) {
			//$("#eventsmessage").html($("#eventsmessage").html() + "<br/>Submitting:" + JSON.stringify(files));
			//return false;
			//uploadObj.startUpload();
		},

		//アップロード成功時の処理
		onSuccess: function(files, data, xhr, pd) {
			//不要な点("")を削除
			var fn = JSON.stringify(data);
			var rpname = fn.replace('"', "");
			var rpname02 = rpname.replace('"', "");

			$('.ajax-file-upload-statusbar').each(function(i) {
				$(this).attr('id', 'box' + (i + 1));
			});



			//確認ようで表にもURLを出力

			/* ２つ目以降のファイルをアップロードしたときに、メッセージが二重に表示されるのを阻止
			すでにメッセージが存在する場合には、一旦メッセージを削除して、再度メッセージを表示！！!!
			--*/
			if (($('.js-add-message').length)) {
				$('.ajax-file-upload-statusbar > .js-add-message:first-of-type').remove();
				$(".ajax-file-upload-statusbar").prepend(
					'<p class="p-message js-add-message u-tc">アップロード完了</p>');
			} else {
				$(".ajax-file-upload-statusbar").prepend(
					'<p class="p-message js-add-message u-tc">アップロード完了</p>');
			}

			//テスト用

			/* <?php echo home_url( '/' ); ?>fileup/uploads/" + rpname02 + */
			  //$(".js-add-message").html("<?php echo home_url( '/' ); ?>fileup/uploads/" + rpname02);


				$("#eventsmessage").html($("#eventsmessage").html()+"<p class='js-url'><?php echo home_url( '/' ); ?>fileup/uploads/"+rpname02 + '</p>');

				  $('#eventsmessage > p').each(function(i) {
				$(this).attr('id', 'url' + (i + 1));
			});

			var output_url01 = $("#url1").text();
			var output_url02 = $("#url2").text();
			var output_url03 = $("#url3").text();

			var urlInput01 = $("#url__input01 >input");
			var urlInput02 = $("#url__input02 >input");
			var urlInput03 = $("#url__input03 >input");

			urlInput01.val(output_url01);
			urlInput02.val(output_url02);
			urlInput03.val(output_url03);



		   $("#error").html("");

		},
		afterUploadAll: function(obj) {
			$("#eventsmessage").html($("#eventsmessage").html());


		},
		onError: function(files, status, errMsg, pd) {


			$("#error").html(JSON.stringify(files) + "のアップロードが失敗しました");

			 setTimeout(function(){
		 var ddf = $(".ajax-file-upload-statusbar span");
			console.log(ddf);
			if($(".ajax-file-upload-statusbar span").hasClass("ajax-file-upload-error")){
				var sssd = $(".ajax-file-upload-error").parent(".ajax-file-upload-statusbar");
				$(".ajax-file-upload-error").parent(".ajax-file-upload-statusbar").remove();
			}
	},500);



		},
		onCancel: function(files, pd) {
			$("#eventsmessage").html($("#eventsmessage").html() + "<br/>キャンセルしました" + JSON
				.stringify(
					files));
		},
		deleteCallback: function(data, pd) {

			 $('.ajax-file-upload-statusbar').each(function(i) {
				$(this).attr('id', 'box' + (i + 1));
			});

			 $('#eventsmessage > p').each(function(i) {
				$(this).attr('id', 'url' + (i + 1));
			});

			var id_check = $(this).parents('.ajax-file-upload-statusbar').attr("id")
			console.log($(this).parents('.ajax-file-upload-statusbar').attr("id") == "box1");

			var urlInput01 = $("#url__input01 >input");
			var urlInput02 = $("#url__input02 >input");
			var urlInput03 = $("#url__input03 >input");
			var urlText01 = urlInput01.val();
			var urlText02 = urlInput02.val();
			var urlText03 = urlInput03.val();

			if (id_check == "box1") {
				if(urlText02 == "" && urlText03 == ""){
				urlInput01.val("");
				}else {
				urlInput01.val("");
				urlInput01.val(urlText02);
				urlInput02.val("");
				urlInput02.val(urlText03);
				urlInput03.val("");
				}

				$("#url1").remove();
			}
			if (id_check == "box2") {
				urlInput02.val("");
				urlInput02.val(urlText03);
				urlInput03.val("");
				$("#url2").remove();
			}

			if (id_check == "box3") {
				urlInput03.val("");
				$("#url3").remove();
			}
			$("#error").html("");
			for (var i = 0; i < data.length; i++) {
				$.post("<?php echo home_url( '/' ); ?>fileup/delete.php", {
						op: "delete",
						name: data[i]
					},
					function(resp, textStatus, jqXHR) {
						//Show Message
						/*  $(".js-add-message").text("ファイルを削除しました"); */
						//$("#eventsmessage").html("ファイルを削除しました<br>もう一度ファイルをアップロードしてください");
						//WELLCARTのオプションの値を一旦からにする

					});
			}
			pd.statusbar.hide(); //You choice.
		}

	});
});

//$("#aa").text(url);
</script>
