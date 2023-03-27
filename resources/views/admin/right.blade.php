<div id="right">


            <div class="well well-small">
                <ul class="list-unstyled">
                    <li>Admin &nbsp; : <span><?php $Admins = DB::table('users')->where('is_admin','1')->get(); $Count = count($Admins); echo $Count ?></span></li>


                </ul>
            </div>
            <div class="well well-small">
                <button type="button" onclick="window.open('{{url('/admin/version')}}','_self')" class="btn btn-block"> Version Control </button>
                <button type="button" onclick="window.open('{{url('/admin/leaderships')}}','_self')" class="btn btn-success btn-block"> Leaderships </button>
                <button type="button" onclick="window.open('{{url('/admin/members')}}','_self')" class="btn btn-info btn-block"> Members </button>
                <button type="button" onclick="window.open('{{url('/admin/blogs')}}','_self')" class="btn btn-info btn-block"> Blogs </button>



                <button type="button" onclick="window.open('{{url('/admin/users')}}','_self')" class="btn btn-success btn-block"> Users </button>
            </div>





        </div>
