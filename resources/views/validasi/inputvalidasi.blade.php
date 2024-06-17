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
                    <form action="tambahvalidasi" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md- mb-3">
                                <label class="form-label">Domain :</label>
                                <select class="form-select @error('site_id') is-invalid @enderror" name="site_id"
                                    id="site_id">
                                    <option value="">--- Pilih Domain ---</option>
                                    @foreach ($sites as $site)
                                        <option value="{{ $site->id }}"
                                            {{ old('site_id') == $site->id ? 'selected' : '' }}>{{ $site->domain }}
                                            {{ old('domain') }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-6 mt-2">
                                <label class="form-label">Status :</label>
                                <select class="form-select @error('status') is-invalid @enderror" required
                                    name="status">
                                    <option value="">--- Pilih Status ---</option>
                                    @foreach ($status as $st)
                                        <option value="{{ $st }}"
                                            {{ old('status') == $st ? 'selected' : '' }}>{{ $st }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-6 mt-2">
                                <label class="form-label">Validasi :</label>
                                <select class="form-select @error('status_validasi') is-invalid @enderror" required
                                    name="status_validasi">
                                    <option value="">--- Pilih Status ---</option>
                                    @foreach ($status_validasi as $val)
                                        <option value="{{ $val }}"
                                            {{ old('status_validasi') == $val ? 'selected' : '' }}>{{ $val }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-12 mt-4">
                                <label class="form-label">Dokumen :</label>
                                <select class="form-select" id="dokumen" name="dokumen">
                                    <option value="">--- Pilih Dokumen ---</option>
                                </select>
                                <div class="mt-2">
                                    <embed type="application/pdf" src="" width="700"
                                        height="350"></embed>

                                </div>
                            </div>
                            <div class="col-md-12 mt-4">
                                <div class="form-group">
                                    <label class="form-label">Catatan Validasi :</label>
                                    <textarea class="form-control @error('catatan') is-invalid @enderror" style="height: 200px" required name="catatan">{{ old('catatan') }}</textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary float-end" type="submit">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
<script>
    $(document).ready(function() {
        $('select[name="site_id"]').on('change', function() {
            var site_id = $(this).val();
            if (site_id) {
                $.ajax({
                    url: '/sites/getSiteById/' + site_id,
                    type: "GET",
                    dataType: "json",
                    success: function(data) {
                        $('select[name="dokumen"]').empty();
                        $.each(data, function(key, value) {
                            //ambil key kak, probis, dan manual_book saja
                            if (key == 'kak' || key == 'probis' || key ==
                                'manual_book') {
                                $('select[name="dokumen"]').append(
                                    '<option value="' + key + '/' + value +
                                    '">Dokumen ' +
                                    key + ': ' + value + '</option>');
                            }
                        });
                    }
                });
            } else {
                $('select[name="dokumen"]').empty();
            }
        });
        //ketika dokumen dipilih, iframe akan menampilkan dokumen yang dipilih
        $('select[name="dokumen"]').on('change', function() {
            var dokumen = $(this).val();
            var url = 'storage/' + dokumen;
            url = "{{ url('storage/') }}" + '/' + dokumen;
            console.log(url);
            if (dokumen) {
                //tamplikan dokumen yang dipilih di embed
                $('embed').attr('src', url);
            } else {
                $('embed').attr('src', '');
            }
        });
    });
</script>
