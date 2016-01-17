<?php
class AndroidProject
{
    private $project_name = "";
    private $project_id = 0;
    private $project_path = "";
    private $project_output = "";
    private $last_package_time = "";
    public function Html_Output()
    {
        

        $td1 = "<td>$this->project_name</td>";
        $td2 = "<td><a href='build.php?project_id=$this->project_id'>Build</a></td>";
        $td3 = "<td><a href='downland.php?project_id=$this->project_id'>down</a></td>";
        $td4 = "<td><a href='setting.php?project_id=$this->project_id'>setting</a></td>";
        
        return "<tr>\n\t" . $td1 . "\n\t" . $td2 . "\n\t" . $td3 . "\n\t" . $td4 . "\n" . "</tr>" ;
    }

    public function SetProjectId($id)
    {
        $this->project_id = $id;
    }
    public function SetProjectName($name)
    {
        $this->project_name = $name;
    }
    public function SetprojectPath($path)
    {
        $this->project_path = $path;
    }
    public function GetProjectId()
    {
        return (int)($this->project_id);
    }

    public function ExecAndroidPkg()
    {
         pclose(popen("start /B ".$this->project_path."\build.bat", 'r'));
    }
}

function load_project_from_xml($xml_name)
{
    $config = simplexml_load_file($xml_name);
    $projects = array();
    foreach ($config->project as $project) {
        $pro = new AndroidProject();
        $pro->SetProjectId($project->Id);
        $pro->SetProjectName($project->Name);
        $pro->SetProjectPath($project->Path);
        $projects[] = $pro;
    }
    return $projects;
}


?>