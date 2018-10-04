<?php

function dd($vals) {
  echo '<pre>';
  die(var_dump($vals));
  echo '</pre>';
}

function oldEnough($age) {
  if ($age > 10) {
    return true;
  } else {
    return false;
  }
}
