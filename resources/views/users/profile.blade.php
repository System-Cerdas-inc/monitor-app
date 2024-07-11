<x-app-layout :assets="$assets ?? []">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex flex-wrap align-items-center justify-content-between">
                        <div class="d-flex flex-wrap align-items-center">
                            <div class="profile-img position-relative me-3 mb-3 mb-lg-0 profile-logo profile-logo1">
                                @if(auth()->user()->userProfile?->profile_picture)
                                    <img id="profilePicture" src="{{ asset('storage/' . auth()->user()->userProfile?->profile_picture) }}" alt="User-Profile" class="img-fluid rounded-pill avatar-100">
                                @else
                                <img id="profilePicture" src="{{ asset('images/avatars/01.png') }}" alt="User-Profile" class="theme-color-default-img img-fluid rounded-pill avatar-100">
                                @endif
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
                                <button class="btn btn-secondary btn-sm position-absolute top-0 end-0"
                                    onclick="document.getElementById('profilePictureInput').click()">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <input type="file" id="profilePictureInput" accept="image/*" onchange="updateProfilePicture(event)" style="display:none">
                            </div>
                            <div class="d-flex flex-wrap align-items-center mb-3 mb-sm-0">
                                <h4 class="me-2 h4">{{ auth()->user()->first_name }} {{ auth()->user()->last_name }}</h4>
                                <span> - {{ auth()->user()->user_type }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                        <h4 class="card-title">Profile</h4>
                    </div>
                </div>
                <div class="card-body">
                    <form id="profileForm" action="{{ route('profile.update') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label class="form-label" for="username">Username </label>
                            <input type="text" class="form-control" id="username" name="username"
                                value="{{ old('username', auth()->user()->username) }}" placeholder="Enter Name"
                                readonly>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="form-label" for="first_name">First Name</label>
                                    <input type="text" class="form-control" id="first_name" name="first_name"
                                        value="{{ old('first_name', auth()->user()->first_name) }}"
                                        placeholder="Enter First Name" readonly>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="form-label" for="last_name">Last Name</label>
                                    <input type="text" class="form-control" id="last_name" name="last_name"
                                        value="{{ old('last_name', auth()->user()->last_name) }}"
                                        placeholder="Enter Last Name" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email"
                                value="{{ old('email', auth()->user()->email) }}" readonly>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="phone_number">Phone Number</label>
                            <input type="text" class="form-control" name="phone_number" id="phone_number"
                                value="{{ old('phone_number', auth()->user()->phone_number) }}" readonly>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="password">Password Input</label>
                            <input type="password" class="form-control" name="password" id="password"
                                value="{{ old('password', auth()->user()->password) }}" placeholder="Enter Password"
                                readonly>
                        </div>
                        <button type="button" class="btn btn-primary" id="updateButton">Update</button>
                        <button type="button" class="btn btn-danger float-end">cancel</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        function updateProfilePicture(event) {
            var formData = new FormData();
            formData.append('profile_picture', event.target.files[0]);

            fetch('{{ route("profile.photo.update") }}', {
                method: 'POST',
                body: formData,
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                }
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    //reload the page to display the updated profile picture
                    location.reload();
                    alert('Profile picture updated successfully');
                } else {
                    alert('An error occurred while updating the profile picture');
                }
            })
            .catch(error => console.error('Error:', error));
        }

        document.getElementById('updateButton').addEventListener('click', function() {
            var inputs = document.querySelectorAll('#profileForm input');
            inputs.forEach(function(input) {
                input.removeAttribute('readonly');
            });

            var updateButton = document.getElementById('updateButton');
            var saveButton = document.createElement('button');
            saveButton.type = 'submit';
            saveButton.className = 'btn btn-success ms-2';
            saveButton.innerText = 'Simpan';
            updateButton.parentNode.insertBefore(saveButton, updateButton.nextSibling);

            // Disable the update button after it is clicked to prevent adding multiple save buttons
            updateButton.disabled = true;
        });
    </script>
</x-app-layout>
