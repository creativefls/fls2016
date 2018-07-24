<?php
class ALTUI{
    public $delete_caption = "Hapus";
    
    function getColor($id){
        $color_enum = array("bg-light-blue",
                            "bg-aqua",
                            "bg-green",
                            "bg-yellow",
                            "bg-red",
                            "bg-blue",
                            "bg-purple",
                            "bg-teal",
                            "bg-maroon",
                            "bg-black");
        return $color_enum[$id];
    }
    
    function descList($title,$data){
        return "<dt>$title</dt>
                <dd>$data</dd>";
    }
    //CI MENU UI
    function CI_dashboard_menu($title = "Dashboard"){
        $class = "";
        if(uri_string() == ""){
            $class = "active";
        }
        return "<li class=\"$class\"><a href=\"".base_url()."\"><i class=\"fa fa-home\"></i> $title</a></li>";
    }
    
    function CI_sideLink($url,$title,$icon){
        $tmp  = "";
        $tmp  = "<li>";
        $tmp .= "<a href=\"$url\">";
        $tmp .= "<i class=\"$icon fa-fw\"></i> <span>$title</span>";
        $tmp .= "</a>";
        $tmp .= "</li>";
        return $tmp;
    }
    
    function CI_sideMenu($link,$title,$icon){
        $class = "";
        if(uri_string() == $link){
            $class = "active";
        }
        $tmp  = "";
        $tmp  = "<li class=\"$class\">";
        $tmp .= "<a href=\"".base_url($link)."\">";
        $tmp .= "<i class=\"$icon fa-fw\"></i> <span>$title</span>";
        $tmp .= "</a>";
        $tmp .= "</li>";
        return $tmp;
    }
    
    function CI_treeMenu($title,$icon,$menu){
        $class = "";
        for($x = 0; $x < count($menu); $x++){
            if(uri_string() == $menu[$x][0]){
                $class = "active";
            }
        }
        $tmp = "";
        $tmp .= "<li class=\"treeview $class\">";
        $tmp .= "<a href=\"#\">";
        $tmp .= "<i class=\"$icon fa-fw\"></i>";
        $tmp .= "<span> $title</span>";
        $tmp .= "<i class=\"fa fa-angle-left pull-right\"></i>";
        $tmp .= "</a>";
        $tmp .= "<ul class=\"treeview-menu\">";
        for($x = 0; $x < count($menu); $x++){
            $tmp .= $this->CI_sideMenu($menu[$x][0],$menu[$x][1],$menu[$x][2]);
        }
        $tmp .= "</ul>";
        $tmp .= "</li>";
        return $tmp;
    }
    
    //MENU UI
    function dashboard_menu($title = "Dashboard"){
        $class = "";
        if(!isset($_GET['route'])){
            $class = "active";
        }
        return "<li class=\"$class\"><a href=\"".base_url()."\"><i class=\"fa fa-home\"></i> $title</a></li>";
    }
    
    function sideMenu($route,$title,$icon){
        $class = "";
        if(isset($_GET['route'])){
            if($_GET['route'] == $route){
                $class = "active";
            }
        }
        $tmp  = "";
        $tmp  = "<li class=\"$class\">";
        $tmp .= "<a href=\"?route=$route\">";
        $tmp .= "<i class=\"$icon fa-fw\"></i> <span>$title</span>";
        $tmp .= "</a>";
        $tmp .= "</li>";
        return $tmp;
    }
    
    function treeMenu($title,$icon,$menu){
        $class = "";
        for($x = 0; $x < count($menu); $x++){
            if(isset($_GET['route'])){
                if($_GET['route'] == $menu[$x][0]){
                    $class = "active";
                }
            }
        }
        $tmp = "";
        $tmp .= "<li class=\"treeview $class\">";
        $tmp .= "<a href=\"#\">";
        $tmp .= "<i class=\"$icon fa-fw\"></i>";
        $tmp .= "<span> $title</span>";
        $tmp .= "<i class=\"fa fa-angle-left pull-right\"></i>";
        $tmp .= "</a>";
        $tmp .= "<ul class=\"treeview-menu\">";
        for($x = 0; $x < count($menu); $x++){
            $tmp .= $this->sideMenu($menu[$x][0],$menu[$x][1],$menu[$x][2]);
        }
        $tmp .= "</ul>";
        $tmp .= "</li>";
        return $tmp;
    }
    
    //MODAL FUNCTIONS
    function modalHeader($title){
        return "<div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                    <h4 class=\"modal-title\">$title</h4>
                </div>";
    }
    
    //PAGE FUNCTION 
    function pageHeader($title, $subtitle)
    {
        return "<h1>
                $title
                <small>$subtitle</small>
            </h1>";
    }
    
