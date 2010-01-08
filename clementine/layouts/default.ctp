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
		<div id="top">
		
				<b><a href="#container">Skip to Content</a></b>
				<a href="#contact">Get in Touch</a>
				<a href="#">Another Link</a>
		
		</div>
		
		<div id="container">
		
				<div id="menu">
				
						<ul id="nav">

						<li><a href="#intro" title="The intro! (a:i)" accesskey="i"><em>I</em>ntro</a></li>
						
						<li><a href="#css" title="CSS and XHTML (a:c)" accesskey="c"><em>c</em>ss &amp; xhtml</a></li>
						
						<li><a href="#about" title="All about me (a:a)" accesskey="a"><em>A</em>uthor</a></li>
						
						<li><a href="#contact" title="Get in Touch (a:o)" accesskey="o">C<em>o</em>ntact</a></li>
						
						<li><a href="#" class="active"> Active Link</a></li>
						<li><a href="#">Link</a></li>
						<li><a href="#" class="last">Link</a></li>
						
						</ul>
						
						<br class="clear" />
				
				</div>
				
				
				
				<div id="sidebar">
				
						<h1 class="first">
						
								The Sidebar!
						
						</h1>
						
						<p>
						
								The obligatory sidebar! How we love ye. This is of course the area for you to put anything non-main-content. Additional navigation, links, some thumbnails? I dunno, do with it what you will!
						
						</p>
						
						<h1>Linkroll</h1>
						
						<ul class="linkroll">
						
							<li><a href="http://www.sixshootermedia.com">Six Shooter Media</a></li>
							<li><a href="http://www.buyabutton.net">Buy a Button!</a></li>
							<li><a href="http://www.sixshootermedia.com">Six Shooter Media</a></li>
							<li><a href="http://www.buyabutton.net">Buy a Button!</a></li>

						
						</ul>
				
				</div>
				
				<div id="content">
				
						<a href="#" id="intro"></a><h1><a href="#">Introduction</a></h1>
						
						<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
						
						<a href="#" id="css"></a><h1><a href="#">CSS &amp; XHTML</a></h1>

						
						<p>
						
								As you would expect, this web site makes use of css for its entire layout. No nasty tables here baby! The markup is also valid XHTML 1.1. CSS &amp; XHTML are important for the following reasons:
						
						</p>

						
						<ul>
						
								<li>Accessibility. Big subject. Read more <a href="http://www.w3.org/WAI/">here</a>.</li>
								<li>Keeping file sizes small</li>

								<li>Search Engine Optimisation</li>
								<li>Loads more</li>
						
						</ul>

						
						<p>
						
								Anyway, this site validates as both <a href="http://jigsaw.w3.org/css-validator/check/referer">CSS</a> and <a href="http://validator.w3.org/check?uri=referer">XHTML 1.1</a> compliant. Which is nice.
						
						</p>

						
						
						<a href="#" id="author"></a><h1><a href="#">About the Author</a></h1>
						
						<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
						
						<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
						
						
						
						<h1>Some Examples</h1>

						
						<p>
						
								OK, here I'll just put some example html elements that you will most probably be using in your blog.
						
						</p>
						
						<h2>Blockquote Example</h2>

						
						<blockquote>
						
								<p>
								
										Here's your blockquote text jfds jkndskf ndsknf sldnfjk sdnf jdsbf hdsbf jbsdjfk bdskj bdsjfb dsk bds bfsdj bfsjk bfsjdbf sbjd fjsbdk fsdbf sdb fksbd sb
								
								</p>
						
						</blockquote>

						
						<h2>List Example</h2>
						
						<ul>
						
								<li>Here</li>

								<li>Is our friend</li>
								<li>The list!</li>
						
						</ul>
						<h1 id="contact">Contact</h1>

							<p>
									If you want to get in touch with me please feel free to send me an email via the form on the <a href="http://www.sixshootermedia.com/contact/">contact page of my site</a>
							</p>
						
						


				
				</div>

				<div id="footer">
					
					<!-- If you wish to delete this line of code please purchase our commercial license http://www.sixshootermedia.com/shop/commercial-license/ -->
                    <p>Template design by <a href="http://www.sixshootermedia.com">Six Shooter Media</a></p><br /><br />
 		
		
				</div>
		
		</div>


</body>
</html> 