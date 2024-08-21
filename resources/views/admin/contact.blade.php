<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Contact</title>
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
	<link rel="stylesheet" href="{{asset('assets/css/ready.css') }}">
	<link rel="stylesheet" href="{{asset('assets/css/demo.css') }}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css') }}">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

</head>
<body>
	<div class="wrapper">
		<div class="main-header">
			<div class="logo-header">
				<!--html here-->
				<a href="#" class="logo">
					<img style="width: 70px;" src="{{ asset('assets\img\img.jpeg.png') }}" alt="">
				</a>
				<button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-controls="sidebar" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<button class="topbar-toggler more"><i class="la la-ellipsis-v"></i></button>
			</div>
			<nav class="navbar navbar-header navbar-expand-lg">
				<div class="container-fluid">
					
					<form class="navbar-left navbar-form nav-search mr-md-3" action="">
						<div class="input-group">
							<input type="text" placeholder="Search ..." class="form-control">
							<div class="input-group-append">
								<span class="input-group-text">
									<i class="la la-search search-icon"></i>
								</span>
							</div>
						</div>
					</form>
					<ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
						<li class="nav-item dropdown hidden-caret">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="la la-envelope"></i>
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="#">Action</a>
								<a class="dropdown-item" href="#">Another action</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="#">Something else here</a>
							</div>
						</li>
						<li class="nav-item dropdown hidden-caret">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="la la-bell"></i>
								<span class="notification">3</span>
							</a>
							<ul class="dropdown-menu notif-box" aria-labelledby="navbarDropdown">
								<li>
									<div class="dropdown-title">You have 4 new notification</div>
								</li>
								<li>
									<div class="notif-center">
										<a href="#">
											<div class="notif-icon notif-primary"> <i class="la la-user-plus"></i> </div>
											<div class="notif-content">
												<span class="block">
													New user registered
												</span>
												<span class="time">5 minutes ago</span> 
											</div>
										</a>
										<a href="#">
											<div class="notif-icon notif-success"> <i class="la la-comment"></i> </div>
											<div class="notif-content">
												<span class="block">
													Rahmad commented on Admin
												</span>
												<span class="time">12 minutes ago</span> 
											</div>
										</a>
										<a href="#">
											<div class="notif-img"> 
												<img src="{{ asset('assets/img/profile2.jpg') }}" alt="Img Profile">
											</div>
											<div class="notif-content">
												<span class="block">
													Reza send messages to you
												</span>
												<span class="time">12 minutes ago</span> 
											</div>
										</a>
										<a href="#">
											<div class="notif-icon notif-danger"> <i class="la la-heart"></i> </div>
											<div class="notif-content">
												<span class="block">
													Farrah liked Admin
												</span>
												<span class="time">17 minutes ago</span> 
											</div>
										</a>
									</div>
								</li>
								<li>
									<a class="see-all" href="javascript:void(0);"> <strong>See all notifications</strong> <i class="la la-angle-right"></i> </a>
								</li>
							</ul>
						</li>
						<li class="nav-item dropdown">
							<a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false"> <img src="{{ asset('assets/img/profile.jpg') }}" alt="user-img" width="36" class="img-circle"><span >Hizrian</span></span> </a>
							<ul class="dropdown-menu dropdown-user">
								<li>
									<div class="user-box">
										<div class="u-img"><img src="{{ asset('assets/img/profile.jpg') }}" alt="user"></div>
										<div class="u-text">
											<h4>Hizrian</h4>
											<!--html here-->
											<!--<p class="text-muted">hello@themekita.com</p><a href="profile.html" class="btn btn-rounded btn-danger btn-sm">View Profile</a></div>-->
											<p class="text-muted">hello@themekita.com</p><a href="#" class="btn btn-rounded btn-danger btn-sm">View Profile</a></div>
										</div>
									</li>
									<div class="dropdown-divider"></div>
									<a class="dropdown-item" href="#"><i class="ti-user"></i> My Profile</a>
									<a class="dropdown-item" href="#"></i> My Balance</a>
									<a class="dropdown-item" href="#"><i class="ti-email"></i> Inbox</a>
									<div class="dropdown-divider"></div>
									<a class="dropdown-item" href="#"><i class="ti-settings"></i> Account Setting</a>
									<div class="dropdown-divider"></div>
									<a class="dropdown-item" href="#"><i class="fa fa-power-off"></i> Logout</a>
								</ul>
								<!-- /.dropdown-user -->
							</li>
						</ul>
					</div>
				</nav>
			</div>
			<div class="sidebar">
				<div class="scrollbar-inner sidebar-wrapper">
					<div class="user">
						<div class="photo">
							<img src="{{ asset('assets/img/profile.jpg') }}">
						</div>
						<div class="info">
							<a class="" data-toggle="collapse" href="#collapseExample" aria-expanded="true">
								<span>
									Hizrian
									<span class="user-level">Administrator</span>
									<span class="caret"></span>
								</span>
							</a>
							<div class="clearfix"></div>

							<div class="collapse in" id="collapseExample" aria-expanded="true" style="">
								<ul class="nav">
									<li>
										<a href="#profile">
											<span class="link-collapse">My Profile</span>
										</a>
									</li>
									<li>
										<a href="#edit">
											<span class="link-collapse">Edit Profile</span>
										</a>
									</li>
									<li>
										<a href="#settings">
											<span class="link-collapse">Settings</span>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<ul class="nav">
						<li class="nav-item">
							<!--html here-->
							<a href="/admin">
								<i class="la la-dashboard"></i>
								<p>Dashboard</p>
								<span class="badge badge-count">5</span>
							</a>
						</li>
						<li class="nav-item">
							<!--html here-->
							<a href="about">
								<i class="la la-keyboard-o"></i>
								<p>about</p>
								<span class="badge badge-count">50</span>
							</a>
						</li>
						<li class="nav-item">
							<!--html here-->
							<a href="services">
								<i class="la la-keyboard-o"></i>
								<p>Services</p>
								<span class="badge badge-count">50</span>
							</a>
						</li>
						<li class="nav-item">
							<!--html here-->
							<a href="contact">
								<i class="la la-keyboard-o"></i>
								<p>Contact</p>
								<span class="badge badge-count">50</span>
							</a>
						</li>

						
					</ul>
				</div>
			</div>
			<div class="main-panel">
				<div class="content">
					<div class="container-fluid">
						<div class="row">
                            <div class="col-md-3">
								<div class="card card-stats card-warning">
									<div class="card-body ">
										<div class="row">
											<div class="col-5">
												<div class="icon-big text-center" >
													<i class="la la-users"></i>
												</div>
											</div>
											<div class="col-7 d-flex align-items-center">
												<div class="numbers">
													<p class="card-category">Page Views</p>
													<h4 class="card-title">1,294</h4>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="card card-stats card-success">
									<div class="card-body ">
										<div class="row">
											<div class="col-5">
												<div class="icon-big text-center">
													<i class="la la-bar-chart"></i>
												</div>
											</div>
											<div class="col-7 d-flex align-items-center">
												<div class="numbers">
													<p class="card-category">Requests</p>
													<h4 class="card-title">$ 1,345</h4>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="card card-stats card-danger">
									<div class="card-body">
										<div class="row">
											<div class="col-5">
												<div class="icon-big text-center">
													<i class="la la-newspaper-o"></i>
												</div>
											</div>
											<div class="col-7 d-flex align-items-center">
												<div class="numbers">
													<p class="card-category">Contacted</p>
													<h4 class="card-title">1303</h4>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="card card-stats card-primary">
									<div class="card-body ">
										<div class="row">
											<div class="col-5">
												<div class="icon-big text-center">
													<i class="la la-check-circle"></i>
												</div>
											</div>
											<div class="col-7 d-flex align-items-center">
												<div class="numbers">
													<p class="card-category">Projects</p>
													<h4 class="card-title">576</h4>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
                        </div>
						<div class="row">
							
							<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										<div class="card-title" style="font-family: Georgia, 'Times New Roman', Times, serif;">Contact Details<span class="button" style="position: fixed; right: 45px;">
                                            
                                            <span></div>
									</div>
									<div class="card-body">
										<table class="table table-hover">
											<thead>
												<tr>
													<th scope="col">#</th>
													<th scope="col">Name</th>
													<th scope="col">mobile</th>
													<th scope="col">email</th>
													<th scope="col">message</th>
												</tr>
											</thead>
											<tbody>
												@foreach ($contacts as $contact)
													<tr>
														<td scope="row">{{$loop->iteration}}</td>
														<td style="font-family: Georgia, 'Times New Roman', Times, serif;">{{$contact->name}}</td>
														<td style="font-family: Georgia, 'Times New Roman', Times, serif;">{{$contact->mobile}}</td>
														<td style="font-family: Georgia, 'Times New Roman', Times, serif;">{{$contact->email}}</td>
														<td style="font-family: Georgia, 'Times New Roman', Times, serif;">{{$contact->message}}</td>
														<!--<td><div class="media-body">
																
														<a href="#" class="btn-green edit-btn" onclick="showEditPopup({{ $contact->id }})" style="font-family: Georgia, 'Times New Roman', Times, serif;">Edit</a>

														</div></td>-->

														<td>
															<div class="media-body" style="padding: 10px; font-size: 18px;">
																<!-- Mail Icon -->
																<a href="mailto:{{$contact->email}}" title="Send Email">
																	<i class="fas fa-envelope"></i>
																</a>
																
																
															</div>
            											</td>
														<td>
															<div class="media-body" style="padding: 10px; font-size: 18px;">
																
																
																<!-- Call Icon -->
																<a href="tel:{{$contact->mobile}}" title="Call">
																	<i class="fas fa-phone"></i>
																</a>
															</div>
            											</td>
														<td><div class="media-body">
														
														<a href="#" class="btn-green delete-btn" onclick="showDeletePopup({{ $contact->id }})">Delete</a>
														</div></td>
													</tr>
												@endforeach
											</tbody>
										</table>


										<!-- Edit Popup -->
