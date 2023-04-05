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
                                    <p class="team-details__top-text-1">Membership Number: <span style="text-transform: capitalize !important; color:#ff0000">Still Proccessing</span></p>
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

        @endforeach

@endsection


