<?php
if (!function_exists('get_csrf_token')) {
  function get_csrf_token() {
    if (empty($_SESSION['csrf_token'])) {
      $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
    }
    return $_SESSION['csrf_token'];
  }
}

if (!function_exists('validate_csrf_token')) {
  function validate_csrf_token($token) {
    return isset($_SESSION['csrf_token']) && hash_equals($_SESSION['csrf_token'], $token);
  }
}
