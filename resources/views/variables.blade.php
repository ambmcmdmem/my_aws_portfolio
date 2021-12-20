<?php

function a($item, $class, $name) {
  if($item instanceof $class) {
    return $item->$name;
  }
}