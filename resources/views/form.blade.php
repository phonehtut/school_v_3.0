@extends('nav.header')

@section('title')
    New Way | Form
@endsection

@section('content')
    <h3 class="text-center mt-4">Register Form</h3>
    <div class="container mt-3">
        @if (session('success'))
            <div class="alert alert-success" role="alert">
                <strong>{{ session('success') }}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        <form action="{{ url('register') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row justify-content-center">
                <div class="form-group col-md-6 mb-3">
                    <label for="name" class="form-label text-uppercase">Name</label>
                    <input type="text" name="name" id="name"
                        class="form-control rounded-0 @error('name') is-invalid @enderror" value="{{ old('name') }}">
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group col-md-6 mb-3">
                    <label for="birth_date" class="form-label text-uppercase">Birth Of Date</label>
                    <input type="date" name="birth_date" id="birth_date"
                        class="form-control rounded-0 @error('birth_date') is-invalid @enderror"
                        value="{{ old('birth_date') }}">
                    @error('birth_date')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group col-md-4 mb-3">
                    <label for="email" class="form-label text-uppercase">email</label>
                    <input type="email" name="email" id="email"
                        class="form-control rounded-0 @error('email') is-invalid @enderror"
                        placeholder="example@example.com" value="{{ old('email') }}">
                    @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group col-md-4 mb-3">
                    <label for="phone" class="form-label text-uppercase">phone number</label>
                    <input type="tel" name="phone" id="phone"
                        class="form-control rounded-0 @error('phone') is-invalid @enderror" value="{{ old('phone') }}">
                    @error('phone')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group col-md-4 mb-3">
                    <label for="age" class="form-label text-uppercase">age</label>
                    <input type="text" name="age" id="age"
                        class="form-control rounded-0 @error('age') is-invalid @enderror" value="{{ old('age') }}"
                        readonly>
                    @error('age')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group col-md-6 mb-3">
                    <label for="gender" class="form-label text-uppercase">Gender</label>
                    <select name="gender" id="gender" class="form-select @error('gender') is-invalid @enderror"
                        aria-label="Default select example">
                        <option value="" disabled {{ old('gender') == '' ? 'selected' : '' }}>--Select--</option>
                        <option value="male" {{ old('gender') == 'male' ? 'selected' : '' }}>Male</option>
                        <option value="female" {{ old('gender') == 'female' ? 'selected' : '' }}>Female</option>
                    </select>
                    @error('gender')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group col-md-6 mb-3">
                    <label for="gender" class="form-label text-uppercase">Operating System</label>
                    <select name="os" id="os" class="form-select @error('os') is-invalid @enderror"
                        aria-label="Default select example">
                        <option value="" disabled {{ old('os') == '' ? 'selected' : '' }}>--Select--</option>
                        <option value="Windows 11" {{ old('os') == 'Windows 11' ? 'selected' : '' }}>Windows 11</option>
                        <option value="Windows 10" {{ old('os') == 'Windows 10' ? 'selected' : '' }}>Windows 10</option>
                        <option value="Windows 7" {{ old('os') == 'Windows 7' ? 'selected' : '' }}>Windows 7</option>
                        <option value="Other" {{ old('os') == 'Other' ? 'selected' : '' }}>Other</option>
                        @error('os')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </select>
                </div>
                <div class="form-group col-md-6 mb-3">
                    <label for="class" class="form-label text-uppercase">Class</label>
                    <select name="class" id="class" class="form-select @error('class') is-invalid @enderror"
                        aria-label="Default select example">
                        <option value="" selected disabled>--Select--</option>
                        <option value="Computer Basic" {{ old('class') == 'Computer Basic' ? 'selected' : '' }}>Computer
                            Basic
                        </option>
                        @error('class')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </select>
                </div>
                <div class="form-group col-md-6 mb-3">
                    <label for="batch" class="form-label text-uppercase">Batch</label>
                    <select name="batch" id="batch" class="form-select @error('batch') is-invalid @enderror" aria-label="Default select example">
                        <option value="" selected disabled>--Select--</option>
                        <option value="Batch 1">Batch 1</option>
                        @error('batch')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </select>
                </div>
                <div class="form-group col-md-12">
                    <label for="image">Cash Success Photo</label>
                    <input type="file" name="photo" id="image" class="form-control" accept="image/*">
                </div>
                <button class="btn btn-primary col-md-4 m-3">Submit</button>
            </div>
        </form>
    </div>

    <script>
        // Function to calculate age based on birth date
        function calculateAge(birthDate) {
            const today = new Date();
            const dob = new Date(birthDate);
            let age = today.getFullYear() - dob.getFullYear();
            const monthDiff = today.getMonth() - dob.getMonth();
            if (monthDiff < 0 || (monthDiff === 0 && today.getDate() < dob.getDate())) {
                age--;
            }
            return age;
        }

        // Event listener to calculate age when birth date is changed
        document.getElementById('birth_date').addEventListener('change', function() {
            const birthDate = this.value;
            const ageField = document.getElementById('age');
            if (birthDate) {
                const age = calculateAge(birthDate);
                ageField.value = age;
            } else {
                ageField.value = '';
            }
        });
    </script>
@endsection
