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
                                <form action="{{ route('slider.update', $slider->id) }}" method="post" enctype="multipart/form-data">
                                    {{csrf_field()}}
                                    
                                    <div class="row">
                                      <div class="col-xs-6 col-md-4">
                                        <a href="#" class="thumbnail">
                                          <img src="{{url('uploads/'.$slider->image)}}" alt="slider image">
                                        </a>
                                      </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="title">Title<span class="text-danger">*</span></label>
                                                <input autofocus type="text" class="form-control border-input" name="title" placeholder="title" value="{{ $slider->title }}" required minlength="5" maxlength="255">
                                                <span class="text-danger">{{ $errors->first('title') }}</span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="subtitle">Sub Title<span class="text-danger">*</span></label>
                                                <input  type="text" class="form-control border-input" name="subtitle" placeholder="subtitle" value="{{ $slider->subtitle }}" required minlength="5" maxlength="255">
                                                <span class="text-danger">{{ $errors->first('subtitle') }}</span>
                                            </div>
                                        </div>
                          
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="image">Image<span class="text-danger"> [1200 X 400 min size and max 1MB] *</span></label>
                                                <input  type="file" class="form-control border-input" accept=".jpeg, .jpg, .png" name="image" placeholder="image">
                                                <span class="text-danger">{{ $errors->first('image') }}</span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Orders<span class="text-danger">*</span></label>
                                                <input type="text" class="form-control border-input" name="order" placeholder="0,1,5" value="{{ $slider->order }}" required min="0">
                                                <span class="text-danger">{{ $errors->first('order') }}</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="text-center">
                                        <a href="/slider" class="btn btn-default">Cancel</a>
                                        <button type="submit" class="btn btn-info btn-fill btn-wd">Update Slider</button>
                                    </div>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                      
                        </div>
                    </div>


                </div>
            </div>
        </div>

@include('backend.partials.footer')

    </div>
</div>

@endsection
