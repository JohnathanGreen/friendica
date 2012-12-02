<!DOCTYPE html >
<html>
<head>
  <title><?php if(x($page,'title')) echo $page['title'] ?></title>
  <script>var baseurl="<?php echo $a->get_baseurl() ?>";</script>
  <script type="text/javascript">
	function ScrollToBottom(){
	window.scrollTo(0,document.body.scrollHeight);
	}
  </script>
  <?php if(x($page,'htmlhead')) echo $page['htmlhead'] ?>
</head>
<body>
	<header>
		<?php if(x($page, 'header')) echo $page['header']; ?>
	</header>

	<?php if(x($page,'nav')) echo $page['nav']; ?>

	<aside><?php if(x($page,'aside')) echo $page['aside']; ?></aside>

	<section><?php if(x($page,'content')) echo $page['content']; ?>
		<div id="page-footer"></div>
	</section>

	<right_aside><?php if(x($page,'right_aside')) echo $page['right_aside']; ?></right_aside>

	<footer id="footer">
		<?php if(x($page, 'footer')) echo $page['footer']; ?>
	</footer>

	<?php if (x($page, 'bottom')) echo $page['bottom']; ?>
</body>
</html>
