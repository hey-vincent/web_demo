<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<style type="text/css">
	.button_style{ border:solid; color: #fff; border-radius: 5px;border-color: #00FFFF;
		height: 50px;width: 100px;
		font-weight: bold;margin-left: 45%;
		background-color: #FF0000; text-align: center;align-items: center;line-height: 50px;
		font-size: 30px;  }
</style>



<html>
<head>
	<title>index</title>
</head>

<body>
<a href="http://www.baidu.com" target="_blank"> <strong> Click to open baidu.com in new tab</strong> </a>
<br>
<a href="http://www.baidu.com" target="_parent" draggable = "true"> 
		<strong> target="_parent" draggable = "true" </strong> </a>
<br>
<a href="mailto: heyvincent@126.com"> mailto vincent</a>

<img src="/src/thumb.png" alt="Failed to download pic" height= 20px title="like"> 

<div>
	<form  method= 'post' action="/index/login">
		<label for="user_name"><strong>user name</strong></label>
		<input type="text" name="user_name" >
		<br>
		<label for="password"><strong>password</strong></label>
		<input type="password" name="password" >
		<div class="button_style">
			<input type="submit" name="sign_in" title="sign in">
		</div>


	</form>
</div>
<br>

</body>
</html>