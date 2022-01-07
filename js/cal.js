$(function () {


    var dateArray = [];
    var offDayArray = [];

    $(".js-cal-list td").each(function (i) {
        var thisData = $(this).data("date");

        dateArray.push(thisData);

        /*  if (thisData === nowFulDate) {
             $(this).addClass("is-limit-day");
         } */

    });

    $(".is-off-day").each(function () {

        var offDate = $(this).data("date");
        offDayArray.push(offDate);


    });

    //console.log(dateArray);
    //console.log(offDayArray);

    var $i = -1;
    var $j = 0;
    var $d = -1.5;



    //本日の日付取得
    var dateObj = new Date();
    //テスト用
    //var dateObj = new Date(2021, 5, 5);


    var nowDayCalc = dateObj.setDate(dateObj.getDate() + $d);
    var fullYear = dateObj.getFullYear();

    //var month = ("0" + (dateObj.getMonth() + 1)).slice(-2);
    var month = ("0" + (dateObj.getMonth())).slice(-2);


    var nowDay = ("0" + dateObj.getDate()).slice(-2);
    //console.log(fullYear + "-" + month + "-" + nowDay);
    var nowFulDate = fullYear + "-" + month + "-" + nowDay;
    //console.log(nowFulDate);

    //納期日(2日後)を取得

    /*    var $i = 1;
       var $j = 2; */

    var limitDayObj = new Date();
    var limitDay = limitDayObj.setDate(limitDayObj.getDate());
    var limitDayFullYear = limitDayObj.getFullYear();
    var limitDayMonth = ("0" + (limitDayObj.getMonth() + 1)).slice(-2);
    var limitDate = ("0" + limitDayObj.getDate()).slice(-2);

    var limitFulDate = "";
    //console.log(limitFulDate);

    var tf = "";

    var sampleDay = "2021-05-08";

    //console.log(sampleDay);



    //var currentDate = $(".is-now").data("date");
    var currentNowDate = "2021-05-08";

    while ($i < $j) {

        //本番用
        limitDayObj = new Date();
        //テスト用好きな日程を入れる
        //limitDayObj = new Date(2021, 10, 20);

        limitDay = limitDayObj.setDate(limitDayObj.getDate() + $j);
        limitDayFullYear = limitDayObj.getFullYear();

        //本番用
        limitDayMonth = ("0" + (limitDayObj.getMonth() + 1)).slice(-2);
        //テスト用
        //limitDayMonth = ("0" + (limitDayObj.getMonth())).slice(-2);

        limitDate = ("0" + limitDayObj.getDate()).slice(-2);
        limitFulDate = limitDayFullYear + "-" + limitDayMonth + "-" + limitDate;
        //console.log("条件分岐の前" + limitFulDate);

        //$i++;


        //現在の日にちが平日なら


        /* if ($.inArray(currentNowDate, offDayArray) == -1) {

             //二日後の日程が休業日なら
            if ($.inArray(limitFulDate, offDayArray) != -1) {
                console.log("OFFDAY");
                //console.log(sampleDay);
                console.log("祝日：" + limitFulDate);
                console.log($.inArray(limitFulDate, offDayArray));
                tf = limitFulDate;
                console.log("sss", tf);
                $i++;
                $j++;
            }

            else if ($.inArray(tf, dateArray) != -1) {
                $j = $j + 2;
                $i = $j - 1;
                console.log("sss", $j);
                tf = "";
            }

            else {
                $i++;
                if (tf != "") {
                    limitFulDate = tf;
                }

                console.log("END");
                console.log("祝日から平日になったよ：" + limitFulDate);

            }

        }

        //現在の日にちが休業日

        else {

            if ($j === 2 && $i == 0) {
                $j =  -2;
                $i = -6;
                $d = -5;
                console.log("リセット")
            }

            //二日後も休業日
            if ($.inArray(limitFulDate, offDayArray) != -1) {
                //console.log("OFFDAY");
                //console.log(sampleDay);
                console.log("祝日：" + limitFulDate);
                $j++;
                $i++;
            }


            //二日後の日付が営業日になったら
            else if ($.inArray(limitFulDate, dateArray) != -1) {
                console.log("TEST");
                $j++;
                console.log("J:"+ $j);
                $d = 2;
                $i = $j;
                console.log("I:" + $i);

            }

            else {
                $i = $j;
            }


        } */


        //二日後も休業日
        if ($.inArray(limitFulDate, offDayArray) != -1) {
            //console.log("OFFDAY");
            //console.log(sampleDay);
            //console.log("祝日：" + limitFulDate);
            $j++;
            $i++;
        }


        //二日後の日付が営業日になったら
        else if ($.inArray(limitFulDate, dateArray) != -1) {
            //console.log("TEST");
            $j++;
            //$j = $j + 1;
            //console.log("J:" + $j);
            $d++;
            $i++;
            $i = $i + $d;

            //console.log("I:" + $i);
        }

        else {
            $i = $j;
        }
    }

    $(".js-cal-list td").each(function () {
        limitFulDate = limitFulDate;
        //console.log("tt:" + limitFulDate);
        var thisDate = $(this).data("date");
        /*  console.log("カレンダーの日付:" + thisDate);
         console.log("ループの後の日付:" + limitFulDate); */
        if (thisDate === limitFulDate) {
            $(this).addClass("is-limit-day");
        }
    });

});
