<?php
function indexhotkeyword(){
	$kw = C("hotkw");
	$kwarr = explode(",",$kw);
	$count = count($kwarr);
	if($count>1){
		for ($i=0;$count>$i;$i++){
			$list[]['title'] = $kwarr[$i];
		}
	}else{
		$list = false;
	}
	//print_R($list);
	return $list;
}

function replace_str($title,$word,$str="<span class='highlight'>@</span>"){
  //  $title 原标题Aeternum Sacris - Haunting <span class='highlight'>like</span> A Ghost (EP) (2012)
  //  $repStr 需要处理的关键词
  $wordA = str_replace("@",$word,$str);
  ///echo $wordA;die;
  $title = str_replace($word,$wordA,$title);
  return $title;
}

function arr2file($filename, $arr=''){

    if(is_array($arr)){

        $con = var_export($arr,true);

    } else{

        $con = $arr;

    }

    $con = "<?php\nreturn $con;\n?>";//\n!defined('IN_MP') && die();\nreturn $con;\n

    write_file($filename, $con);

}

function mkdirss($dirs,$mode=0777) {

    if(!is_dir($dirs)){

        mkdirss(dirname($dirs), $mode);

        return @mkdir($dirs, $mode);

    }

    return true;

}

function write_file($l1, $l2=''){

    $dir = dirname($l1);

    if(!is_dir($dir)){

        mkdirss($dir);

    }

    return @file_put_contents($l1, $l2);

}

function myad($id){
  $str = C("myad_".$id);
  return $str;
}
function config($name){
  return C($name);
}
function getDir($dir) {
    $dirArray[]=NULL;
    if (false != ($handle = opendir ( $dir ))) {
        $i=0;
        while ( false !== ($file = readdir ( $handle )) ) {
            //去掉""."、".."以及带".xxx"后缀的文件
            if ($file != "." && $file != ".."&&!strpos($file,".")) {
                $dirArray[$i]=$file;
                $i++;
            }
        }
        //关闭句柄
        closedir ( $handle );
    }
    return $dirArray;
}
?>