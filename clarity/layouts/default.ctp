<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $html->charset(); ?>
	<title><?php echo $title_for_layout; ?></title>
	<?php
		echo $html->meta('icon');
		echo $html->css('/ssm_clarity/css/1');
		echo $scripts_for_layout;
	?>
</head>
<body>
<?php echo $this->element('template_selector');?>
	<div id="header">

		<h1><a href="#">Clarity</a></h1>

		<h3>A CSS / XHTML Template by Six Shooter Media</h3>

		<?php echo $this->element('nav'); ?>
	</div>

	<div id="container">
		<div id="content">
		
				<h2><a href="#">Clarity?</a></h2>
				
				<div class="articleinfo">Posted on 17.02.07 by <a href="#">Author</a> | <a href="#">28 Comments</a></div>
				
				<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
				
				<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
				
				<h2><a href="#">About the Author</a></h2>
				
				<div class="articleinfo">Posted on 17.02.07 by <a href="#">Author</a> | <a href="#">28 Comments</a></div>
				
				<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
				
				<h2><a href="#">Some Examples...</a></h2>
				
				<div class="articleinfo">Posted on 17.02.07 by <a href="#">Author</a> | <a href="#">28 Comments</a></div>
				
				<h3>Long Text Example</h3>
				
				<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
				<p>
				Quisque imperdiet pretium augue. Phasellus tincidunt tellus in nibh. Duis et diam. Aliquam dictum porta metus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nullam euismod. Sed nec lacus porta ligula imperdiet nonummy. Morbi sed felis. Proin molestie. Etiam tempus odio eu arcu. Donec ac est at urna ornare vestibulum. Nunc laoreet feugiat mi. Nulla felis quam, bibendum sed, iaculis at, facilisis vitae, nibh. Fusce sit amet sem. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nunc convallis augue vitae tellus.
				</p>
				<p>
				Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur rutrum pulvinar dolor. Maecenas consectetuer, diam vitae euismod porttitor, elit est blandit nibh, tristique mattis urna elit a lectus. Pellentesque ipsum lorem, consectetuer vel, blandit eu, varius quis, nisl. Quisque viverra dui eget nisl. Nam est. Donec tristique tortor eu dolor. Curabitur ut metus. Ut eleifend. Fusce ac nunc. Suspendisse commodo auctor nisl. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nullam ultrices sodales neque. Mauris non purus non urna elementum consectetuer. Quisque sem odio, nonummy sit amet, posuere ut, blandit ac, sem. Sed volutpat neque at magna.
				</p>
				<p>
				Quisque imperdiet pretium augue. Phasellus tincidunt tellus in nibh. Duis et diam. Aliquam dictum porta metus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nullam euismod. Sed nec lacus porta ligula imperdiet nonummy. Morbi sed felis. Proin molestie. Etiam tempus odio eu arcu. Donec ac est at urna ornare vestibulum. Nunc laoreet feugiat mi. Nulla felis quam, bibendum sed, iaculis at, facilisis vitae, nibh. Fusce sit amet sem. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nunc convallis augue vitae tellus.
				</p>
				
				<h3>Blockquote Example</h3>
										
				<blockquote>
							
				<p>
									
						<em>

							"But the Forest <em>is</em> queer. Everything in it is very much more alive, more aware of what is going on, so to speak, than things are in the Shire. And the trees do not like strangers. They watch you. They are usually content merely to watch you, as long as daylight lasts, and don't do much. Occasionally the most unfriendly ones may drop a branch, or stick a root out, or grasp at you with a long trailer. But at night things can be most alarming, or so I am told."
						</em>
									
				</p>
				
				<p style="text-align: right;">
				
						- Meriadoc Brandybuck
				
				</p>

							
				</blockquote>
	
							
				<h3>List Example</h3>

							
				<ul>
	
				<li>Here</li>
				<li>Is our friend</li>
				<li>The list!</li>
							
				</ul>

	
			
				
				<h3>Table Example</h3>
				
				<table>
				<tbody><tr>
				<th>Col 1</th>
				<th>Col 2</th>
				
				<th>Col 3</th>
				</tr>
				<tr>
				<td>2</td>
				<td>23</td>
				<td>76</td>
				</tr>
				<tr>
				<td>54</td>
				<td>233</td>
				
				<td>1233</td>
				</tr>
				</tbody></table>
		
		</div>
		
		<div id="sidebar">
		
		<h3>About</h3>
		
		<p class="about">
		
			A small paragraph can go here describing your site; what it is here for, long term goals etc. Go nuts!
		
		</p>
		
		<h3>Links</h3>
		
		<ul>
					<li><a href="http://www.google.com">Google</a></li>
					<li><a href="http://www.google.com">Google</a></li>
                    <li><a href="http://www.google.com">Google</a></li>
                    <li><a href="http://www.google.com">Google</a></li>
                    <li><a href="http://www.google.com">Google</a></li>
				</ul>
		
		</div>
		
		</div>
		
		<div id="footer">
<p class="validate"><a href="http://validator.w3.org/check?uri=referer">XHTML</a> | <a href="http://jigsaw.w3.org/css-validator/">CSS</a><br /><a href="#content">Top</a></p>		

<!-- If you wish to delete this line of code please purchase our commercial license http://www.sixshootermedia.com/shop/commercial-license/ -->
<p>Template design by <a href="http://www.sixshootermedia.com">Six Shooter Media</a>.<br />
<!-- you can delete below here -->
© All your copyright information here.</p>
</div>
</body>
</html>