<div id="left" >
            <div class="media user-media well-small">
                <a class="user-link" href="{{url('/admin')}}/editAdmin/{{Auth::user()->id}}">
                    <img width="64" height="64" class="media-object img-thumbnail user-img" alt="{{Auth::user()->name}}" src="{{url('/')}}/uploads/admins/{{Auth::user()->image}}" />
                </a>
                <br />
                <div class="media-body">
                    <h5 class="media-heading"><small><b> {{Auth::user()->name}}</b></small> </h5>
                    <ul class="list-unstyled user-info">

                        <li>
                             <a href="{{url('/admin')}}/editAdmin/{{Auth::user()->id}}" class="btn btn-success btn-xs btn-circle" style="width: 10px;height: 12px;"></a> Online

                        </li>

                    </ul>
                </div>
                <br />
            </div>

            <ul id="menu" class="collapse">


                <li class="panel active">
                    <a href="{{url('/admin')}}" >
                        <i class="icon-home"></i> Dashboard


                    </a>
                </li>



                <li><a href="{{url('admin/addLeadership')}}"><i class="icon-plus"></i>  <i class="icon-user-md"></i> Add Leadership </a></li>
                <li><a href="{{url('admin/addMember')}}"><i class="icon-plus"></i>  <i class="icon-user-md"></i> Add Member </a></li>
                <li class="panel">
                    <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#error-nav">
                        <i class="icon-folder-open"></i>  Pages

                        <span class="pull-right">
                            <i class="icon-angle-left"></i>
                        </span>
                          &nbsp; <span class="label label-success">6</span>&nbsp;
                    </a>
                    <ul class="collapse" id="error-nav">
                        <li><a href="{{url('/admin/about')}}"><i class="icon-angle-right"></i> About  </a></li>
                        <li><a href="{{url('/admin/delivery')}}"><i class="icon-angle-right"></i> Delivery Terms  </a></li>
                        <li><a href="{{url('/admin/privacy')}}"><i class="icon-angle-right"></i> Privacy  </a></li>
                        <li><a href="{{url('/admin/terms')}}"><i class="icon-angle-right"></i> Terms  </a></li>
                        <li><a href="{{url('/admin/copyright')}}"><i class="icon-angle-right"></i> Copyright  </a></li>

                    </ul>
                </li>


                <li><a href="{{url('admin/sitesettings')}}"><i class="icon-cog"></i> Site Settings </a></li>
                <li><a href="{{url('admin/seosettings')}}"><i class="icon-cog"></i> SEO Settings </a></li>
                <li><a  onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();" href="{{ route('logout') }}"><i class="icon-signin"></i> Log Out </a></li>



            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>






            </ul>

        </div>