<div id="editPopup" style="display: none; position: fixed; top: 30%; left: 50%; transform: translate(-50%, -20%); background: white; border-radius: 10px; padding: 20px; box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1); z-index: 1000; width:445px;">
    <form id="editForm" action="#" method="POST">
	@csrf
    @method('PUT')
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="mobile">Mobile:</label>
            <input type="text" id="mobile" name="mobile" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="message">Message:</label>
            <textarea id="message" name="message" class="form-control" required></textarea>
        </div>
        <div class="form-group">
            <button type="button" class="btn btn-secondary" onclick="closeEditPopup()">Cancel</button>
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </form>
</div>

<!-- Delete Confirmation Popup -->
<div id="deletePopup" style="display: none; position: fixed; top: 30%; left: 50%; transform: translate(-50%, -20%); background: white; border-radius: 10px; padding: 20px; box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1); z-index: 1000; width:445px;">
    <p>Are you sure you want to delete this record?</p>
    <button id="confirmDelete" class="btn btn-danger">Yes</button>
    <button type="button" class="btn btn-secondary" onclick="closeDeletePopup()">No</button>
</div>


									</div>
								</div>
								
							</div>
						</div>
					</div>
				</div>
				<footer class="footer">
					<div class="container-fluid">
						<nav class="pull-left">
							<ul class="nav">
								
								<li class="nav-item">
									<a class="nav-link" href="#">
										Help
									</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#">
										Licenses
									</a>
								</li>
							</ul>
						</nav>
						<div class="copyright ml-auto">
							2024, made by <a href="#">SomeOne</a>
						</div>				
					</div>
				</footer>
			</div>
		</div>
	</div>
