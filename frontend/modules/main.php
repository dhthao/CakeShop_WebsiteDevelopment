<?php
    if(isset($_GET['action'])&&isset($_GET['query'])){
        $action=$_GET['action'];
        $query=$_GET['query'];
    }
    else 
    {
        $action='';
        $query='';
    }
    if( $action=='homepage' && $query=='none')
    {
        include("homepage.php");

    }
    else if( $action=='aboutuspage' && $query=='none')
    {
        include("aboutuspage.php");
    }
    else if( $action=='contractpage' && $query=='none')
    {
        include("contractpage.php");
    }
    else if( $action=='menupage' && $query=='none')
    {
        include("menupage.php");
    }
    else include("homepage.php");

?>