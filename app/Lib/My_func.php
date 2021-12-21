<?php

namespace App\Lib;

class My_func {
  
  public static function getNoImgPath(): string {
    return asset('img/noimage.png');
  }

  public static function getNoUserPath(): string {
    return asset('img/initial_ava.png');
  }
  
  public static function retFormInputVal($item, $name) {
    if(!empty($item->$name)) {
      return $item->$name;
    } elseif(old($name)) {
      return old($name);
    } else {
      return '';
    }
  }
}