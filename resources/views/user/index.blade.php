@extends('layouts.main')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Пользователи</h1>
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
                <a href="{{route('user.create')}}" class="btn btn-block btn-primary">Создать</a>
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
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Имя</th>
                                <th>Фамилия</th>
                                <th>Отчество</th>
                                <th>Email</th>
                                <th>Возраст</th>
                                <th>Пол</th>
                                <th>Адрес</th>
                                <th>Удаление</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <td>{{$user->id}}</td>
                                    <td><a href="{{route('user.show', $user->id)}}">{{$user->name}}</a></td>
                                    <td>{{$user->surname}}</td>
                                    <td>{{$user->patronymic}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->age}}</td>
                                    <td>{{$user->genderTitle}}</td>
                                    <td>{{$user->address}}</td>
                                    <td>
                                        <form action="{{route('user.delete', $user->id)}}" method="post">
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
