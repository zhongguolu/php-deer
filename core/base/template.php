<?php
namespace deer
/*
 *目的:通过这个类解析模板文件
 *
 *
**/
class template{
  protected $template;
  protected $core;
  public function __construct($path,$param){
    $this->setConfig();
    $this->template=$this->readFile($path);
    $this->parseFile();
    include($this->cacheFile());
  }
  public function setConfig(){}
  public function readFile(){
    //
  }
  public function parseFile(){
    //将值全传入到此变量列表
    //循环执行rule开头的自定义函数
    //写入缓存文件
  }
  public function cacheFile(){}
  protected function ruleParam(){}
  
}


