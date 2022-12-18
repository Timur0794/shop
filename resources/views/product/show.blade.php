@extends('layouts.main')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{$product->title}}</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active">Главная</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row col-12 d-flex">
                <div>
                <a href="{{route('product.edit', $product->id)}}" class="btn btn-block btn-primary">Редактировать</a>
                </div>
                <form action="{{route('product.delete', $product->id)}}" method="post">
                    @csrf
                    @method('delete')
                    <input type="submit" class="btn btn-danger" value="Удалить">
                </form>
            </div>

            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="card w-auto">
                    <div class="card-header">
                        <h3 class="card-title">Пользователи</h3>
                        <div class="card-tools">
                            <div class="input-group input-group-sm" style="width: 250px;">
                            </div>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <tbody>
                            <tr>
                                <td>ID</td>
                                <td>{{$product->id}}</td>
                            </tr>
                            <tr>
                                <td>Имя</td>
                                <td>{{$product->title}}</td>
                            </tr>
                            <tr>
                                <td>Фамилия</td>
                                <td>{{$product->description}}</td>
                            </tr>
                            <tr>
                                <td>Отчество</td>
                                <td>{{$product->patronymic}}</td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>{{$product->email}}</td>
                            </tr>
                            <tr>
                                <td>Возраст</td>
                                <td>{{$product->age}}</td>
                            </tr>
                            <tr>
                                <td>Пол</td>
                                <td>{{$product->genderTitle}}</td>
                            </tr>
                            <tr>
                                <td>Адрес</td>
                                <td>{{$product->address}}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
