@extends('layouts.admin')

@section('content')
    <div class="container-fluid">

        <!-- DataTales Example -->
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Edit Transaksi | {{ $trx->id }}</h6>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('Admin.Save', $trx->id) }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="">Ubah Status</label>
                                <select name="status" id="" class="form-control" required>
                                    <option value="Pending" @if ($trx->status == 'Pending') selected @endif>Pending
                                    </option>
                                    <option value="Diambil" @if ($trx->status == 'Diambil') selected @endif>Diambil
                                    </option>
                                    <option value="Dibayar" @if ($trx->status == 'Dibayar') selected @endif>Dibayar
                                    </option>
                                    <option value="Ditolak" @if ($trx->status == 'Ditolak') selected @endif>Ditolak
                                    </option>
                                </select>
                            </div>

                            <div class="text-right">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
