<!DOCTYPE html>
<html>   <head>  
<?php
    require_once "./common/htmlhead.inc.php";
?>
<?php

    output_html_meta_label();
?>

<?php

$title = "";
$script = array();
$css = array();
output_html_title_label($title);
output_html_script_lable($script);
output_html_include_css_label($css);
?>
</head> 
<body> 
<?php
function is_login()
{
    return isset($_SESSION,$_SESSION['login']);
}
$islogin = is_login();
if($islogin === false)
{
    include "login.php";
}
else
{
    include "main.php";
}

?>

</body>
</html>