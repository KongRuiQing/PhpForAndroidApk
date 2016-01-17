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
<?php
    require_once "./class/project.class.php";
    require_once "./class/build.class.php"
?>
<?php
    $project_id = (int)$_GET['project_id'];
    $all_project = load_project_from_xml("./xmlconfig/server.xml");
    $find_project = new AndroidProject();
    foreach ($all_project as $project) {
        if ($project->GetProjectId() == $project_id)
        {
            $find_project = $project;
        }
    }
    if($find_project->GetProjectId() != $project_id)
    {
        header("Location:./login.php");
        exit();
    }

    do_build_android_apk();
?>