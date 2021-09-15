@extends('layouts.dashboard.master')
@section('content')


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Product Edit</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Product</h3>

              <div class="card-tools">
                <a class="headerbuttonforAdd addBlogCategory" href="{{route('product.view')}}">
                            <i class="fa fa-arrow-left" aria-hidden="true"></i> Back
                        </a>
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fas fa-minus"></i></button>
              </div>
            </div>
             <div class="card-body">
                       <form method="POST" action="{{ route('update.product', ['id' => $product->id]) }}" enctype="multipart/form-data">
                        @csrf
                       @method('PUT')
                        <div class="form-group required">
                            <label for="image1" class="control-label">Image</label>
                            <input type="file" class="form-control-file" name="image1" value="{{$product->image1}}" id="image1">
                        </div>
                        <div class="form-group required">
                            <label for="image2" class="control-label">Image</label>
                            <input type="file" class="form-control-file" name="image2" value="{{$product->image2}}" id="image2">
                        </div>
                        <div class="form-group required">
                            <label for="image3" class="control-label">Image</label>
                            <input type="file" class="form-control-file" name="image3" value="{{$product->image3}}" id="image3">
                        </div>
                        <div class="form-group required">
                            <label for="image4" class="control-label">Image</label>
                            <input type="file" class="form-control-file" name="image4" value="{{$product->image4}}" id="image4">
                        </div>
                        <div class="form-group required">
                            <label for="image5" class="control-label">Image</label>
                            <input type="file" class="form-control-file" name="image5" value="{{$product->image5}}" id="image5image">
                        </div>
                        <div class="form-group required">
                          <label for="name" class="control-label">Name</label>
                          <input type="text" class="form-control" name="name" id="name" value="{{$product->name}}"  placeholder="Course name" required>
                        </div>
                         <div class="form-group required">
                            <label for="principal" class="control-label">Select Category</label>
                            <select class="form-control" id="category" name="categoryId" required>
                                @foreach ($categories as $category)
                                    <option value="{{$category->id}}" {{ $product->id == $product->categoryId ? 'selected' : '' }}>{{$category->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group required">
                            <label for="description" class="control-label">Description</label>
                            <textarea class="form-control" name="description" id="description" rows="3" required>{{$product->description}}</textarea>
                        </div>
                        <div class="form-group required">
                            <label for="feature" class="control-label">Feature</label>
                            <input type="text" class="form-control" name="feature" value="{{$product->feature}}" id="duration"  placeholder="Feature" required>
                          </div>
                          <div class="form-group required">
                            <label for="larger_specification" class="control-label">Larger Specification</label>
                            <input type="text" class="form-control" name="larger_specification" value="{{$product->larger_specification}}" id="duration"  placeholder="Larger Specification" required>
                          </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
                </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>
    <!--   <div class="row">
        <div class="col-12">
          <a href="#" class="btn btn-secondary">Cancel</a>
          <input type="submit" value="Save Changes" class="btn btn-success float-right">
        </div>
      </div> -->
    </section>
    <!-- /.content -->
  </div>
@endsection





@section('css')
<style>
    .form-group.required .control-label:after {
    content:"*";
    color:red;
 }
</style>
@endsection
@section('script')
    <script>
        $(document).ready(function() {
            $('form').submit(function(){
                $(this).find('button[type=submit]').prop('disabled', true);
            });
        });
    </script>
@endsection
