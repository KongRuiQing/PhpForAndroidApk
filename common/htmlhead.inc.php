<?php

function output_html_meta_label()
{
    $out_string = [
        '<meta http-equiv="content-type" content="text/html; charset=UTF-8">',
        '<meta http-equiv="X-UA-Compatible" content="IE=edge">',
        '<meta name="viewport" content="width=device-width,initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no, -ms-touch-action: none">',
        '<meta name="apple-mobile-web-app-capable" content="yes">',
        '<meta name="apple-mobile-web-app-status-bar-style" content="black">',
        '<meta name="format-detection" content="telephone=no"> ',
        '<meta name="description" content="" />'
    ];

    foreach($out_string as $str){  
        print($str);
        print("\n");
    }
}

function output_html_title_label($str)
{
    print("<title>".$str."</title>\n");
}

function output_html_script_lable($scripts)
{
    foreach($scripts as $str){  
       print('<script type="text/javascript" src = "'.$str.'></script>');
       print("\n");
    }
}

function output_html_include_css_label($css)
{
     foreach($css as $str){  
       print('<link rel="stylesheet" href = "'.$str.'></script>');
       print("\n");
    }

}
?>