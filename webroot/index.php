<?php
require_once(__DIR__.'/../include/init.php');

include_once(__DIR__.'/../templates/header.php');

if (isset($_SESSION['error_code']) && $_SESSION['error_code'] != 0) {
    include(__DIR__.'/../templates/inc_error.php');
} else if (isset($_SESSION['updated_at']) && $_SESSION['updated_at'] > (time() - 3600)) {
    include(__DIR__.'/../templates/inc_success.php');
} else {
    include(__DIR__.'/../templates/inc_start.php');
}

include_once(__DIR__.'/../templates/footer.php');
