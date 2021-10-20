<?php
	/**
	 * This is calender.php
	 *
	 * @package theme-name（banner-var02）
	 */

?>

<?php
echo '<div class="l-cal">';

$file = new SplFileObject( 'csv/syukujitsu.csv' );
$file->setFlags( SplFileObject::READ_CSV );
$syuku_array = array();
foreach ( $file as $line ) {
	if ( isset( $line[1] ) ) {
		$date                 = date( 'Y-m-d', strtotime( $line[0] ) );
		$name                 = $line[1];
		$syuku_array[ $date ] = $name;
	}
}


$week     = array( '日', '月', '火', '水', '木', '金', '土' );
$get_date = date( 'Y-m' );
// 3ヵ月分なので3回繰り返し
for ( $x = 0; $x < 2; $x++ ) {
	/* ▼年月に-1を付けて月初を生成 */
	$tt = $get_date . '-1';
	// ▼現在の日付を起点にfor文の該当月を生成
	$now_date = date( 'Y-m-01', strtotime( $tt . '+' . $x . ' month' ) );
	// ▼カレンダーの見出しの年月用
	$now_month = date( 'Y年n月', strtotime( $now_date . '+' . $x . ' month' ) );
	// ▼毎月の月末日付取得
	$end_day = date( 't', strtotime( $now_date ) );
	// ▼月初めの空セルの生成用
	$start_week = date( 'w', strtotime( $now_date . '-01' ) );

	/* 本日の日付 */
	$current_day = date( 'Y-m-d' );

	/* 検証用 */
	$day = date( 'Y-m-02' );
	// 2日後
	$day_2_after = date( 'Y-m-d', strtotime( $day . ' +2 day' ) );

	// ▼jQueryで制御するためユニークなクラスをつける
	echo '<div class="set_cal' . esc_html( date( $x ) ) . ' l-cal__list" >';
	echo '<table class="l-cal__table js-cal-list" id="js-cal-table-' . esc_html( date( $x ) ) . '">';
	/* 該当月の年月表示 */
	echo '<tr>';
	/*
	 if ( 0 !== $x ) {
		$set_x = $x - 1;
		// ▼前月に戻す
		// echo '<td class="pre" data-pre="'.$set_x.'">↑</td>';
	} else {
		// echo '<td></td>';
	} */
	echo '<td colspan="7" class="l-cal__top">' . esc_html( date( 'Y年n月', strtotime( $now_date ) ) ) . '</td>';

	/*
	 if ( 2 !== $x ) {
		$set_n = $x + 1;
		// ▼次月にすすむ
		// echo '<td class="next" data-next="'.$set_n.'">↓</td>';
	} else {
		// echo '<td></td>';
	} */
	echo '</tr>';

	// 曜日の表示 日～土
	echo '<tr>';
	foreach ( $week as $key => $youbi ) {
		if ( $key == 0 ) { /* 日曜日 */
			echo '<th class="l-cal__week l-cal__week--sun">' . esc_html( $youbi ) . '</th>';
		} elseif ( $key == 6 ) { /* 土曜日 */
			echo '<th class=" l-cal__week l-cal__week--sat">' . esc_html( $youbi ) . '</th>';
		} else { // 平日
			echo '<th class="l-cal__week">' . esc_html( $youbi ) . '</th>';
		}
	}
	echo '</tr>';

	/* 日付表示部分ここから */
	echo '<tr>';
	/* 開始曜日まで日付を進める */
	for ( $i = 0; $i < $start_week; $i++ ) {
		echo '<td></td>';
	}
	// 1日～月末までの日付繰り返し
	$now_date_ymd = strtotime( date( 'ymd' ) );
	for ( $i = 1; $i <= $end_day; $i++ ) {
		$set_date     = date( 'Y-m', strtotime( $now_date ) ) . '-' . sprintf( '%02d', $i );
		$week_date    = date( 'w', strtotime( $set_date ) );
		$set_date_ymd = strtotime( $set_date );


		/* クラス名を定義 */
		$off_day  = 'is-off-day';
		$past_day = 'is-past-day';
		$now_day  = '';



		if ( $set_date === $current_day ) {
			$now_day = 'is-now';
		}


		// 現在日付から1日単位で休日かを判定する

		// 土日で色を変える
		if ( $week_date == 0 ) {
			// 日曜日
			echo '<td data-date="' . esc_html( $set_date ) . '" class="l-cal__date' . ' ' . esc_html( $off_day ) . '">' . $i . '</td>';
		} elseif ( $week_date == 6 ) {
			// 土曜日
			echo '<td data-date="' . esc_html( $set_date ) . '" class="l-cal__date' . ' ' . esc_html( $off_day ) . '">' . $i . '</td>';
		} elseif ( array_key_exists( $set_date, $syuku_array ) ) {
			// 祝日
			echo '<td data-date="' . esc_html( $set_date ) . '" class="l-cal__date' . ' ' . esc_html( $off_day ) . '">' . $i . '</td>';
		} elseif ( $now_date_ymd > $set_date_ymd ) {
			// 過去日付はNG
			echo '<td data-date="' . esc_html( $set_date ) . '" class="l-cal__date' . ' ' . esc_html( $past_day ) . ' ' . esc_html( $now_day ) . '">' . $i . '</td>';
		} else {
			// 平日
			echo '<td data-date="' . esc_html( $set_date ) . '" class="l-cal__date">' . $i . '</td>';
		}

		if ( $week_date == 6 ) {
			echo '</tr>';
			echo '<tr>';
		}
	}

	// 末日の余りを空白で埋める
	for ( $i = $week_date; $i < 6; $i++ ) {
		echo '<td></td>';
	}
	echo '</tr>';
	echo '</table>';
	echo '</div>';
}//end for

echo '</div>';

echo '<p class="l-cal__btm-guide"><span class="l-cal__btm-sq"></span><span class="l-cal__btm-main">この色(緑色)の日にちが納品日になります。</span></p>';
