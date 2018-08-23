<?php

include('controller.php');
include('model.php');
include('view.php');
$start=array();
$start['data'] = array('version'=>'0');
$start['controller'] = new controller($start);
$start['model'] = new model($start);
$start['view'] = new view($start);

?>
