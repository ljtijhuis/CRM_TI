<?php
require_once "includes/conf.php";

if(isset($_POST['username'])) {
    if(isset($userinfo[$_POST['username']]) && $userinfo[$_POST['username']] == $_POST['password']) {
        $_SESSION['username'] = $_POST['username'];
        header('Location:index.php');
    }else {
        //Invalid Login
        $smarty->assign('message', "<p class=\"error\">Foute gebruikersnaam/wachtwoord.</p>");
    }
}

	$smarty->assign("template", "login");
	$smarty->display('page.tpl');
?>