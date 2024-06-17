<x-app-layout :assets="$assets ?? []">
    <div class="row">
        <div class="col-sm-12 col-lg-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                        <h4 class="card-title mb-4 mt-2">Edit Data Aplikasi & Website Provinsi Banten</h4>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{ route('updatesite', $site->id) }}" method="POST" enctype="multipart/form-data">
                        @method('put')
                        @csrf
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <label class="form-label">Nama OPD :</label>
                                <select class="form-select @error('opd_id') is-invalid @enderror" id="opd_id" required name="opd_id">
                                    <option value="">--- Pilih OPD ---</option>
                                    @foreach ($opds as $opd)
                                        <option value="{{ $opd->id }}" {{ $site->opd_id ==  $opd->id  ? 'selected' : '' }}>{{ $opd->nama_opd }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label class="form-label">Nama UPTD :</label>
                                <select class="form-select @error('uptd_id') is-invalid @enderror" id="uptd_id" name="uptd_id">
                                    <option value="">--- Pilih UPTD ---</option>
                                    @foreach ($uptds as $uptd)
                                        <option value="{{ $uptd->id }}" {{ $site->uptd_id == $uptd->id ? 'selected' : '' }}>{{ $uptd->nama_uptd }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-6 mb-2">
                                <label class="form-label">Domain/URL :</label>
                                <div class="form-group input-group"> 
                                    <span class="input-group-text">https://</span>
                                    <input type="text" class="form-control @error('domain') is-invalid @enderror" required name="domain" value="{{ old('domain') ?? $site->domain}}">
                                </div>
                            </div>
                            <div class="col-md-6 mb-2">
                                <label class="form-label">Lokasi Server :</label>
                                <select class="form-select @error('lokasi_server') is-invalid @enderror" required name="lokasi_server">
                                    <option value="">--- Pilih Lokasi Server ---</option>
                                    @foreach ($lokasi_server as $lok)
                                        <option {{ old('lokasi_server') ?? $site->lokasi_server == $lok ? 'selected' : '' }}>{{ $lok }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-6 mb-4">
                                <label class="form-label">Jenis Layanan:</label>
                                <select class="form-select @error('jenis_layanan') is-invalid @enderror" required name="jenis_layanan">
                                    <option value="">--- Pilih Jenis Layanan ---</option>
                                    @foreach ($jenis_layanan as $jl)
                                        <option {{ old('jenis_layanan') ?? $site->jenis_layanan == $jl ? 'selected' : '' }}>{{ $jl }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-6 mb-4">
                                <label class="form-label">Jenis Aset:</label>
                                <select class="form-select @error('jenis_aset') is-invalid @enderror" required name="jenis_aset">
                                    <option value="">--- Pilih Jenis Aset---</option>
                                    @foreach ($jenis_aset as $ja)
                                        <option {{ old('jenis_aset') ?? $site->jenis_aset == $ja ? 'selected' : '' }}>{{ $ja }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-4 mb-2">
                                <label class="form-label">Tahun Pembangunan :</label>
                                <select class="form-select @error('tahun') is-invalid @enderror" required name="tahun">
                                    <option value="">--- Pilih Tahun ---</option>
                                    @foreach ($tahun as $th)
                                        <option {{ old('tahun') ?? $site->tahun == $th ? 'selected' : '' }}>{{ $th }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-4 mb-2">
                                <label class="form-label">Sumber Dana :</label>
                                <select class="form-select @error('sumber_dana') is-invalid @enderror" required name="sumber_dana">
                                    <option value="">--- Pilih Sumber Dana ---</option>
                                    @foreach ($sumber_dana as $sd)
                                        <option {{ old('sumber_dana') ?? $site->sumber_dana == $sd ? 'selected' : '' }}>{{ $sd }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-4 mb-2">
                                <label class="form-label">Nilai Asset :</label>
                                <div class="form-group input-group">
                                    <input type="number" class="form-control @error('nilai') is-invalid @enderror" required name="nilai" value="{{ old('nilai') ?? $site->nilai }}">
                                </div>
                            </div>
                            <div class="col-md-12 mt-2">
                                <div class="form-group">
                                    <label class="form-label">Deskripsi Aplikasi/Website :</label>
                                    <textarea class="form-control @error('deskripsi') is-invalid @enderror" style="height: 150px" required name="deskripsi">{{ old('deskripsi') ?? $site->deskripsi }}</textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Upload Dokumen Kerangka Acuan Kerja/TOR :</label>
                                <input type="file" class="form-control mb-2 @error('kak') is-invalid @enderror" {{ empty($site->kak) ? 'required' : null }} name="kak">
                                @if($site->kak)
                                    <a href="{{ asset('storage/kak/'.$site->kak) }}" target="_blank">Lihat dokumen</a>
                                @endif
                            </div>
                            <div class="form-group">
                                <label class="form-label">Upload Dokumen Proses Bisnis :</label>
                                <input type="file" class="form-control mb-2 @error('probis') is-invalid @enderror" {{ empty($site->probis) ? 'required' : null }} name="probis">
                                @if($site->probis)
                                    <a href="{{ asset('storage/probis/'.$site->probis) }}" target="_blank">Lihat dokumen</a>
                                @endif
                            </div>
                            <div class="form-group">
                                <label class="form-label">Upload Dokumen Manual Book :</label>
                                <input type="file" class="form-control mb-4 @error('manual_book') is-invalid @enderror" {{ empty($site->manual_book) ? 'required' : null }} name="manual_book">
                                @if($site->manual_book)
                                    <a href="{{ asset('storage/manual_book/'.$site->manual_book) }}" target="_blank">Lihat dokumen</a>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary float-end" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @push('scripts')
        <script>
            $('#opd_id').change(function() {
                var opd_id = $(this).val();
                if (opd_id) {
                    $.ajax({
                        type: "GET",
                        url: "/uptd/getuptd?opd_id=" + opd_id,
                        dataType: 'JSON',
                        success: function(res) {
                            console.log(res);
                            if (res) {
                                $("#uptd_id").empty();
                                $("#uptd_id").append('<option value="">--- Pilih UPTD ---</option>');
                                $.each(res, function(nama_uptd, uptd_id) {
                                    $("#uptd_id").append('<option value="' + uptd_id + '">' +
                                        nama_uptd +
                                        '</option>');
                                });
                            } else {
                                $("#id_uptd").empty();
                            }
                        }
                    });
                } else {
                    $("#id_uptd").empty();
                }
            });
        </script>
    @endpush
</x-app-layout>
