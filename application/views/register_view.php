<?php $this->load->view('includes/header_view',array(
	'js'=>array(PUBLIC_URL.'Ctrl/register.js'),
	'css'=>array(PUBLIC_URL.'customcss/register.css'),
)); ?>
<?php $this->load->view('includes/navigation_home_view'); ?>

	<div class="container">

		<form class="form-signin" ng-controller="registerCtrl" ng-submit="register()">
			<h2 class="form-signin-heading">Register</h2>
			<div class="form-group" ng-class="fnameError">
				<label for="fname">First Name</label>
				<input type="text" id="fname" class="form-control top" placeholder="First Name" autofocus ng-model="fname">
			</div>
			<div class="form-group" ng-class="lnameError">
				<label for="lname">Last Name</label>
				<input type="text" id="lname" class="form-control mid" placeholder="Last Name" ng-model="lname">
			</div>
			<div class="form-group" ng-class="emailError">
				<label for="email">Email</label>
				<input type="email" id="email" class="form-control mid" placeholder="Email address" ng-model="email">
			</div>
			<div class="form-group" ng-class="passwordError">
				<label for="password">Password</label>
				<input type="password" id="password" class="form-control mid" placeholder="Password" ng-model="password">
			</div>
			<div class="form-group" ng-class="password2Error">
				<label for="password2">Confirm Password</label>
				<input id="password2" type="password" class="form-control bottom" placeholder="Confirm Password" ng-model="password2">
				
			</div>
			<button type="submit" class="btn btn-lg btn-primary btn-block" type="button">Register</button>
			<br/>
			<div style="display:none;" class="alert alert-danger" ng-show="errorMessage">{{errorMessage}}</div>
		</form>
	</div> <!-- /container -->

<?php $this->load->view('includes/footer_view'); ?>

