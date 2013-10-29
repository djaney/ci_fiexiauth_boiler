<?php $this->load->view('includes/header_view',array(
	'js'=>array(PUBLIC_URL.'Ctrl/resendActivation.js')
)); ?>
	<?php $this->load->view('includes/navigation_home_view'); ?>
	<div class="container" ng-controller="resendActivationCtrl">
			<?php if($success): ?>
				<h2>Account Activated</h2>
			<?php else: ?>
				<h2>Failed to activate account</h2>
				<p ng-show="!done">Try to resend activation email by entering your email</p>
				<form ng-submit="reactivate()">
					<input class="form-control input-lg" type="email" placeholder="Email" ng-show="!done">
					<input type="submit" class="btn btn-primary btn-block btn-lg" ng-show="!done" value="Resend">
					<div style="display:none;" class="alert alert-success" ng-show="success">Activation email sent</div>
					<div style="display:none;" class="alert alert-danger" ng-show="error">{{error}}</div>
				</form>
			<?php endif; ?>
	</div> <!-- /container -->

<?php $this->load->view('includes/footer_view'); ?>

