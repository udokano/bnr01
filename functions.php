<?php




//サムネイル画像有効
add_theme_support('post-thumbnails', array( 'post' ));



//投稿サムネイルサイズ指定
add_image_size('thumb300', 300, 220, true);
add_image_size('thum', 600, 450, true);


//カートの表をカスタマイズ

/*いらない項目を削除*/

function correct_cart_rows($html)
{
    $html = preg_replace('/<td class="thumbnail">(.*)<\/td>/', '', $html);

    $html = preg_replace('/<td class="quantity">(.*)<\/td>/', '', $html);

    return $html;
}
add_filter('usces_filter_cart_rows', 'correct_cart_rows', 10, 1);


//最終確認ページのカートも同様にカスタマイズ

function usces_filter_apply_addressform($html)
{
    $html = preg_replace('/<td class="thumbnail">(.*)<\/td>/', '', $html);

    $html = preg_replace('/<td class="quantity">(.*)<\/td>/', '', $html);

    $html = preg_replace('/<td class="action">(.*)<\/td>/', '', $html);

    return $html;
}
add_filter('usces_filter_confirm_rows', 'usces_filter_apply_addressform', 10, 1);


//確認画面の配送先情報

//最終確認ページのカートも同様にカスタマイズ

function usces_filter_apply_addressform_confirm($html)
{
    $html = preg_replace('/<tr class="delivery-name-row">(.*)<\/tr>/', '', $html);

    return $html;
}
add_filter('usces_filter_addressform_confirm', 'usces_filter_apply_addressform_confirm', 10, 1);




//バリデーション削除


//郵便番号・住所は不要なので削除

add_filter('usces_filter_customer_check', 'my_filter_customer_check', 10, 3);
    function my_filter_customer_check($mes)
    {
        do_action('my_filter_customer_check');

        $mes = '';
        if (!is_email($_POST['customer']['mailaddress1']) || WCUtils::is_blank($_POST['customer']['mailaddress1']) || WCUtils::is_blank($_POST['customer']['mailaddress2']) || trim($_POST['customer']['mailaddress1']) != trim($_POST['customer']['mailaddress2'])) {
            $mes .= __('e-mail address is not correct', 'usces') . "<br />";
        }
        if (WCUtils::is_blank($_POST["customer"]["name1"])) {
            $mes .= __('Name is not correct', 'usces') . "<br />";
        }

        if (WCUtils::is_blank($_POST["customer"]["tel"]) && usces_is_required_field('tel')) {
            $mes .= __('enter phone numbers', 'usces') . "<br />";
        }
        if (!WCUtils::is_blank($_POST['customer']["tel"]) && preg_match("/[^\d\-+]/", trim($_POST["customer"]["tel"])) && usces_is_required_field('tel')) {
            $mes .= __('Please input a phone number with a half size number.', 'usces') . "<br />";
        }

        return $mes;
    }

//お客さま情報入力画面不要な項目削除

//入力画面

//住所・郵便番号・FAXを削除

add_filter('usces_filter_apply_addressform', 'my_apply_addressform', 10, 3);
function my_apply_addressform($formtag, $type, $data)
{
    global $usces, $usces_settings;
    $options = get_option('usces');
    $form = $options['system']['addressform'];
    $nameform = $usces_settings['nameform'][$form];
    $values = $data[$type];
    $applyform = usces_get_apply_addressform($form);
    $formtag = usces_custom_field_input($data, $type, 'name_pre', 'return');
    $formtag .= '<tr class="inp1">
    <th width="127" scope="row">' . usces_get_essential_mark('name1', $data) . __('Full name', 'usces').'</th>';
    if ($nameform) {
        $formtag .= '<td class="name_td">'.__('Given name', 'usces').'<input name="' . $type . '[name2]" id="name2" type="text" value="' . esc_attr($values['name2']) . '" onKeyDown="if (event.keyCode == 13) {return false;}" style="ime-mode: active" /></td>';
        $formtag .= '<td class="name_td">'.__('Familly name', 'usces').'<input name="' . $type . '[name1]" id="name1" type="text" value="' . esc_attr($values['name1']) . '" onKeyDown="if (event.keyCode == 13) {return false;}" style="ime-mode: active" /></td>';
    } else {
        $formtag .= '<td class="name_td">'.__('Familly name', 'usces').'<input name="' . $type . '[name1]" id="name1" type="text" value="' . esc_attr($values['name1']) . '" onKeyDown="if (event.keyCode == 13) {return false;}" style="ime-mode: active" /></td>';
        $formtag .= '<td class="name_td">'.__('Given name', 'usces').'<input name="' . $type . '[name2]" id="name2" type="text" value="' . esc_attr($values['name2']) . '" onKeyDown="if (event.keyCode == 13) {return false;}" style="ime-mode: active" /></td>';
    }
    $formtag .= '</tr>';
    $furigana = '<tr class="inp1">
    <th scope="row">' . usces_get_essential_mark('name3', $data).__('furigana', 'usces').'</th>';
    if ($nameform) {
        $furigana .= '<td>'.__('Given name', 'usces').'<input name="' . $type . '[name4]" id="name4" type="text" value="' . esc_attr($values['name4']) . '" onKeyDown="if (event.keyCode == 13) {return false;}" style="ime-mode: active" /></td>';
        $furigana .= '<td>'.__('Familly name', 'usces').'<input name="' . $type . '[name3]" id="name3" type="text" value="' . esc_attr($values['name3']) . '" onKeyDown="if (event.keyCode == 13) {return false;}" style="ime-mode: active" /></td>';
    } else {
        $furigana .= '<td>'.__('Familly name', 'usces').'<input name="' . $type . '[name3]" id="name3" type="text" value="' . esc_attr($values['name3']) . '" onKeyDown="if (event.keyCode == 13) {return false;}" style="ime-mode: active" /></td>';
        $furigana .= '<td>'.__('Given name', 'usces').'<input name="' . $type . '[name4]" id="name4" type="text" value="' . esc_attr($values['name4']) . '" onKeyDown="if (event.keyCode == 13) {return false;}" style="ime-mode: active" /></td>';
    }
    $furigana .= '</tr>';
    $formtag .= apply_filters('usces_filter_furigana_form', $furigana, $type, $values);
    $formtag .= usces_custom_field_input($data, $type, 'name_after', 'return');

    $formtag .= '

    <th scope="row">' . usces_get_essential_mark('tel', $data).__('Phone number', 'usces').'</th>
    <td colspan="2"><input name="' . $type . '[tel]" id="tel" type="text" value="' . esc_attr($values['tel']) . '" onKeyDown="if (event.keyCode == 13) {return false;}" style="ime-mode: inactive" />' . apply_filters('usces_filter_after_tel', '000-0000-000', $applyform) . '</td>
    </tr>';
    return $formtag;
}


//最終確認画面

//住所・郵便番号・FAXを削除

