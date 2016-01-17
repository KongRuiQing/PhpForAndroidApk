<?php
    if(!isset($_SESSION))
    {
        session_start();
    }
    if(!isset($_SESSION['login']))
    {
        header("Location: ./login.php"); 
        exit();
    }
?>

<!DOCTYPE html>
<html>   <head> 
<?php
    require_once "./common/htmlhead.inc.php";
    require_once "./class/project.class.php";
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

</body>
</html>