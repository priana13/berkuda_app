<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Yuk Berkuda</title>

    <style>

      body{
        font-family: Lora,serif;
        font-size: 15px;
        line-height: 23px;
        font-weight: 400;
        overflow-x: hidden!important;
        -webkit-font-smoothing: antialiased;
      }

      .header{
        background-image: url('{{asset('/uploads/img/gambar2.jpg')}}');
      }

      .paket{
        background-color:bg-white;
        background-image: url("{{asset('uploads/img/bg2.png')}}");


      }

      .tombol-slider{
        border-radius:0%;
        font-size:16px;

      }

      .quote{
        background-image: url("{{asset('uploads/img/gambar1.jpg')}}");
      }

      footer {
        background-color:#171615;
        height:200px;
      }
    </style>

  </head>
  <body>
   


    <div class="header">

        <div class="container">
            <div class="row">
    
                <nav class="navbar navbar-expand-lg  bg-white mt-3 p-4 text-uppercase justify-content-center">

                    <a class="navbar-brand ml-2" href="#">
                      Logo                      
                    </a>
                 
                    <div class="nav-item">
                      <a class="nav-link active" style="color:#000;" aria-current="page" href="#">Home</a>
                    </div>

                    <div class="nav-item">
                      <a class="nav-link" style="color:#000;" href="#">About</a>
                    </div>

                    <div class="nav-item">
                      <a class="nav-link" style="color:#000;" href="#">Paket</a>
                    </div>
                    
                    <div class="nav-item">
                      <a class="nav-link" style="color:#000;" href="#">Contact</a>
                    </div>

                    <!-- <form class="d-flex">
                      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                      <button class="btn btn-outline-success" type="submit">Search</button>
                    </form> -->

                </nav> 
    
            </div> 
            <!-- akhir row nav -->
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
                          
                          <a class="btn btn-lg btn-warning me-md-2 text-white tombo-slider"  href="">SELENGKAPNYA</a>
                          <a class="btn btn-lg btn-outline-warning text-white tombo-slider"  href="">BOOKING</a>

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

        </div>

    </div>
    <!-- akhir header -->

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


          <div class="card m-2 bg-white" style="width: 18rem; border:0px;">
            <img src="{{asset('uploads/img/h1-single-img-1.jpg')}}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">TRIAL</h5>
              <h2>Rp. 50K</h2>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a class="btn btn-lg btn-outline-warning text-warning tombo-slider"  href="">BOOKING</a>
            </div>
          </div>

          <div class="card m-2 bg-white" style="width: 18rem; border:0px;">
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
          </div>

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

            <!-- list card kecil -->
            <div class="row mt-1">
              <div class="col-md-4">
                  <img src="{{asset('uploads/img/h1-single-img-1.jpg')}}" alt="" width="110" height="67">
              </div>
              <div class="col-md-8">
                <p>Jalan-santai di pinggir Sungai</p>
                <p>9 Okt 2021</p>
              </div>
            </div>

            <!-- list card kecil -->
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
            </div>

          </div>
        </div>

      </div>
    </section>





    <footer>
      <div class="container pt-5">
        <div class="row text-white">

            <div class="col-md-4">
              <h3>OUR STORY</h3>
              <p>Donec sodales sagittis magna. Sed conse quat, leo eget bibendum sodales, augue velit cursus nunc. Aenean commodo ligu sodales parturient montes.</p>
            </div>

            <div class="col-md-4">
              <h4>MEDIA SOSIAL</h4>
              <ul>
                <li>Facebook</li>
                <li>Instagram Story</li>
                <li>Telegram</li>
              </ul>
            </div>

            <div class="col-md-4">
              <h4>Lokasi</h4>
              <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsum quisquam tenet</p>
              map here
            </div>


        </div>
      </div>


    </footer>







    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>