<?php
if (isset($_COOKIE[session_name()])) {
    setcookie(session_name(), '', time() - 42000, '/');
}
header("Location: http://enos.itcollege.ee/~jahhundo/sessioonid/controller/index.php?page=vote");
?>