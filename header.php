<!DOCTYPE html>
<html lang="en">
		<head>
				<meta http-equiv="content-type" content="text/html; charset=UTF-8"> 
				<meta charset="utf-8">
				<title><?php wp_title(); ?></title>
				<link href="http://cdn/Bootstrap/css/bootstrap.min.css" rel="stylesheet">
				<link rel="stylesheet" href="<?php echo bloginfo('stylesheet_url'); ?>">
				<link rel="shortcut icon" href="">
		</head>
		<?php echo (is_single())?"<body class='single'>":"<body>"; ?>
				<div class="navbar navbar-fixed-top header">
					<div class="col-md-12" style="margin:0 auto;">
					<div class="navbar-header">
					
					<a href="#" style="margin-left:15px;" class="navbar-btn btn btn-default btn-plus dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-home" style="color:#dd1111;"></i> Home <small><i class="glyphicon glyphicon-chevron-down"></i></small></a>
					<ul class="nav dropdown-menu">
					<li><a href="<?php bloginfo('siteurl'); ?>">Blog</a></li>
					<?php $a=get_pages();
						foreach ($a as $value) {
							echo "<li><a href='$value->guid'>".ucwords($value->post_name)."</a></li>";
						}
					 ?>
					</ul>
					
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse2">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					</button>
			
				</div>
				<div class="navbar-header col-md-offset-2">
					
					<a href="<?php bloginfo('siteurl'); ?>" class="navbar-brand"><?php bloginfo('sitenamme'); ?></a>
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse1">
					<i class="glyphicon glyphicon-search"></i>
					</button>
			
				</div>
									<ul class="nav navbar-nav navbar-right collapse navbar-collapse navbar-collapse2">
						 <li class="active"><a href="#">Posts</a></li>
						<?php if($user_ID){?><li><a href="<?php bloginfo('siteurl'); ?>/wp-admin/" role="button"><?php global $current_user;get_currentuserinfo(); echo $current_user->display_name; ?></a></li> <?php } else{?> <li><a href="<?php bloginfo('siteurl'); ?>/wp-login.php" role="button">Login</a></li> <?php } ?>
					 </ul>

				<div class="collapse navbar-collapse" id="navbar-collapse1">
					<form class="navbar-form">
							<div class="input-group" style="max-width:470px;">
								<input type="text" class="form-control" placeholder="Search" name="s" id="s" value="<?php the_search_query(); ?>">
								<div class="input-group-btn">
									<button class="btn btn-default btn-primary" type="submit"><i class="glyphicon glyphicon-search"></i></button>
								</div>
							</div>
					</form>
				</div>	
		 </div>	

</div>