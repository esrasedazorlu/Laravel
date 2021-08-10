@extends('layouts.app')
@section('content')

    <div class="breadcrumbs">
        <div class="container">
            <div class="breadcrumbs-main">
                <ol class="breadcrumb">
                    <li><a href="{{route('index')}}">Anasayfa</a></li>
                    <li class="active">Sepetim</li>
                </ol>
            </div>
        </div>
    </div>
    <div class="ckeckout">
        <div class="container">
            <div class="ckeck-top heading">
                <h2>SEPETİM</h2>
            </div>
            <div class="ckeckout-top">
                <div class="cart-items">
                    <h3>Sepetim ({{\App\Helper\sepetHelper::countData()}})</h3>


                    <div class="in-check" >
                        <ul class="unit">
                            <li><span>Resim</span></li>
                            <li><span>Kitap Adı</span></li>
                            <li><span>Fiyatı</span></li>
                            <li> </li>
                            <div class="clearfix"> </div>
                        </ul>
                        @foreach(\App\Helper\sepetHelper::alllist() as $key => $value)
                        <ul class="cart-header">
                            <a href="{{route('basket.remove',['id'=>$key])}}"><div class="close1"> </div></a>
                            <li class="ring-in"><img style="width: 100px; height: 100px;" src="{{$value['image']}}" class="img-responsive" alt="">
                            </li>
                            <li><span class="name">{{$value['name']}}</span></li>
                            <li><span class="cost">{{$value['fiyat']}} tl</span></li>
                            <div class="clearfix"> </div>
                        </ul>
                        @endforeach
                    </div>
                </div>
            </div>

            <a href="{{route('basket.complate')}}">Alışverişi tamamla</a>

        </div>
    </div>


@endsection
