@extends('front.master')

@section('content')
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
		<section class="checkout-page">
			<div class="container" style="margin:0px auto">
				<div class="row">
                    <center>
                        <div class="col-xl-8 col-lg-8">
                            <div class="billing_details">
                                <div class="billing_title">
                                    <p>Already a Member? <a href="{{url('/')}}/login">Click here to Login</a></p>
                                    <h2>Bio Info</h2>
                                </div>
                                {{--  --}}
                                <center>
                                    @if(Session::has('message'))
                                                  <div class="alert alert-success">{{ Session::get('message') }}</div>
                                   @endif
                                </center>
                                {{--  --}}
                                <form class="billing_details_form" action="{{url('/')}}/generate-membership-number" method="POST" enctype="multipart/form-data">
                                    @csrf

                                    <div class="row bs-gutter-x-20">
                                        <div class="col-xl-12">
                                            <div class="billing_input_box">
                                                <input type="text" name="name" value="" placeholder="Full Name"
                                                    required="required">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="billing_input_box">
                                                <div class="select-box">
                                                    <select class="selectpicker" name="category" required="required">
                                                        <option data-display="Select a Country">Category</option>
                                                        <option value="Army">Army</option>
                                                        <option value="Navy">Navy</option>
                                                        <option value="Airforce">Airforce</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="billing_input_box">
                                                <input type="text" name="yob" placeholder="Year of Birth" required="required">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="billing_input_box">
                                                <input type="text" name="county" placeholder="County" required="required">
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="billing_input_box">
                                                <input type="text" name="subcounty" value="" placeholder="Sub County" required="required">
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="billing_input_box">
                                                <input type="text" name="phone" value="" required="required"
                                                    placeholder="0720000000">
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="billing_input_box">
                                                <input name="email" type="email" placeholder="Email Address" required="required">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row bs-gutter-x-20">
                                        <div class="col-xl-6">
                                            <div class="billing_input_box">
                                                <input type="text" name="retirement" value="" placeholder="Year of Retirement" required="">
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="billing_input_box">
                                                <input name="service_number" type="text" pattern="[0-9]*" placeholder="Service Number" required="required">
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
                                                            Upload<input required="required" type="file" class="uploadFile img" name="passport" value="Upload Photo" style="width: 0px;height: 0px;overflow: hidden;">
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
                                                            Upload<input required="required" type="file" class="uploadFile img" name="identity" value="Upload Photo" style="width: 0px;height: 0px;overflow: hidden;">
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
                                                            Upload<input required="required" type="file" class="uploadFile img" name="military_id" value="Upload Photo" style="width: 0px;height: 0px;overflow: hidden;">
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
                                    <br><br>
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="checked-box">
                                                <input type="checkbox" name="skipper1" id="skipper" checked="">
                                                <label for="skipper"><span></span>Create an account?</label>
                                            </div>
                                        </div>
                                    </div>
                                    <br><br>
                                    <div style="text-align: center">
                                        <button type="submit" class="thm-btn">Generate Membership ID</button>
                                    </div><!-- /.text-right -->
                                </form>
                            </div>
                        </div>
                    </center>
				</div>



			</div>
		</section>
		<!--End Checkout Page-->


@endsection


