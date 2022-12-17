@extends('layouts.main')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Редактирование тега</h1>
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
            <form action ="{{route('color.update', $color->id)}}" class="w-25" method="POST">
                @csrf
                @method('patch')
                <div class="form-group">
                    <input type="text" class="form-control" name="title" placeholder={{$color->title}}>
                </div>
                <input type="submit" class="btn btn-primary" value="Добавить">
            </form>

        </div>

    </div>
    <!-- /.content -->
@endsection
