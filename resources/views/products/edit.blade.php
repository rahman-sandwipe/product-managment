@extends('app')
@section('title')
    Modify This Product
@endsection
@section('content')
<main class="card mb-5">
    <div class="card-header">
        <div class="row">
            <div class="col-lg-6">
                <h2>Modify This Product</h2>
            </div>
            <div class="col-lg-6 text-right">
                <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
            </div>
        </div>
    </div>
    
    <form action="{{ route('products.update',$product->id) }}" method="POST" class="p-3" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3 mt-3">
            <label for="name">Title:</label>
            <input type="text" class="form-control" id="name" value="{{ $product->name }}" placeholder="Enter name" name="name">
        </div>
        
        <div class="mb-3 mt-3">
            <label for="price">Price</label>
            <input type="number" class="form-control" id="price" value="{{ $product->price }}" placeholder="Enter price" name="price">
        </div>
        
        <div class="mb-3 mt-3">
            <label for="stock">Stock</label>
            <input type="number" class="form-control" id="stock" value="{{ $product->stock }}" placeholder="Enter stock" name="stock">
        </div>
        
        <div class="mb-3 mt-3">
            <label for="inputFile">Images</label>
            <input type="file" class="form-control" id="inputFile" name="image">
        </div>
        <div class="row">
            <div class="col-6">
                <div class="preview-image">
                    <div class="preview-images-zone"></div>
                </div>
            </div>
            <div class="col-6">
                <img src="{{ asset($product->image) }}" alt="product-{{ $product->id }}" width="100" class="border">
            </div>
        </div>
        
        <div class="mb-3">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" placeholder="Enter description" rows="3" name="description">{!! $product->description !!}</textarea>
        </div>
        
        <button type="submit" class="btn btn-primary btn-block">UPDATE</button>
    </form>
</main>
@endsection
@section('script')
<script>
    $(document).ready(function() {
        // Display image preview
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    var html = '<div class="preview-image"><img src="' + e.target.result + '" width="95"></div>';
                    $('.preview-images-zone').append(html);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
        // Trigger image preview when file input changes
        $("input[name='image']").change(function() {
            readURL(this);
        });
    });
</script>
@endsection