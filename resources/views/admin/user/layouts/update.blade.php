<div class="container-fluid">
    @if (session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
    </div>
    @endif
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">EDIT USER</h1>
    </div>

    <form class="user" action="/userupdate/{{ $user->id }}" method="POST">
        @method("put")
        @csrf
        <div class="form-group">
            <input type="text" class="form-control form-control-user @error('firstname') is-invalid @enderror" id="firstname" name="firstname" placeholder="First Name" value="{{ old('firstname') }}">

            @error('firstname')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="form-group">
            <input type="text" class="form-control form-control-user @error('lastname') is-invalid @enderror" id="lastname" name="lastname" placeholder="Last Name" value="{{ old('lastname') }}">

            @error('lastname')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="form-group">
            <input type="email" class="form-control form-control-user @error('email') is-invalid @enderror" id="email" name="email" placeholder="Email" value="{{ old('email') }}">

            @error('email')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="form-group">
            <input type="text" class="form-control form-control-user @error('phonenumber') is-invalid @enderror" id="phonenumber" name="phonenumber" placeholder="Phone Number" value="{{ old('phonenumber') }}">

            @error('phonenumber')
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