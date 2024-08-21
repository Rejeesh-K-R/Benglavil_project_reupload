<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Services</title>
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
	<link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
	<link rel="stylesheet" href="{{asset('assets/css/ready.css') }}">
	<link rel="stylesheet" href="{{asset('assets/css/demo.css') }}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css') }}">

	<style>
        .row {
            font-family: Georgia, 'Times New Roman', Times, serif;
        }

        .card-title {
            font-size: 24px;
            margin-bottom: 20px;
        }

        .btn-green {
            background-color: green;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
        }

        /* Popup Form Styles */
        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.4);
        }

        .modal-content {
            background-color: #fefefe;
            margin: 15% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 40%;
            font-family: Arial, sans-serif;
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
        }

        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
        }

        .form-group button {
            background-color: green;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>



</head>
<body style="font-family: Georgia, 'Times New Roman', Times, serif;">
	<div class="wrapper">
		<div class="main-header">
			<div class="logo-header">
				<!--html here-->
				<a href="admin" class="logo">
					<img style="width: 70px;" src="{{asset('assets\img\img.jpeg.png') }}" alt="">
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
												<img src="{{asset('assets/img/profile2.jpg') }}" alt="Img Profile">
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
							<a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false"> <img src="{{asset('assets/img/profile.jpg') }}" alt="user-img" width="36" class="img-circle"><span >Hizrian</span></span> </a>
							<ul class="dropdown-menu dropdown-user">
								<li>
									<div class="user-box">
										<div class="u-img"><img src="{{asset('assets/img/profile.jpg') }}" alt="user"></div>
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
							<img src="{{asset('assets/img/profile.jpg') }}">
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
												<div class="icon-big text-center">
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
										<div class="row">
                                            <div class="card-title">{{ $discoverService->title ?? 'Discover Our Services' }}</div>
                                            <span class="button" style="position: relative; left: 725px;;">
                                                <div class="media-body" style="font-family: Georgia, 'Times New Roman', Times, serif; height: 10px;">
                                                    
												<a href="#" class="btn-green" style="font-family: Georgia, 'Times New Roman', Times, serif;" onclick="showEditDiscoverPopup()">Edit</a>

                                                </div>
                                                
                                            </span>
                                        </div>
										<div id="editDiscoverPopup" style="display: none; position: fixed; top: 30%; left: 50%; transform: translate(-50%, -20%); background: white; border-radius: 10px; padding: 20px; box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1); z-index: 1000; width:445px;">
    <form id="editDiscoverForm" action="{{ route('admin.services.updateDiscoverService') }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="discover_title">Title:</label>
            <input type="text" id="discover_title" name="title" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="discover_description">Description:</label>
            <textarea id="discover_description" name="description" class="form-control" required></textarea>
        </div>
        <div class="form-group">
            <button type="button" class="btn btn-secondary" onclick="closeEditDiscoverPopup()">Cancel</button>
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </form>
</div>

<div id="overlay" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.5); z-index: 500;"></div>

									</div>
									<div class="card-body">
										<table class="table table-hover" style="font-family: Georgia, 'Times New Roman', Times, serif;">
											<thead style="font-family: Georgia, 'Times New Roman', Times, serif;">
												<tr>
													<th scope="col"><h1 style="font-family: Georgia, 'Times New Roman', Times, serif;"><small>{{ $discoverService ? $discoverService->title : 'Default Title Here' }}
                                                        </small></h1></th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td style="font-family: Georgia, 'Times New Roman', Times, serif;">{{ $discoverService ? $discoverService->description : 'Default description here if not set.' }}</td>
												</tr>
												
											</tbody>
										</table>
									</div>
                                    <div class="col-md-12">
                                        <div class="card">
                                            <div class="card-header">
											<div class="row">
        <div class="card-title">Discover Our Services</div>
        <span class="button" style="position: relative; left: 725px;">
            <div class="media-body" style="height: 10px;">
				<!--html here-->
                <a href="/admin/serviceform" class="btn-green" id="addServiceBtn">Add</a>
            </div>
        </span>
    </div>

    <!-- The Modal -->
	 
    <div id="myModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h2>Add New Service</h2>
            <form id="addServiceForm" action="{{ route('admin.services.store') }}" method="POST" enctype="multipart/form-data">
   		 	@csrf
    <div class="form-group">
        <label for="service_name">Service Name:</label>
        <input type="text" id="service_name" name="service_name" required>
    </div>
    <div class="form-group">
        <label for="description">Service Description:</label>
        <textarea id="description" name="description" required></textarea>
    </div>
    <div class="form-group">
        <label for="image">Service Image:</label>
        <input type="file" id="image" name="image">
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary">Save</button>
    </div>
