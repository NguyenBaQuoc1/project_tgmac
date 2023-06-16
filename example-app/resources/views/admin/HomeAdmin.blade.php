@extends('admin.LayOut')
@section('main-content')
    <div class="body-wrapper">
        <div class="container-fluid">
            <div>
                <h2>Danh Sách Sản Phẩm</h2>
            </div>
            <div style="margin: 20px 0px">
                <form action="{{url("/list")}}" method="get">


                    <div class="input-group input-group-sm" style="width: 550px;">

                        <select name="name" class="mr-1">
                            <option value="0">Chọn Loại Sản Phẩm</option>

                            @foreach($category as $data)
                                <option @if(app("request")->input("name")==$data->name) selected
                                        @endif  value="{{$data->id}}"> {{$data->name}}

                                </option>
                            @endforeach


                        </select>


                        <input type="text" value="{{app("request")->input("search")}}" name="search"
                               class="form-control float-right" placeholder="Tìm kiếm">

                        <div class="input-group-append">
                            <button type="submit" class="btn btn-default">tim kiem</button>
                        </div>
                    </div>

                </form>
            </div>
            <table class="table table-bordered" >
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Tên</th>
                    <th scope="col">Ảnh</th>
                    <th scope="col">Giá SP</th>
                    <th scope="col">Số Lượng</th>
                    <th scope="col">Trạng Thái</th>
                    <th scope="col" style="width: 100px;">Loại Sản Phẩm</th>
                    <th scope="col">Bộ Nhớ</th>
                    <th scope="col">Thao Tác</th>
                </tr>
                </thead>
                <tbody>
                @foreach($product as $data)
                    <tr>
                        <th scope="row">1</th>
                        <td>{{$data->name}}</td>
                        <td><img src="../{{$data->thumbnail}}" alt="" srcset="" width="80" height="80"> </td>
                        <td>{{$data->price}}</td>
                        <td>{{$data->quantity}}</td>
                        <td>{{$data->status}}</td>
                        <td>{{$data->Category->name}}</td>
                        <td>{{$data->memory}}</td>
                        <td>
                            <form method="post" action="{{route("delete",["product"=>$data->id])}}" style="width: 50% ; float: left">
                                @method("DELETE")
                                @csrf
                                <button type="submit" onclick=" return confirm('Bạn có chắc muốn xoá sản phẩm???')" class="btn btn-outline-warning">
                                    Delete
                                </button>
                            </form>
                            <a href="{{route("edit-product",["product"=>$data->id])}}">
                                <button type="submit" class="btn btn-outline-warning">
                                    EDIT
                                </button>
                            </a>
                        </td>


                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection
