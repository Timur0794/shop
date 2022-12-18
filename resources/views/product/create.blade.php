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
            <form action="{{route('product.store')}}" class="w-25" method="POST" enctype="multipart/form-data">
                @csrf
                @method('POST')
                <div class="form-group">
                    <input type="text" class="form-control" value="{{old('title')}}" name="title"
                           placeholder="Название">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" value="{{old('description')}}" name="description"
                           placeholder="Описание">
                </div>
                <div class="form-group">
                    <label for="exampleInputFile">выберите превью</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input name="preview_image" type="file" class="custom-file-input" id="exampleInputFile">
                            <label class="custom-file-label" for="exampleInputFile">выберите изображение</label>
                        </div>
                        <div class="input-group-append">
                            <span class="input-group-text">Загрузка</span>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <textarea name="content" cols="30" class="form-control" rows="10" placeholder="Контент"></textarea>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" value="{{old('price')}}" name="price'" placeholder="Цена">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" value="{{old('count')}}" name="count"
                           placeholder="Количество на складе">
                </div>
                <div class="form-group">
                    <label>Minimal</label>
                    <select name="category_id" class="form-control select2" style="width: 100%;">
                        <option selected="selected">Alabama</option>
                        <option value="1">Alaska</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Multiple (.select2-purple)</label>
                    <div class="select2-purple">
                        <select name="tags[]" class="tags" multiple="multiple" data-placeholder="выберите тег"
                                data-dropdown-css-class="select2-purple" style="width: 100%;">
                            <option>Alabama</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label>Multiple (.select2-purple)</label>
                    <div class="select2-purple">
                        <select name="colors[]" class="colors" multiple="multiple" data-placeholder="выберите тег"
                                data-dropdown-css-class="select2-purple" style="width: 100%;">
                            <option>Alabama</option>
                        </select>
                    </div>
                </div>
                <input type="submit" class="btn btn-primary" value="Добавить">
            </form>

        </div>

    </div>
    <!-- /.content -->
@endsection
