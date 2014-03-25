<?php
namespace deer

function breakpoint($param){
  echo '<pre>';
  var_dump($param);
  echo '</pre>';
  exit();
}

function includeTemplate($path){

}

