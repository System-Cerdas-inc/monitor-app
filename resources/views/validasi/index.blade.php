<x-app-layout :assets="$assets ?? []">
    <div class="row">
        <div class="col-lg-4 col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="bg-success text-white rounded p-4">
                            <i class="fa-solid fa-check"></i>
                        </div>
                        <h4>Sudah Validasi</h4>
                        <h2 class="counter">{{ $statistics['sudah'] }}</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="bg-warning text-white rounded p-4">
                            <i class="fa-solid fa-hourglass-start"></i>
                        </div>
                        <h4>Proses Validasi</h4>
                        <h2 class="counter">{{ $statistics['proses'] }}</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="bg-danger text-white rounded p-4">
                            <i class="fa-solid fa-circle-xmark"></i>
                        </div>
                        <h4>Belum Validasi</h4>
                        <h2 class="counter">{{ $statistics['belum'] }}</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                        <h4 class="card-title mb-4 mt-2">List Validasi</h4>
                    </div>
                    <div class="card-action">
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="datatable" class="table text-center" data-toggle="data-table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Domain</th>
                                    <th>Status</th>
                                    <th>Status Validasi</th>
                                    <th>Opsi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $no = 1;
                                @endphp
                                @foreach ($validasis as $val)
                                    @php
                                        $status_validasi = $val?->detail_validasi?->status_validasi ?? 'Belum Validasi';
                                        $status_aktif = $val->detail_validasi->status ?? 'Tidak Diketahui';
                                    @endphp
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td><a href="http://{{ $val->domain}}" target="_blank">{{ $val->domain }}</td>
                                        <td>
                                            @if ($status_aktif == 'Tidak Aktif')
                                                <span class="badge rounded-pill bg-danger">{{ $status_aktif }}</span>
                                            @elseif ($status_aktif == 'Suspend' || $status_aktif == 'Tidak Diketahui')
                                                <span class="badge rounded-pill bg-warning">{{ $status_aktif }}</span>
                                            @else
                                                <span class="badge rounded-pill bg-success">{{ $status_aktif }}</span>
                                            @endif
                                        </td>
                                        <td>
                                            @if ($status_validasi == 'Belum Validasi')
                                                <span class="badge rounded-pill bg-danger">{{ $status_validasi }}</span>
                                            @elseif ($status_validasi == 'Proses Validasi')
                                                <span class="badge rounded-pill bg-warning">{{ $status_validasi }}</span>
                                            @else
                                                <span class="badge rounded-pill bg-success">{{ $status_validasi }}</span>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{ route('inputvalidasi', $val->id) }}" class="btn btn-sm btn-warning text-white" title="Edit">
                                                <i class="fa-solid fa-gear"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
