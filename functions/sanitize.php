<?php
function escape ($string) {
  return htmlentites($string, ENT_QUOTES,'UTF-8');
}
