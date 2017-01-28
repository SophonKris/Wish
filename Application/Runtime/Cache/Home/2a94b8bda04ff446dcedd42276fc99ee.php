<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>许愿墙つ﹏⊂</title>
	<link rel="stylesheet" href="/wish/Public/Css/index.css" />
	<script type="text/javascript" src='/wish/Public/Js/jquery-1.7.2.min.js'></script>
	<script type="text/javascript" src='/wish/Public/Js/index.js'></script>
</head>
<body>
	<div id='top'>
		<span id='send'></span>
	</div>
	
	<div id='main'>
		<h1>电脑端食用更佳哦つ﹏⊂</h1>
		<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><dl class='paper a1'>
			<dt>
				<span class='username'><?php echo ($vo["name"]); ?></span>
				<span class='num'>No.000<?php echo ($vo["id"]); ?></span>
			</dt>
			<dd class='content'><?php echo ($vo["content"]); ?></dd>
			<dd class='bottom'>
				<!-- <span class='time'>今天08:30</span> -->
				<a href="" class='close'></a>
			</dd>
		</dl><?php endforeach; endif; else: echo "" ;endif; ?>

		
		
	</div>
		<?php if(is_array($arr)): foreach($arr as $key=>$vo): ?><p><?php echo ($vo["id"]); ?></p><?php endforeach; endif; ?>
	<div id='send-form'>
		<p class=''><span>___________许下你的愿望〒▽〒___________</span></br></p>
		<form action="/wish/index.php/Home/Index/wish" method="post" name='wish'>
			<p>
				<label for="username">昵称：</label>
				<input type="text" name='name' id='name'/>
			</p>
			<p>
				<label for="content">愿望：(您还可以输入&nbsp;<span id='font-num'>50</span>&nbsp;个字)</label>
				<textarea name="content" id='content'></textarea>
				<!-- <div id='phiz'>
					<img src="./Images/phiz/zhuakuang.gif" alt="抓狂" />
					<img src="./Images/phiz/baobao.gif" alt="抱抱" />
					<img src="./Images/phiz/haixiu.gif" alt="害羞" />
					<img src="./Images/phiz/ku.gif" alt="酷" />
					<img src="./Images/phiz/xixi.gif" alt="嘻嘻" />
					<img src="./Images/phiz/taikaixin.gif" alt="太开心" />
					<img src="./Images/phiz/touxiao.gif" alt="偷笑" />
					<img src="./Images/phiz/qian.gif" alt="钱" />
					<img src="./Images/phiz/huaxin.gif" alt="花心" />
					<img src="./Images/phiz/jiyan.gif" alt="挤眼" />
				</div> -->
			</p>
			<h1>虚函数</h1><button type="submit" id="submit">提交</button></br></br></br></br></br>
			<a href="" id='close'>点我关闭许愿啦〒▽〒</a>
			<!-- <span id='send-btn' type="submit"></span> -->
		</form>
	</div>
<!--[if IE 6]>
    <script type="text/javascript" src="./Js/iepng.js"></script>
    <script type="text/javascript">
        DD_belatedPNG.fix('#send,#close,.close','background');
    </script>
<![endif]-->
</body>
</html>