@extends('layouts.admin')
@section('content')

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">

                    @if(session("status"))
                        <div class="alert alert-primary" role="alert">
                            {{session("status")}}
                            @endif
                        </div>
                        <div class="card">
                            <div class="card-header" data-background-color="purple">
                                <h4 class="title">Kitap Ekle</h4>
                                <p class="category">kitap Oluşturunuz</p>
                            </div>
                            <div class="card-content">
                                <form enctype="multipart/form-data" action="{{route('admin.kitap.create.post')}}" method="post">
                                    {{csrf_field()}}
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group label-floating">
                                                <label class="control-label">Kitap Adı</label>
                                                <input name="name" type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group label-floating">
                                                <input name="image" type="file" class="form-control" style="opacity: 1; position: inherit">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group label-floating">
                                                <label class="control-label">Kitap Fiyatı</label>
                                                <input name="fiyat" type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group label-floating">
                                                <select name="yazarid" class="form-control" id="">
                                                    @foreach($yazar as $key => $value)
                                                        <option value="{{$value['id']}}">{{$value['name']}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group label-floating">
                                                <select name="kategoriid" class="form-control" id="">
                                                    @foreach($kategori as $key => $value)
                                                        <option value="{{$value['id']}}">{{$value['name']}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group label-floating">
                                                <select name="yayineviid" class="form-control" id="">
                                                    @foreach($yayinevi as $key => $value)
                                                        <option value="{{$value['id']}}">{{$value['name']}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group label-floating">
                                                <label class="control-label">Kitap Açıklama</label>
                                                <textarea name="aciklama" id="" cols="30" rows="10"
                                                          class="form-control"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary pull-right">Kitap Ekle</button>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                </div>

            </div>
        </div>
    </div>
@endsection
