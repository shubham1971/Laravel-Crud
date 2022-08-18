@extends('layouts.admin')

@section('content')
<div class="card">

	<div class="card-header">
		<h3>Product Page</h3>
	</div>
	<div class="card-body">
		<table class="table table-bordered table-striped">
			<thead>
				<tr>
					<th>Id</th>
					<th>Name</th>
					<th>price</th>
					<th>upc</th>
					<th>Image</th>
					<th>Action</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				@foreach($product as $item)
				<tr>
					<td>{{$item->id}}</td>
					<td>{{$item->name}}</td>
					<td>{{$item->price}}</td>
					<td>{{$item->upc}}</td>
					<td><img src="{{asset('project/public/assets/uploads/product/'.$item->image)}}" class="w-25" alt="image here"></td>
					<td>
						<a href="{{url('edit-prod/'.$item->id)}}" class="btn btn-success">Edit</a>
					</td>
					<td>
						<a href="{{url('delete-product/'.$item->id)}}" class="btn btn-danger">Delete</a>
					</td>
				</tr>

				@endforeach
			</tbody>
		</table>
	</div>
</div>

@endsection