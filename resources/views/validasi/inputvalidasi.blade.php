<x-app-layout :assets="$assets ?? []">
    <div class="row">
        <div class="col-sm-12 col-lg-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                        <h4 class="card-title mb-4 mt-2">Validasi Dokumen</h4>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{ route('tambahvalidasi', $site->id) }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md- mb-3">
                                <label class="form-label">Domain :</label>
                                <input class="form-control @error('site_id') is-invalid @enderror" name="site_id"
                                    id="site_id" value="{{ $site->domain }}">
                            </div>
                            <div class="col-md-6 mt-2">
                                <label class="form-label">Status :</label>
                                <select class="form-select @error('status') is-invalid @enderror" required
                                    name="status">
                                    <option value="">--- Pilih Status ---</option>
                                    @foreach ($status as $st)
                                        @if ($site?->validasi?->status == 'Aktif' || $site?->validasi?->status == 'Tidak Aktif')
                                            <option value="{{ $st }}"
                                                {{ old('status', $site?->validasi?->status) == $st ? 'selected' : '' }}>{{ $st }}</option>
                                        @else
                                            <option value="{{ $st }}"
                                                {{ old('status', $site?->validasi?->status) == $st ? 'selected' : '' }}>
                                                {{ $st }}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-6 mt-2">
                                <label class="form-label">Validasi :</label>
                                <select class="form-select @error('status_validasi') is-invalid @enderror" required
                                    name="status_validasi">
                                    <option value="">--- Pilih Status ---</option>
                                    @foreach ($status_validasi as $val)
                                        @if ($site?->validasi?->status_validasi == 'Sudah Validasi' || $site?->validasi?->status_validasi == 'Proses Validasi')
                                            <option value="{{ $val }}"
                                                {{ old('status_validasi', $site?->validasi?->status_validasi) == $val ? 'selected' : '' }}>{{ $val }}</option>
                                        @else
                                            <option value="{{ $val }}"
                                                {{ old('status_validasi', $site?->validasi?->status_validasi) == $val ? 'selected' : '' }}>
                                                {{ $val }}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-12 mt-4">
                                <label class="form-label">Dokumen KAK :</label>
                                <div class="mt-2"
                                    style="width: 100%; height: 0; padding-bottom: 56.25%; position: relative;">
                                    <embed type="application/pdf" src="{{ url('storage') . '/kak/' . $site->kak }}"
                                        style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;"></embed>
                                </div>
                            </div>
                            <div class="col-md-12 mt-4">
                                <label class="form-label">Dokumen Probis :</label>
                                <div class="mt-2"
                                    style="width: 100%; height: 0; padding-bottom: 56.25%; position: relative;">
                                    <embed type="application/pdf"
                                        src="{{ url('storage') . '/probis/' . $site->probis }}"
                                        style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;"></embed>
                                </div>
                            </div>
                            <div class="col-md-12 mt-4">
                                <label class="form-label">Dokumen Manual Book :</label>
                                <div class="mt-2"
                                    style="width: 100%; height: 0; padding-bottom: 56.25%; position: relative;">
                                    <embed type="application/pdf"
                                        src="{{ url('storage') . '/manual_book/' . $site->probis }}"
                                        style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;"></embed>
                                </div>
                            </div>
                            <div class="col-md-12 mt-4">
                                <div class="form-group">
                                    <label class="form-label">Catatan Validasi :</label>
                                    <textarea class="form-control @error('catatan') is-invalid @enderror" style="height: 200px" required name="catatan">{{ old('catatan', $site?->validasi?->catatan) }}</textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <a href="{{ route('listvalidasi') }}" class="btn btn-danger">Kembali</a>
                                <button class="btn btn-primary float-end" type="submit">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
