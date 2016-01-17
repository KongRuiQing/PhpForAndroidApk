<?php


function do_build_android_apk($project_id)
{
    if(!isset($_SESSION))
    {
        session_start();
    }
    $all_building_project = do_load_cache_project();

    
    
    exec("ant.bat project_name",$arr,$i_stat);
    结果写入到日志文件里去
    修改$_SESSION里的变量
    通知文件列表发生改变


}

function do_load_cache_project($project_id)
{

}
?>