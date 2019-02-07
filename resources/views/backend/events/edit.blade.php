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

@section('title', 'St Augustines | Events')

  
@section('content')

<div class="wrapper">

@include('backend.partials.sidebar')

    <div class="main-panel">

@include('backend.partials.nav')
            <div class="content">
            <div class="container-fluid">
                <div class="row">
               
                    <div class="col-md-10 col-md-offset-1">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Edit Event</h4>
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
                                <form action="{{ route('event-update', $event->id)}}" method="post" enctype="multipart/form-data">
                                    {{csrf_field()}}
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="title">Title<span class="text-danger">*</span></label>
                                                <input autofocus type="text" class="form-control border-input" name="title"  value="{{$event->title}}" required minlength="5" maxlength="255">
                                                <span class="text-danger">{{ $errors->first('title') }}</span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Author<span class="text-danger">*</span></label>
                                                <input type="text" class="form-control border-input" name="author"  value="{{$event->author}}" required >
                                                <span class="text-danger">{{ $errors->first('author') }}</span>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="subtitle">Event Description<span class="text-danger">*</span></label>
                                                
                                                <textarea  type="text" class="form-control border-input" name="description" placeholder="{{$event->description}}" required minlength="5" maxlength="255"></textarea>
                                                <span class="text-danger">{{ $errors->first('description') }}</span>
                                            </div>
                                        </div>
                                        
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="image">Image<span class="text-danger"> *</span></label>
                                                <input  type="file" class="form-control border-input" accept=".jpeg, .jpg, .png" name="image" placeholder="image" required>
                                                <span class="text-danger">{{ $errors->first('image') }}</span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Tag<span class="text-danger">*</span></label>
                                                <input type="text" class="form-control border-input" name="tag"  value="{{$event->tag}}" required >
                                                <span class="text-danger">{{ $errors->first('tag') }}</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <a href="/dashboard" class="btn btn-default">Cancel</a>
                                        <button type="submit" class="btn btn-info btn-fill btn-wd">Add Event/News</button>
                                    </div>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                            
                           


                </div>
           

    @include('backend.partials.footer')

    </div>
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