</form>

        </div>
    </div>
                                            </div>
                                            <div class="card-body" style="font-family: Georgia, 'Times New Roman', Times, serif;">
                                                <table class="table table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">id</th>
                                                            <th scope="col">Service name</th>
                                                            <th scope="col">Description</th>
                                                            <th scope="col">Image</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
													@foreach($services as $service)
															<tr>
																<td>{{$loop->iteration}}</td>
																<td style="font-family: Georgia, 'Times New Roman', Times, serif;">{{ $service->service_name }}</td>
																<td style="font-family: Georgia, 'Times New Roman', Times, serif;">{{ $service->description }}</td>
																@if($service->image)
                        											<td><img style="width: 100px;" src="{{ Storage::url($service->image) }}" alt="{{ $service->service_name }}"></td>
                    											@endif
																<!--<td><img style="width: 100px;" src="{{asset('assets\img\img-exp-8.png') }}" alt=""></td>-->
																<td><div class="media-body" style="font-family: Georgia, 'Times New Roman', Times, serif; height: 10px;">
																
																	<a href="#" class="btn-green edit-btn" data-id="{{ $service->id }}" style="font-family: Georgia, 'Times New Roman', Times, serif;">Edit</a>
																</div></td>
																<td><div class="media-body" style=" height: 10px;">

																	<a href="#" class="btn-green delete-btn" data-id="{{ $service->id }}" style="font-family: Georgia, 'Times New Roman', Times, serif;">Delete</a>
																</div></td>
															</tr>
														@endforeach
                                                        
                                                    </tbody>
                                                </table>
												<!-- Edit Modal -->
<div id="editModal" class="modal" style="display: none;">
    <div class="modal-content">
        <span class="close" onclick="closeEditModal()">&times;</span>
        <h2>Edit Service</h2>
        <form id="editForm" method="POST" enctype="multipart/form-data" action="{{ route('admin.services.update', ['id' => $service->id]) }}">
    	@csrf
    	@method('PUT')
            <div class="form-group">
                <label for="service_name">Service Name:</label>
                <input type="text" id="edit_service_name" name="service_name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="description">Description:</label>
                <textarea id="edit_description" name="description" class="form-control" required></textarea>
            </div>
            <div class="form-group">
                <label for="image">Image (Optional):</label>
                <input type="file" id="edit_image" name="image" class="form-control">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>
</div>

<!-- Delete Confirmation Modal -->
<div id="deleteModal" class="modal" style="display: none;">
    <div class="modal-content">
        <span class="close" onclick="closeDeleteModal()">&times;</span>
        <h2>Are you sure you want to delete this service?</h2>
        <form id="deleteForm" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Yes</button>
            <button type="button" class="btn btn-secondary" onclick="closeDeleteModal()">No</button>
        </form>
    </div>
