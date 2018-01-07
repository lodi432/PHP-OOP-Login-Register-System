<?php
require_once 'core/init.php';


$userInsert = DB::getInstance()->update('users', 3,array(
   'password' => 'updatedpassword',
   'name' => 'Dale abcdf'


));
