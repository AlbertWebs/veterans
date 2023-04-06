<html>
 </head>
  <body>
    <?php
    $Members = \App\Models\Membership::where('email','albertmuhatia@gmail.com')->get();
  ?>
  @foreach ($Members as $Mem)
  <article style="border: 4px solid #31905F; padding:80px; margin:100px;">
    <div>
        <img width="200" src="{{url('/')}}/uploads/logo/logo-trimmed.png" alt="">
    </div>
    <br>
    <hr>
    <br>
    <p class="paragraph-one">
      <a href="#">{{$Mem->name}}</a>

    </p>
    <div class="paragraph-two">
        <p>Category: <span>{{$Mem->category}}</span></p>
        <p>Year of Birth: <span>{{$Mem->yob}}</span></p>
        <p>County: <span>{{$Mem->county}}</span></p>
        <p>Sub County: <span>{{$Mem->subcounty}}</span></p>
        <p>Email: <a href="{{$Mem->email}}">{{$Mem->email}}</a>
        </p>
        <p>Phone: <a href="tel:{{$Mem->phone}}">{{$Mem->phone}}</a></p>
        <p>Retirement Year: <span>{{$Mem->retirement}}</span></p>
        <p>Service Number: <span>{{$Mem->service_number}}</span></p>
        <br><br>
        <p>Status: @if($Mem->number == null)
             <span style="background-color: #eed202">Proccessing...</span>
           @else
             <span style="background-color: #42ba96">{{$Mem->number}}</span>
           @endif
        </p>
    </div>
    <br>

    <div class="images">

        <img  src="{{url('/')}}/uploads/files/{{$Mem->passport}}" alt="Pasport Photo">

        <img  src="{{url('/')}}/uploads/files/{{$Mem->military_id}}" alt="Military ID">

        <img  src="{{url('/')}}/uploads/files/{{$Mem->identity}}" alt="National ID">

    </div>
    @endforeach
    <center>
        {{--  --}}
        <div style="text-align: center">
            <a href="{{url('/')}}/members/#edit" class="thm-btn">Edit  <span class="fa fa-edit"> </span></a>

            <a href="{{url('/')}}/" class="thm-btn">Home  <span class="fa fa-edit"> </span></a>
        </div>
        {{--  --}}
    </center>



  </article>
  </body>
</html>


