@extends('layouts.admin')

@section('content')
    <div class="container-fluid">

        <!-- DataTales Example -->
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Edit Data Mobil</h6>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('car.update', $car->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="">Kategori</label>
                                <select name="category_id" id="" class="form-control" required>
                                    <option value="" selected disabled>-- Pilih Kategori --</option>
                                    @forelse ($categories as $item)
                                        <option value="{{ $item->id }}"
                                            @if ($item->id == $car->category_id) selected @endif>{{ $item->name }}</option>
                                    @empty
                                        <option value="">Buat Kategori Dulu!</option>
                                    @endforelse
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="">Nama Mobil</label>
                                <input type="text" name="name" id="" required class="form-control"
                                    value="{{ $car->name }}">
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Transmisi</label>
                                        <select name="transmision" id="" class="form-control" required>
                                            <option @if ($car->transmision == 'Manual') selected @endif value="Manual">Manual
                                            </option>
                                            <option @if ($car->transmision == 'Automatic') selected @endif value="Automatic">
                                                Automatic</option>
                                            <option @if ($car->transmision == 'Semi-Automatic') selected @endif
                                                value="Semi-Automatic">Semi-Automatic</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Bahan Bakar</label>
                                        <input type="text" name="fuel" id="" required class="form-control"
                                            placeholder="bensin, avtur, dll" value="{{ $car->fuel }}">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Kapasitas Mesin</label>
                                        <input type="text" name="enggine" id="" required class="form-control"
                                            placeholder="dalam CC" value="{{ $car->enggine }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Harga</label>
                                        <input type="number" name="price" placeholder="tanpa titik, tanpa koma"
                                            id="" required class="form-control" value="{{ $car->price }}">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Kursi</label>
                                        <input type="text" name="seat" id="" class="form-control" required
                                            value="{{ $car->seat }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Gambar (opsional)</label>
                                        <input type="file" name="image" id="" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="">Deskripsi</label>
                                <textarea id="summernote" name="description">{{ $car->description }}</textarea>
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

@section('style')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@endsection

@section('script')
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <script>
        $('#summernote').summernote({
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'underline', 'clear']],
                ['fontname', ['fontname']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link']],
                ['view', ['codeview']],
            ],
        });
    </script>
@endsection
