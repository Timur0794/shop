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
                    <a href="{{route('product.edit', $product->id)}}"
                       class="btn btn-block btn-primary">Редактировать</a>
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
                        <h3 class="card-title">Продукт</h3>
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
                                <td>Название продукта</td>
                                <td>{{$product->title}}</td>
                            </tr>
                            <tr>
                                <td>Описание</td>
                                <td>{{$product->description}}</td>
                            </tr>
                            <tr>
                                <td>Контент</td>
                                <td>{{$product->content}}</td>
                            </tr>
                            <tr>
                                <td>price</td>
                                <td>{{$product->price}}</td>
                            </tr>
                            <tr>
                                <td>Остаток на складе</td>
                                <td>{{$product->count}}</td>
                            </tr>
                            <tr>
                                <td>Категория</td>
                                <td>{{$product->category->title}}</td>
                            </tr>
                            <tr>
                                <td>Цвет</td>
                                @foreach($product->colors as $prodColor)
                                    <td>
                                        <div style="width: 16px; height: 16px; background: {{$prodColor->title}}"></div>
                                    </td>
                                @endforeach
                            </tr>
                            </tbody>
                        </table>
                        <div class="form-group">
                            <label>Превью</label>
                            <div><img src="{{url('storage/' . $product->preview_image)}}" alt="preview_image"
                                      class="w-50">
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
