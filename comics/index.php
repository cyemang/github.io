<?php
$ua = $_SERVER['HTTP_USER_AGENT'];
//端末自動振り分け
if ((strpos($ua, 'Android') !== false) && (strpos($ua, 'Mobile') !== false) || (strpos($ua, 'iPhone') !== false) || (strpos($ua, 'Windows Phone') !== false)) {
    // スマートフォンからアクセスされた場合
    header("Location: stf.php");
    exit();

} elseif ((strpos($ua, 'Android') !== false) || (strpos($ua, 'iPad') !== false)) {
    // タブレットからアクセスされた場合
    header("Location: stf.php");
    exit();

} elseif ((strpos($ua, 'DoCoMo') !== false) || (strpos($ua, 'KDDI') !== false) || (strpos($ua, 'SoftBank') !== false) || (strpos($ua, 'Vodafone') !== false) || (strpos($ua, 'J-PHONE') !== false)) {
    // 携帯からアクセスされた場合
    header("Location: stf.php");
    exit();

} else {
    // その他（PC）からアクセスされた場合
    header("Location: pc.php");
    exit();
}
?>