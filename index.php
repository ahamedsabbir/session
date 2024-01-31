<?php
require "src/session/session.php";
//$session = new wdpf\session\session();
session::init();
//echo session::$id;


session::set('name', 'israt ahamed sabbir');
session::set('roll', 12154);

//session::destroy();
session::remove('roll');




if(session::get('roll')){
    echo "true";
}else{
    echo "false";
}