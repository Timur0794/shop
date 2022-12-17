@extends('layouts.main')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Введите код цвета</h1>
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
    <div class="row">
        <div class="col-12">
            <form action="{{route('user.update', $user->id)}}" class="w-25" method="POST">
                @csrf
                @method('patch')
                <div class="form-group">
                    <input type="text" class="form-control" value="{{$user->name ?? old('name')}}" name="name" placeholder="имя">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" value="{{$user->surname ?? old('surname')}}" name="surname"
                           placeholder="Фамилия">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" value="{{$user->patronymic ?? old('patronymic')}}" name="patronymic"
                           placeholder="Отчество">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" value="{{$user->age ?? old('age')}}" name="age" placeholder="Возраст">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" value="{{$user->address ?? old('address')}}" name="address" placeholder="Адрес">
                </div>
                <div class="form-group">
                    <select name="gender" class="custom-select form-control" id="exampleSelectBorder">
                        <option disabled selected>Пол</option>
                        <option {{$user->gender ?? old('gender') == 1 ?' selected ' : ' '}} value="1">Мужской</option>
                        <option {{$user->gender ?? old('gender') == 2 ?' selected ' : ' '}} value="2">Женский</option>
                    </select>
                </div>
                <input type="submit" class="btn btn-primary" value="Добавить">
            </form>

        </div>

    </div>
    <!-- /.content -->
@endsection