</div>
<!-- Modal 
<div class="modal fade" id="modalUpdate" tabindex="-1" role="dialog" aria-labelledby="modalUpdatePro" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header bg-primary">
				<h6 class="modal-title"><i class="la la-frown-o"></i> Under Development</h6>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body text-center">									
				<p>Currently the pro version of the <b>Ready Dashboard</b> Bootstrap is in progress development</p>
				<p>
				<b>We'll let you know when it's done</b></p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>
-->
</body>
<script src="{{ asset('assets/js/core/jquery.3.2.1.min.js') }}"></script>
<script src="{{ asset('assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js') }}"></script>
<script src="{{ asset('assets/js/core/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/core/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/plugin/chartist/chartist.min.js') }}"></script>
<script src="{{ asset('assets/js/plugin/chartist/plugin/chartist-plugin-tooltip.min.js') }}"></script>
<script src="{{ asset('assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js') }}"></script>
<script src="{{ asset('assets/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js') }}"></script>
<script src="{{ asset('assets/js/plugin/jquery-mapael/jquery.mapael.min.js') }}"></script>
<script src="{{ asset('assets/js/plugin/jquery-mapael/maps/world_countries.min.js') }}"></script>
<script src="{{ asset('assets/js/plugin/chart-circle/circles.min.js') }}"></script>
<script src="{{ asset('assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js') }}"></script>
<script src="{{ asset('assets/js/ready.min.js') }}"></script>
<script>
	$('#displayNotif').on('click', function(){
		var placementFrom = $('#notify_placement_from option:selected').val();
		var placementAlign = $('#notify_placement_align option:selected').val();
		var state = $('#notify_state option:selected').val();
		var style = $('#notify_style option:selected').val();
		var content = {};

		content.message = 'Turning standard Bootstrap alerts into "notify" like notifications';
		content.title = 'Bootstrap notify';
		if (style == "withicon") {
			content.icon = 'la la-bell';
		} else {
			content.icon = 'none';
		}
		content.url = 'index.html';
		content.target = '_blank';

		$.notify(content,{
			type: state,
			placement: {
				from: placementFrom,
				align: placementAlign
			},
			time: 1000,
		});
	});




