<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $html->charset('iso-8859-1'); ?>
	<title><?php echo $title_for_layout; ?></title>
	<?php
		echo $html->meta('icon');
		echo $html->css('1');
		echo $scripts_for_layout;
	?>
</head>
<body>
<?php echo $this->element('template_selector');?>

<div id="container">
	<div id="header">
		<h1><a href="#">mini<strong>BLOG</strong> 1.0</a></h1>
		<h2>For all your blogging needs.</h2>

		<ul id="nav">
			<li><a href="#intro" title="The intro! (a:i)" accesskey="i"><em>I</em>ntro</a></li>
			<li><a href="#css" title="CSS and XHTML (a:c)" accesskey="c"><em>c</em>ss &amp; xhtml</a></li>
			<li><a href="#about" title="All about me (a:a)" accesskey="a"><em>A</em>bout the author</a></li>
			<li><a href="#contact" title="Get in Touch (a:o)" accesskey="o">C<em>o</em>ntact</a></li>
		</ul>
	</div>

	<?php echo $this->element('sidebar');?>

	<div id="content">
		<?php $session->flash(); ?>
		<?php echo $content_for_layout; ?>
	</div>

	<div id="footer">
		<p>
			<!-- If you wish to delete this line of code please purchase our commercial license http://www.sixshootermedia.com/shop/commercial-license/ -->
			Template design by <a href="http://www.sixshootermedia.com">Six Shooter Media</a>.<br />
			<!-- you can delete below here -->
		</p>
	</div>
</div>
</body>
</html>