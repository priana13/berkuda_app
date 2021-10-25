@extends('layout.app')



@section('slider')

    <div class="row">

      <div class="carousel slide" style="height:150px;">

          <div class="carousel-item active p-5 ">
              <h5 class="fs-1 text-center text-white text-uppercase" >STORIES</h5> 
          </div>
      </div>
      
    </div>
    <!-- akhir div slider -->

@endsection


@section('content')

<section class="pb-5 pt-4" style="background-color: #FEFAF1;background-image: url('{{asset('uploads/img/bg2.png')}}');">
    <div class="container">

        <div class="row mt-3 justify-content-center">

            <div class="col-md-8">

                <h2>{{$post->title}}</h2>
                <p class="text text-success">{{$post->created_at}} | </p>
               
                {!!$post->body!!}

            </div>
           

        </div>
        {{-- akhir row --}}


    </div>
</section>



@endsection