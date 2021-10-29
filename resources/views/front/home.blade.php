@extends('layout.app')

@section('slider')

    <div class="row">

      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" style="height:400px;">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">

          <div class="carousel-item active p-5 ">

              <h5 class="fs-1 text-center text-white text-uppercase" >HorseBack Riding</h5>
              <p class="text-center text-white" >Some representative placeholder content for the first slide.</p>
            
                <div class="d-flex justify-content-center">
                  
                  <a class="btn btn-lg btn-warning me-md-2 text-white tombol-slider"  href="/page/about">SELENGKAPNYA</a>
                  <a class="btn btn-lg btn-outline-warning text-white tombol-slider"  href="{{route('product.show',2)}}">BOOKING</a>

              </div>

          </div>

          <!-- <div class="carousel-item"> -->
            <!-- <img src="..." class="d-block w-100" alt="..."> -->
            <!-- <div class="carousel-caption d-md-block">
              <h5>Second slide label</h5>
              <p>Some representative placeholder content for the second slide.</p>
            </div>
          </div>
          <div class="carousel-item"> -->
            <!-- <img src="..." class="d-block w-100" alt="..."> -->
            <!-- <div class="carousel-caption  d-md-block">
              <h5>Third slide label</h5>
              <p>Some representative placeholder content for the third slide.</p>
            </div>
          </div> -->
          
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      
    </div>
    <!-- akhir div slider -->

@endsection

@section('content')

  <div class="paket p-3">

  <div class="container">

  <!-- profile -->
  <div class="row">

  <div class="" style="margin-top: 30px; margin-bottom: 5px;">
  <h2 class="text-center">YAKIN BERANI BERKUDA?</h2>
  <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus eaque, sed at tempore veniam labore est quibusdam sit accusamus molestiae hic eum! Dolores modi atque enim accusantium veniam cupiditate rerum?</p>

  </div>
  <div class="bg-warning m-auto" style="width:30px;hight:1px;padding:1px;"></div>

  <div class="d-flex justify-content-center">

  <iframe width="700" height="400" src="https://www.youtube.com/embed/bdcWkTm9lNo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

  </div>




  </div>



  <div class="row mb-3">

  <div class="" style="margin-top: 60px; margin-bottom: 5px;">
  <h2 class="text-center">PILIHAN PAKET</h2>
  </div>
  <div class="bg-warning m-auto" style="width:30px;hight:1px;padding:1px;"></div>

  </div>

  <div class="row justify-content-center mt-3">

  @foreach($products as $product)

    <div class="card m-2 bg-white" style="width: 18rem; border:0px;">
      <img src="{{asset('uploads/img/h1-single-img-1.jpg')}}" class="card-img-top" alt="{{$product->nama_produk}}">
      <div class="card-body">
        <h5 class="card-title">{{$product->nama_produk}}</h5>
        <h2>Rp. {{$product->harga}}</h2>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a class="btn btn-lg btn-outline-warning text-warning tombo-slider"  href="{{route('product.show',$product->id)}}">BOOKING</a>
      </div>
    </div>

  @endforeach
  {{-- <div class="card m-2 bg-white" style="width: 18rem; border:0px;">
  <img src="{{asset('uploads/img/h1-single-img-1.jpg')}}" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">MEMBER</h5>
    <h2>Rp. 300K</h2>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-lg btn-warning text-white tombo-slider">BOOKING</a>
  </div>
  </div>

  <div class="card m-2 bg-white" style="width: 18rem;  border:0px;">
  <img src="{{asset('uploads/img/h1-single-img-1.jpg')}}" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">GROUP</h5>
    <h2>Rp. 100K/orang</h2>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-lg btn-outline-warning text-warning tombo-slider">BOOKING</a>
  </div>
  </div> --}}

  </div>
  </div>
  <!-- akhir container ke dua -->




  </div>
  <!-- akhir klass paket -->

  <section class="quote">

  <div class="container">
  <div class="row">
  <div class="d-flex justify-content-center text-white" style="height:400px;padding-top:70px;">

  <div class="">
    <h4 class="fs-1 text-center">Keutamaan Berkuda..</h4>
    <div class="bg-warning m-auto" style="width:30px;hight:1px;padding:1px;"></div>

    <p class="text-center fs-5 mt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque inventore saepe minus debitis ratione aliquid laboriosam perferendis quis fugit, minima natus aliquam autem! Quasi unde ut distinctio rem dolore labore?</p>
  </div>

  </div>
  </div>
  </div>

  </section>

  <section class="pb-5 pt-4" style="background-color: #FEFAF1;background-image: url('{{asset('uploads/img/bg2.png')}}');">
  <div class="container">
  <div class="row" >

  <div class="" style="margin-top: 30px; margin-bottom: 5px;">
  <h2 class="text-center">TOP STORY</h2>
  </div>
  <div class="bg-warning m-auto" style="width:30px;hight:1px;padding:1px;"></div>

  </div>
  <!-- Akhir row -->

  <div class="row mt-5">
  <div class="col-md-8">

    <div>
      <iframe width="700" height="400" src="https://www.youtube.com/embed/bdcWkTm9lNo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

    </div>

  </div>
  <div class="col-md-4">
  <div class="row">
    <h4>LATEST NEWS</h4>
  </div>

  @foreach($stories as $story)
  <!-- list card kecil -->
  <div class="row mt-1">
    <div class="col-md-4">
        <img src="{{asset('uploads/img/h1-single-img-1.jpg')}}" alt="" width="110" height="67">
    </div>
    <div class="col-md-8">
      <p> <a class="text-decoration-none" href="{{route('post.show',$story->slug)}}">{{$story->title}} </a> <br>

        <span class="text text-success"><em>{{$story->created_at->diffForHumans()}}</em></span>
        
      
      </p>
      <p></p>
    </div>
  </div>

  @endforeach

  {{-- <!-- list card kecil -->
  <div class="row mt-1">
    <div class="col-md-4">
        <img src="{{asset('uploads/img/h1-single-img-1.jpg')}}" alt="" width="110" height="67">
    </div>
    <div class="col-md-8">
      <p>Jelajahi Hutan Gunung Salak</p>
      <p>9 Okt 2021</p>
    </div>
  </div>

  <!-- list card kecil -->
  <div class="row mt-1">
    <div class="col-md-4">
        <img src="{{asset('uploads/img/h1-single-img-1.jpg')}}" alt="" width="110" height="67">
    </div>
    <div class="col-md-8">
      <p>Wisata terbaik untuk keluarga</p>
      <p>9 Okt 2021</p>
    </div>
  </div>

  <!-- list card kecil -->
  <div class="row mt-1">
    <div class="col-md-4">
        <img src="{{asset('uploads/img/h1-single-img-1.jpg')}}" alt="" width="110" height="67">
    </div>
    <div class="col-md-8">
      <p>Ajarkan anak-anak keberanian menaiki kuda</p>
      <p>9 Okt 2021</p>
    </div>
  </div> --}}

  </div>
  </div>

  </div>
  </section>


@endsection