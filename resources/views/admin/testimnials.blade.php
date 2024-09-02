<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Testimonilas</title>
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
	<link rel="stylesheet" href="{{asset('assets/css/ready.css') }}">
	<link rel="stylesheet" href="{{asset('assets/css/demo.css') }}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css') }}">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="icon" type="image" href="{{asset('assets/img/img.jpeg.png') }}">
   

</head>
<body>
@extends('layouts.app')
@section('content')
			<div class="main-panel">
				<div class="content" style="padding: 15px;">
					<div class="container-fluid">
						
						<div class="row">
							
							<div class="col-md-12">
								<div class="card">
									
									<div class="card-body">
										<table class="table table-hover">
											
                                            <h3 style="font-family: Georgia, 'Times New Roman', Times, serif; padding:13px;">Testimonials</h3>
											<div style="padding:5px;">
<button style="position: relative; top:-55px;" class="btn btn-primary float-right" onclick="showAddPopup()">+</button>
</div>

<!-- Add Popup Form -->
<div id="addPopup" class="modal" style="padding: 30px; margin: auto; width: 50%; border: 3px; padding: 10px;">
    <div class="modal-content" style="width: 500px; padding: 35px;">
        <span class="close" onclick="closeAddPopup()">&times;</span>
        <h2 style="font-family: Georgia, 'Times New Roman', Times, serif;">Add Testimonial</h2>
        <form action="{{ route('admin.testimonials.store') }}" method="POST" style="width: 300px;" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="name" style="font-family: Georgia, 'Times New Roman', Times, serif;">Name:</label>
                <input type="text" id="name" style="font-family: Georgia, 'Times New Roman', Times, serif;" name="name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="testimonial" style="font-family: Georgia, 'Times New Roman', Times, serif;">Testimonial:</label>
                <textarea id="testimonial" name="testimonial" class="form-control" style="font-family: Georgia, 'Times New Roman', Times, serif;" required></textarea>
            </div>
            <div class="form-group">
                <label for="job" style="font-family: Georgia, 'Times New Roman', Times, serif;">Job:</label>
                <input type="text" id="job" name="job" class="form-control" style="font-family: Georgia, 'Times New Roman', Times, serif;" required>
            </div>
            <div class="form-group">
                <label for="image" style="font-family: Georgia, 'Times New Roman', Times, serif;">Image (Optional):</label>
                <input type="file" id="image" name="image" style="font-family: Georgia, 'Times New Roman', Times, serif;" class="form-control">
            </div>
            <button type="submit" class="btn btn-success float-right" style="font-family: Georgia, 'Times New Roman', Times, serif; margin: auto; width: 50%;">Save</button>
        </form>
    </div>
</div>

<!-- Edit Popup Form -->
<div id="editPopup" class="modal" style="padding: 30px; margin: auto; width: 50%; border: 3px; padding: 10px;">
    <div class="modal-content" style="width: 500px; padding: 35px;">
        <span class="close" onclick="closeEditPopup()">&times;</span>
        <h2 style="font-family: Georgia, 'Times New Roman', Times, serif;">Edit Testimonial</h2>
        <form id="editForm" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <input type="hidden" id="editId" name="id">
            <div class="form-group">
                <label for="editName" style="font-family: Georgia, 'Times New Roman', Times, serif;">Name:</label>
                <input type="text" id="editName" name="name" class="form-control" style="font-family: Georgia, 'Times New Roman', Times, serif;" required>
            </div>
            <div class="form-group">
                <label for="editTestimonial" style="font-family: Georgia, 'Times New Roman', Times, serif;">Testimonial:</label>
                <textarea id="editTestimonial" name="testimonial" class="form-control" style="font-family: Georgia, 'Times New Roman', Times, serif;" required></textarea>
            </div>
            <div class="form-group">
                <label for="editJob" style="font-family: Georgia, 'Times New Roman', Times, serif;">Job:</label>
                <input type="text" id="editJob" name="job" class="form-control" style="font-family: Georgia, 'Times New Roman', Times, serif;" required>
            </div>
            <div class="form-group">
                <label for="editImage" style="font-family: Georgia, 'Times New Roman', Times, serif;">Image (Optional):</label>
                <input type="file" id="editImage" name="image" class="form-control" style="font-family: Georgia, 'Times New Roman', Times, serif;">
            </div>
            <button type="submit" class="btn btn-success float-right" style="font-family: Georgia, 'Times New Roman', Times, serif;">Save</button>
        </form>
    </div>
