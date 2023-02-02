<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">TAMBAH USER</h1>
    </div>

    <form class="user" action="/registeruser" method="POST">
        @csrf
        <div class="form-group">
            <input type="text" class="form-control form-control-user @error('firstname') is-invalid @enderror" id="firstname"
                name="firstname" placeholder="First Name" value="{{ old('firstname') }}">

            @error('firstname')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="form-group">
            <input type="text" class="form-control form-control-user @error('lastname') is-invalid @enderror" id="lastname"
                name="lastname" placeholder="Last Name" value="{{ old('lastname') }}">

            @error('lastname')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="form-group">
            <input type="email" class="form-control form-control-user @error('email') is-invalid @enderror" id="email"
                name="email" placeholder="Email" value="{{ old('email') }}">

            @error('email')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="form-group">
            <input type="text" class="form-control form-control-user @error('phonenumber') is-invalid @enderror"
                id="phonenumber" name="phonenumber" placeholder="Phone Number" value="{{ old('phonenumber') }}">

            @error('phonenumber')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="form-group">
            <input type="password" class="form-control form-control-user @error('password') is-invalid @enderror"
                id="password" name="password" placeholder="Password" value="{{ old('password') }}">

            @error('password')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <hr>
        <button type="submit" class="btn btn-primary btn-user plus float-right">
            Simpan
        </button>

    </form>

</div>