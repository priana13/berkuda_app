@extends('layout.app')

@section('slider')

    <div class="row">

      <div class="carousel slide" style="height:150px;">

          <div class="carousel-item active p-5 ">
              <h5 class="fs-1 text-center text-white text-uppercase" >PAKET</h5> 
          </div>
      </div>
      
    </div>
    <!-- akhir div slider -->

@endsection

@section('content')

  </section>

  <section class="pb-5 pt-4" style="background-color: #FEFAF1;background-image: url('{{asset('uploads/img/bg2.png')}}');">
  <div class="container">
  {{-- <div class="row" > --}}
{{-- 
  <div class="" style="margin-top: 30px; margin-bottom: 5px;">
    <h2 class="text-center">TOP STORY</h2>
  </div> --}}

  {{-- <div class="bg-warning m-auto" style="width:30px;hight:1px;padding:1px;"></div> --}}

  {{-- </div> --}}
  <!-- Akhir row -->

  <div class="row mt-5">

    <div class="col-md-7">

        <div class="row mb-4">
          
          {{-- <iframe width="100%" height="400" src="https://www.youtube.com/embed/bdcWkTm9lNo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> --}}
          <img src="/{{$product->image}}" class="img-fluid" alt="">
        </div>


        <div class="row">

          <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
              <button class="nav-link active" id="pills-desc-tab" data-bs-toggle="pill" data-bs-target="#pills-desc" type="button" role="tab" aria-controls="pills-desc" aria-selected="true">Deskripsi</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="pills-rute-tab" data-bs-toggle="pill" data-bs-target="#pills-rute" type="button" role="tab" aria-controls="pills-rute" aria-selected="false">Rute</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="pills-review-tab" data-bs-toggle="pill" data-bs-target="#pills-review" type="button" role="tab" aria-controls="pills-review" aria-selected="false">Review</button>
            </li>
          </ul>
          <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-desc" role="tabpanel" aria-labelledby="pills-desc-tab">

              <p>{!!$product->deskripsi!!}</p>
            </div>
            <div class="tab-pane fade" id="pills-rute" role="tabpanel" aria-labelledby="pills-rute-tab">

              <p></p>

            </div>
            <div class="tab-pane fade" id="pills-review" role="tabpanel" aria-labelledby="pills-review-tab">

              

            </div>
          </div>

        </div>

    </div>

    <div class="col-md-5 ml-2">
      <div class="row mb-4">

        <h3>{{$product->nama_produk}}</h4>

        <div class="row">
          <div class="form-group col-3">
            Pilih Paket:
          </div>
            @foreach($product->paket as $row)
              <button class="btn btn-sm bg-gray col-2" 
              style="margin-right:3px;background-color:#c6c3b3;"
              onclick="pilih_paket({{$row->id}});"
              
              >{{$row->nama}}</button>
            @endforeach
        </div> 
        
      </div>

  
      <h6 clsss="h6">Paket Terpilih:  <strong> <span id="paket_terpilih">-</span></strong></h6>
      <h6 clsss="h6">Pertemuan:  <strong> <span id="pertemuan">{{$product_selected['qty']}}</span></strong> x</h6>


      {{-- <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Non voluptas expedita consequatur aliquam doloribus fugit quaerat porro magnam assumenda veritatis. Sequi perspiciatis ipsum possimus? At, assumenda qui? Minima, consequatur architecto.</p> --}}


      <h1 class="d-flex align-items-center"> <i class="fas fa-tags mr-2 fs-3"></i>Rp. <span id="harga">{{number_format($product_selected['harga'])}}</span></h1>

      <p> <span class="presentasi" >0%</span>  <span class="harga-asli">Rp. {{number_format($product_selected['harga'])}}</span> </p>
      {{-- <div class="d-flex alhttps://placeimg.com/1000/400/techign-items-center">
           <p> <i class="fas fa-map-marker-alt"></i> <span class="text-secondary ml-1">Member</span> </p>
      </div> --}}
      

      <form action="{{route('order')}}" class="form-inline" method="post">
          @csrf
          <input type="hidden" name="produk_id" value="{{$product->id}}">
          <input type="hidden" id="paketId" name="paket">

          <div class="form-group">
              <input type="text" name="nama" class="form-control mb-2 mr-2 @error('nama') is-invalid @enderror" placeholder="Nama" value="{{old('nama')}}">
              <!-- @error('nama')
                  <div class="alert alert-danger">{{ $message }}</div>
              @enderror -->
            </div>

          <div class="form-group">
            <input type="text" name="hp" class="form-control mb-2 mr-2 @error('hp') is-invalid @enderror" placeholder="No Whatsapp" value="{{old('hp')}}">
              <!-- @error('hp')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror -->
        </div>

        <div class="form-group">
          <input type="number" name="jumlah" class="form-control mb-2 mr-2 @error('jumlah') is-invalid @enderror" placeholder="Jumlah Orang" value="{{old('jumlah')}}">
            <!-- @error('jumlah')
              <div class="alert alert-danger">{{ $message }}</div>
            @enderror -->
      </div>

          <div class="form-group">
              <button class="btn btn-lg btn-warning me-md-2 text-white tombo-slider form-control" id="daftar" onclick="validasi();">DAFTAR</button>
          </div>

      </form>


    </div>
  </div>

  </div>
  </section>


  <script>

        var paket = {!!json_encode($paket)!!}

        function pilih_paket(id){

          // console.log(paket)

          $.each(paket,function(index , value){
              console.log(value);

              if(value.id == id){
                  var harga = new Intl.NumberFormat().format(value.harga);
                  // console.log(harga)
                $('#pertemuan').text(value.qty);
                $('#harga').text(harga);
                $('#paketId').val(id);
                $('#paket_terpilih').text(value.paket);

              }
          });

 
          // var cari_paket = paket.find(element=>element > id);

          // console.log(cari_paket);

        }

        function validasi(){
         var paketId =  $('#paketId').val();
          if(paketId == ''){
            $('#daftar').event.preventDefalt();
            alert('pilih paket terlebih dahulu');
          }
        }

  </script>


@endsection