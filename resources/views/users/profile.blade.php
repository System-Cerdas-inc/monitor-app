<x-app-layout :assets="$assets ?? []">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex flex-wrap align-items-center justify-content-between">
                        <div class="d-flex flex-wrap align-items-center">
                            <div class="profile-img position-relative me-3 mb-3 mb-lg-0 profile-logo profile-logo1">
                                <img src="{{ asset('images/avatars/01.png') }}" alt="User-Profile"
                                    class="theme-color-default-img img-fluid rounded-pill avatar-100">
                                <img src="{{ asset('images/avatars/avtar_1.png') }}" alt="User-Profile"
                                    class="theme-color-purple-img img-fluid rounded-pill avatar-100">
                                <img src="{{ asset('images/avatars/avtar_2.png') }}" alt="User-Profile"
                                    class="theme-color-blue-img img-fluid rounded-pill avatar-100">
                                <img src="{{ asset('images/avatars/avtar_4.png') }}" alt="User-Profile"
                                    class="theme-color-green-img img-fluid rounded-pill avatar-100">
                                <img src="{{ asset('images/avatars/avtar_5.png') }}" alt="User-Profile"
                                    class="theme-color-yellow-img img-fluid rounded-pill avatar-100">
                                <img src="{{ asset('images/avatars/avtar_3.png') }}" alt="User-Profile"
                                    class="theme-color-pink-img img-fluid rounded-pill avatar-100">
                            </div>
                            <div class="d-flex flex-wrap align-items-center mb-3 mb-sm-0">
                                <h4 class="me-2 h4">{{ auth()->user()->full_name }} {{ auth()->user()->last_name }}</h4>
                                <span> - {{ auth()->user()->user_type }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
