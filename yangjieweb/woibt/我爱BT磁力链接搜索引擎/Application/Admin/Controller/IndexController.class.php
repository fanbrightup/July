<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller{
	public function index(){
		$this->display();
	}

	public function check(){
		$username = I('username');
		$password = I('password');
		if($username == "" or $password == ""){
			$msg['status'] = 3;
			$msg['info'] = '请输入登录帐号或密码';
		}else if($username == C("adminuser") and $password == C("adminpass")){
		    $msg['status'] = 1;
			$msg['url'] = U("Index/main");
			$_SESSION['admin'] = true;
			
		}else{
			$msg['status'] = 2;
			$msg['info'] = '帐号或密码错误';
		}
		echo json_encode($msg);
	}

	public function main(){
		if($_SESSION['admin'] != true){
			exit("false");
		}
		$this->display();
	}

	public function config(){
		if($_SESSION['admin'] != true){
			exit("false");
		}
		$temp = getDir("template");
		if(is_array($temp)){
			$this->assign("temp",$temp);
		}
		$config = require(APP_PATH.'Home/Conf/inc.php');
		if($_POST){
			//$config = require(CONF_PATH.'globals.php');//全局配置文件
			$conf = $_POST['con'];
			$config_new = array_merge($config,$conf);
		    arr2file(APP_PATH.'Home/Conf/inc.php',$config_new);
		    $msg['status'] = 1;
		    //$msg['']
		    echo json_encode($msg);
			exit();
		}
		
		$this->assign('config',$config);
		$this->display();
	}

	public function myad(){
		$config = require(APP_PATH.'Home/Conf/inc.php');
		$this->assign('config',$config);
		$this->display();
	}
}
?>