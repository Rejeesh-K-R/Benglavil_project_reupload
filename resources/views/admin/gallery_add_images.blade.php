<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Gallery</title>
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
	<link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
	<link rel="stylesheet" href="{{asset('assets/css/ready.css') }}">
	<link rel="stylesheet" href="{{asset('assets/css/demo.css') }}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css') }}">
	<link rel="icon" type="image" href="{{asset('assets/img/img.jpeg.png') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

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



        .modal {
    z-index: 1050;
}

.modal-backdrop {
    z-index: 1040;
}

    </style>



</head>
<body style="font-family: Georgia, 'Times New Roman', Times, serif;">
	@extends('layouts.app')
	@section('content')
	<div class="main-panel">
				<div class="content" style="padding: 20px;">
					<div class="container-fluid">
						<div class="row">
							
							<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										
									</div>
									
                                    <div class="col-md-12">
                                        <div class="card">
                                            <div class="card-header">
											<div class="row">
        
        
    </div>
<!--Star's Here-->

<div class="container" style="font-family: Georgia, 'Times New Roman', Times, serif; padding:18px; height: 385px;">
    <h2 style="font-family: Georgia, 'Times New Roman', Times, serif;">Add Images to {{ $gallery->title }}</h2>
    <form action="{{ route('admin.gallery.storeImages', $gallery->id) }}" method="POST" style="padding: 20px" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="images">Select Images:</label>
            <input type="file" name="images[]" class="form-control" style="width: 270px; height: 45px;" multiple>
        </div>
        <div style="padding: 15px;">
                <button type="submit" class="btn btn-success">Upload Images</button>
                <a href="{{ route('admin.gallery.showAdmin', $gallery->id) }}" class="btn btn-secondary" style="font-family: Georgia, 'Times New Roman', Times, serif;">Back</a>
        </div>
    </form>
</div>
<!--End's Here-->
            
            

        
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




<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</html>