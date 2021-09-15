@extends('layouts.dashboard.master')
@section('content')


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Principals</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Principals</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Principals</h3>

        <div class="card-tools">
            <a class="headerbuttonforAdd addBlogCategory" href="{{ url('admin/principal/add') }}">
                <i class="fa fa-plus" aria-hidden="true"></i>Add
            </a>
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                <i class="fas fa-times"></i></button>
        </div>
      </div>
      <div class="card-body p-0">
        @if (Session::get('success'))                        
            <div class="alert alert-success"> {{Session::get('success')}} </div>
        @endif
        <table  id="example4" class="table table-striped projects">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Category Name</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($principals as $key => $principal)
                <tr>
                    <td>{{$key + 1}}</td>
                    <td>{{$principal->name}}</td>
                    @if($principal->status == 1)
                    <td>Active</td>
                    @else
                    <td>Inactive</td>
                    @endif
                    <td><a href="{{route('edit.principal',['id' => $principal->id])}}">Edit</a> | <a href="{{ route('delete.principal', ['id' => $principal->id]) }}" class="text-danger delete-confirm">Delete</a></td>
                </tr>
                @endforeach

            </tbody>
        </table>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->

  </section>
   <!-- /.content -->
 </div>
 <!-- /.content-wrapper -->
 @section('script')
@stop
@endsection