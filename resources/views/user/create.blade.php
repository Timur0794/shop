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
            <form action="{{route('user.store')}}" class="w-25" method="POST">
                @csrf
                @method('POST')
                <div class="form-group">
                    <input type="text" class="form-control" value="{{old('name')}}" name="name" placeholder="имя">
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" value="{{old('email')}}" name="email" placeholder="email">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="password" placeholder="пароль">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="password_confirmation"
                           placeholder="подтверждение пароля">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" value="{{old('surname')}}" name="surname"
                           placeholder="Фамилия">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" value="{{old('patronymic')}}" name="patronymic"
                           placeholder="Отчество">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" value="{{old('age')}}" name="age" placeholder="Возраст">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" value="{{old('address')}}" name="address" placeholder="Адрес">
                </div>
                <div class="form-group">
                    <select name="gender" class="custom-select form-control" id="exampleSelectBorder">
                        <option disabled selected>Пол</option>
                        <option {{old('gender') == 1 ?' selected ' : ' '}} value="1">Мужской</option>
                        <option {{old('gender') == 2 ?' selected ' : ' '}} value="2">Женский</option>
                    </select>
                </div>
                <input type="submit" class="btn btn-primary" value="Добавить">
            </form>

        </div>

    </div>
    <!-- /.content -->
@endsection
