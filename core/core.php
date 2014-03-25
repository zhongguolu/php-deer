<?php
namespace deer

class core{
  protected $controller;
  protected $route;
  protected $info;
  protected $config;
  public function __construct($dir){
    ob_start();
    $this->loadBase($dir);
    $this->getConfig();
    $this->main();
  }
  
  public function __destruct(){
    ob_flush();
  }
  //载入默认配置文件
  public function getConfig($fun=null){
    if($fun){
      $this->config=$fun();
    }else{
      $this->config=include(BASEURL.DIRECTORY_SEPARATOR.'config'.DIRECTORY_SEPARATOR.'config.php');
    }
  }
  //循环导入改文件夹所有的文件
  public function loadBase($dir){
    $dh=opendir($dir);
    while(($file = readdir($dh) !== false)){
      require_once($dir.DIRECTORY_SEPARATOR.$file);
    }
    closedir($dh);
  }
  
  
  
  //内部跳转
  public function redirect(['controller'=>null,'fun'=>null]){
    //重新生成
    $this->controller='';
  }
  //执行方法
  public function main(){
    //通过url获取控制器信息
    $this->info = new parseUrl($this->config['urlType'])->getInfo();
    //设置路由
    $this->route = $route = new route();
    $this->controller = $controller = new {$this->info['controller']}();
    $this->template= $template = new template();
    
    $template->core = $route->core = $controller->core = $this;
    $templateData=$controller->{$this->info['fun']}();
    $templatePath=$route->get();
    
  }
  
}