add_filter('usces_filter_apply_addressform_confirm', 'my_apply_addressform_confirm', 10, 3);
function my_apply_addressform_confirm($formtag, $type, $data)
{
    global $usces, $usces_settings;
    $options = get_option('usces');
    $form = $options['system']['addressform'];
    $nameform = $usces_settings['nameform'][$form];
    $applyform = usces_get_apply_addressform($form);
    $formtag = '';
    switch ($type) {
    case 'confirm':
    case 'member':
        $values =  $data;
        break;
    case 'customer':
    case 'delivery':
        $values = $data[$type];
        break;
    }
    $data['type'] = $type;
    $values['country'] = !empty($values['country']) ? $values['country'] : usces_get_local_addressform();
    $values = $usces->stripslashes_deep_post($values);
    $target_market_count = (isset($options['system']['target_market']) && is_array($options['system']['target_market'])) ? count($options['system']['target_market']) : 1;

    $formtag = usces_custom_field_input($data, $type, 'name_pre', 'return');
    $formtag .= '<tr class="name-row member-name-row"><th>'.apply_filters('usces_filters_addressform_name_label', __('Full name', 'usces'), $type, $values, $applyform).'</th><td>' . esc_html(sprintf(_x('%s', 'honorific', 'usces'), (esc_html($values['customer']['name1']) . ' ' . esc_html($values['customer']['name2'])))) . '</td></tr>';
    $furigana = ('' == (trim($values['customer']['name3']) . trim($values['customer']['name4']))) ? '' : sprintf(_x('%s', 'honorific', 'usces'), (esc_html($values['customer']['name3']) . ' ' . esc_html($values['customer']['name4'])));
    $furigana_customer = '<tr class="furikana-row member-furikana-row"><th>'.__('furigana', 'usces').'</th><td>' . $furigana . '</td></tr>';
    $formtag .= apply_filters('usces_filter_furigana_confirm_customer', $furigana_customer, $type, $values);
    $formtag .= usces_custom_field_info($data, 'customer', 'name_after', 'return');

    if (1 < $target_market_count) {
        $customer_country = (!empty($usces_settings['country'][$values['customer']['country']])) ? $usces_settings['country'][$values['customer']['country']] : '';
        $formtag .= '<tr class="country-row member-country-row"><th>'.__('Country', 'usces').'</th><td>' . esc_html($customer_country) . '</td></tr>';
    }
    $customer_pref = ($values['customer']['pref'] == __('-- Select --', 'usces') || $values['customer']['pref'] == '-- Select --') ? '' : $values['customer']['pref'];
    $formtag .= '


			<tr class="tel-row member-tel-row"><th>'.__('Phone number', 'usces').'</th><td>' . esc_html($values['customer']['tel']) . '</td></tr>';
    $formtag .= usces_custom_field_info($data, 'customer', 'fax_after', 'return');

    $shipping_address_info = '';
    if (isset($values['delivery'])) {
        $shipping_address_info = '<tr class="ttl"><td colspan="2"><h3>'.__('Shipping address information', 'usces').'</h3></td></tr>';
        $shipping_address_info .= usces_custom_field_info($data, 'delivery', 'name_pre', 'return');
        $shipping_address_info .= '<tr class="name-row delivery-name-row"><th>'.apply_filters('usces_filters_addressform_name_label', __('Full name', 'usces'), $type, $values, $applyform).'</th><td>' . sprintf(_x('%s', 'honorific', 'usces'), (esc_html($values['delivery']['name1']) . ' ' . esc_html($values['delivery']['name2']))) . '</td></tr>';
        $deli_furigana = ('' == (trim($values['delivery']['name3']) . trim($values['delivery']['name4']))) ? '' : sprintf(_x('%s', 'honorific', 'usces'), (esc_html($values['delivery']['name3']) . ' ' . esc_html($values['delivery']['name4'])));
        $furigana_delivery = '<tr class="furikana-row delivery-furikana-row"><th>'.__('furigana', 'usces').'</th><td>' . $deli_furigana . '</td></tr>';
        $shipping_address_info .= apply_filters('usces_filter_furigana_confirm_delivery', $furigana_delivery, $type, $values);
        $shipping_address_info .= usces_custom_field_info($values, 'delivery', 'name_after', 'return');
        $shipping_address_info .= '<tr class="zipcode-row delivery-zipcode-row"><th>'.__('Zip/Postal Code', 'usces').'</th><td>' . esc_html($values['delivery']['zipcode']) . '</td></tr>';
        if (1 < $target_market_count) {
            $shipping_country = (!empty($usces_settings['country'][$values['delivery']['country']])) ? $usces_settings['country'][$values['delivery']['country']] : '';
            $shipping_address_info .= '<tr class="country-row delivery-country-row"><th>'.__('Country', 'usces').'</th><td>' . esc_html($shipping_country) . '</td></tr>';
        }
        $delivery_pref = ($values['delivery']['pref'] == __('-- Select --', 'usces') || $values['delivery']['pref'] == '-- Select --') ? '' : $values['delivery']['pref'];
        $shipping_address_info .= '
				<tr class="states-row delivery-states-row"><th>'.__('Province', 'usces').'</th><td>' . esc_html($delivery_pref) . '</td></tr>
				<tr class="address1-row delivery-address1-row"><th>'.__('city', 'usces').'</th><td>' . esc_html($values['delivery']['address1']) . '</td></tr>
				<tr class="address2-row delivery-address2-row"><th>'.__('numbers', 'usces').'</th><td>' . esc_html($values['delivery']['address2']) . '</td></tr>
				<tr class="address3-row delivery-address3-row"><th>'.__('building name', 'usces').'</th><td>' . esc_html($values['delivery']['address3']) . '</td></tr>
				<tr class="tel-row delivery-tel-row"><th>'.__('Phone number', 'usces').'</th><td>' . esc_html($values['delivery']['tel']) . '</td></tr>
				<tr class="fax-row delivery-fax-row"><th>'.__('FAX number', 'usces').'</th><td>' . esc_html($values['delivery']['fax']) . '</td></tr>';
        $shipping_address_info .= usces_custom_field_info($data, 'delivery', 'fax_after', 'return');
    }
    return $formtag;
}

add_filter('usces_filter_shipping_address_info', 'my_shipping_address_info', 10, 3);



//会員登録機能削除
//会員登録して次へのボタン削除

add_filter("usces_filter_get_customer_button", "my_get_customer_button", 10, 1);
function my_get_customer_button($out = '')
{
    global $usces, $member_regmode;
    $res = '';

    $res = '<input name="backCart" type="submit" class="back_cart_button" value="'.__('Back', 'usces').'" />&nbsp;&nbsp;';

    $button = '<input name="deliveryinfo" type="submit" class="to_deliveryinfo_button" value="'.__(' Next ', 'usces').'" />&nbsp;&nbsp;';
    $res .= apply_filters('usces_filter_customer_button', $button);

    if (usces_is_membersystem_state() && $member_regmode != 'editmemberfromcart' && usces_is_login() == false) {
        $res .= '';
    } elseif (usces_is_membersystem_state() && $member_regmode == 'editmemberfromcart') {
        $res .= '';
    }

    if ($out == 'return') {
        return $res;
    } else {
        echo $res;
    }
}


