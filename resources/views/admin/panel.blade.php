

 @if(Session::has('message-comment'))
<div class="alert alert-success alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <div class="alert alert-success">{{ Session::get('message-comment') }}</div>
</div>

@endif
</center>

<div style="text-align: center;">



                            <a class="quick-btn" href="{{url('/admin/allMessages')}}">
                                <i class="icon-envelope icon-2x"></i>
                                <span>Messages</span>
                                <span class="label label-success"><?php $Messages = DB::table('users')->get(); $Count = count($Messages); echo $Count ?></span>
                            </a>



                            <a title="All Products" class="quick-btn" href="{{url('/admin/leaderships')}}">
                                <i class="icon-file icon-2x"></i>
                                <span>Leadership</span>
                                <span class="label btn-metis-2"><?php $Product = DB::table('leaderships')->get(); $Count = count($Product); echo $Count ?></span>
                            </a>



                            <a class="quick-btn" href="{{url('/admin/admins')}}">
                                <i class="icon-user-md icon-2x"></i>
                                <span>Admins</span>
                                <span class="label label-danger"><?php $Admins = DB::table('users')->where('is_admin','1')->get(); $Count = count($Admins); echo $Count ?></span>
                            </a>





                        </div>
