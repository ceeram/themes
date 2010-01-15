<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $html->charset(); ?>
	<title>
		<?php echo __( 'Infinitas :: ', true ), $title_for_layout;?>
	</title>
	<?php
		echo $html->meta('icon');
		echo $html->css('admin');
		echo $scripts_for_layout;
    	echo $javascript->link('fckeditor');
	?>
</head>

<body>
<div id="wrapper">
<div id="header">
	<?php echo $this->Session->flash();
	?>
	<ul id="top-navigation">
		<liclass="<?php echo(($this->here=='/admin')?'active':'');?>"><span><span><?php echo$this->Html->link(__('Dashboard',true),'/admin');?></span></span></li>
		<liclass="<?php echo(($this->plugin=='blog')?'active':'');?>"><span><span><?php echo$this->Html->link(__('Blog',true),'/admin/blog');?></span></span></li>
		<liclass="<?php echo(($this->plugin=='newsletter')?'active':'');?>"><span><span><?php echo$this->Html->link(__('Newsletters',true),'/admin/newsletter');?></span></span></li>
		<liclass="<?php echo(($this->plugin=='cms')?'active':'');?>"><span><span><?php echo$this->Html->link(__('Cms',true),'/admin/cms');?></span></span></li>
		<liclass="<?php echo(($this->plugin=='core')?'active':'');?>"><span><span><?php echo$this->Html->link(__('Developer',true),'/admin/core');?></span></span></li>
       </ul>
</div>
<div class="colmask leftmenu">
    <div class="colright">
        <div class="col1wrap">
            <div class="col1">
                <!-- Column 2 start -->
                <?php echo $content_for_layout;?>
				<!-- Column 2 end -->
            </div>
        </div>
        <div class="col2">
            <!-- Column 1 start -->
            <?php echo $this->element('admin/actions');?>
			<!-- Column 1 end -->
        </div>
    </div>
</div>
<div id="footer">
</div>
<?php echo $this->element('admin/bottom');?>
</body>
</html>