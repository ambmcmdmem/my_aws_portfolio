<?php

namespace App\Lib;

class My_func {
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