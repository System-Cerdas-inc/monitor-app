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
                    <form action="">
                        @csrf
                        <fieldset class="row" disabled="" aria-label="Disabled fieldset example">
                            <div class="col-md-6 mb-2">
                                <label for="disabledTextInput" class="form-label">Nama OPD/UPTD :</label>
                                <input type="text" id="disabledTextInput" class="form-control"
                                    placeholder="Disabled input">
                            </div>
                            <div class="col-md-6 mb-2">
                                <label for="disabledTextInput" class="form-label">Domain :</label>
                                <input type="text" id="disabledTextInput" class="form-control"
                                    placeholder="Disabled input">
                            </div>
                        </fieldset>
                        <div class="row">
                            <div class="col-md-6 mt-2">
                                <label class="form-label">Status :</label>
                                <select class="form-select @error('status') is-invalid @enderror" required
                                    name="status">
                                    <option value="">--- Pilih Status ---</option>
                                    @foreach ($status as $st)
                                        <option {{ old('status') ?? $site->status == $st ? 'selected' : '' }}>
                                            {{ $st }} </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-6 mt-2">
                                <label class="form-label">Validasi :</label>
                                <select class="form-select @error('status') is-invalid @enderror" required
                                    name="status">
                                    <option value="">--- Pilih Status ---</option>
                                    @foreach ($status_validasi as $sv)
                                        <option {{ old('status') ?? $site->status_validasi == $sv ? 'selected' : '' }}>
                                            {{ $sv }} </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12 col-lg-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                </div>
                <div class="card-body">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="form-label">Catatan Validasi :</label>
                            <textarea class="form-control @error('catatan') is-invalid @enderror" style="height: 200px" required name="catatan">{{ old('catatan') }}</textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
