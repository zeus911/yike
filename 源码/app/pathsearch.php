<?php include '../base.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>交换路径搜索</title>
<?php echo View\Home::$styles . "\n"; ?>
</head>

<body>
<?php echo View\Home::getNav(); ?>

	
	<div class="hero-unit" style="width: 800px; margin:0 auto;">
		<h2>何为交换路径搜索？</h2>
		<p style="text-align: right; width: 300px;">Just try it now.</p>
		<p></p>
		<input type="text" name="unuse" placeholder="我有什么" id="unuse"/>
		<input type="text" name="require" placeholder="我要换什么" id="require"/>
		<input type="button" value="搜路径！" onclick="javascript:Yike.message('亲~我们在努力中，够请期待:)');"/>
	</div>

<?php echo View\Home::getFooter();?>
<?php echo View\Home::$scripts . "\n"; ?>
</body>
</html>
<?php View\General::waste($start); ?>