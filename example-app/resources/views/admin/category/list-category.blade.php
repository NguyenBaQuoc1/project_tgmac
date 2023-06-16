@extends('admin.LayOut')
@section('main-content')
    <div class="body-wrapper">
        <div class="container-fluid">
            <div>
                <h2>Danh Sách Loại Sản Phẩm</h2>
            </div>
            <table class="table table-bordered" >
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Category</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($category as $ct)
                    <tr>
                        <th scope="row">{{$ct->id}}</th>
                        <td>{{$ct->name}}</td>
                        <td>
                            <form method="post" action="{{route("delete-category",["category"=>$ct->id])}}">
                                @method("DELETE")
                                @csrf
                                <button type="submit" onclick=" return confirm('Bạn có chắc muốn xoá sản phẩm???')" class="btn btn-outline-warning">
                                    Delete
                                </button>
                            </form>
                            <a href="{{route("edit-category",["category"=>$ct->id])}}">
                                <button type="submit" class="btn btn-outline-warning">
                                    Edit
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
