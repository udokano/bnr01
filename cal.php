<!-- ３ヶ月版 -->

<?php
echo '<div class="cal_disp">';
// 祝日の読み込み
$file = new SplFileObject( 'csv/syukujitsu.csv' );
$file->setFlags( SplFileObject::READ_CSV );
$syuku_array = array();
foreach ( $file as $line ) {
	if ( isset( $line[1] ) ) {
		$date                 = date( 'Y-m-d', strtotime( $line[0] ) );
		$name                 = $line[1];
		$syuku_array[ $date ] = $name;
		// var_dump($line[0]);
	}
}

	// var_dump($rev);

$week     = array( '日', '月', '火', '水', '木', '金', '土' );
$get_date = date( 'Y-m' );
// 3ヵ月分なので3回繰り返し
for ( $x = 0; $x < 3; $x++ ) {
	// ▼年月に-1を付けて月初を生成
	$tt = $get_date . '-1';
	// ▼現在の日付を起点にfor文の該当月を生成
	$now_date = date( 'Y-m-01', strtotime( $tt . '+' . $x . ' month' ) );
	// ▼カレンダーの見出しの年月用
	$now_month = date( 'Y年n月', strtotime( $now_date . '+' . $x . ' month' ) );
	// ▼毎月の月末日付取得
	$end_day = date( 't', strtotime( $now_date ) );
	// ▼月初めの空セルの生成用
	$start_week = date( 'w', strtotime( $now_date . '-01' ) );

	// 本日の日付
	$current_day = date( 'Y-m-d' );

	// 検証用
	$day = date( 'Y-m-02' );
	// 2日後
	$day_2_after = date( 'Y-m-d', strtotime( $day . ' +2 day' ) );

	echo $day_2_after;

	// ▼jQueryで制御するためユニークなクラスをつける
	echo '<div class="set_cal' . $x . '">';
	echo '<table class="cal">';
	// 該当月の年月表示
	echo '<tr>';
	if ( $x != 0 ) {
		$set_x = $x - 1;
		// ▼前月に戻す
		echo '<td class="pre" data-pre="' . $set_x . '">↑</td>';
	} else {
		echo '<td></td>';
	}
	echo '<td colspan="5" class="center">' . date( 'Y年n月', strtotime( $now_date ) ) . '</td>';

	if ( $x != 2 ) {
		$set_n = $x + 1;
		// ▼次月にすすむ
		echo '<td class="next" data-next="' . $set_n . '">↓</td>';
	} else {
		echo '<td></td>';
	}
	echo '</tr>';

	// 曜日の表示 日～土
	echo '<tr>';
	foreach ( $week as $key => $youbi ) {
		if ( $key == 0 ) { // 日曜日
			echo '<th class="sun">' . $youbi . '</th>';
		} elseif ( $key == 6 ) { // 土曜日
			echo '<th class="sat">' . $youbi . '</th>';
		} else { // 平日
			echo '<th>' . $youbi . '</th>';
		}
	}
	echo '</tr>';

	// 日付表示部分ここから
	echo '<tr>';
	// 開始曜日まで日付を進める
	for ( $i = 0; $i < $start_week; $i++ ) {
		echo '<td></td>';
	}
	// 1日～月末までの日付繰り返し
	$now_date_ymd = strtotime( date( 'ymd' ) );
	for ( $i = 1; $i <= $end_day; $i++ ) {
		$set_date     = date( 'Y-m', strtotime( $now_date ) ) . '-' . sprintf( '%02d', $i );
		$week_date    = date( 'w', strtotime( $set_date ) );
		$set_date_ymd = strtotime( $set_date );


		// 納期のフラグ
		$limitDay = ' ';


		// 現在日付から1日単位で休日かを判定する

		// 土日で色を変える
		if ( $week_date == 0 ) {
			// 日曜日
			echo '<td class="sun ng  ' . $limitDay . '">' . $i . '</td>';
		} elseif ( $week_date == 6 ) {
			// 土曜日
			echo '<td class="sat ng ' . $limitDay . '">' . $i . '</td>';
		} elseif ( array_key_exists( $set_date, $syuku_array ) ) {
			// 祝日
			echo '<td class="sun ng ' . $limitDay . '">' . $i . '</td>';
		} elseif ( $now_date_ymd >= $set_date_ymd ) {
			// 過去日付はNG
			echo '<td class="ng ' . $limitDay . '">' . $i . '</td>';
		} else {
			// 平日
			echo '<td data-date="' . $set_date . '" class="ok ' . $limitDay . '">' . $i . '</td>';
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



?>
