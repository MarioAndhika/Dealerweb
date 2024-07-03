@extends('layouts.admin')

@section('content')
    <div class="container-fluid">

        <!-- DataTales Example -->
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Edit Data Kategori | {{ $category->name }}</h6>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('category.update', $category->id) }}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="">Nama Kategori</label>
                                <input type="text" name="name" id="" required class="form-control"
                                    value="{{ $category->name }}">
                            </div>

                            <div class="text-right">
                                <button type="submit" class="btn btn-primary">Perbarui</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
