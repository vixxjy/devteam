@extends('backend.layouts.main')

@section('style')

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
               
                    <div class="col-md-10 col-md-offset-1">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Add Slider Image</h4>
                            </div>
                            <div class="content">
                                <form action="{{URL::Route('slider.store')}}" method="post" enctype="multipart/form-data">
                                    @csrf
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
                                        <!--<div class="col-md-4">-->
                                        <!--    <div class="form-group">-->
                                        <!--        <label for="exampleInputEmail1">Email address</label>-->
                                        <!--        <input type="email" class="form-control border-input" placeholder="Email">-->
                                        <!--    </div>-->
                                        <!--</div>-->
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="image">Image<span class="text-danger"> [1900 X 1200 min size and max 2MB] *</span></label>
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
                                        <a href="" class="btn btn-default">Cancel</a>
                                        <button type="submit" class="btn btn-info btn-fill btn-wd">Add Slider</button>
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
@section('script')

 

@endsection