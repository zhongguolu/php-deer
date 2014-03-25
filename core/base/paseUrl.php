<?php
namespace deer
/*
 *目的:通过这个类寻找各自需要载入的文件
 *
 *
**/
class parseUrl{
  public function __construct($type){
    $this->type=$type;
    $this->url=
  }
  public function getInfo(){
    return $this->{$this->type}();
  }

  protected function normal(){}
  protected function path(){}
  
}


