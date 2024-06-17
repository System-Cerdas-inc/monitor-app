<x-app-layout :assets="$assets ?? []">
    <div class="row">
        <div class="col-sm-12">
            <form action="{{ route('tambahmonitoring') }}" method="POST">
                @csrf
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title mb-4 mt-2">Form Monitoring</h4>
                        </div>
                        <div class="form-group">
                            <input type="date" class="form-control mt-2" required name="date">
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="datatable" class="table" data-toggle="data-table">
                                <thead>
                                    <tr>
                                        <th class="text-center">No</th>
                                        <th class="text-center">Domain</th>
                                        <th class="text-center">Kondisi</th>
                                        <th class="text-center">Keterangan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $no = 1;
                                    @endphp
                                    @foreach ($sites as $site )
                                    <tr>
                                        <td class="text-center">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="selected_sites[]" required value="{{ $site->id }}">
                                                <label class="form-check-label" for="selected_sites_{{ $site->id }}">
                                                    {{ $no++ }}
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="https://{{ $site->domain }}" target="_blank">{{ $site->domain }}</a>
                                        </td>
                                        <td class="text-center">
                                            <select class="form-select form-select shadow-none" name="kondisi[]">
                                                <option value="">Pilih Kondisi</option>
                                                @foreach ($kondisi as $kd)
                                                    <option value="{{ $kd }}" {{ old('kondisi') == $kd ? 'selected' : '' }}>{{ $kd }}</option>
                                                @endforeach
                                            </select>
                                        </td>
                                        <td class="text-center">
                                            <input type="text" class="form-control" name="keterangan[]">
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="d-grid gap-2 mt-5 mb-2">
                            <button class="btn btn-primary" type="submit">Simpan</button>
                            <button class="btn btn-danger" type="button">Batal</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
