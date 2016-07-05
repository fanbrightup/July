<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
       
       // $hot = indexhotkeyword();
        //print_R($hot);die;
        $word = $_GET['kw'];
        if($word){
            $url = '/word/'.urlencode($word).'.html';
            redirect($url);
            die();
        }
        $this->display();
    }

    public function search(){
        //echo C("mark_html");die();
        //print_R($_SERVER);die;
    	$url = C('host_url');
    	//echo $url;
    	$word = $_GET['word'];
    	$page = $_GET['page'];
    
    	$url = str_replace("{word}",$word,$url);
    	if($page > 0){
    		$url_page = str_replace("{page}",$page,C('host_url_page'));
            //echo $url_page;
            $url.= $url_page;
    	}
    	
        import('Org.JAE.QueryList');
        $reg = array("title"=>array(".h","text"),"url"=>array(".link","href"),
            'creattime'=>array('div .prop_val:eq(0)',"text"),
            'size' => array("div .prop_val:eq(1)","text"),
            'filenum' => array("div .prop_val:eq(2)","text"),
            'img' => array("div img","src"),
            'link' => array("div a","href")
            );
        $rang = ".r";
        $hj = new \QueryList($url,$reg,$rang,'curl','UTF-8');
        $list = $hj->jsonArr;
		unset($list[count($list)-1]);
        foreach ($list as $key => $val){
            $bt = $val['url'];
            $bt = explode("/hash/",$bt);
            $list[$key]['url'] = $bt[1];
        }
        
        $html = $hj->html;
        //echo $html;die();
        $zz = "/totalPages:(.*?),/";
        $pagenum = preg_match($zz, $html, $find);
        $pagenum = trim($find[1]);
        
        if($pagenum > 1){
           /* for ($i=0;$pagenum>=$i;$i++){
                if($i>10){
                    $pagestr.= '<a href="/word/'.$word.'.html"> 首页 </a>';
                }
                if($i==$page or $i == $pagenum){
                    $pagestr.= "<span class=\"current\"> 1 </span>";
                }else{
                    $pagestr.= '<a href="/word/'.$word.'_'.$pagenum.'.html"> '.$i.' </a>';
                }
                if($i>$pagenum){
                    $pagestr.= '<a href="/word/'.$pagenum.'_'.$pagenum.'.html"> 尾页 </a>';
                }
                
            }*/
            $page = $page == 0 ? 1 : $page;
            $pagesize = 20;
            $pagestr.= $page == 1 ? '<span class="current"> 首页 </span>' : '<a href="/word/'.$word.'.html"> 首页 </a>';
            $link = ceil($page/5);
            for($i=($link-1)*5;$i<=($link*5)+1;$i++){
                //echo $i;
                //$pagestr.= '<a href="/word/'.$word.'_'.$i.'.html"> '.$i.' </a>';
                if($i <= $pagenum && $i >0){
                    if($i == $page){
                        $pagestr.= "<span class=\"current\"> ".$i." </span>";
                    }else{
                        $pagestr.= '<a href="/word/'.$word.'_'.$i.'.html"> '.$i.' </a>';
                    }
                    
                }
            }
            $pagestr.= $page == $pagenum ? "<span class=\"current\"> 尾页 </span>" : '<a href="/word/'.$word.'_'.$pagenum.'.html"> 尾页 </a>';

        }
        $this->list = $list;
        $this->page = $pagestr;
        $this->title = urldecode($word);
		$this->p = $page;
		$this->pagenum = $pagenum;
        if(C("mark_html") == 1){
            $this->buildHtml($_SERVER['REQUEST_URI'],'',"Index:search"); 
        }
        
    	$this->display();
    }

    public function read(){
        $url = "http://www.btcherry.com/hash/".$_GET['hash'];
         import('Org.JAE.QueryList');
        $reg = array("title"=>array("h1","text"),
            'magnet'=>array('ul li a',"href"),
            'creadtime' => array('ul li span:eq(2)',"text"),
            'size' => array('ul li span:eq(4)',"text"),
            'filenum' => array('ul li span:eq(6)',"text"),
            'filelist' => array('#filelist li:element',"text")
            );
        $rang = "#content";
        $hj = new \QueryList($url,$reg,$rang,'curl','UTF-8');
        $list = $hj->jsonArr;
		$html = $hj->html;
		//echo $html;
		preg_match("/html\(\"(.*)\"\)/", $html, $titleall);
		//$list[]
		//print_R($list);die();
        foreach ($list as $key => $val){
		$filelist = str_replace("BT樱桃 [www.btcherry.com]",C("web_name")."[".C('web_url')."]",$val['filelist']);
		//echo $filelist;die;
            $time = explode("：",$val['creadtime']);
            $list[$key]['creadtime'] = $time[1];
            $size = explode("：",$val['size']);
            $filenum = explode("：",$val['filenum']);
            $list[$key]['size'] = $size[1];
            $list[$key]['filenum'] = $filenum[1];
			$list[$key]['title'] = $val['title'];
			$filelist = preg_replace("/[\t\n\r]+/","<br/>",$filelist);
		//$filelist = preg_replace("BT樱桃 [www.btcherry.com]",C("web_name")."[".C('web_url')."]",$filelist);
			
            $list[$key]['filelist'] = preg_replace("/[\t\n\r]+/","<br/>",$filelist);
			//$list[$key]['filelist'] = preg_replace("BT樱桃 [www.btcherry.com]",C("web_name")."[".C('web_url')."]",$list[$key]['filelist']);
			
			//unset($list[0]);
        }
		
       // print_R($list);
        $this->assign($list[0]);
        $this->buildHtml($_SERVER['REQUEST_URI'],'',"Index:read");
        $this->display();
    }
}