<?php $this->load->view('includes/header_view',array(
	'js'=>array(PUBLIC_URL.'Ctrl/login.js'),
	'css'=>array(PUBLIC_URL.'customcss/login.css'),
)); ?>
	<?php $this->load->view('includes/navigation_home_view'); ?>
	<div class="container">
		<form class="form-signin" ng-controller="loginCtrl" ng-submit="login()">
			<h2 class="form-signin-heading">Please sign in</h2>
			<input type="email" class="form-control" placeholder="Email address" autofocus ng-model="email">
			<input type="password" class="form-control" placeholder="Password" ng-model="password">
			<label class="checkbox">
				<input type="checkbox" value="remember-me" ng-model="remember"> Remember me
			</label>
			<button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
			<br/>
			<div class="alert alert-danger" style="display:none;" ng-show="errorMessage">{{errorMessage}}</div>
		</form>
	</div> <!-- /container -->

<?php $this->load->view('includes/footer_view'); ?>

