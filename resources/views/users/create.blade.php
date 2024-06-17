<x-app-layout :assets="$assets ?? []">
    <div class="col-sm-12 col-lg-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <div class="header-title">
                    <h4 class="card-title mb-4 mt-2">Form Input Data User</h4>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('users.store') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <label class="form-label">Username :</label>
                            <input type="text" class="form-control @error('username') is-invalid @enderror" required
                                name="username" value="{{ old('username') }}">
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">First Name :</label>
                                <input type="text" class="form-control @error('first_name') is-invalid @enderror"
                                    required name="first_name" value="{{ old('first_name') }}">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Last Name :</label>
                                <input type="text" class="form-control @error('last_name') is-invalid @enderror"
                                    required name="last_name" value="{{ old('last_name') }}">
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label class="form-label">Jabatan :</label>
                            <input type="text" class="form-control @error('jabatan') is-invalid @enderror" required
                                name="jabatan" value="{{ old('jabatan') }}">
                        </div>
                        <div class="col-md-12 mb-3">
                            <label class="form-label">Email :</label>
                            <input type="text" class="form-control @error('email') is-invalid @enderror" required
                                name="email" value="{{ old('email') }}">
                        </div>
                        <div class="col-md-12 mb-3">
                            <label class="form-label">No. Telp :</label>
                            <input type="text" class="form-control @error('no_telp') is-invalid @enderror" required
                                name="no_telp" value="{{ old('no_telp') }}">
                        </div>
                        <div class="col-md-12 mb-3">
                            <label class="form-label">User Type :</label>
                            <select class="form-select @error('user_type') is-invalid @enderror" required ="user_type"
                                name="user_type">
                                <option value="">---- Choose User Type ---</option>
                                @foreach ($roles as $item)
                                    @if (old('user_type') == $item->name)
                                        <option value="{{ $item->name }}" selected>{{ $item->title }}</option>
                                    @else
                                        <option value="{{ $item->name }}">{{ $item->title }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label class="form-label">Status</label>
                            <select class="form-select @error('status') is-invalid @enderror" required name="status">
                                <option value="">---- Choose Status ---</option>
                                <option value="active" {{ old('status') == 'active' ? 'selected' : '' }}>Active</option>
                                <option value="pending" {{ old('status') == 'pending' ? 'selected' : '' }}>Pending</option>
                                <option value="inactive" {{ old('status') == 'inactive' ? 'selected' : '' }}>Inactive</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <button class="btn btn-primary float-end" type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
