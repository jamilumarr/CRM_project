<?= $this->include('Views/template/header') ?>


	<body class="start">
		<main>
			<div class="layout">
				<!-- Start of Sign In -->
				<div class="main order-md-1">
					<div class="start">
						<div class="container">
							<div class="col-md-12">
								<div class="content">
									<h1>CRM</h1>
									<div class="third-party">
										<button class="btn item bg-blue">
											<i class="material-icons">pages</i>
										</button>
										<button class="btn item bg-teal">
											<i class="material-icons">party_mode</i>
										</button>
										<button class="btn item bg-purple">
											<i class="material-icons">whatshot</i>
										</button>
									</div>
									<p>or use your  account:</p>
									 <form action="/login" method="post" enctype="multipart/form-data">
										<div class="form-group">
											<input type="text" id="inputusername" name="username" class="form-control" placeholder="User Name" required>
											<button class="btn icon"><i class="material-icons">mail_outline</i></button>
										</div>
										<div class="form-group">
											<input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
											<button class="btn icon"><i class="material-icons">lock_outline</i></button>
										</div>
										<button type="submit" class="btn button" >Sign In</button>
										<div class="callout">
											<span>Don't have account? <a href="sign-up.html">Create Account</a></span>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- End of Sign In -->
				<!-- Start of Sidebar -->
				<!-- <div class="aside order-md-2">
					<div class="container">
						<div class="col-md-12">
							<div class="preference">
								<h2>Hello, Friend!</h2>
								<p>Enter your personal details and start your journey with CRM today.</p>
								<a href="sign-up.html" class="btn button">Sign Up</a>
							</div>
						</div>
					</div>
				</div> -->
				<!-- End of Sidebar -->
			</div> <!-- Layout -->
		</main>
        <?= $this->include('Views/template/footer') ?>
	</body>

</html>