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

                        <center><h2> Members </h2></center>

                    </div>
                </div>
                  <hr />
                 <!--BLOCK SECTION -->
                 <div class="row">
                    <div class="col-lg-12">
                        @include('admin.panel')
                        <center>
                        @if(Session::has('message'))
                                        <div class="alert alert-success">{{ Session::get('message') }}</div>
                        @endif
                        </center>

                    </div>

                </div>
                  <!--END BLOCK SECTION -->
                <hr />

                 <!-- COMMENT AND NOTIFICATION  SECTION -->
                   <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Site Admins
                                </div>
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                            <thead class="text-center">
                                                <tr>
                                                    <th>No</th>
                                                    <th>Name</th>
                                                    <th>Service Number</th>
                                                    <th>Image</th>

                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody class="text-center">
                                            @foreach($Member as $value)
                                                <tr class="odd gradeX text-center">
                                                    <td>{{$value->id}}</td>
                                                    <td>{{$value->name}}<br>
                                                        <small>
                                                            <a href="mailto:{{$value->email}}">{{$value->email}}</a>
                                                        </small>
                                                    </td>
                                                    <td><strong><h3>{{$value->service_number}}</h3></strong></td>

                                                    <td><center><img width="100" height="100" src="{{url('/')}}/uploads/files/{{$value->passport}}"></center></td>

                                                    <td class="center">
                                                        {{-- <a onclick="return confirm('Delete This Person?')" href="{{url('/admin')}}/deleteMember/{{$value->id}}"   class="btn btn-danger"><i class="icon-trash icon-white"></i> Del</a>
                                                        <br><br>
                                                        <a  href="{{url('/admin')}}/editMember/{{$value->id}}"   class="btn btn-info"><i class="icon-pencil icon-white"></i> Edit</a>
                                                        <br><br> --}}
                                                        @if($value->number == null)
                                                            <a onclick="return confirm('Generate Membership')" href="{{url('/admin')}}/generate-number/{{$value->id}}"   class="btn btn-success"><i class="icon-check icon-white"></i> Generate Membership</a>
                                                        @else
                                                            <h3>{{$value->number}}</h3>

                                                            <a onclick="return confirm('Send Membership Number')" href="{{url('/admin')}}/mail-number/{{$value->id}}"   class="btn btn-success"><i class="icon-check icon-white"></i> Mail Number </a>
                                                            <br> <br>
                                                            <a  href="{{url('/admin')}}/view-member/{{$value->email}}"   class="btn btn-info"><i class="icon-eye-open icon-white"></i> View Member </a>
                                                        @endif
                                                    </td>

                                                </tr>
                                            @endforeach

                                            </tbody>
                                        </table>
                                    </div>

                                </div>
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
