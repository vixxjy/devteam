@extends('backend.layouts.main')

@section('style')
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script
    src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
<link rel="stylesheet"
    href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<link rel="stylesheet"
    href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
@endsection

@section('title', 'St Augustines | sliders')

  
@section('content')

<div class="wrapper">

@include('backend.partials.sidebar')

    <div class="main-panel">

@include('backend.partials.nav')
            <div class="content">
            <div class="container-fluid">
                <div class="row">
               
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Add Slider Image</h4>
                            </div>
                            <div class="content">
                                @if($errors->any())
                                    <div class="alert alert-danger">
                                    @foreach($errors->all() as $error)
                                        <p>{{ $error }}</p>
                                    @endforeach()
                                    </div>
                                @endif
                                  @if ($message = Session::get('success'))
                                    <div class="alert alert-success">
                                        <p><b>{{ $message }}</b></p>
                                    </div>
                                @endif
                                <form action="{{ route('slider.store')}}" method="post" enctype="multipart/form-data">
                                    {{csrf_field()}}
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="title">Title<span class="text-danger">*</span></label>
                                                <input autofocus type="text" class="form-control border-input" name="title" placeholder="title" value="{{ old('title') }}" required minlength="5" maxlength="255">
                                                <span class="text-danger">{{ $errors->first('title') }}</span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="subtitle">Sub Title<span class="text-danger">*</span></label>
                                                <input  type="text" class="form-control border-input" name="subtitle" placeholder="subtitle" value="{{ old('subtitle') }}" required minlength="5" maxlength="255">
                                                <span class="text-danger">{{ $errors->first('subtitle') }}</span>
                                            </div>
                                        </div>
                      
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="image">Image<span class="text-danger"> [1200 X 400 min size and max 1MB] *</span></label>
                                                <input  type="file" class="form-control border-input" accept=".jpeg, .jpg, .png" name="image" placeholder="image" required>
                                                <span class="text-danger">{{ $errors->first('image') }}</span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Orders<span class="text-danger">*</span></label>
                                                <input type="text" class="form-control border-input" name="order" placeholder="0,1,5" value="{{ old('order',0) }}" required min="0">
                                                <span class="text-danger">{{ $errors->first('order') }}</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="text-center">
                                        <a href="/dashboard" class="btn btn-default">Cancel</a>
                                        <button type="submit" class="btn btn-info btn-fill btn-wd">Add Slider</button>
                                    </div>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                            
                                 <hr>
                            <!--tables-->
                            <div class="row">
                                <div class="col-md-12">
                                   <table class="table table-bordered table-striped table-condensed" id="table" >
                                        <thead>
                                            <tr>
                                                <th class="text-center">#</th>
                                                <th class="text-center">Title</th>
                                                <th class="text-center">Subtitle</th>
                                                <th class="text-center">Image</th>
                                                <th class="text-center">Order</th>
                                                <th class="text-center">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           @foreach($sliders as $slider)
                                            <tr class="">
                                                <td>{{$slider->id}}</td>
                                                <td>{{ $slider->title}}</td>
                                                <td>{{ $slider->subtitle }}</td>
                                                <td><img class="img-responsive" style="max-height: 100px; width: 100px;" src="{{url('uploads/'.$slider->image)}}" alt=""></td>
                                                <td>{{ $slider->order }}</td>
                                                <td><a href="{{ route('slider.edit', $slider->id) }}"><button id="edit-modal" class="edit-modal btn btn-info">
                                                        <span class="glyphicon glyphicon-edit"></span> Edit
                                                    </button></a>
                                                    <a href="{{ route('slider.delete', $slider->id) }}" onclick="return confirm('Do you really want to delete This?')">
                                                    <button class="delete-modal btn btn-danger">
                                                        <span class="glyphicon glyphicon-trash"></span> Delete
                                                    </button>
                                                    </a>
                                                   
                                                </td>
                                            </tr>
                                          @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!--end table-->
                        </div>
                    </div>


                </div>
            </div>
        </div>

@include('backend.partials.footer')

    </div>
</div>

@endsection
@section('script')
<script src="//code.jquery.com/jquery-1.12.3.js"></script>
<script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
<script
    src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
<script>
  $(document).ready(function() {
    $('.table').DataTable();
} );
 </script>

@endsection