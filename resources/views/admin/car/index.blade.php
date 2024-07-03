@extends('layouts.admin')

@section('style')
    <!-- Custom styles for this page -->
    <link href="/adm/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
@endsection

@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Mobil</h1>
        <p class="mb-4">
            <a href="{{ route('car.create') }}" class="btn btn-primary">Tambah Mobil</a>
        </p>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Data Mobil</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Kategori</th>
                                <th>Gambar</th>
                                <th>Nama</th>
                                <th>Transmisi</th>
                                <th>Bahan Bakar</th>
                                <th>Kapasitas Mesin</th>
                                <th>Kursi</th>
                                <th>Harga</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Kategori</th>
                                <th>Gambar</th>
                                <th>Nama</th>
                                <th>Transmisi</th>
                                <th>Bahan Bakar</th>
                                <th>Kapasitas Mesin</th>
                                <th>Kursi</th>
                                <th>Harga</th>
                                <th>Aksi</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($cars as $item)
                                <tr>
                                    <td>{{ $item->category->name }}</td>
                                    <td>
                                        <img src="{{ asset('car/' . $item->image) }}" alt="" width="100">
                                    </td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->transmision }}</td>
                                    <td>{{ $item->fuel }}</td>
                                    <td>{{ $item->enggine }}</td>
                                    <td>{{ $item->seat }}</td>
                                    <td>Rp {{ number_format($item->price) }}</td>
                                    <td>
                                        <a href="{{ route('car.edit', $item->slug) }}" class="badge bg-warning">Edit</a>
                                        <form action="{{ route('car.destroy', $item->id) }}" method="POST"
                                            class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="badge bg-danger border-0">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
@endsection

@section('script')
    <!-- Page level plugins -->
    <script src="/adm/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="/adm/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <script src="/adm/js/demo/datatables-demo.js"></script>
@endsection
