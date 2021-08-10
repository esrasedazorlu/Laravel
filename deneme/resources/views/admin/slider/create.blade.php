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
                                <h4 class="title">Slider Ekle</h4>
                                <p class="category">Slider Oluşturunuz</p>
                            </div>
                            <div class="card-content">
                                <form enctype="multipart/form-data" action="{{route('admin.slider.create.post')}}" method="post">
                                    {{csrf_field()}}

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group label-floating">
                                                <input name="image" type="file" style="opacity: 1; position: inherit">
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary pull-right"> Slider Ekle</button>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                </div>

            </div>
        </div>
    </div>
@endsection
