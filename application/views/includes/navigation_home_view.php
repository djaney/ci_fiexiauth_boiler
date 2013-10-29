 <div class="navbar-wrapper">
		<div class="container">

			<div class="navbar navbar-inverse navbar-static-top">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="<?php echo BASE_URL; ?>">Project name</a>
					</div>
					<div class="navbar-collapse collapse">
						<ul class="nav navbar-nav">
							<li class="<?php echo $this->router->class=='home'?'active':'' ?>"><a href="<?php echo BASE_URL; ?>">Home</a></li>
							<li class="<?php echo $this->router->class=='login'?'active':'' ?>"><a href="<?php echo BASE_URL.'login/'; ?>">Login</a></li>
							<li class="<?php echo $this->router->class=='register'?'active':'' ?>"><a href="<?php echo BASE_URL.'register/'; ?>">Register</a></li>
							<li class="<?php echo $this->router->class=='about'?'active':'' ?>"><a href="#about">About</a></li>
							<li class="<?php echo $this->router->class=='contact'?'active':'' ?>"><a href="#contact">Contact</a></li>
						</ul>
					</div>
				</div>
			</div>

		</div>
	</div>