</div>
                                            </div>
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
<script src="{{asset('assets/js/core/jquery.3.2.1.min.js') }}"></script>
<script src="{{asset('assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js') }}"></script>
<script src="{{asset('assets/js/core/popper.min.js') }}"></script>
<script src="{{asset('assets/js/core/bootstrap.min.js') }}"></script>
<script src="{{asset('assets/js/plugin/chartist/chartist.min.js') }}"></script>
<script src="{{asset('assets/js/plugin/chartist/plugin/chartist-plugin-tooltip.min.js') }}"></script>
<script src="{{asset('assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js') }}"></script>
<script src="{{asset('assets/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js') }}"></script>
<script src="{{asset('assets/js/plugin/jquery-mapael/jquery.mapael.min.js') }}"></script>
<script src="{{asset('assets/js/plugin/jquery-mapael/maps/world_countries.min.js') }}"></script>
<script src="{{asset('assets/js/plugin/chart-circle/circles.min.js') }}"></script>
<script src="{{asset('assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js') }}"></script>
<script src="{{asset('assets/js/ready.min.js') }}"></script>
<script>

	//adding a new service for the services page











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


	 // Get the modal
	 var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("addServiceBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal
btn.onclick = function() {
	modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
	modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
	if (event.target == modal) {
		modal.style.display = "none";
	}
}

// Handle form submission
document.getElementById("addServiceForm").onsubmit = function(event) {
	event.preventDefault();
	
	var service_name = document.getElementById("service_name").value;
	var description = document.getElementById("description").value;
	var image = document.getElementById("image").value;

	// Here, you would typically use AJAX to send the form data to your PHP backend.
	// For demonstration, we'll just log the inputs to the console.
	console.log({
		service_name: service_name,
		description: description,
		image: image
	});

	// Clear the form
	document.getElementById("addServiceForm").reset();

	// Close the modal
	modal.style.display = "none";
}




function showEditPopup() {
    document.getElementById('editPopup').style.display = 'block';
    document.getElementById('overlay').style.display = 'block';
}

function closeEditPopup() {
    document.getElementById('editPopup').style.display = 'none';
    document.getElementById('overlay').style.display = 'none';
}








document.querySelectorAll('.edit-btn').forEach(button => {
    button.addEventListener('click', function(event) {
        event.preventDefault();
        
        // Get the data-id of the service
        const serviceId = this.getAttribute('data-id');
        
        // Fetch the service data using AJAX or populate the form using existing data
        // Assuming the service data is already available in the DOM, you can directly populate it
        // Alternatively, you can make an AJAX request to fetch the data
        
        // Assuming you have the service data in variables
        const serviceName = this.closest('tr').querySelector('td:nth-child(2)').innerText;
        const description = this.closest('tr').querySelector('td:nth-child(3)').innerText;
        
        // Populate the form
        document.getElementById('edit_service_name').value = serviceName;
        document.getElementById('edit_description').value = description;
        
        // Set the form action to the correct route
        document.getElementById('editForm').setAttribute('action', `/admin/services/update/${serviceId}`);
        
        // Open the modal
        document.getElementById('editModal').style.display = 'block';
    });
});

function closeEditModal() {
    document.getElementById('editModal').style.display = 'none';
}

function openDeleteModal(id) {
    document.getElementById('deleteForm').action = `/admin/services/delete/${id}`;
    document.getElementById('deleteModal').style.display = 'block';
}

function closeDeleteModal() {
    document.getElementById('deleteModal').style.display = 'none';
}

document.querySelectorAll('.edit-btn').forEach(button => {
    button.addEventListener('click', function() {
        openEditModal(this.dataset.id);
    });
});

document.querySelectorAll('.delete-btn').forEach(button => {
    button.addEventListener('click', function() {
        openDeleteModal(this.dataset.id);
    });
});








//Discover services edit javascript

function showEditDiscoverPopup() {
    // Use AJAX to get the service data
    fetch(`/admin/services/edit-discover`)
        .then(response => response.json())
        .then(data => {
            document.getElementById('discover_title').value = data.title;
            document.getElementById('discover_description').value = data.description;
            document.getElementById('editDiscoverPopup').style.display = 'block';
        });
}

function closeEditDiscoverPopup() {
    document.getElementById('editDiscoverPopup').style.display = 'none';
}

</script>



<!--<script>
        // Get the modal
        var modal = document.getElementById("myModal");

        // Get the button that opens the modal
        var btn = document.getElementById("addServiceBtn");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks the button, open the modal
        btn.onclick = function() {
            modal.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }

        // Handle form submission
        document.getElementById("addServiceForm").onsubmit = function(event) {
            event.preventDefault();
            
            var service_name = document.getElementById("service_name").value;
            var description = document.getElementById("description").value;
            var image = document.getElementById("image").value;

            // Here, you would typically use AJAX to send the form data to your PHP backend.
            // For demonstration, we'll just log the inputs to the console.
            console.log({
                service_name: service_name,
                description: description,
                image: image
            });

            // Clear the form
            document.getElementById("addServiceForm").reset();

            // Close the modal
            modal.style.display = "none";
        }
    </script>-->
</html>