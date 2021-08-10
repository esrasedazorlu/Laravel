@extends('layouts.app')
@section('content')

    <div class="breadcrumbs">
        <div class="container">
            <div class="breadcrumbs-main">
                <ol class="breadcrumb">
                    <li><a href="{{route('index')}}">Anasayfa</a></li>
                    <li class="active">Alışverişi tamamla</li>
                </ol>
            </div>
        </div>
    </div>
    <div class="contact">
        <div class="container">
            <div class="contact-top heading">
                <h2>BİLGİLERİ DOLDURUNUZ</h2>
            </div>

            @if(session('status'))
                {{session('status')}}
            @endif

            <div class="contact-text">

                <div class="col-md-12 contact-right">
                    <form action="{{route('basket.complateStore')}}" method="POST">
                        {{csrf_field()}}
                        <input type="text" name="adres" required placeholder="Adres">
                        @error('adres')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror

                        <input type="text" name="telefon" required placeholder="Phone">
                        @error('telefon')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror

                        <textarea name="mesaj" placeholder="Message" ></textarea>
                        <div class="submit-btn">
                            <input type="submit" value="TAMAMLA">
                        </div>
                    </form>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>

@endsection
