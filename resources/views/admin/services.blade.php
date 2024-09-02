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
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
	<link rel="icon" type="image" href="{{asset('assets/img/img.jpeg.png') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />


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
@extends('layouts.app')
@section('content')
			
			<div class="main-panel">
				<div class="content">
					<div class="container-fluid">
						
						<div class="row">
							
							<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										<div class="row">
                                            <div class="card-title" style="padding:30px;">{{ $discoverService->title ?? 'Discover Our Services' }}</div>
                                            <span class="button" style="position: relative; left: 655px;;">
                                                <div class="media-body" style="font-family: Georgia, 'Times New Roman', Times, serif; height: 10px;">
                                                    
												<a href="#" class="btn-green" style="font-family: Georgia, 'Times New Roman', Times, serif;" onclick="showEditDiscoverPopup()"><i class="fa-solid fa-pen"></i>Edit</a>

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
            <button type="button" class="btn btn-danger" onclick="closeEditDiscoverPopup()">Cancel</button>
            <button type="submit" class="btn btn-success">Save</button>
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
        <div class="card-title" style="padding:30px;">Discover Our Services</div>
        <span class="button" style="position: relative; left: 625px;">
            <div class="media-body" style="height: 5px; top:250px;">
				<!--html here-->
                <a href="/admin/serviceform" class="btn-green" id="addServiceBtn" style="font-family: Georgia, 'Times New Roman', Times, serif;"><i class="fa-solid fa-plus"></i></a>
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
																
																	<a href="#" class="btn-green edit-btn" data-id="{{ $service->id }}" style="font-family: Georgia, 'Times New Roman', Times, serif;"><i class="fa-solid fa-pen"></i></a>
																</div></td>
																<td><div class="media-body" style=" height: 10px;">

																	<a href="#" class="btn-green delete-btn" data-id="{{ $service->id }}" style="font-family: Georgia, 'Times New Roman', Times, serif;"><i class="fa-solid fa-trash"></i></a>
																</div></td>
															</tr>
														@endforeach
                                                        
                                                    </tbody>
                                                </table>
												<!-- Edit Modal -->
<div id="editModal" class="modal" style="display: none;">
    <div class="modal-content">
        <span class="close" onclick="closeEditModal()">&times;</span>
        <h2 style="font-family: Georgia, 'Times New Roman', Times, serif;">Edit Service</h2>
        <form id="editForm" method="POST" enctype="multipart/form-data" action="{{ route('admin.services.update', ['id' => $service->id]) }}">
    	@csrf
    	@method('PUT')
            <div class="form-group">
                <label for="service_name" style="font-family: Georgia, 'Times New Roman', Times, serif;">Service Name:</label>
                <input type="text" id="edit_service_name" style="font-family: Georgia, 'Times New Roman', Times, serif;" name="service_name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="description" style="font-family: Georgia, 'Times New Roman', Times, serif;">Description:</label>
                <textarea id="edit_description" style="font-family: Georgia, 'Times New Roman', Times, serif;" name="description" class="form-control" required></textarea>
            </div>
            <div class="form-group">
                <label for="image" style="font-family: Georgia, 'Times New Roman', Times, serif;">Image (Optional):</label>
                <input type="file" id="edit_image" style="font-family: Georgia, 'Times New Roman', Times, serif;" name="image" class="form-control">
            </div>
            <div class="form-group text-right" style="color: green;">
                <button type="submit" class="btn btn-success" style="font-family: Georgia, 'Times New Roman', Times, serif;">Save</button>
            </div>
        </form>
    </div>
</div>

<!-- Delete Confirmation Modal -->
<div id="deleteModal" class="modal" style="display: none;">
    <div class="modal-content">
        <span class="close" onclick="closeDeleteModal()">&times;</span>
        <h3 style="font-family: Georgia, 'Times New Roman', Times, serif;">Are you sure you want to delete this service?</h3>
        <form id="deleteForm" method="POST">
            @csrf
            @method('DELETE')
			<div style="padding: 15px;">
				<button type="submit" class="btn btn-danger" style="font-family: Georgia, 'Times New Roman', Times, serif;">Yes</button>
				<button type="button" class="btn btn-secondary" style="font-family: Georgia, 'Times New Roman', Times, serif;" onclick="closeDeleteModal()">No</button>
			</div>
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