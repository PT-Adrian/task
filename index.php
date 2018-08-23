<?php
include('controller.php');
include('model.php');
include('view.php');
$numberRandom= rand(1,1000);
$action = array('id'=>$numberRandom);
$action['controller']= new controller($action);
$action['model']= new model($action);
$action['view']= new view($action);
