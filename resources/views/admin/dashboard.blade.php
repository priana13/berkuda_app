@extends('crudbooster::admin_template')
@section('content')




<div id="box-statistic" class="row">
    <div class="box-header">
        <div class="col-sm-4">
            <div class="small-box bg-aqua">
                <div class="inner">
                    <h3>{{$member}}</h3>

                    <p>Member</p>
                </div>
                <div class="icon">
                    <i class="fa fa-money"></i>
                </div>
            </div>
        </div>

    <div class="col-sm-4">
        <div class="small-box bg-teal">
            <div class="inner">
                <h3>{{$transaksi}}</h3>
                <p>Transaksi</p>
            </div>
            <div class="icon">
                <i class="fa fa-money"></i>
            </div>
        </div>
    </div>

    <div class="col-sm-4">
        <div class="small-box bg-blue">
            <div class="inner">
                <h3>{{number_format($nominal,0)}}</h3>
                <p>Nominal</p>
            </div>
            <div class="icon">
                <i class="fa fa-money"></i>
            </div>
        </div>
    </div>
</div>

@endsection