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

@section('title', 'St Augustines | Thought of the Week')

  
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
                                <h4 class="title">Add Thought of the week</h4>
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
                                <form action="{{ route('Thoughtweek.store')}}" method="post" enctype="multipart/form-data">
                                    {{csrf_field()}}
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="title">Title<span class="text-danger">*</span></label>
                                                <input autofocus type="text" class="form-control border-input" name="title" placeholder="title" value="{{ old('title') }}" required minlength="5" maxlength="255">
                                                <span class="text-danger">{{ $errors->first('title') }}</span>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label for="subtitle">Bible Quote<span class="text-danger">*</span></label>
                                                <input  type="text" class="form-control border-input" name="bible_quote" placeholder="bible_quote" value="{{ old('bible_quote') }}" required minlength="5" maxlength="255">
                                                <span class="text-danger">{{ $errors->first('bible_quote') }}</span>
                                            </div>
                                        </div>
                                        <!--<div class="col-md-4">-->
                                        <!--    <div class="form-group">-->
                                        <!--        <label for="exampleInputEmail1">Email address</label>-->
                                        <!--        <input type="email" class="form-control border-input" placeholder="Email">-->
                                        <!--    </div>-->
                                        <!--</div>-->
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Bibe Verse<span class="text-danger">*</span></label>
                                                <input type="textarea" class="form-control border-input" name="verse" placeholder="Bible Verse" value="{{ old('verse') }}">
                                                <span class="text-danger">{{ $errors->first('verse') }}</span>
                                            </div>
                                        </div>
                                    </div>

                                    <!--<div class="row">-->
                                    <!--    <div class="col-md-12">-->
                                    <!--        <div class="form-group">-->
                                    <!--            <label>Address</label>-->
                                    <!--            <input type="text" class="form-control border-input" placeholder="Home Address" value="Melbourne, Australia">-->
                                    <!--        </div>-->
                                    <!--    </div>-->
                                    <!--</div>-->

                                    <!--<div class="row">-->
                                    <!--    <div class="col-md-4">-->
                                    <!--        <div class="form-group">-->
                                    <!--            <label>City</label>-->
                                    <!--            <input type="text" class="form-control border-input" placeholder="City" value="Melbourne">-->
                                    <!--        </div>-->
                                    <!--    </div>-->
                                    <!--    <div class="col-md-4">-->
                                    <!--        <div class="form-group">-->
                                    <!--            <label>Country</label>-->
                                    <!--            <input type="text" class="form-control border-input" placeholder="Country" value="Australia">-->
                                    <!--        </div>-->
                                    <!--    </div>-->
                                    <!--    <div class="col-md-4">-->
                                    <!--        <div class="form-group">-->
                                    <!--            <label>Postal Code</label>-->
                                    <!--            <input type="number" class="form-control border-input" placeholder="ZIP Code">-->
                                    <!--        </div>-->
                                    <!--    </div>-->
                                    <!--</div>-->

<!--                                    <div class="row">-->
<!--                                        <div class="col-md-12">-->
<!--                                            <div class="form-group">-->
<!--                                                <label>About Me</label>-->
<!--                                                <textarea rows="5" class="form-control border-input" placeholder="Here can be your description" value="Mike">Oh so, your weak rhyme-->
<!--You doubt I'll bother, reading into it-->
<!--I'll probably won't, left to my own devices-->
<!--But that's the difference in our opinions.</textarea>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                    </div>-->
                                    <div class="text-center">
                                        <a href="/dashboard" class="btn btn-default">Cancel</a>
                                        <button type="submit" class="btn btn-info btn-fill btn-wd">Add Thought of the Week</button>
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
                                                <th class="text-center">Bible Quote</th>
                                                <th class="text-center">Bible Verse</th>
                                                <th class="text-center">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           @foreach($thoughtweeks as $thoughtweek)
                                            <tr class="">
                                                <td>{{$thoughtweek->id}}</td>
                                                <td>{{ $thoughtweek->title}}</td>
                                                <td>{{ $thoughtweek->bible_quote }}</td>
                                                <td>{{ $thoughtweek->verse }}</td>
                                                <td><a href="{{route('thoughtweek.edit',['id' => $thoughtweek->id])}}"><button id="edit-modal" class="edit-modal btn btn-info">
                                                        <span class="glyphicon glyphicon-edit"></span> Edit
                                                    </button></a>
                                                   
                                                    <a href="{{ route('thoughtweek.delete', $thoughtweek->id) }}" onclick="return confirm('Do you really want to delete This?')">
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