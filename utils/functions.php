<?php

function dd($value) {
  echo '<pre>';
  var_dump($value);
  echo '</pre>';

  die();
}

function routeIs($route) {
  return $_SERVER['REQUEST_URI'] === $route;
}