//Edit and delete button popups

function showEditPopup(contactId) {
    // Use AJAX to fetch the contact data
    fetch(`/admin/contact/${contactId}/edit`, {
        headers: {
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        }
    })
    .then(response => response.json())
    .then(data => {
        // Populate the form fields with the data
        document.getElementById('name').value = data.name;
        document.getElementById('mobile').value = data.mobile;
        document.getElementById('email').value = data.email;
        document.getElementById('message').value = data.message;

        // Set the form action URL to the correct update route
        document.getElementById('editForm').action = `/admin/contact/update/${contactId}`;

        // Show the edit popup
        document.getElementById('editPopup').style.display = 'block';
    })
    .catch(error => console.error('Error:', error));
}



//Delete button

function showDeletePopup(contactId) {
    const confirmDeleteBtn = document.getElementById('confirmDelete');
    confirmDeleteBtn.onclick = null; // Clear previous listeners
    confirmDeleteBtn.onclick = function() {
        deleteContact(contactId);
    };
    document.getElementById('deletePopup').style.display = 'block';
}

function deleteContact(contactId) {
    fetch(`/admin/contact/${contactId}`, {
        method: 'DELETE',
        headers: {
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
            'Content-Type': 'application/json',
        }
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            window.location.reload(); // Refresh the page on successful delete
        } else {
            alert('Failed to delete the contact. Please try again.');
        }
    })
    .catch(error => console.error('Error:', error));
}

function closeDeletePopup() {
    document.getElementById('deletePopup').style.display = 'none';
}


</script>


<!--
<script>
	// Show the Edit Popup
	function showEditPopup(contactId) {
		// Populate form with current data (can use AJAX for dynamic data)
		document.getElementById('editPopup').style.display = 'block';
	}

	// Close the Edit Popup
	function closeEditPopup() {
		document.getElementById('editPopup').style.display = 'none';
	}

	// Show the Delete Confirmation Popup
	function showDeletePopup(contactId) {
		// Set the action on the confirm button
		document.getElementById('confirmDelete').onclick = function() {
			deleteContact(contactId);
		};
		document.getElementById('deletePopup').style.display = 'block';
	}

	// Close the Delete Popup
	function closeDeletePopup() {
		document.getElementById('deletePopup').style.display = 'none';
	}

	// Function to delete the contact
	function deleteContact(contactId) {
		// Make a request to the server to delete the contact
		fetch(`/admin/contact/${contactId}`, {
			method: 'DELETE',
			headers: {
				'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
			}
		})
		.then(response => response.json())
		.then(data => {
			if(data.success) {
				// Handle successful deletion (e.g., remove the row from the table)
				window.location.reload();
			}
		})
		.catch(error => console.error('Error:', error));
	}


</script>
-->
</html>