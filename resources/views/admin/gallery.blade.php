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
										
									</div>
									
                                    <div class="col-md-12">
                                        <div class="card">
                                            <div class="card-header">
											<div class="row">
        
        
    </div>
<!--Star's Here-->

<div class="container">
    <h1 style="font-family: Georgia, 'Times New Roman', Times, serif;">Galleries</h1>
    <a href="{{ route('admin.gallery.create') }}" class="btn btn-primary" style="font-family: Georgia, 'Times New Roman', Times, serif; position: relative; left: 800px; top:-40px;">Add New Gallery</a>

    <table class="table table-hover mt-4">
        <thead>
            <tr style="font-family: Georgia, 'Times New Roman', Times, serif;">
                <th>Title</th>
                <th>Description</th>
                <th>Cover Image</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($galleries as $gallery)
            <tr>
                <td style="font-family: Georgia, 'Times New Roman', Times, serif;">{{ $gallery->title }}</td>
                <td style="font-family: Georgia, 'Times New Roman', Times, serif;">{{ $gallery->description }}</td>
                <td style="font-family: Georgia, 'Times New Roman', Times, serif;"><img src="{{ asset('storage/'.$gallery->cover_image) }}" alt="Cover Image" width="100"></td>
                <td><a href="{{ route('admin.gallery.showAdmin', $gallery->id) }}" class="btn btn-info" style="font-family: Georgia, 'Times New Roman', Times, serif;">View</a></td>
                <td style="font-family: Georgia, 'Times New Roman', Times, serif;"><button class="btn btn-danger" data-toggle="modal" data-target="#deleteModal{{ $gallery->id }}">Delete</button></td>
            </tr>
            <!-- Delete Confirmation Modal -->
<div class="modal fade" id="deleteModal{{ $gallery->id }}" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel{{ $gallery->id }}" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document"> <!-- Added modal-lg class for larger modal -->
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalLabel{{ $gallery->id }}" style="font-family: Georgia, 'Times New Roman', Times, serif;">Confirm Delete</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p style="font-family: Georgia, 'Times New Roman', Times, serif;">Are you sure you want to delete this gallery?</p>
            </div>
            <div class="modal-footer" style="font-family: Georgia, 'Times New Roman', Times, serif;">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <form action="{{ route('admin.gallery.destroy', $gallery->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Yes</button>
                </form>
            </div>
        </div>
    </div>
</div>

           
            @endforeach
        </tbody>
    </table>
</div>

    
<!--Ende's Here-->
            
            

        
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