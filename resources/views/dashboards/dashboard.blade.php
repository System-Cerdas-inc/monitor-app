<x-app-layout :assets="$assets ?? []">
    <div class="row">
        <div class="col-md-12 col-lg-12">
            <div class="row row-cols-1">
                <div class="d-slider1 overflow-hidden ">
                    <ul class="swiper-wrapper list-inline m-0 p-0 mb-2">
                        <div class="col-lg-2 col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="bg-primary text-white rounded p-3">
                                            <i class="fa-solid fa-globe"></i>
                                        </div>
                                        <div class="text-end">
                                            All Sites
                                            <h2 class="counter">{{ $statistics['all_sites'] }}</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="bg-success text-white rounded p-3">
                                            <i class="fa-solid fa-circle-check"></i>
                                        </div>
                                        <div class="text-end">
                                            Aktif
                                            <h2 class="counter">{{ $statistics['active'] }}</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="bg-warning text-white rounded p-3">
                                            <i class="fa-solid fa-circle-xmark"></i>
                                        </div>
                                        <div class="text-end">
                                            Suspend
                                            <h2 class="counter">{{ $statistics['suspend'] }}</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="bg-danger text-white rounded p-3">
                                            <i class="fa-solid fa-ban"></i>
                                        </div>
                                        <div class="text-end">
                                            Tidak Aktif
                                            <h2 class="counter">{{ $statistics['non_active'] }}</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="bg-secondary text-white rounded p-3">
                                            <i class="fa-solid fa-coins"></i>
                                        </div>
                                        <div class="text-end">
                                            Total Nilai Aset
                                            <h2 class="counter">{{ 'Rp. ' . number_format (($statistics['nilai'])) }}</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="row" data-aos="fade-up" data-aos-delay="1100">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                        <h4 class="card-title mb-3">All Sites</h4>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="datatable" class="table text-center" data-toggle="data-table">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Nama OPD/UPTD</th>
                                    <th>Domain</th>
                                    <th>Layanan</th>
                                    <th>Status</th>
                                    <th>Opsi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $no = 1;
                                @endphp
                                @foreach ($sites as $site)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $site->uptd_id != null ? $site->uptd->nama_uptd : $site->opd->nama_opd }}</td>
                                        <td>
                                            <a href="https://{{ $site->domain }} "target="_blank">{{ $site->domain }}</a>
                                        </td>
                                        <td>{{ $site->jenis_layanan }}</td> 
                                        <td>
                                            @if ($site->status == 'Aktif')
                                                <span class="badge rounded-pill bg-success">{{ $site->status }}</span>
                                            @elseif ($site->status == 'Suspend')
                                                <span class="badge rounded-pill bg-warning">{{ $site->status }}</span>
                                            @else
                                                <span class="badge rounded-pill bg-danger">{{ $site->status }}</span>
                                            @endif
                                        </td>
                                        <td>
                                            <a class="btn btn-sm btn-secondary text-white swal-edit-button"
                                                data-target="#commodity_location_edit_modal" data-placement="top"
                                                title="Details">
                                                <i class="fa-solid fa-circle-info"></i>
                                            </a>
                                            <a class="btn btn-sm btn-primary text-white swal-edit-button"
                                                data-target="#commodity_location_edit_modal" data-placement="top"
                                                title="Print">
                                                <i class="fa-solid fa-print"></i>
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
