<?= $this->include('Views/template/header') ?>

<body>
	<main>
		<!-- navbar -->
		<?= $this->include('Views/template/navbar') ?>
		<!-- end navabr -->
		<div class="layout">
			<!-- navigation -->
			<?= $this->include('Views/template/navigation') ?>
			<!-- end -->
			<!-- sidebar -->
			<?= $this->include('Views/template/sidebar') ?>
			<!-- end -->

			<!-- Start of Add Friends -->
			<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered" role="document">
					<div class="requests">
						<div class="title">
							<h1>Add your friends</h1>
							<button type="button" class="btn" data-dismiss="modal" aria-label="Close"><i class="material-icons">close</i></button>
						</div>
						<div class="content">
							<form>
								<div class="form-group">
									<label for="user">Username:</label>
									<input type="text" class="form-control" id="user" placeholder="Add recipient..." required>
									<div class="user" id="contact">
										<img class="avatar-sm" src="crm/img/avatars/avatar-female-5.jpg" alt="avatar">
										<h5>Keith Morris</h5>
										<button class="btn"><i class="material-icons">close</i></button>
									</div>
								</div>
								<div class="form-group">
									<label for="welcome">Message:</label>
									<textarea class="text-control" id="welcome" placeholder="Send your welcome message...">Hi Keith, I'd like to add you as a contact.</textarea>
								</div>
								<button type="submit" class="btn button w-100">Send Friend Request</button>
							</form>
						</div>
					</div>
				</div>
			</div>
			<!-- End of Add Friends -->
			<!-- start sidebar right -->
			<!-- <div class="sidebar" id="sidebar">
						<div class="container">
							<div class="col-md-7">
								<div class="tab-content"> -->
			<!--End sidebar right  -->
			<!-- Start of Create Chat -->
			<div class="modal fade" id="startnewchat" tabindex="-1" role="dialog" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered" role="document">
					<div class="requests">
						<div class="title">
							<h1>Start new chat</h1>
							<button type="button" class="btn" data-dismiss="modal" aria-label="Close"><i class="material-icons">close</i></button>
						</div>
						<div class="content">
							<form>
								<div class="form-group">
									<label for="participant">Recipient:</label>
									<input type="text" class="form-control" id="participant" placeholder="Add recipient..." required>
									<div class="user" id="recipient">
										<img class="avatar-sm" src="crm/img/avatars/avatar-female-5.jpg" alt="avatar">
										<h5>Keith Morris</h5>
										<button class="btn"><i class="material-icons">close</i></button>
									</div>
								</div>
								<div class="form-group">
									<label for="topic">Topic:</label>
									<input type="text" class="form-control" id="topic" placeholder="What's the topic?" required>
								</div>
								<div class="form-group">
									<label for="message">Message:</label>
									<textarea class="text-control" id="message" placeholder="Send your welcome message...">Hmm, are you friendly?</textarea>
								</div>
								<button type="submit" class="btn button w-100">Start New Chat</button>
							</form>
						</div>
					</div>
				</div>
			</div>

			<!-- End of Create Chat -->
			<div class="main">
				<div class="tab-content" id="nav-tabContent">
					<!-- Start of Babble -->
					<div class="babble tab-pane fade active show" id="list-chat" role="tabpanel" aria-labelledby="list-chat-list">
						<!-- Start of Chat -->
						<div class="chat" id="chat1">
							<div class="top">
								<div class="container">
									<div class="col-md-7">
										<div class="inside">
											<a href="#"><img class="avatar-md" src="crm/img/avatars/avatar-female-5.jpg" data-toggle="tooltip" data-placement="top" title="Keith" alt="avatar"></a>
											<div class="status">
												<i class="material-icons online">fiber_manual_record</i>
											</div>
											<div class="data">
												<h5><a href="#">Keith Morris</a></h5>
												<span>Active now</span>
											</div>
											<button class="btn d-md-block d-none"><i class="material-icons md-30">info</i></button>
											<div class="dropdown">
												<button class="btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="material-icons md-30">more_vert</i></button>
												<div class="dropdown-menu dropdown-menu-right">

													<button class="dropdown-item"><i class="material-icons">clear</i>Clear History</button>
													<button class="dropdown-item"><i class="material-icons">delete</i>Delete Contact</button>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="content" id="content">
								<div class="container">
									<div class="col-md-7">
										<div class="date">
											<hr>
											<span>Yesterday</span>
											<hr>
										</div>
										<div class="message">
											<img class="avatar-md" src="crm/img/avatars/avatar-female-5.jpg" data-toggle="tooltip" data-placement="top" title="Keith" alt="avatar">
											<div class="text-main">
												<div class="text-group">
													<div class="text">
														<p>We've got some killer ideas kicking about already.</p>
													</div>
												</div>
												<span>09:46 AM</span>
											</div>
										</div>
										<div class="message me">
											<div class="text-main">
												<div class="text-group me">
													<div class="text me">
														<p>Can't wait! How are we coming along with the client?</p>
													</div>
												</div>
												<span>11:32 AM</span>
											</div>
										</div>
										<div class="message">
											<img class="avatar-md" src="crm/img/avatars/avatar-female-5.jpg" data-toggle="tooltip" data-placement="top" title="Keith" alt="avatar">
											<div class="text-main">
												<div class="text-group">
													<div class="text">
														<p>Coming along nicely, we've got a draft for the client quarries completed.</p>
													</div>
												</div>
												<span>02:56 PM</span>
											</div>
										</div>
										<div class="message me">
											<div class="text-main">
												<div class="text-group me">
													<div class="text me">
														<p>Roger that boss!</p>
													</div>
												</div>
												<div class="text-group me">
													<div class="text me">
														<p>I have already started gathering some stuff for the mood boards, excited to start!</p>
													</div>
												</div>
												<span>10:21 PM</span>
											</div>
										</div>
										<div class="message">
											<img class="avatar-md" src="crm/img/avatars/avatar-female-5.jpg" data-toggle="tooltip" data-placement="top" title="Keith" alt="avatar">
											<div class="text-main">
												<div class="text-group">
													<div class="text">
														<p>Great start guys, I've added some notes to the task. We may need to make some adjustments to the last couple of items - but no biggie!</p>
													</div>
												</div>
												<span>11:07 PM</span>
											</div>
										</div>
										<div class="date">
											<hr>
											<span>Today</span>
											<hr>
										</div>
										<div class="message me">
											<div class="text-main">
												<div class="text-group me">
													<div class="text me">
														<p>Well done all. See you all at 2 for the kick-off meeting.</p>
													</div>
												</div>
												<span>10:21 PM</span>
											</div>
										</div>
										<div class="message">
											<img class="avatar-md" src="crm/img/avatars/avatar-female-5.jpg" data-toggle="tooltip" data-placement="top" title="Keith" alt="avatar">
											<div class="text-main">
												<div class="text-group">
													<div class="text">
														<div class="attachment">
															<button class="btn attach"><i class="material-icons md-18">insert_drive_file</i></button>
															<div class="file">
																<h5><a href="#">Tenacy Agreement.pdf</a></h5>
																<span>24kb Document</span>
															</div>
														</div>
													</div>
												</div>
												<span>11:07 PM</span>
											</div>
										</div>
										<div class="message me">
											<div class="text-main">
												<div class="text-group me">
													<div class="text me">
														<p>Hope you're all ready to tackle this great project. Let's smash some Brand Concept & Design!</p>
													</div>
												</div>
												<span><i class="material-icons">check</i>10:21 PM</span>
											</div>
										</div>
										<div class="message">
											<img class="avatar-md" src="crm/img/avatars/avatar-female-5.jpg" data-toggle="tooltip" data-placement="top" title="Keith" alt="avatar">
											<div class="text-main">
												<div class="text-group">
													<div class="text typing">
														<div class="wave">
															<span class="dot"></span>
															<span class="dot"></span>
															<span class="dot"></span>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="container">
								<div class="col-md-7">
									<div class="bottom">
										<form class="position-relative w-100">
											<textarea class="form-control" placeholder="Start typing for reply..." rows="1"></textarea>
											<button class="btn emoticons"><i class="material-icons">insert_emoticon</i></button>
											<button type="submit" class="btn send"><i class="material-icons">send</i></button>
										</form>
										<label>
											<input type="file">
											<span class="btn attach d-sm-block d-none"><i class="material-icons">attach_file</i></span>
										</label>
									</div>
								</div>
							</div>
						</div>
						<!-- End of Chat -->

					</div>
				</div>
	</main>
	<?= $this->include('Views/template/footer') ?>
</body>

</html>