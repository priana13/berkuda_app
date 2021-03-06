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




<section class="pb-5 pt-4" style="background-color: #FEFAF1;background-image: url('{{asset('uploads/img/bg2.png')}}');">
<div class="container">

    <div class="row justify-content-center mt-3">

        @foreach($products as $product)       

            <div class="card m-2 bg-white" style="width: 18rem; border:0px;">
            <img src="{{$product->image}}" class="card-img-top img-fluid" alt="{{$product->nama_produk}}">
            <div class="card-body">
                <h5 class="card-title">{{$product->nama_produk}}</h5>
                <h2>Rp. {{number_format($product->harga)}}</h2>
                <p class="card-text">
                    
                @foreach($product->paket as $row)
                    <span class="btn btn-sm btn-warning">{{$row->nama}}</span>
                @endforeach

                </p>

                <a class="btn btn-lg btn-outline-warning text-warning tombo-slider"  href="{{route('product.show',$product->id)}}">DAFTAR</a>
            </div>
            </div>

        @endforeach

        <div class="m-4 d-flex justify-content-center">
            <a href="?page=all" class ="btn btn-primary text-center">Tampilkan Semua</a>
        </div>

    </div>
</div>
</section>

@endsection