<div id="right">


            <div class="well well-small">
                <ul class="list-unstyled">
                    <li>Admin &nbsp; : <span><?php $Admins = DB::table('users')->where('is_admin','1')->get(); $Count = count($Admins); echo $Count ?></span></li>


                </ul>
            </div>
            <div class="well well-small">
                <button type="button" onclick="window.open('{{url('/admin/version')}}','_self')" class="btn btn-block"> Version Control </button>
                <button type="button" onclick="window.open('{{url('/admin/leaderships')}}','_self')" class="btn btn-success btn-block"> Leaderships </button>
                <button type="button" title="Use This To Load All Products without Images" onclick="window.open('{{url('/admin/Products-lte')}}','_self')" class="btn btn-success btn-block"> Membership </button>




                <button type="button" onclick="window.open('{{url('/admin/users')}}','_self')" class="btn btn-success btn-block"> Users </button>
            </div>





        </div>
