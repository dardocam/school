<?php
define('HOME_URL', "http://192.168.0.250/school/");

if (!isset($_SESSION)) {
  session_name('school');
  session_set_cookie_params(0);
  session_cache_expire(0);
  session_start();
}

?>