//返信メールカスタマイズ


//お客様情報消す
// add_filter("usces_filter_apply_mail_addressform", "my_filter_apply_mail_addressform", 10, 4);
// function my_filter_apply_mail_addressform($formtag, $type, $data, $order_id)
// {
//     if ($type === "order_mail_customer") {
//         $formtag = "";
//     }
//     return $formtag;
// }





//送料消す
add_filter("usces_filter_send_order_mail_meisai", "my_filter_send_order_mail_meisai", 10, 4);
function my_filter_send_order_mail_meisai($meisai, $data, $cart, $entry)
{
    $ptn = "/\r\n". __('Shipping', 'usces') .".+?\r\n/u";
    if (preg_match($ptn, $meisai)) {
        $meisai = preg_replace($ptn, "", $meisai);
    }
    return $meisai;
}

//配送先情報を消す
add_filter("usces_filter_send_order_mail_shipping", "my_filter_send_order_mail_shipping", 10, 3);
function my_filter_send_order_mail_shipping($msg_shipping, $data, $entry)
{
    $msg_shipping = "";
    return $msg_shipping;
}

/* 自動返信のサンキューメールの【その他】を【メッセージ】に*/
add_filter("usces_filter_send_order_mail_others", "my_filter_send_order_mail_others", 10, 2);
function my_filter_send_order_mail_others($msg_others)
{
    $replace = array(
    'その他' => '備考　'
    );
    $msg_others = str_replace(array_keys($replace), $replace, $msg_others);
    return $msg_others;
}
/* 自動返信のサンキューメールの【その他】を【メッセージ】に（終了）*/


