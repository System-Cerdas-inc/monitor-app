<x-app-layout :assets="$assets ?? []">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <a href="{{ route('inputmonitoring') }}" class="mt-3 btn btn-primary d-block rounded">Mulai Monitoring</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                        <h4 class="card-title mb-4 mt-2">Recent Monitoring</h4>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="datatable" class="table" data-toggle="data-table">
                            <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Domain</th>
                                    <th>Kondisi</th>
                                    <th>Keterangan</th>
                                    <th>Edit</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($monitorings as $item)                                    
                                <tr>
                                    <td>{{ $item->date }}</td>
                                    <td>
                                        <a href="{{ $item->sites?->domain }}" target="_blank">{{ $item->sites?->domain }}</a>
                                    </td>
                                    <td>{{ $item->kondisi }}</td>
                                    <td>{{ $item->keterangan }}</td>
                                    <td>
                                        <a class="btn btn-sm btn-warning text-white swal-edit-button"
                                        data-target="#commodity_location_edit_modal" data-placement="top"
                                        title="Edit">
                                        <i class="fa-solid fa-pen-to-square"></i>
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