</div>

<!-- Delete Popup -->
<div id="deletePopup" class="modal" style="padding: 30px; margin: auto; width: 50%; border: 3px; padding: 10px;">
    <div class="modal-content" style="width: 500px; padding: 35px;">
        <span class="close" onclick="closeDeletePopup()">&times;</span>
        <h2 style="font-family: Georgia, 'Times New Roman', Times, serif;">Are you sure?</h2>
        <form id="deleteForm" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger float-right" style="font-family: Georgia, 'Times New Roman', Times, serif; width:80px;">Delete</button>
        </form>
    </div>
</div>

<!-- Table -->
<table class="table table-hover" style="font-family: Georgia, 'Times New Roman', Times, serif;">
    <thead style="font-family: Georgia, 'Times New Roman', Times, serif;">
        <tr>
            <th>Name</th>
            <th>Testimonial</th>
            <th>Job</th>
            <th>Image</th>
            <th>Status</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody style="font-family: Georgia, 'Times New Roman', Times, serif;">
        @foreach ($testimonials as $testimonial)
        <tr style="font-family: Georgia, 'Times New Roman', Times, serif;">
            <td style="font-family: Georgia, 'Times New Roman', Times, serif;">{{ $testimonial->name }}</td>
            <td style="font-family: Georgia, 'Times New Roman', Times, serif;">{{ $testimonial->testimonial }}</td>
            <td style="font-family: Georgia, 'Times New Roman', Times, serif;">{{ $testimonial->job }}</td>
            <td style="font-family: Georgia, 'Times New Roman', Times, serif;">
                @if ($testimonial->image)
                <img src="{{ asset('storage/' . $testimonial->image) }}" alt="{{ $testimonial->name }}" width="50">
                @else
                N/A
                @endif
            </td>
            <td style="font-family: Georgia, 'Times New Roman', Times, serif;">{{ $testimonial->status ? 'Visible' : 'Hidden' }}</td>
            <td>
                <button class="btn btn-primary" onclick="showEditPopup({{ $testimonial->id }})">
                    <i class="fa fa-pencil"></i>
                </button>
</td>
<td>
                <button class="btn btn-danger" onclick="showDeletePopup({{ $testimonial->id }})">
                    <i class="fa fa-trash"></i>
                </button>
                </td>
                <td>
                <form action="{{ route('admin.testimonials.toggleStatus', $testimonial->id) }}" method="POST" style="display:inline;">
                    @csrf
                    <button type="submit" style="font-family: Georgia, 'Times New Roman', Times, serif;" class="btn btn-warning">
                        Change visibility
                    </button>
                </form>
                </td>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

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
    function showAddPopup() {
        document.getElementById('addPopup').style.display = 'block';
    }

    function closeAddPopup() {
        document.getElementById('addPopup').style.display = 'none';
    }

    function showEditPopup(id) {
        fetch(`/admin/testimonials/${id}/edit`)
            .then(response => response.json())
            .then(data => {
                document.getElementById('editId').value = data.id;
                document.getElementById('editName').value = data.name;
                document.getElementById('editTestimonial').value = data.testimonial;
                document.getElementById('editJob').value = data.job;
                document.getElementById('editForm').action = `/admin/testimonials/${data.id}`;
                document.getElementById('editPopup').style.display = 'block';
            });
    }

    function closeEditPopup() {
        document.getElementById('editPopup').style.display = 'none';
    }

    function showDeletePopup(id) {
        document.getElementById('deleteForm').action = `/admin/testimonials/${id}`;
        document.getElementById('deletePopup').style.display = 'block';
    }

    function closeDeletePopup() {
        document.getElementById('deletePopup').style.display = 'none';
    }
</script>
</html>