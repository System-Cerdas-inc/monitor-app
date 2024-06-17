<x-app-layout :assets="$assets ?? []">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                        <h4 class="card-title mb-4 mt-2">Data UPTD Provinsi Banten</h4>
                    </div>
                    <div class="card-action">
                        <a href="{{ route('inputuptd') }}" class="btn btn-primary mt-2">Tambah Data</a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="datatable" class="table text-center" data-toggle="data-table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama UPTD</th>
                                    <th>Alamat Kantor</th>
                                    <th>Email</th>
                                    <th>Opsi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($uptds as $uptd)
                                    <tr>
                                        <td>{{ $uptd->id }}</td>
                                        <td>{{ $uptd->nama_uptd }}</td>
                                        <td>{{ $uptd->alamat }}</td>
                                        <td>{{ $uptd->email }}</td>
                                        <td>
                                            <a href="list/{{ $uptd->id }}/edit"
                                                class="btn btn-sm btn-warning text-white" title="Edit">
                                                <i class="fa-solid fa-pen-to-square"></i>
                                            </a>
                                            <form action="{{ route('deleteuptd', $uptd->id) }}" method="POST" style="display:inline">
                                                @method('delete')
                                                @csrf
                                                <button type="submit" class="btn btn-sm btn-danger text-white"
                                                    title="Hapus Data">
                                                    <i class="fa-solid fa-trash"></i>
                                                </button>
                                            </form>
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
