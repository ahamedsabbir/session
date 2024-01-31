<?php
namespace wdpf\session;
class session{
    static $id;
    public function __construct(){
		self::init();
	}
    static function init(){
        session_start();
        self::$id = session_id();
    }
    static function set($key, $value = false){
      	if(gettype($key) == "array"){
          foreach($key as $skey => $vkey){
          	$_SESSION[$skey] = $vkey;
          }
        }else{
        	$_SESSION[$key] = $value;
        }
    }
    static function get($key){
        if(isset($_SESSION[$key])){
            return $_SESSION[$key];
        }else{
            return false;
        }
    }
    static function remove($key){
        if(isset($_SESSION[$key])){
            unset($_SESSION[$key]);
        }else{
            return false;
        }
    }
    static function destroy(){
        session_unset();
		session_destroy();
		return true;
    }
}
?>

