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
                                <h4 class="title">Yazar Düzenle</h4>
                                <p class="category">{{$data[0]['name']}}</p>
                            </div>
                            <div class="card-content">
                                <form enctype="multipart/form-data" action="{{route('admin.yazar.edit.post',['id'=>$data[0]['id']])}}" method="post">
                                    {{csrf_field()}}
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group label-floating">
                                                <input name="name" type="text" class="form-control" value="{{$data[0]['name']}}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group label-floating">
                                                @if($data[0]['image']!="")
                                                    <img src="{{asset($data[0]['image'])}}" alt="" style="width: 120px;height: 120px">
                                                @endif
                                                <input name="image" type="file" style="opacity: 1; position: inherit">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group label-floating">
                                                <textarea class="form-control" name="bio" id="" cols="30" rows="10">{{$data[0]['bio']}}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary pull-right"> Yazar Düzenle</button>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                </div>

            </div>
        </div>
    </div>
@endsection
