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

<div class="container">
    <h1 style="padding: 10px; font-family: Georgia, 'Times New Roman', Times, serif;">Galleries</h1>

    <!-- Delete Gallery Button -->
    <button class="btn btn-danger" style=" font-family: Georgia, 'Times New Roman', Times, serif; position: relative; left: 814px; top:-40px;" data-toggle="modal" data-target="#deleteGalleryModal{{ $gallery->id }}">Delete Gallery</button>

    <!-- Edit Title/Description Button -->
    <!-- <button class="btn btn-green" data-toggle="modal" data-target="#editGalleryModal{{ $gallery->id }}">Edit Title/Description</button> -->

    <!-- Table for Title and Description -->
    <table class="table table-hover mt-4">
        <thead>
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td style="font-family: Georgia, 'Times New Roman', Times, serif;">{{ $gallery->title }}</td>
                <td style="font-family: Georgia, 'Times New Roman', Times, serif;">{{ $gallery->description }}</td>
                <td style="font-family: Georgia, 'Times New Roman', Times, serif;">
                    <!-- Edit Title/Description Modal Triggered by this Button -->
                    <button class="btn btn-green" data-toggle="modal" data-target="#editGalleryModal{{ $gallery->id }}">Edit Title/Description</button>
                </td>
            </tr>
        </tbody>
    </table>

    <!-- Table for Images -->
    <table class="table table-hover mt-4">
        <thead>
            <tr>
                <th>Image</th>
                <th>Actions</th>
                <th><a href="{{ route('admin.gallery.addImages', $gallery->id) }}">
                        <button class="btn btn-primary" style="font-family: Georgia, 'Times New Roman', Times, serif;">Add New Images</button>
                    </a>
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach($gallery->images as $image)
                <tr>
                    <td>
                        <img style="width: 200px;" src="{{ asset('storage/'.$image->image_path) }}" class="img-fluid" alt="{{ $gallery->title }}">
                    </td>
                    <td>
                        <!-- Edit Image Button -->
                        <button class="btn btn-green" style="font-family: Georgia, 'Times New Roman', Times, serif;" data-toggle="modal" data-target="#editImageModal{{ $image->id }}">Edit Image</button>
                        <!-- Delete Image Button -->
                        <button class="btn btn-danger" style="font-family: Georgia, 'Times New Roman', Times, serif;" data-toggle="modal" data-target="#deleteImageModal{{ $image->id }}">Delete Image</button>
                    </td>
                </tr>

                <!-- Edit Image Modal -->
                <div class="modal fade" id="editImageModal{{ $image->id }}" tabindex="-1" role="dialog" aria-labelledby="editImageModalLabel{{ $image->id }}" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content" style="width: 300px;">
                            <div class="modal-header">
                                <h5 class="modal-title" id="editImageModalLabel{{ $image->id }}" style="font-family: Georgia, 'Times New Roman', Times, serif;">Edit Image</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form action="{{ route('admin.gallery.update_image', ['gallery_id' => $gallery->id, 'image_id' => $image->id]) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="modal-body">
        <div class="form-group">
            <label for="image" style="font-family: Georgia, 'Times New Roman', Times, serif;">Choose a new image to upload:</label>
            <input type="file" class="form-control" style="height: 50px;" name="image" style="font-family: Georgia, 'Times New Roman', Times, serif;" required>
        </div>
    </div>
    <div class="modal-footer" style="font-family: Georgia, 'Times New Roman', Times, serif;">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="submit" class="btn btn-green">Save</button>
    </div>
</form>

                        </div>
                    </div>
                </div>

                <!-- Delete Image Modal -->
                <div class="modal fade" id="deleteImageModal{{ $image->id }}" tabindex="-1" role="dialog" aria-labelledby="deleteImageModalLabel{{ $image->id }}" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="deleteImageModalLabel{{ $image->id }}" style="font-family: Georgia, 'Times New Roman', Times, serif;">Confirm Delete Image</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p style="font-family: Georgia, 'Times New Roman', Times, serif;">Are you sure you want to delete this image?</p>
                            </div>
                            <div class="modal-footer" style="font-family: Georgia, 'Times New Roman', Times, serif;">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                <form action="{{ route('admin.gallery.delete_image', $image->id) }}" method="POST" style="display:inline;">
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

    <!-- Delete Gallery Modal -->
    <div class="modal fade" id="deleteGalleryModal{{ $gallery->id }}" tabindex="-1" role="dialog" aria-labelledby="deleteGalleryModalLabel{{ $gallery->id }}" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content" style="width: 400px;">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteGalleryModalLabel{{ $gallery->id }}" style="font-family: Georgia, 'Times New Roman', Times, serif;">Confirm Delete Gallery</h5>
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

    <!-- Edit Title/Description Modal -->
    <div class="modal fade" id="editGalleryModal{{ $gallery->id }}" style="font-family: Georgia, 'Times New Roman', Times, serif;" tabindex="-1" role="dialog" aria-labelledby="editGalleryModalLabel{{ $gallery->id }}" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content" style="width:550px;">
                <div class="modal-header">
                    <h5 class="modal-title" id="editGalleryModalLabel{{ $gallery->id }}" style="font-family: Georgia, 'Times New Roman', Times, serif;">Edit Title and Description</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('admin.gallery.update', $gallery->id) }}" style="width:500px;" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="modal-body">
                        <div class="form-group" style="font-family: Georgia, 'Times New Roman', Times, serif;">
                            <label for="title">Title:</label>
                            <input type="text" class="form-control" name="title" value="{{ $gallery->title }}" required>
                        </div>
                        <div class="form-group" style="font-family: Georgia, 'Times New Roman', Times, serif;">
                            <label for="description">Description:</label>
                            <textarea class="form-control" name="description" rows="4" required>{{ $gallery->description }}</textarea>
                        </div>
                    </div>
                    <div class="modal-footer" style="font-family: Georgia, 'Times New Roman', Times, serif;">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-green">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
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