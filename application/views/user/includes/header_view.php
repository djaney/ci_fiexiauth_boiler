<!DOCTYPE html>
<!--[if lt IE 7]>			<html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>				 <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>				 <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php echo isset($ngApp)?'ng-app="'.$ngApp.'"':'ng-app' ?> <!--<![endif]-->
		<head>
				<meta charset="utf-8">
				<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
				<title></title>
				<meta name="description" content="">
				<meta name="viewport" content="width=device-width">

				<link rel="stylesheet" href="<?php echo PUBLIC_URL ?>css/bootstrap.min.css">
				<link rel="stylesheet" href="<?php echo PUBLIC_URL ?>css/bootstrap-theme.min.css">
				<link rel="stylesheet" href="<?php echo PUBLIC_URL ?>css/main.css">
				<link rel="stylesheet" href="<?php echo PUBLIC_URL ?>customcss/style.css">
				<?php if(isset($css)): foreach($css as$c): ?>
				<link rel="stylesheet" href="<?php echo $c ?>" />
				<?php endforeach;endif; ?>
				
				<script type="text/javascript">
					var PUBLIC_URL = '<?php echo PUBLIC_URL ?>';
					var BASE_URL = '<?php echo BASE_URL ?>';
				</script>
				
				<script src="<?php echo PUBLIC_URL ?>js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
				<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.0.8/angular.min.js"></script>
				<?php if(isset($js)): foreach($js as $j): ?>
				<script type="text/javascript" src="<?php echo $j ?>"></script>
				<?php endforeach;endif; ?>
		</head>
		<body>
				<!--[if lt IE 7]>
						<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
				<![endif]-->
			<div class="container">
				<div class="row">
					<div class="col-md-2">
						<?php $this->load->view('user/includes/navigation_view'); ?>
					</div>
					<div class="col-md-10">
					
						