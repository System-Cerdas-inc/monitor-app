<x-app-layout :assets="$assets ?? []">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <div class="header-title">
                    <h4 class="card-title mb-4 mt-2">Form Input Data Organisasi Perangkat Daerah</h4>
                </div>
            </div>
            <div class="card-body">
                <form action="tambahopd" method="POST">
                    @csrf
                    <div class="row">
                        <div class="form-group">
                            <label class="form-label">Nama Organisasi Perangkat Daerah :</label>
                            <input type="text" class="form-control @error('nama_opd') is-invalid @enderror" required name="nama_opd" value="{{ old('nama_opd') }}">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Alias:</label>
                            <input type="text" class="form-control @error('alias_opd') is-invalid @enderror" required name="alias_opd" value="{{ old('alias_opd') }}">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Alamat Kantor :</label>
                            <input type="text" class="form-control @error('alamat') is-invalid @enderror" required name="alamat" value="{{ old('alamat') }}">
                        </div>
                        <div class="form-group col-lg-6">
                            <label class="form-label">Email Utama :</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" required name="email" value="{{ old('email') }}">
                        </div>
                        <div class="form-group col-lg-6">
                            <label class="form-label">Second Email :</label>
                            <input type="email" class="form-control @error('secondemail') is-invalid @enderror" required name="secondemail" value="{{ old('secondemail') }}">
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
