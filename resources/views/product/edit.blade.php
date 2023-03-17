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
                <h3 class="card-title">Product Edit Form</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
             
                  
                    <form  id="quickForm1" action="{{route('product.update',$data->id)}}" method="post">                        
                    @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Enter Title</label>
                    <input type="text" name="title" class="form-control" value="{{$data->title}}"
                    id="exampleInputEmail1" 
                    placeholder="Enter Title">
                  </div>
                </div>
                  <div class="card-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Enter description</label>
                      <input type="text" name="description" class="form-control" value="{{$data->description}}"
                      id="exampleInputEmail1" 
                      placeholder="Enter description">
                    </div>
                  
                </div>  
                <div class="form-group">
                  <label for="image">Image</label>
                  <input type="file" aria-describedby="image"  class="form-control"
                  id="image" name="image" value="{{ $data->image }}">
                </div>
                

                <div class="form-group">
                  <label for="exampleFormControlSelect1">Select Category</label>
                  <select class="form-control" id="exampleFormControlSelect1" name="category_id">
                      @foreach($cust as $d)
                    <option value="{{$d->id}}">{{$d->title}}</option>
                      @endforeach
                  </select>
                </div><!--end dropdown-->
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