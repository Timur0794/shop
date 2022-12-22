@extends('layouts.main')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Теги</h1>
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
            <div class="row col-2">
                <a href="{{route('color.create')}}" class="btn btn-block btn-primary">Создать</a>
            </div>
            <!-- Small boxes (Stat box) -->
            <div class="row">

                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Категории</h3>
                        <div class="card-tools">
                            <div class="input-group input-group-sm" style="width: 150px;">
                            </div>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Наименование</th>
                                <th>Цвет</th>
                                <th>Удалить</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach($colors as $color)
                                <tr>
                                    <td>{{$color->id}}</td>
                                    <td><a href="{{route('color.edit', $color->id)}}">{{$color->title}}</a></td>
                                    <td><div style="width: 16px; height: 16px; background: {{$color->title}}"></div></td>
                                    <td>
                                        <form action="{{route('color.delete', $color->id)}}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="border-0 bg-transparent">
                                                <i class="fas fa-trash text-danger"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
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
