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
    
                <nav class="navbar navbar-expand-lg  bg-white mt-3 p-4 text-uppercase justify-content-center">

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

                    <!-- <form class="d-flex">
                      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                      <button class="btn btn-outline-success" type="submit">Search</button>
                    </form> -->

                </nav> 
    
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
    <script src="{{asset('js/bootstrap.bundle.min.js')}}" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>