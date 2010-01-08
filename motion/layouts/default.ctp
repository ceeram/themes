<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $html->charset(); ?>
	<title><?php echo $title_for_layout; ?></title>
	<?php
		echo $html->meta('icon');
		echo $html->css('style');
		echo $javascript->link('accordian.pack');
		echo $scripts_for_layout;
	?>
</head>
<body onload="new Accordian('accordian',3,'header_highlight');">
<?php echo $this->element('template_selector');?>
<div id="header">
<h1><a href="#">motion</a></h1>
<h2>A free CSS Template by Six Shooter Media</h2>
</div>

<div id="accordian" ><!--Parent of the Accordion-->


<!--Start of each accordion item-->
  <div id="test-header" class="accordion_headings header_highlight" >Welcome</div><!--Heading of the accordion ( clicked to show n hide ) -->
  
  <!--Prefix of heading (the DIV above this) and content (the DIV below this) to be same... eg. foo-header & foo-content-->
  
  <div id="test-content"><!--DIV which show/hide on click of header-->
  
  	<!--This DIV is for inline styling like padding...-->
    <div class="accordion_child">
    	<?php echo $html->image('/ssm_motion/img/img_example.jpg', array('alt'=>'image_example')); ?>
    	<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
		<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
	</div>
    
  </div>
<!--End of each accordion item--> 


<!--Start of each accordion item-->
  <div id="test1-header" class="accordion_headings" >Examples</div><!--Heading of the accordion ( clicked to show n hide ) -->
  
  <!--Prefix of heading (the DIV above this) and content (the DIV below this) to be same... eg. foo-header & foo-content-->
  
  <div id="test1-content"><!--DIV which show/hide on click of header-->
  
  	<!--This DIV is for inline styling like padding...-->
    <div class="accordion_child">

		<h2>List Example</h2>							
		<ul>
		<li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nulla lacus ipsum, semper eget, faucibus a, porttitor non, ante. Etiam quam. Quisque condimentum enim eget mauris.</li>
		<li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nulla lacus ipsum, semper eget, faucibus a, porttitor non, ante. Etiam quam. Quisque condimentum enim eget mauris.</li>
		<li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nulla lacus ipsum, semper eget, faucibus a, porttitor non, ante. Etiam quam. Quisque condimentum enim eget mauris.</li>									
		</ul>		
		
		<h2>Blockquote Example</h2>
								
		<blockquote>							
		<p>			
		<em>
		Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.
		</em>										
		</p>				
		</blockquote>
								
												
		
		
		<h2>Table Example</h2>
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
    
  </div>
<!--End of each accordion item--> 



<!--Start of each accordion item-->
  <div id="test2-header" class="accordion_headings" >Contact</div><!--Heading of the accordion ( clicked to show n hide ) -->
  
  <!--Prefix of heading (the DIV above this) and content (the DIV below this) to be same... eg. foo-header & foo-content-->
  
  <div id="test2-content"><!--DIV which show/hide on click of header-->
  
  	<!--This DIV is for inline styling like padding...-->
    <div class="accordion_child">	
		<p>Here's an example contact form. This is not an operation form, just an example!</p>
		
		<form action="">
		<input value="Name" /><br />	
		<input value="Email Address" /><br />
		<textarea cols="5" rows="5">
		</textarea><br />
		<input type="submit" />
		</form>
		
		<p>Some additional text regarding contact information.</p>
    </div>
    
  </div>
<!--End of each accordion item--> 


<!--Start of each accordion item-->
  <div id="test3-header" class="accordion_headings" >Links</div><!--Heading of the accordion ( clicked to show n hide ) -->
  
  <!--Prefix of heading (the DIV above this) and content (the DIV below this) to be same... eg. foo-header & foo-content-->
  
  <div id="test3-content"><!--DIV which show/hide on click of header-->
  
  	<!--This DIV is for inline styling like padding...-->
    <div class="accordion_child">
	
	<p>Some links for your viewing pleasure:</p>
		<ul class="links">
		
					<li><a href="http://www.google.com">Google</a></li>
					<li><a href="http://www.google.com">Google</a></li>
                    <li><a href="http://www.google.com">Google</a></li>
                    <li><a href="http://www.google.com">Google</a></li>
                    <li><a href="http://www.google.com">Google</a></li>
				
		</ul>
    </div>
    
  </div>
<!--End of each accordion item--> 







</div><!--End of accordion parent-->



<div id="footer">
<p class="validate"><a href="http://validator.w3.org/check?uri=referer">XHTML</a> | <a href="http://jigsaw.w3.org/css-validator/">CSS</a><br /><a href="#content">Top</a></p>		


<!-- If you wish to delete this line of code please purchase our commercial license http://www.sixshootermedia.com/shop/commercial-license/ -->
<p>Design: <a href="http://www.sixshootermedia.com">Six Shooter Media</a>. <br />
AJAX: <a href="http://www.dezinerfolio.com/2007/07/19/simple-javascript-accordions/">Simple Accordions</a>. Iconography: <a href="http://www.famfamfam.com/lab/icons/silk/">FamFamFam</a><br />
<!-- you can delete below here -->
© All your copyright information here.</p>
</div>

</body>
</html>
