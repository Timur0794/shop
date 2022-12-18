@extends('layouts.main')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Создание продукта</h1>
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
            <form action="{{route('product.update')}}" class="w-25" method="POST">
                @csrf
                @method('POST')
                <div class="form-group">
                    <input type="text" class="form-control" value="{{old('title')}}" name="title" placeholder="Название">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" value="{{old('description')}}" name="description" placeholder="Описание">
                </div>
                <div class="form-group">
                    <textarea name="content"  cols="30" class="form-control" rows="10" placeholder="Контент"></textarea>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" value="{{old('price')}}" name="price'" placeholder="Цена">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" value="{{old('count')}}" name="count" placeholder="Количество на складе">
                </div>
                <input type="submit" class="btn btn-primary" value="Добавить">
            </form>

        </div>

    </div>
    <!-- /.content -->
@endsection
