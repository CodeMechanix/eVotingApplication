@extends('layouts.backend')

@section('title', 'Add Product Category')

@section('content_header', 'Add Product Category')

@section('header_button')

@endsection


@section('content')

<div class="row">
	<div class="col-xs-12">
		<div class="widget-box">
			<div class="widget-header">
				@include('product_category.partial.listButton')
			</div>

			<div class="widget-body">
				<div class="widget-main">
					<form action="{{url('product_category')}}" method="POST">
						@csrf

						<div class="row">
							<div class="col-xs-5">
								<div class="form-group">
									<label for="name">Name <sup class="text-danger">*</sup></label>
									<input type="text" name="name" value="{{ old('name') }}" placeholder="Enter Product Category Name" class="form-control" id="name">
									@error('name')
							        	<div class="text-danger">{{ $message }}</div>
							        @enderror
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-12">
								<button type="submit" class="btn btn-sm btn-success"> Submit
									<i class="ace-icon fa fa-arrow-right icon-on-right bigger-110"></i>
								</button>
							</div>
						</div>

					</form>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection
