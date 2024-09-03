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
	<link rel="stylesheet" href="{{asset('css/newbutton.css') }}">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	
	<link rel="icon" type="image" href="{{asset('assets/img/img.jpeg.png') }}">
   

</head>
<body>
@extends('layouts.app')
@section('content')
			<div class="main-panel">
				<div class="content">
					<div class="container-fluid">
						
						<div class="row">
							
							<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										<div class="card-title" style="font-family: popins;">Contact Details<span class="button" style="position: fixed; right: 45px;">
                                            
                                            <span></div>
									</div>
									<div class="card-body">
										<table class="table table-hover">
											<thead>
												<tr style="font-family: popins;">
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
														<td class="popins">{{$contact->name}}</td>
														<td  class="popins">{{$contact->mobile}}</td>
														<td class="popins">{{$contact->email}}</td>
														<td class="popins">{{$contact->message}}</td>
														<!--<td><div class="media-body">
																
														<a href="#" class="btn-green edit-btn" onclick="showEditPopup({{ $contact->id }})" style="font-family: popins;">Edit</a>

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
														
														<a href="#" class="btn btn-danger" style="border-radius: 8px; width: 58px;" onclick="showDeletePopup({{ $contact->id }})"><i class="fa-solid fa-trash"></i></a>
														</div></td>
													</tr>
												@endforeach
											</tbody>
										</table>




<!-- Delete Confirmation Popup -->
<div id="deletePopup" style="display: none; position: fixed; top: 30%; left: 50%; transform: translate(-50%, -20%); background: white; border-radius: 10px; padding: 20px; box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1); z-index: 1000; width:445px;">
    <h3 style="font-family: popins;">Are you sure you want to delete this record?</h3>
	<div style="padding: 20px;" ><!--class="float-right"-->
		<button id="confirmDelete" class="btn btn-danger" style="font-family: popins;">Yes</button>
		<button type="button" class="btn btn-secondary" style="font-family: popins;" onclick="closeDeletePopup()">No</button>
	</div>
</div>


									</div>
								</div>
								
							</div>
						</div>
					</div>
				</div>
				@endsection
			</div>
		</div>
	</div>
</div>

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