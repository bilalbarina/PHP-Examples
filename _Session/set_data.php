<?php

require_once('./start_session.php');

/**
 * Put data to the session.
 * 
 */

 $_SESSION['is_admin'] = 'Yes';
 $_SESSION['token'] = md5(time());

 echo 'Data added to the session.';