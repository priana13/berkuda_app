<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/all.css')}}" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    
    <title>Yuk Berkuda</title>

    <style>

      @media only screen and (max-width: 2000px) {

      .nav-mobile{
        display:none;
      }

     @media only screen and (max-width: 800px) {

      .nav-mobile{
        display:block;
      }

      .tombol-slider{
        margin-left: 5px;
      }
      .carousel-control-prev , .carousel-control-next{
        display:none;
      }
      
      .navbar-utama{
        display:none;
      }
     }

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
        /* height:200px; */
      }

      .harga-asli{
      text-decoration: line-through;
      font-size:0.714286rem;
    }

    </style>

  </head>
  <body>
   


    <div class="header">

        <div class="container">
            <div class="row">
    
                <nav class="navbar navbar-utama navbar-expand-lg  bg-white mt-3 p-4 text-uppercase justify-content-center">

                    <a class="navbar-brand ml-2" href="{{route('home')}}">
                      Logo                      
                    </a>
                 
                    <div class="nav-item">
                      <a class="nav-link active" style="color:#000;" aria-current="page" href="{{route('home')}}">Home</a>
                    </div>

                    <div class="nav-item">
                      <a class="nav-link" style="color:#000;" href="{{url('/page/about')}}">About</a>
                    </div>

                    <div class="nav-item">
                      <a class="nav-link" style="color:#000;" href="#">Paket</a>
                    </div>
                    
                    <div class="nav-item">
                      <a class="nav-link" style="color:#000;" href="{{url('/page/kontak')}}">Contact</a>
                    </div>

                </nav> 

                <div class="nav-mobile">
                  <nav class="navbar navbar-dark bg-warning">
                    <div class="container-fluid">
                      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav-mobile" aria-controls="nav-mobile" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                    </div>
                  </nav>
  
                  <div class="collapse" id="nav-mobile">
                    <div class="bg-light p-4">
                        <ul class="nav dropdown">
                          <li class="dropdown-item">Home</li>
                          <li class="dropdown-item">About</li>
                          <li class="dropdown-item">Paket</li>
                          <li class="dropdown-item">Kontak</li>
                        </ul>
  
                    </div>
                  </div>

                </div>


    
            </div> 
            <!-- akhir row nav -->

            @yield('slider')

          </div>
        </div>
        <!-- akhir header -->

            @yield('content')



    <footer>
      <div class="container pt-5">
        <div class="row text-white">

            <div class="col-md-5">
              <h3>OUR STORY</h3>
              <p>“Bergaul dengan kuda menciptakan keberanian, ketegasan, sikap kecepatan dalam mengambil keputusan,”</p>
            </div>

            <div class="col-md-3">
              <h4>MEDIA SOSIAL</h4>
              <ul>
                <li>Facebook</li>
                <li>Instagram Story</li>
                <li>Telegram</li>
              </ul>
            </div>

            <div class="col-md-3">
              <h4>Lokasi</h4>
              <p>Jl. Kuda No 01 Desa..</p>
             
              <h4>Member</h4>
                <ul>
                  <li><a href="/admin/login">Login</a></li>  
                </ul>

            </div>          


        </div>
      </div>


    </footer>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="{{asset('js/bootstrap.bundle.min.js')}}" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>