    function pageBreadcrumb($route)
    {
        $tmp = "";
        $segments = explode("/",$route);
        $last = count($segments) - 1;
        $mainpath = ""; //$segments[0][0];
        
        $tmp .= "<ol class=\"breadcrumb hidden-xs\">";
        $tmp .= "<li><a href=\"$mainpath\"><i class=\"fa fa-home\"></i> Dashboard</a></li>";
        
        for($x = 1; $x < $last; $x++){
            $tmp .= "<li><a>".ucfirst($segments[$x])."</a></li>";
        }
        
        
        $tmp .= "<li class=\"active\">".ucfirst($segments[$last])."</a></li>";
        $tmp .= "</ol>";
        return $tmp;
    }
    
    //TABLE FUNCTION
    function tableHeader($title)
    {
        $tmp = "<thead><tr>";
        $first = "width: 25px;";
        foreach ($title as $tableTitle) {
            $tmp = $tmp . "<th style=\"$first\">$tableTitle</th>";
            $first = "";
        }
        $tmp .= "</tr></thead>";
        return $tmp;
    }
    
    function tableRow($data)
    {
        $tmp = "";
        $tmp .= "<tr>";
        foreach($data as $row) {
            $tmp = $tmp . "<td>$row</td>";
        }
        $tmp .= "</tr>";
        return $tmp;
    }
    
    //BOX FUNCTION
    function boxHeader($title,$button = null)
    {
        return "<div class=\"box-header\">
                    <h3 class=\"box-title\">$title</h3>
                    $button
                </div>";
    }
    function headerButton($url,$icon,$title){
        return "<div class=\"pull-right box-tools\">
                    <a class=\"btn btn-default\" href=\"$url\"><i class=\"$icon\"></i> $title</a>
                </div>";
    }
    //LINK FUNCTION
    function modalLink($url,$class = "",$icon,$title){
        return "<a data-toggle=\"modal\" class=\"$class\" href=\"$url\" data-target=\"#modalSmall\">
                    <i class=\"$icon\"></i> $title
                </a>";
    }
    
    function editLink($url){
        return "<a data-toggle=\"modal\" class=\"text-info\" href=\"$url\" data-target=\"#modalEdit\">
                    <i class=\"fa fa-pencil\"></i> Edit
                </a>";
    }
    
    function deleteLink($url){
        return "<a data-toggle=\"modal\" class=\"text-danger\" href=\"$url\" data-target=\"#modalEdit\">
                    <i class=\"fa fa-times\"></i> $this->delete_caption
                </a>";
    }
    
    function ajaxInfo($file,$id,$caption,$icon){
        return "<a data-toggle=\"modal\" class=\"text-info\" href=\"$file?id=$id\" data-target=\"#modalInfo\">
                    <i class=\"$icon\"></i> $caption
                </a>";
    }
    
    function ajaxLink($file,$id,$caption,$icon){
        return "<a data-toggle=\"modal\" class=\"text-info\" href=\"$file?id=$id\" data-target=\"#modalEdit\">
                    <i class=\"$icon\"></i> $caption
                </a>";
    }
    
    function infoBoxAjaxLink($url,$caption,$icon,$color){
        $tmp_color = $this->getColor($color);
        return "<a data-toggle=\"modal\" data-target=\"#modalEdit\" href=\"$url\">
            <div class=\"info-box\">
                <span class=\"info-box-icon $tmp_color\"><i class=\"fa $icon\"></i></span>
                <div class=\"info-box-content\">
                    <span class=\"info-box-text\"><strong>$caption</strong></span>
                </div>
            </div>
        </a>";
    }
    
    function infoBox($caption,$subcaption,$icon,$color){
        $tmp_color = $this->getColor($color);
        return "<div class=\"info-box\">
                    <span class=\"info-box-icon $tmp_color\"><i class=\"fa $icon\"></i></span>
                    <div class=\"info-box-content\">
                        <span class=\"info-box-text\">$caption</span>
                        <span class=\"info-box-number\">$subcaption</span>
                    </div>
                </div>";
    }
    //FUNCTION CALLOUT
    function callout($type,$title,$detail){
        //type: info,danger,success, warning        
        return "<div class=\"callout callout-$type\">
                    <h4>$title</h4>
                    <p>$detail</p>
                </div>";
    }
    
    //FUNCTION ALERT
    function alert($type,$title,$detail,$icon = "fa-check"){
        return "<div class=\"alert alert-$type alert-dismissable\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
                    <h4><i class=\"icon fa $icon\"></i> $title</h4>
                    $detail
                  </div>"; 
    }
     
}