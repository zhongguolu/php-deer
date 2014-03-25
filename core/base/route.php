<?php
namespace deer
/*
 *目的:通过这个类寻找各自需要载入的文件
 *
 *
**/
class route{
  public $core;
  public function __construct(){}
  public function getPath($type,$name,$fun){
    if($fun){
      return $fun();
    }
    switch($type){
      case 'template':
        return $this->getTemplePath($name);break;
      case 'controller':
        return $this->getControllerPath($name);break;
      case 'model':
        return $this->getModelPath($name);break;
      default:
        return null;
    }
  }
  
  public function getTemplePath($name){}
  public function getControllerPath($name){}
  public function getModelPath($name){}
  public function getDefault($name){}
}


