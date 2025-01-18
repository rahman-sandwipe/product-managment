@extends('app')
@section('title')
    DATA INSERT
@endsection
@section('content')
<main class="card mb-5">
    <div class="card-header">
        <div class="row">
            <div class="col-lg-6">
                <h2>Insert New Product</h2>
            </div>
            <div class="col-lg-6 text-right">
                <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
            </div>
        </div>
    </div>
    
    <form action="{{ route('products.store') }}" method="POST" class="p-3" enctype="multipart/form-data">
        @csrf
        <div class="mb-3 mt-3">
            <label for="name">Title:</label>
            <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
        </div>
        
        <div class="mb-3 mt-3">
            <label for="price">Price</label>
            <input type="number" class="form-control" id="price" placeholder="Enter price" name="price">
        </div>
        
        <div class="mb-3 mt-3">
            <label for="stock">Stock</label>
            <input type="number" class="form-control" id="stock" placeholder="Enter stock" name="stock">
        </div>
        
        <div class="mb-3 mt-3">
            <label for="inputFile">Images</label>
            <input type="file" class="form-control" id="inputFile" name="image">
        </div>
        <div class="mb-1 mt-1 img-thumbnail" style="width: 110px; height: 110px; overflow:hidden">
            <div class="preview-images-zone"></div>
        </div>
        
        <div class="mb-3">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" placeholder="Enter description" rows="3" name="description"></textarea>
        </div>
        
        <button type="submit" class="btn btn-primary btn-block">INSERT</button>
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