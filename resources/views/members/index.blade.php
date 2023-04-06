@extends('front.master')

@section('content')
        <?php
          $Members = \App\Models\Membership::where('email',$User->email)->get();
        ?>
        @foreach ($Members as $Mem)
        <!--Team Details Start-->
        <section class="team-details">
            <div class="container">
                <div class="team-details__top">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6">
                            <div class="team-details__left">
                                <div class="team-details__img">
                                    <img src="{{url('/')}}/uploads/files/{{$Mem->passport}}" alt="{{$User->name}}">
                                    <div class="team-details__shape-1">
                                        <img src="assets/images/shapes/team-details-shape-1.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <div class="team-details__right">
                                <div class="team-details__top-content">
                                    <h3 class="team-details__top-name">{{$User->name}}</h3>
                                    <p class="team-details__top-title">{{$Mem->category}}</p>

                                    @if($Mem->number == null)
                                    <p class="team-details__top-text-1">Membership Number: <span style="text-transform: capitalize !important; color:#ff0000">Proccessing..</span></p>
                                    @else
                                    <p class="team-details__top-text-1">Membership Number: <span style="text-transform: capitalize !important;"><mark>{{$Mem->number}}</mark></span></p>
                                    @endif

                                    <div class="team-details__contact">
                                        <p>County: <span>{{$Mem->county}}</span></p>
                                        <p>Sub County: <span>{{$Mem->subcounty}}</span></p>
                                        <p>Email: <a href="{{$Mem->email}}">{{$Mem->email}}</a>
                                        </p>
                                        <p>Phone: <a href="tel:{{$Mem->phone}}">{{$Mem->phone}}</a></p>
                                        <p>Retirement Year: <span>{{$Mem->retirement}}</span></p>
                                        <p>Service Number: <span>{{$Mem->service_number}}</span></p>


                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <br><br>
                    {{--  --}}
                    <div style="text-align: center">
                        <a href="#edit" class="thm-btn">Edit  <span class="fa fa-edit"> </span></a>
                    </div>
                    {{--  --}}
                </div>
                <div class="team-details__bottom">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6">
                            <div class="team-details__left">
                                <div class="team-details__img">
                                    <img src="{{url('/')}}/uploads/files/{{$Mem->identity}}" alt="{{$User->name}}">
                                    <div class="team-details__shape-1">
                                        <img src="assets/images/shapes/team-details-shape-1.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <div class="team-details__left">
                                <div class="team-details__img">
                                    <img src="{{url('/')}}/uploads/files/{{$Mem->military_id}}" alt="{{$User->name}}">
                                    <div class="team-details__shape-1">
                                        <img src="assets/images/shapes/team-details-shape-1.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <hr>
        <!--Team Details End-->
        <style>


            .imagePreview {
                width: 100%;
                min-height:200px;
                height: 100%;
                background-position: center center;
            background:url(http://cliquecities.com/assets/no-image-e3699ae23f866f6cbdf8ba2443ee5c4e.jpg);
            background-color:#fff;
                background-size: cover;
            background-repeat:no-repeat;
                display: inline-block;
            box-shadow:0px -3px 6px 2px rgba(0,0,0,0.2);
            }
            .btn-primary
            {
            display:block;
            border-radius:0px;
            box-shadow:0px 4px 6px 2px rgba(0,0,0,0.2);
            margin-top:-5px;
            }
            .imgUp
            {
            margin-bottom:15px;
            }
            .del
            {
            position:absolute;
            top:0px;
            right:15px;
            width:30px;
            height:30px;
            text-align:center;
            line-height:30px;
            background-color:rgba(255,255,255,0.6);
            cursor:pointer;
            }
            .imgAdd
            {
            width:30px;
            height:30px;
            border-radius:50%;
            background-color:#4bd7ef;
            color:#fff;
            box-shadow:0px 0px 2px 1px rgba(0,0,0,0.2);
            text-align:center;
            line-height:30px;
            margin-top:0px;
            cursor:pointer;
            font-size:15px;
            }
        </style>

                <!--Start Checkout Page-->
                <section class="checkout-page" id="edit">
                    <div class="container" style="margin:0px auto">
                        <div class="row">
                            <center>
                                <div class="col-xl-8 col-lg-8">
                                    <div class="billing_details">
                                        <div class="billing_title">

                                            <h2>Edit Info</h2>
                                        </div>
                                        {{--  --}}
                                        <center>
                                            @if(Session::has('message'))
                                                          <div class="alert alert-success">{{ Session::get('message') }}</div>
                                           @endif
                                        </center>
                                        {{--  --}}
                                        <form class="billing_details_form" action="{{url('/')}}/members/save-changes" method="POST" enctype="multipart/form-data">
                                            @csrf

                                            <div class="row bs-gutter-x-20">
                                                <div class="col-xl-12">
                                                    <div class="billing_input_box">
                                                        <input type="text" name="name" value="{{$Mem->name}}" placeholder="Full Name"
                                                            required="required">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xl-6">
                                                    <div class="billing_input_box">
                                                        <div class="select-box">
                                                            <select class="selectpicker" name="category" required="required">
                                                                <option value="{{$Mem->category}}" data-display="Select a Country">{{$Mem->category}}</option>
                                                                <option value="Army">Army</option>
                                                                <option value="Navy">Navy</option>
                                                                <option value="Airforce">Airforce</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6">
                                                    <div class="billing_input_box">
                                                        <input type="text" name="yob" value="{{$Mem->yob}}" placeholder="Year of Birth" required="required">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xl-6">
                                                    <div class="billing_input_box">
                                                        <input type="text" name="county" value="{{$Mem->county}}" placeholder="County" required="required">
                                                    </div>
                                                </div>
                                                <div class="col-xl-6">
                                                    <div class="billing_input_box">
                                                        <input type="text" name="subcounty" value="{{$Mem->subcounty}}"  placeholder="Sub County" required="required">
                                                    </div>
                                                </div>
                                                <div class="col-xl-6">
                                                    <div class="billing_input_box">
                                                        <input type="text" name="phone" value="{{$Mem->phone}}" required="required"
                                                            placeholder="0720000000">
                                                    </div>
                                                </div>
                                                <div class="col-xl-6">
                                                    <div class="billing_input_box">
                                                        <input name="email" type="email" value="{{$Mem->email}}" placeholder="Email Address" required="required">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row bs-gutter-x-20">
                                                <div class="col-xl-6">
                                                    <div class="billing_input_box">
                                                        <input type="text" name="retirement" value="{{$Mem->retirement}}" placeholder="Year of Retirement" required="">
                                                    </div>
                                                </div>
                                                <div class="col-xl-6">
                                                    <div class="billing_input_box">
                                                        <input name="service_number" value="{{$Mem->service_number}}" type="text" pattern="[0-9]*" placeholder="Service Number" required="required">
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-xl-4" style="text-align: center !important">
                                                        <h6 style="text-align: center !important">Passport Picture </h6>
                                                        <div class="billing_input_box">
                                                            {{--  --}}
                                                            <br>
                                                            <div class="container">
                                                            <div class="row">
                                                                <div class="col-sm-12 imgUp">
                                                                    <div class="imagePreview"></div>
                                                                    <label class="btn btn-primary">
                                                                    Upload<input type="file" class="uploadFile img" name="passport" value="Upload Photo" style="width: 0px;height: 0px;overflow: hidden;">
                                                                    </label>
                                                                </div>
                                                                <!-- col-2 -->
                                                                {{-- <i class="fa fa-plus imgAdd"></i> --}}
                                                            </div>
                                                            <!-- row -->
                                                            </div>
                                                            <!-- container -->
                                                            {{--  --}}
                                                        </div>
                                                    </div>

                                                    <div class="col-xl-4" style="text-align: center !important">
                                                        <h6 style="text-align: center !important">ID </h6>
                                                        <div class="billing_input_box">
                                                            {{--  --}}
                                                            <br>
                                                            <div class="container">
                                                            <div class="row">
                                                                <div class="col-sm-12 imgUp">
                                                                    <div class="imagePreview"></div>
                                                                    <label class="btn btn-primary">
                                                                    Upload<input type="file" class="uploadFile img" name="identity" value="Upload Photo" style="width: 0px;height: 0px;overflow: hidden;">
                                                                    </label>
                                                                </div>
                                                                <!-- col-2 -->
                                                                {{-- <i class="fa fa-plus imgAdd"></i> --}}
                                                            </div>
                                                            <!-- row -->
                                                            </div>
                                                            <!-- container -->
                                                            {{--  --}}
                                                        </div>
                                                    </div>

                                                    <div class="col-xl-4" style="text-align: center !important">
                                                        <h6 style="text-align: center !important">Military ID </h6>
                                                        <div class="billing_input_box">
                                                            {{--  --}}
                                                            <br>
                                                            <div class="container">
                                                            <div class="row">
                                                                <div class="col-sm-12 imgUp">
                                                                    <div class="imagePreview"></div>
                                                                    <label class="btn btn-primary">
                                                                    Upload<input type="file" class="uploadFile img" name="military_id" value="Upload Photo" style="width: 0px;height: 0px;overflow: hidden;">
                                                                    </label>
                                                                </div>
                                                                <!-- col-2 -->
                                                                {{-- <i class="fa fa-plus imgAdd"></i> --}}
                                                            </div>
                                                            <!-- row -->
                                                            </div>
                                                            <!-- container -->
                                                            {{--  --}}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <input type="hidden" name="passport_cheat" value="{{$Mem->passport}}">
                                            <input type="hidden" name="military_id_cheat" value="{{$Mem->military_id}}">
                                            <input type="hidden" name="identity_cheat" value="{{$Mem->identity}}">
                                            <input type="hidden" name="id" value="{{$Mem->id}}">


                                            <br><br>
                                            <div style="text-align: center">
                                                <button type="submit" class="thm-btn">Save Changes <span class="fa fa-save"> </span></button>
                                            </div><!-- /.text-right -->
                                        </form>
                                    </div>
                                </div>
                            </center>
                        </div>



                    </div>
                </section>
                <!--End Checkout Page-->

        @endforeach

@endsection


