<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $html->charset(); ?>
	<title><?php echo $title_for_layout; ?></title>
	<?php
		echo $html->meta('icon');
		echo $html->css('/ssm_basic/css/1');
		echo $scripts_for_layout;
	?>
</head>
 
<body>
<?php echo $this->element('template_selector');?>
<div id="wrapper" class="fixed">

	<div id="header">
		<h1>Basic<strong>Templates</strong></h1>
		<?php echo $this->element('nav'); ?>
	</div>

	<?php echo $this->element('sidebar_left'); ?>
	<?php echo $this->element('sidebar_right'); ?>

	<div id="content" class="with_sidebar">
		<?php $session->flash(); ?>
		<h3>This is the 3 Column Fixed layout from ssm_basic plugin in app/views/templates</h3>
		<?php echo $content_for_layout; ?>
	</div>

	<div id="footer">
	<p style="float:right;">Valid <a href="http://validator.w3.org/check?uri=referer">HTML</a> &amp; <a href="http://jigsaw.w3.org/css-validator/">CSS</a></p>
	<!-- If you wish to delete this line of code please purchase our commercial license http://www.sixshootermedia.com/shop/commercial-license/ -->
    <p>Template design by <a href="http://www.sixshootermedia.com/free-templates/">Six Shooter Media</a></p>
	</div>

</div>
</body>
</html>