<x-app-layout :assets="$assets ?? []">
    <div class="col-sm-12 col-lg-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <div class="header-title">
                    <h4 class="card-title mb-4 mt-2">Form Input Data Organisasi Perangkat Daerah</h4>
                </div>
            </div>
            <div class="card-body">
                <form action="tambahuptd" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <label class="form-label">Nama OPD :</label>
                            <select class="form-select @error('opd_id') is-invalid @enderror" name="opd_id">
                                <option value="">--- Pilih OPD ---</option>
                                @foreach ($opds as $opd)
                                    <option value="{{ $opd->id }}" {{ old('opd_id') ==  $opd->id  ? "selected" : "" }}>{{ $opd->nama_opd }} {{ old('nama_opd') }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label class="form-label">Nama UPTD :</label>
                            <input type="text" class="form-control @error('nama_uptd') is-invalid @enderror" required name="nama_uptd" value="{{ old('nama_uptd') }}">
                        </div>
                        <div class="col-md-12 mb-3">
                            <label class="form-label">Alias UPTD :</label>
                            <input type="text" class="form-control @error('alias_uptd') is-invalid @enderror" required name="alias_uptd" value="{{ old('alias_uptd') }}">
                        </div>
                        <div class="col-md-12 mb-3">
                            <label class="form-label">Alamat Kantor :</label>
                            <input type="text" class="form-control @error('alamat') is-invalid @enderror" required name="alamat" value="{{ old('alamat') }}">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Email Utama :</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" required name="email" value="{{ old('email') }}">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Second Email :</label>
                            <input type="email" class="form-control @error('secondemail') is-invalid @enderror" required
                                name="secondemail" value="{{ old('secondemail') }}">
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <button class="btn btn-primary float-end" type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
