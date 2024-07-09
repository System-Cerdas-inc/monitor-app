<x-app-layout :assets="$assets ?? []">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                        <h4 class="card-title mb-4 mt-2">Data Seluruh Aplikasi dan Website Pemerintah Provinsi Banten
                        </h4>
                    </div>
                    <div class="card-action">
                        <a href="{{ route('inputsite') }}" class="btn btn-primary mt-2 {{ auth()->user()->user_type != 'admin' ? 'disabled' : null  }}">Tambah Data</a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="datatable" class="table text-center" data-toggle="data-table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Domain</th>
                                    <th>Jenis</th>
                                    <th>Layanan</th>
                                    <th>Lokasi Server</th>
                                    <th>Tahun</th>
                                    <th>Opsi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $no = 1;
                                @endphp
                                @foreach ( $sites as $site )
                                <tr>
                                    <td class="text-center">{{ $no++ }}</td>
                                    {{-- <td>{{ $site->uptd_id != null ? $site->uptd->nama_uptd : $site->opd->nama_opd  }}</td> --}}
                                    <td><a href="https://{{ $site->domain }}" target="_blank">{{ $site->domain }}</a></td>
                                    <td>{{ $site->jenis_aset }}</td>
                                    <td>{{ $site->jenis_layanan }}</td>
                                    <td>{{ $site->lokasi_server }}</td>
                                    <td>{{ $site->tahun }}</td>
                                    <td>
                                        @if(auth()->user()->user_type == 'admin')
                                        <a href="list/{{ $site->id }}/edit" class="btn btn-sm btn-warning text-white swal-edit-button"
                                            data-target="#commodity_location_edit_modal" data-placement="top"
                                            title="Edit">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                        </a>
                                        <form action="{{ route('deletesite', $site->id) }}" method="POST" style="display:inline">
                                            @method('delete')
                                            @csrf
                                            <button type="submit"
                                                class="btn btn-sm btn-danger text-white" title="Hapus Data">
                                                <i class="fa-solid fa-trash"></i>
                                            </button>
                                        </form>
                                        @else
                                        <span class="badge rounded-pill bg-danger">Tidak Ada Akses</span>
                                        @endif
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
