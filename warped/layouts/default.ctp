<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $html->charset(); ?>
	<title><?php echo $title_for_layout; ?></title>
	<?php
		echo $html->meta('icon');
		echo $html->css('1');
		echo $scripts_for_layout;
	?>
</head>
<body>
<?php echo $this->element('template_selector');?>
	<div id="header">
	
			<h1 class="right">Warped</h1>
			<h1><a href="#">Warped</a></h1>
	
	</div>
	
	<ul id="nav">
			
			<li class="right"><input value="Search..." type="text" /></li>
			
			<li><a href="#intro">Introduction</a></li>
			
			<li><a href="#about">About</a></li>
			
			<li><a href="#examples">Examples</a></li>
			
			<li><a href="#contact">Contact</a></li>
	
	</ul>
	
	<div class="clear" />
	
	<div id="sidebar">
	
			<h2>Latest News or Comments</h2>
				
											<p class="news">
												An example of a "latest news" type text area. Here would be the excerpt of the article. You can of course put anything you like here.
												<a href="#" class="more">Read More »</a>
											</p>
											
											<p class="news">
												An example of a "latest news" type text area. Here would be the excerpt of the article. You can of course put anything you like here.
												<a href="#" class="more">Read More »</a>
							
											</p>
											
											<p class="news">
												An example of a "latest news" type text area. Here would be the excerpt of the article. You can of course put anything you like here.
												<a href="#" class="more">Read More »</a>
											</p>
											
											<h2>Sub Navigation</h2>
											
											<ul>
											
													<li><a href="#intro">Introduction</a></li>
					
													<li><a href="#about">About</a></li>
													
													<li><a href="#examples">Examples</a></li>
													
													<li><a href="#contact">Contact</a></li>
											
											</ul>
											
											<h2>Search</h2>
											
											<input name="" type="text" value="Search..." />
	
	</div>
	
	<div id="content">
	
			<h2><a href="#" id="intro">Introduction</a></h2>
				
							<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
							
							<div class="details">
							
							<p>
							
									Posted by <a href="#">User Name</a> on <a href="#">01.01.01.</a> There are <a href="#">25 Comments</a>.
							
							</p>
							
							</div>
							
							<h2><a href="#" id="about">About the Author</a></h2>
							<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
							
							<div class="details">
							
							<p>
							
									Posted by <a href="#">User Name</a> on <a href="#">01.01.01.</a> There are <a href="#">25 Comments</a>.
							
							</p>
							
							</div>
			
							
							<h2><a href="#" id="examples">Some Examples</a></h2>
							
							<p>
			
									
								OK, here I'll just put some example html elements that you will most probably be using in your blog.
									
							</p>
				
										
							<h3>Blockquote Example</h3>
										
							<blockquote>
										
							<p>
												
									<em>
										My tendency<br />
										For dependency<br />
										Is offending me<br />
										It's up-ending me<br />
										I'm pretending see<br />
										To be strong and free<br />
										From my dependency<br />
										It's warping me
									</em>
												
							</p>
			
										
							</blockquote>
				
										
							<h3>List Example</h3>
										
							<ul>
				
							<li>Here</li>
							<li>Is our friend</li>
							<li>The list!</li>
										
							</ul>
			
				
										
							
							
							<h3>Comment Examples</h3>
							
							<ol class="comments">
							
									<li>
									
											<p class="user"><a href="#">User Name</a> remarks:</p>
											
											<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
									</li>
									<li class="alt">
									
											<p class="user"><a href="#">User Name</a> remarks:</p>
											
											<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
									
									</li>
									<li>
									
											<p class="user"><a href="#">User Name</a> remarks:</p>
											
											<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
									
									</li>
									<li class="alt">
									
											<p class="user"><a href="#">User Name</a> remarks:</p>
											
											<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
											
											<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
									
									</li>
							
							</ol>
							
					
							<h2><a href="#" id="contact">Contact</a></h2>
							
							<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
							
							<div class="details">
							
							<p>
							
									Posted by <a href="#">User Name</a> on <a href="#">01.01.01.</a> There are <a href="#">25 Comments</a>.
							
							</p>
							
							</div>
	
	</div>
	
	<div id="footer">
					
							<!-- If you wish to delete this line of code please purchase our commercial license http://www.sixshootermedia.com/shop/commercial-license/ -->
                            <p>Template design by <a href="http://www.sixshootermedia.com">Six Shooter Media</a>.<br />
								<!-- you can delete below here -->

								© All your copyright information here.<br /><br />
								</p>
					
					</div>

</body>
</html>