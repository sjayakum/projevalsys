 <?php
 function sec_session_start() 
    {
    $session_name = 'sec_session_id';   // Set a custom session name
    $secure = SECURE;
    // This stops JavaScript being able to access the session id.
    $httponly = true;
    // Forces sessions to only use cookies.
    if (ini_set('session.use_only_cookies', 1) === FALSE) {
        header("Location: ../error.php?err=Could not initiate a safe session (ini_set)");
        exit();
    }
    // Gets current cookies params.
    $cookieParams = session_get_cookie_params();
    session_set_cookie_params($cookieParams["lifetime"],
        $cookieParams["path"], 
        $cookieParams["domain"], 
        $secure,
        $httponly);
    // Sets the session name to the one set above.
    session_name($session_name);
    session_start();            // Start the PHP session 
    session_regenerate_id(true);    // regenerated the session, delete the old one. 
}

function login_check()
{
    // Check if all session variables are set 
    if (isset($_SESSION['username']))
    return true;
    else
        return false;
}
function get($field)
{
    $q = mysql_query("SELECT $field from users WHERE username='".$_SESSION['username']."'");
    if($q)
    {
        if($r = mysql_result($q ,0 ,$field))
        {
            return $r;
        }
    }
}

?>