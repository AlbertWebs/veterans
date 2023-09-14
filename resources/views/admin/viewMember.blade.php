@extends('admin.master')

@section('content')
<div id="wrap" >


        <!-- HEADER SECTION -->
        @include('admin.top')
        <!-- END HEADER SECTION -->



        <!-- MENU SECTION -->
        @include('admin.left')
        <!--END MENU SECTION -->



        <!--PAGE CONTENT -->
        <div id="content">

            <div class="inner" style="min-height: 700px;">
                <div class="row">
                    <div class="col-lg-12">
                        <center><h2> Admin Dashboard </h2></center>
                    </div>
                </div>
                  <hr />
                 <!--BLOCK SECTION -->
                 <div class="row">
                    <div class="col-lg-12">
                        @include('admin.panel')

                    </div>

                </div>
                  <!--END BLOCK SECTION -->
                <hr />
                   <!-- CHART & CHAT  SECTION -->

                 <!--END CHAT & CHAT SECTION -->
                 <!-- COMMENT AND NOTIFICATION  SECTION -->
                <div class="row">
                    <div class="col-lg-12">

                        <div class="chat-panel panel panel-success">
                            <div class="panel-heading">
                                <i class="icon-user"></i>
                                Member Details

                            </div>

                            @foreach ($Membership as $membership)
                            <div class="panel-body" style="min-height:800px">

                                <center>
                                    <strong>Membership Number:</strong> {{$membership->number}} <br>
                                    <strong>Name:</strong> {{$membership->name}} <br>
                                    <strong>Category:</strong> {{$membership->name}} <br>
                                    <strong>Year of Birth:</strong> {{$membership->yob}} <br>
                                    <strong>Email:</strong> {{$membership->email}} <br>
                                    <strong>Category:</strong> {{$membership->name}} <br>
                                    <strong>Retirement:</strong> {{$membership->retirement}} <br>
                                    <strong>Service Number:</strong> {{$membership->service_number}} <br>
                                    <hr/>
                                    <div class="col-lg-12">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-lg-4" style="border:5px solid #ffffff">
                                                            <img src="{{url('/')}}/uploads/files/{{$membership->identity}}" alt="{{$membership->name}}">
                                                </div>
                                                <div class="col-lg-4"  style="border:5px solid #ffffff">
                                                            <img src="{{url('/')}}/uploads/files/{{$membership->military_id}}" alt="{{$membership->name}}">
                                                </div>
                                                <div class="col-lg-4"  style="border:5px solid #ffffff">
                                                            <img src="{{url('/')}}/uploads/files/{{$membership->military_id}}" alt="{{$membership->name}}">
                                                </div>
                                            </div>
                                        </div>
                                    <hr />
                                    <a download="{{$membership->name}}" href="{{url('/')}}/uploads/files/{{$membership->identity}}" class="btn btn-danger btn-sm"><span class="icon-download"></span> Download ID </a>
                                    <a download="{{$membership->name}} Passport" href="{{url('/')}}/uploads/files/{{$membership->passport}}" class="btn btn-success btn-sm"><span class="icon-download"></span> Download Passport Photo</a>
                                    <a download="{{$membership->name}} Military ID" href="{{url('/')}}/uploads/files/{{$membership->military_id}}" class="btn btn-info btn-sm"><span class="icon-download"></span> Download Military ID</a>

                                </center>

                            </div>
                            @endforeach


                        </div>


                    </div>

                </div>


                <!-- END COMMENT AND NOTIFICATION  SECTION -->





            </div>

        </div>
        <!--END PAGE CONTENT -->

         <!-- RIGHT STRIP  SECTION -->
         @include('admin.right')
         <!-- END RIGHT STRIP  SECTION -->
    </div>

@endsection
