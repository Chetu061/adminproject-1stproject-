@extends('layouts.master')
@section('content')


    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Category Edit Form</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form id="quickForm" action="{{route('category.update',$data->id)}}" method="post">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Enter Title</label>
                    <input type="text" name="title" class="form-control" id="exampleInputEmail1" 
                    value="{{$data->title}}"
                    placeholder="Enter Title">
                  </div>
                 
                 
                  <div class="mb-3 col-md-6">
                    <label class="form-label" for="status">Status Type<span class="text-danger">
                            *</span></label>
                    <select class="form-control" name="status"value="{{$data->status}}">
                        <option value="">Select status Type</option>
                        <option value="0">Active</option>
                        <option value="1">Deactive</option>
                    </select>
                  
                </div>  
                  </div>
                  
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Update</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
            </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">

          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>


@endsection