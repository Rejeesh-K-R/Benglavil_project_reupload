<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>About</title>
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
	<link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
	<link rel="stylesheet" href="{{asset('assets/css/ready.css') }}">
	<link rel="stylesheet" href="{{asset('assets/css/demo.css') }}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css') }}">
	<link rel="icon" type="image" href="{{asset('assets/img/img.jpeg.png') }}">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	




	<style>
		.container {
            max-width: 800px;
            margin: auto;
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .card-title {
            font-size: 24px;
            margin-bottom: 20px;
        }
        .btn-green {
            display: inline-block;
            padding: 10px 20px;
            background-color: green;
            color: white;
            border-radius: 5px;
            text-decoration: none;
            cursor: pointer;
        }
        /* Modal styling */
        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.5);
            padding-top: 60px;
        }
        .modal-content {
            background-color: #fff;
            margin: 5% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
            max-width: 600px;
            border-radius: 10px;
        }
        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
            cursor: pointer;
        }
        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }
	</style>
	




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
										<div class="row">
                                            <div class="card-title" style="font-family: popins; padding: 26px;">About</div>
                                            <span class="button" style="position: absolute;left: 890px; padding:20px;">
                                                <div class="media-body" style="font-family: popins; height: 10px;">
												<a href="#" class="btn-green" style="font-family: popins;" onclick="openModal()"><i class="fa-solid fa-pen"></i>Edit</a>
                                                    
                                                </div>
                                                
                                            </span>
											<div id="editModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal()">&times;</span>
            <h2 class="align-center" style="font-family: popins;">Edit Information</h2>
            <form id="editForm" action="{{ route('admin.about.update') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="discover" style="font-family: popins;">Discover Our Story (Optional):</label>
                    <input type="text" id="discover" name="discover" class="form-control" style="font-family: popins;" value="{{ $about->discover ?? '' }}">
                </div>
                <div class="form-group">
                    <label for="title" style="font-family: popins;">Title:</label>
                    <input type="text" id="title" name="title" class="form-control" style="font-family: popins;" required value="{{ $about->title ?? '' }}">
                </div>
                <div class="form-group">
                    <label for="description" style="font-family: popins;">Description:</label>
                    <textarea id="description" name="description" class="form-control" style="font-family: popins;" required>{{ $about->description ?? '' }}</textarea>
                </div>
                <div class="form-group">
        <label for="image" style="font-family: popins;">Upload Image:</label>
        <input type="file" id="image" name="image" style="font-family: popins;" class="form-control">
    </div>
    <div class="form-group text-right" style="color:green;">
        <button type="submit" class="btn btn-success" style="font-family: popins;">Save</button>
    </div>
</form>
        </div>
    </div>
                                        </div>
									</div>
									<div class="card-body">
										<table class="table table-hover">
											<thead>
												<tr>
													<th scope="col"><h1 style="font-family: popins;"><small> @if($about->discover)
        {{ $about->discover }}
    @endif {{ $about->title }}</small></h1>
    <tr style="font-family: popins; padding:20px;">
													<th scope="col">Description</th>
													<th scope="col">Image</th>
												</tr>
</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td style="font-family: popins;">{{ $about->description }}</td>
                                                    <td>@if($about && $about->image)
    <img src="{{ asset('storage/' . $about->image) }}" alt="About Image" class="img-fluid">
@endif
</td>
												</tr>
												
											</tbody>
										</table>
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
<script src="assets/js/core/jquery.3.2.1.min.js"></script>
<script src="assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
<script src="assets/js/core/popper.min.js"></script>
<script src="assets/js/core/bootstrap.min.js"></script>
<script src="assets/js/plugin/chartist/chartist.min.js"></script>
<script src="assets/js/plugin/chartist/plugin/chartist-plugin-tooltip.min.js"></script>
<script src="assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>
<script src="assets/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js"></script>
<script src="assets/js/plugin/jquery-mapael/jquery.mapael.min.js"></script>
<script src="assets/js/plugin/jquery-mapael/maps/world_countries.min.js"></script>
<script src="assets/js/plugin/chart-circle/circles.min.js"></script>
<script src="assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
<script src="assets/js/ready.min.js"></script>
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








	function openModal() {
    document.getElementById('editModal').style.display = 'block';
}

function closeModal() {
    document.getElementById('editModal').style.display = 'none';
}

document.querySelector('.btn-green').addEventListener('click', function(event) {
    event.preventDefault();
    openModal();
});

</script>
</html>