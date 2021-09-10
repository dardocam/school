<?php
define('HOME_URL', "https://eest3necochea-school.herokuapp.com/");

if (!isset($_SESSION)) {
  session_name('school');
  session_set_cookie_params(0);
  session_cache_expire(0);
  session_start();
}

?>
