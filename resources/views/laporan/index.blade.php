<x-app-layout :assets="$assets ?? []">
    <div class="col-sm-12 col-lg-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <div class="header-title">
                    <h3 class="card-title mb-4 mt-2">Laporan</h3>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('buat_laporan') }}" method="GET">
                    {{-- @csrf --}}
                    <div class="row">
                        <div class="col-md-6 mb-4">
                            <label class="form-label">Tanggal Mulai :</label>
                            <input type="date" class="form-control @error('tgl_monitor_start') is-invalid @enderror" name="tgl_monitor_start" id="tgl_monitor_start" value="{{ old('tgl_monitor_start') }}">
                        </div>
                        <div class="col-md-6 mb-4">
                            <label class="form-label">Tanggal Akhir :</label> 
                            <input type="date" class="form-control @error('tgl_monitor_end') is-invalid @enderror" name="tgl_monitor_end" id="tgl_monitor_end" value="{{ old('tgl_monitor_end') }}">
                        </div>
                        <hr style="border:0px; border-top: 4px double">
                        <div class="header-title">
                            <h6 class="card-title mb-4 mt-2">Filter Laporan</h6>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Jenis Aset :</label>
                            <select class="form-select form-select-sm" name="jenis">
                                <option selected value="">All</option>
                                <option value="Aplikasi">Aplikasi</option>
                                <option value="Website">Website</option>
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Domain :</label>
                            <select class="form-select form-select-sm" name="domain">
                                <option selected value="">All</option>
                                @foreach ($site as $item)
                                    <option value="{{ $item->id }}">{{ $item->domain }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Status :</label>
                            <select class="form-select form-select-sm" name="status">
                                <option selected value="">All</option>
                                <option value="Aktif">Aktif</option>
                                <option value="Suspend">Suspend</option>
                                <option value="Tidak Aktif">Tidak Aktif</option>
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Lokasi Server :</label>
                            <select class="form-select form-select-sm" name="lokasi_server">
                                <option selected value="">All</option>
                                <option value="Diskominfo">Diskominfo</option>
                                <option value="Diluar">Diluar</option>
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Tahun Pembangunan :</label>
                            <select class="form-select form-select-sm" name="tahun">
                                <option selected value="">All</option>
                                <option value="2016">2016</option>
                                <option value="2017">2017</option>
                                <option value="2018">2018</option>
                                <option value="2019">2019</option>
                                <option value="2020">2020</option>
                                <option value="2021">2021</option>
                                <option value="2022">2022</option>
                                <option value="2023">2023</option>
                                <option value="2024">2024</option>
                                <option value="2025">2025</option>
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Sumber Dana :</label>
                            <select class="form-select form-select-sm" name="sumber_dana">
                                <option selected value="">All</option>
                                <option value="APBD">APBD</option>
                                <option value="Non-APBD">Non-APBD</option>
                            </select>
                        </div>
                    <div class="form-group mt-3">
                        <button class="btn btn-primary" type="submit">Cetak Laporan</button>
                        {{-- <button class="btn btn-primary" type="submit float-end">Laporan Data Aset</button> --}}
                        {{-- <a href="{{ route('buat_laporan') }}" class="btn btn-primary float-end">Cetak Laporan</a> --}}
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
