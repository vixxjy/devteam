@extends('backend.layouts.main')

@section('style')

@endsection

@section('title', 'St Augustines | dashboard')

  
@section('content')

<div class="wrapper">

@include('backend.partials.sidebar')

    <div class="main-panel">

@include('backend.partials.nav')

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="content">
                                <div class="row">
                                    <div class="col-xs-5">
                                        <div class="icon-big icon-warning text-center">
                                            <i class="ti-layers-alt"></i>
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        <div class="numbers">
                                            <p>Sliders</p>
                                            {{ $sliders->count()}}
                                        </div>
                                    </div>
                                </div>
                                <div class="footer">
                                    <hr />
                                    <div class="stats">
                                        <i class="ti-reload"></i> Updated now
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="content">
                                <div class="row">
                                    <div class="col-xs-5">
                                        <div class="icon-big icon-success text-center">
                                            <i class="ti-wallet"></i>
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        <div class="numbers">
                                            <p>Thought of the Term</p>
                                            {{$thoughtterms->count()}}
                                        </div>
                                    </div>
                                </div>
                                <div class="footer">
                                    <hr />
                                    <div class="stats">
                                        <i class="ti-calendar"></i> Last day
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="content">
                                <div class="row">
                                    <div class="col-xs-5">
                                        <div class="icon-big icon-danger text-center">
                                            <i class="ti-pulse"></i>
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        <div class="numbers">
                                            <p>Theme of the week</p>
                                            {{$thoughtweeks->count()}}
                                        </div>
                                    </div>
                                </div>
                                <div class="footer">
                                    <hr />
                                    <div class="stats">
                                        <i class="ti-timer"></i> In the last hour
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="content">
                                <div class="row">
                                    <div class="col-xs-5">
                                        <div class="icon-big icon-info text-center">
                                            <i class="ti-user"></i>
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        <div class="numbers">
                                            <p>News/Events</p>
                                            {{$events->count()}}
                                        </div>
                                    </div>
                                </div>
                                <div class="footer">
                                    <hr />
                                    <div class="stats">
                                        <i class="ti-reload"></i> Updated now
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--<div class="row">-->

                <!--    <div class="col-md-12">-->
                <!--        <div class="card">-->
                <!--            <div class="header">-->
                <!--                <h4 class="title">Users Behavior</h4>-->
                <!--                <p class="category">24 Hours performance</p>-->
                <!--            </div>-->
                <!--            <div class="content">-->
                <!--                <div id="chartHours" class="ct-chart"></div>-->
                <!--                <div class="footer">-->
                <!--                    <div class="chart-legend">-->
                <!--                        <i class="fa fa-circle text-info"></i> Open-->
                <!--                        <i class="fa fa-circle text-danger"></i> Click-->
                <!--                        <i class="fa fa-circle text-warning"></i> Click Second Time-->
                <!--                    </div>-->
                <!--                    <hr>-->
                <!--                    <div class="stats">-->
                <!--                        <i class="ti-reload"></i> Updated 3 minutes ago-->
                <!--                    </div>-->
                <!--                </div>-->
                <!--            </div>-->
                <!--        </div>-->
                <!--    </div>-->
                <!--</div>-->
                <div class="row" >
                    <div class="col-md-6">{!! $chart->html() !!}</div>
                    <div class="col-md-6">{!! $charts->html() !!}</div>
                </div>
                <!--<div class="row">-->
                <!--    <div class="col-md-6">-->
                <!--        <div class="card">-->
                <!--            <div class="header">-->
                <!--                <h4 class="title">Application Statistics</h4>-->
                <!--                <p class="category">Online Application Performance</p>-->
                <!--            </div>-->
                <!--            <div class="content">-->
                                <!--<div id="chartPreferences" class="ct-chart ct-perfect-fourth"></div>-->
                               

                <!--                <div class="footer">-->
                <!--                    <div class="chart-legend">-->
                <!--                        <i class="fa fa-circle text-info"></i> Open-->
                <!--                        <i class="fa fa-circle text-danger"></i> Bounce-->
                <!--                        <i class="fa fa-circle text-warning"></i> Unsubscribe-->
                <!--                    </div>-->
                <!--                    <hr>-->
                <!--                    <div class="stats">-->
                <!--                        <i class="ti-timer"></i> Campaign sent 2 days ago-->
                <!--                    </div>-->
                <!--                </div>-->
                <!--            </div>-->
                <!--        </div>-->
                <!--    </div>-->
                <!--    <div class="col-md-6">-->
                <!--        <div class="card ">-->
                <!--            <div class="header">-->
                <!--                <h4 class="title">Our Growth</h4>-->
                <!--                <p class="category">All events and news</p>-->
                <!--            </div>-->
                <!--            <div class="content">-->
                <!--                <div id="chartActivity" class="ct-chart"></div>-->

                <!--                <div class="footer">-->
                <!--                    <div class="chart-legend">-->
                <!--                        <i class="fa fa-circle text-info"></i> students-->
                <!--                        <i class="fa fa-circle text-warning"></i> staff-->
                <!--                    </div>-->
                <!--                    <hr>-->
                <!--                    <div class="stats">-->
                <!--                        <i class="ti-check"></i> Data information certified-->
                <!--                    </div>-->
                <!--                </div>-->
                <!--            </div>-->
                <!--        </div>-->
                <!--    </div>-->
                <!--</div>-->
            </div>
        </div>

@include('backend.partials.footer')

    </div>
</div>

{!! Charts::scripts() !!}
{!! $chart->script() !!}
{!! $charts->script() !!}
@endsection
@section('script')

 

@endsection
