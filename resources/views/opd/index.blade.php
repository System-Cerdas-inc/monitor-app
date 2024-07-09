<x-app-layout :assets="$assets ?? []">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                        <h4 class="card-title mb-4 mt-2">Data OPD Provinsi Banten</h4>
                    </div>
                    <div class="card-action">
                        <a href="{{ route('inputopd') }}" class="btn btn-primary mt-2" {{ auth()->user()->user_type != 'admin' ? 'disabled' : null  }}>Tambah Data</a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="datatable" class="table text-center" data-toggle="data-table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama OPD</th>
                                    <th>Alamat Kantor</th>
                                    <th>Email</th>
                                    <th>Opsi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($opds as $opd)
                                    <tr>
                                        <td>{{ $opd->id }}</td>
                                        <td>{{ $opd->nama_opd }}</td>
                                        <td>{{ $opd->alamat }}</td>
                                        <td>{{ $opd->email }}</td>
                                        <td>
                                            {{-- <a class="btn btn-sm btn-success text-white" title="Details">
                                                <i class="fa-solid fa-circle-info"></i>
                                            </a> --}}
                                            @if(auth()->user()->user_type == 'admin')
                                            <a href="list/{{ $opd->id }}/edit"
                                                class="btn btn-sm btn-warning text-white" title="Edit">
                                                <i class="fa-solid fa-pen-to-square"></i>
                                            </a>
                                            <form action="{{ route('deleteopd', $opd->id) }}" method="POST" style="display:inline">
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
