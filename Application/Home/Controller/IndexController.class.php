<?php
// 本类由系统自动生成，仅供测试用途
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
    	$wish=M('wish');
		$arr=$wish->where()->select();
		
		$this->assign('list',$arr);
		
	$this->display();

}
	public function wish(){
		$wish=M('wish');
		$data = array(
						
						'name' => $_POST['name'],
						
						'content' => $_POST['content'],
						
						);
			$wish=M('wish');
			var_dump($data);
						
			
			if(($data["content"]!==null) & ($data["name"]!==null))
			{
					$list = $wish->add($data);
					$this->redirect("Index/index","发布成功！〒▽〒",0);//跳转到通知中心
			}else{
					$this->error("发布操作失败，请填写完整哦！〒▽〒");//错误判断
				}

		// $arr=$wish->where()->select();

		// $this->assign('list',$arr);
		// dump($arr);
		// $this->display();
	}

}