//レスポンシブなページネーションを作成する
function responsive_pagination($pages = '', $range = 4)
{
    $showitems = ($range * 2)+1;

    global $paged;
    if (empty($paged)) {
        $paged = 1;
    }

    //ページ情報の取得
    if ($pages == '') {
        global $wp_query;
        $pages = $wp_query->max_num_pages;
        if (!$pages) {
            $pages = 1;
        }
    }

    if (1 != $pages) {
        echo '<ul class="pagination" role="menubar" aria-label="Pagination">';
        //先頭へ
        echo '<li class="first"><a href="'.get_pagenum_link(1).'"><span>First</span></a></li>';
        //1つ戻る
        echo '<li class="previous"><a href="'.get_pagenum_link($paged - 1).'"><span>Previous</span></a></li>';
        //番号つきページ送りボタン
        for ($i=1; $i <= $pages; $i++) {
            if (1 != $pages &&(!($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems)) {
                echo ($paged == $i)? '<li class="current"><a>'.$i.'</a></li>':'<li><a href="'.get_pagenum_link($i).'" class="inactive" >'.$i.'</a></li>';
            }
        }
        //1つ進む
        echo '<li class="next"><a href="'.get_pagenum_link($paged + 1).'"><span>Next</span></a></li>';
        //最後尾へ
        echo '<li class="last"><a href="'.get_pagenum_link($pages).'"><span>Last</span></a></li>';
        echo '</ul>';
    }
}


// パンくずリスト
function breadcrumb_func()
{
    global $post;
    $str ='';
    if (!is_home()&&!is_admin()) {
        $str.= '<ul class="path" itemscope itemtype="http://schema.org/BreadcrumbList"><li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">';
        $str.= '<a href="'.home_url().'" itemprop="item"><span itemprop="name">'.'HOME'.'</span></a><meta itemprop="position" content="1" /></li>';
        $str.= '<li>&gt;</li>';
        if (is_post_type_archive()) {
            $str.= '<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><span itemprop="name">'.esc_html(get_post_type_object(get_post_type())->label).'</span><meta itemprop="position" content="2" /></li>';
        } elseif (is_tax()) {
            $str.='<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a href="'.get_post_type_archive_link(get_post_type()).'" itemprop="item"><span itemprop="name">'.esc_html(get_post_type_object(get_post_type())->label).'</span></a><meta itemprop="position" content="2" /></li>';
            $str.= '<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">><a href="#" itemprop="item"><span itemprop="name">'.single_term_title('', false).'</span></a><meta itemprop="position" content="3" /></li>';
        } elseif (is_tag()) {
            $str.= '<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">><a href="#" itemprop="item"><span itemprop="name">'.single_tag_title('', false).'</span></a><meta itemprop="position" content="2" /></li>';
        } elseif (is_category()) {
            $cat = get_queried_object();
            if ($cat -> parent != 0) {
                $ancestors = array_reverse(get_ancestors($cat -> cat_ID, 'category'));
                foreach ($ancestors as $ancestor) {
                    $str.='<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a href="'.get_category_link($ancestor).'" itemprop="item"><span itemprop="name">'.get_cat_name($ancestor).'</span></a><meta itemprop="position" content="2" /></li>';
                }
            }
            $str.='<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a href="#" itemprop="item"><span itemprop="name">'.$cat-> cat_name.'</span></a><meta itemprop="position" content="3" /></li>';
        } elseif (is_page()) {
            if ($post -> post_parent != 0) {
                $ancestors = array_reverse(get_post_ancestors($post->ID));
                foreach ($ancestors as $ancestor) {
                    $str.='<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a href="'. get_permalink($ancestor).'" itemprop="item"><span itemprop="name">'.get_the_title($ancestor).'</span></a><meta itemprop="position" content="2" /></li>';
                    $str.= '<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">><a href="#" itemprop="item"><span itemprop="name">'.wp_title('', false).'</span></a><meta itemprop="position" content="3" /></li>';
                }
            } else {
                $str.= '<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a href="#" itemprop="item"><span itemprop="name">'.wp_title('', false).'</span></a><meta itemprop="position" content="2" /></li>';
            }
        } elseif (is_author()) {
            if ($post -> post_parent != 0) {
                $ancestors = array_reverse(get_post_ancestors($post->ID));
                foreach ($ancestors as $ancestor) {
                    $str.='<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a href="'. get_permalink($ancestor).'" itemprop="item"><span itemprop="name">'.get_the_title($ancestor).'</span></a><meta itemprop="position" content="2" /></li>';
                    $str.= '<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a href="#" itemprop="item"><span itemprop="name">'.wp_title('', false).'</span></a><meta itemprop="position" content="3" /></li>';
                }
            } else {
                $str.= '<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a href="#" itemprop="item"><span itemprop="name">'.wp_title('', false).'</span></a><meta itemprop="position" content="2" /></li>';
            }
        } elseif (is_single()) {
            $categories = get_the_category($post->ID);
            $cat = $categories[0];
            if ($cat -> parent != 0) {
                $ancestors = array_reverse(get_ancestors($cat -> cat_ID, 'category'));
                foreach ($ancestors as $ancestor) {
                    $str.='<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a href="'.get_category_link($ancestor).'" itemprop="item"><span itemprop="name">'.get_cat_name($ancestor).'</span></a><meta itemprop="position" content="2" /></li>';
                    $str.= '<li>&gt;</li>';
                }
                $str.= '<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a href="'.get_category_link($cat -> term_id).'" itemprop="item"><span itemprop="name">'.$categories[0]->cat_name.'</span></a><meta itemprop="position" content="3" /></li>';
                $str.= '<li>&gt;</li>';
                $str.= '<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a href="#" itemprop="item"><span itemprop="name">'.wp_title('', false).'</span></a><meta itemprop="position" content="4" /></li>';
            } else {
                $str.='<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a href="'.get_category_link($cat -> term_id).'" itemprop="item"><span itemprop="name">'.$cat-> cat_name.'</span></a><meta itemprop="position" content="2" /></li>';
                $str.= '<li>&gt;</li>';
                $str.= '<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a href="#" itemprop="item"><span itemprop="name">'.wp_title('', false).'</span></a><meta itemprop="position" content="3" /></li>';
            }
        }



        $str.= '</ul>'."\n";
    }
    return $str;
}
add_shortcode('breadcrumb', 'breadcrumb_func');



/* サムネイル自動登録
---------------------------------------------------------- */
add_action('save_post', 'save_default_thumbnail');
function save_default_thumbnail($post_id)
{
    $post_thumbnail = get_post_meta($post_id, $key = '_thumbnail_id', $single = true);
    if (!wp_is_post_revision($post_id)) {
        if (empty($post_thumbnail)) {
            update_post_meta($post_id, $meta_key = '_thumbnail_id', $meta_value = '789');
        }
    }
}


/*ページ番号取得*/


/*function remove_menus () {
    global $menu;
    var_dump($menu);
}

add_action('admin_menu','remove_menus');*/




/**
 * 子カテチェックで親カテも
 */
add_action('admin_footer-welcart-shop_page_usces_itemedit', 'super_category_toggler');
add_action('admin_footer-welcart-shop_page_usces_itemnew', 'super_category_toggler');
