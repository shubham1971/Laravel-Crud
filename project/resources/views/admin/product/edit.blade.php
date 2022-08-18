@extends('layouts.admin')

@section('content')
<div class="card">
	<div class="card-header">
		<h4>Edit Update Product</h4>
	</div>
   <div class="card-body">

	<form action="{{url('update-product/'.$product->id)}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
		<div class="row">
			<div class="col-md-6 mb-3">
				<label for="">Name</label>
				<input type="text" value="{{$product->name}}" class="form-control" name="name">
			</div>
		


		
			<div class="col-md-6">
				<label for="">Price</label>
				<input type="text"  value="{{$product->price}}" class="form-control" name="price">
			</div>
	


		
			<div class="col-md-12 mb-3">
				<label for="">UPC</label>
				<textarea type="text"  class="form-control" name="upc">{{$product->upc}} </textarea>

			</div>
		


	     
			<div class="col-md-6 mb-3">
				<label for="">Status</label>
				<input type="checkbox"  {{ $product->status == "1" ? 'checked':''}} name="status">
			</div>
		


		
		
            @if($product->image)

            <img src="{{asset('project/public/assets/uploads/product/'.$product->image)}}">
            @endif
			<div class="col-md-6 mb-4">
				<label for="">Images</label>
				<input type="file"  class="form-control" name="image">
			</div>
	

		<div class="col-md-12">
			<button type="submit" class="btn btn-primary">Submit</button>
		</div>
	
		
      </div>
	</div>

	</form>
</div>

@endsection