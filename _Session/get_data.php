<?php

require_once('./start_session.php');

/**
 * Get all session data.
 *
 */
var_dump($_SESSION);


echo '<pre>___________________________________</pre>';


/**
 * Get specific session data.
 * 
 */
echo 'Is admin: ' . $_SESSION['is_admin'];
