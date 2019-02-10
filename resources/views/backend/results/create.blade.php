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
               
                    <div class="col-md-12">
                        <div class="card p-5">
                            <div class="header">
                                <h4 class="title">Add Event/News</h4>
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
                                <form action="{{ route('Result.store')}}" method="post" enctype="multipart/form-data">
                                    {{csrf_field()}}
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="title">Candidate exam No:<span class="text-danger">*</span></label>
                                                <input autofocus type="text" class="form-control border-input" name="exam_no" placeholder="Exam No" value="{{ old('exam_no') }}" required>
                                                <span class="text-danger">{{ $errors->first('exam_no') }}</span>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Mathematics<span class="text-danger">*</span></label>
                                                <input type="text" class="form-control border-input" name="mathematics" placeholder="Mathematics" value="{{ old('mathematics') }}" required >
                                                <span class="text-danger">{{ $errors->first('mathematics') }}</span>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Quantitative Reasoning<span class="text-danger">*</span></label>
                                                <input type="text" class="form-control border-input" name="reasoning" placeholder="Quantitative Reasoning" value="{{ old('reasoning') }}" required >
                                                <span class="text-danger">{{ $errors->first('reasoning') }}</span>
                                            </div>
                                        </div>
                                    </div>
                                         <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="title">English Language<span class="text-danger">*</span></label>
                                                <input autofocus type="text" class="form-control border-input" name="english" placeholder="English Language" value="{{ old('english') }}" required >
                                                <span class="text-danger">{{ $errors->first('english') }}</span>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Verbal Reasoning<span class="text-danger">*</span></label>
                                                <input type="text" class="form-control border-input" name="vreasoning" placeholder="Verbal Reasoning" value="{{ old('vreasoning') }}" required >
                                                <span class="text-danger">{{ $errors->first('vreasoning') }}</span>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>General Paper<span class="text-danger">*</span></label>
                                                <input type="text" class="form-control border-input" name="general" placeholder="General Paper" value="{{ old('general') }}" required >
                                                <span class="text-danger">{{ $errors->first('general') }}</span>
                                            </div>
                                        </div>
                                    </div>
                                         <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="title">Total Score<span class="text-danger">*</span></label>
                                                <input autofocus type="text" class="form-control border-input" name="totalscore" placeholder="Total Score" value="{{ old('totalscore') }}" required>
                                                <span class="text-danger">{{ $errors->first('totalscore') }}</span>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Cummulative Score<span class="text-danger">*</span></label>
                                                <input type="text" class="form-control border-input" name="cummulative" placeholder="Cummulative Score" value="{{ old('cummulative') }}" required >
                                                <span class="text-danger">{{ $errors->first('cummulative') }}</span>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Remarks<span class="text-danger">*</span></label>
                                                <input type="text" class="form-control border-input" name="remarks" placeholder="Remarks" value="{{ old('remarks') }}" required >
                                                <span class="text-danger">{{ $errors->first('remarks') }}</span>
                                            </div>
                                        </div>
                                    </div>

                        
                                    <div class="text-center">
                                        <a href="/dashboard" class="btn btn-default">Cancel</a>
                                        <button type="submit" class="btn btn-info btn-fill btn-wd">Add Results</button>
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
                                                <th class="text-center">Exam No</th>
                                                <th class="text-center">Maths</th>
                                                <th class="text-center">Q/R</th>
                                                <th class="text-center">English</th>
                                                <th class="text-center">V/R</th>
                                                <th class="text-center">G Paper</th>
                                                <th class="text-center">Total Score</th>
                                                <th class="text-center">Cumm</th>
                                                <th class="text-center">Remarks</th>
                                                <th class="text-center"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           @foreach($datas as $data)
                                            <tr class="">
                                                <td>{{$data->id}}</td>
                                                <td>{{ $data->exam_no}}</td>
                                                <td>{{ $data->mathematics }}</td>
                                                <td>{{ $data->reasoning }}</td>
                                                 <td>{{ $data->english}}</td>
                                                <td>{{ $data->vreasoning }}</td>
                                                <td>{{ $data->general }}</td>
                                                 <td>{{ $data->totalscore}}</td>
                                                <td>{{ $data->cummulative }}</td>
                                                <td>{{ $data->remarks }}</td>
                                                <td><a href="#"><button id="edit-modal" class="edit-modal btn btn-info">
                                                        <span class="glyphicon glyphicon-edit"></span>
                                                    </button></a>
                                                    <a href="#" onclick="return confirm('Do you really want to delete This?')">
                                                    <button class="delete-modal btn btn-danger">
                                                        <span class="glyphicon glyphicon-trash"></span>
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

