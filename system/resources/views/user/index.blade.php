@extends('admin.base')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="card">
                    <div class="card-header">
                        Data User
                        <a href="{{url('admin/user/create')}}" class="btn btn-dark float-right"><i class="fa fa-plus"></i>Tambah Data</a>
                    </div>
                    <div class="card-bdoy">
                        <table class="table">
                            <thread>
                                <th>No</th>
                                <th width="200px">Aksi</th>
                                <th>Nama</th>
                                <th>Username</th>
                                <th>Jenis Kelamin</th>
                                <th>Email</th>
                                <th>Produk</th>
                            </thread>
                            <tbody>
                                @foreach($list_user as $user)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="{{url('admin/user', $user->id)}}" class="btn btn-dark"><i class="fa fa-info"></i></a>
                                            <a href="{{url('admin/user', $user->id)}}/edit" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                                            @include('template.utils.delete', ['url' => url('admin/user', $user->id)])
                                        </div>
                                    </td>
                                    <td>{{$user->nama}}</td>
                                    <td>{{$user->username}}</td>
                                    <td>{{$user->jenis_kelamin_string}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->produk_count}}</td>
                                    <td></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection