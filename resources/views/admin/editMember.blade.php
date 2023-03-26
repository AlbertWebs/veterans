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
                        <center><h2> Add Member </h2></center>
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

                  <!-- Inner Content Here -->

            <div class="inner">


              <div class="row">
               <center>
                 @if(Session::has('message'))
							   <div class="alert alert-success">{{ Session::get('message') }}</div>
				@endif
                 </center>

                 <form class="form-horizontal" method="post"  action="{{url('/admin/edit_Member')}}/{{$Member->id}}" enctype="multipart/form-data">

                 <div class="form-group">
                        <label for="text1" class="control-label col-lg-4">Name</label>

                        <div class="col-lg-8">
                            <input type="text" id="text1" name="name" value="{{$Member->name}}" placeholder="e.g Juliet Wangui Waraga " class="form-control" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="text1" class="control-label col-lg-4">Service Time</label>

                        <div class="col-lg-8">
                            <input type="text" id="text1" name="service" value="{{$Member->id}}" placeholder="e.g 2000-2015" class="form-control" />
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="box">
                            <label for="text1" class="control-label col-lg-4">Message</label>
                            <div class="col-lg-8">
                                <textarea name="content" id="wysihtml5" class="form-control" rows="10" cols="80">{{$Member->content}}</textarea>
                            </div>
                        </div>
                    </div>




                    <center>
                    <div class="form-group col-lg-12">
                        <label class="control-label">Avatar</label>
                        <div class="">
                            <div class="fileupload fileupload-new" data-provides="fileupload">
                                <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;"><img src="{{url('/')}}/uploads/members/{{$Member->image}}" alt="" /></div>
                                <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                <div>
                                    <span class="btn btn-file btn-primary"><span class="fileupload-new">Select image</span><span class="fileupload-exists">Change</span><input name="image" type="file" /></span>
                                    <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload">Remove</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    </center>
                    </div>



                    <br><br>
                    <div class="col-lg-12 text-center">
                      <button type="submit" class="btn btn-success"><i class="icon-save icon-white"></i> Save</button>
                    </div>


                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <form>


            </div>
                  <!-- Inner Content Ends Here -->




            </div>

        </div>
        <!--END PAGE CONTENT -->

         <!-- RIGHT STRIP  SECTION -->
        @include('admin.right')
         <!-- END RIGHT STRIP  SECTION -->
    </div>

@endsection
