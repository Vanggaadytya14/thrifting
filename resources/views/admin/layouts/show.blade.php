<div class="container-fluid">
    @if (session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
    </div>
    @endif

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">DATA ADMIN</h1>
        <a href="/adminadd" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-plus fa-sm text-white-50"></i> Tambah Admin</a>
    </div>
    <table class="table table-bordered table-striped">
        <tr>
            <th class="text-center">FIRST NAME</th>
            <th class="text-center">LAST NAME</th>
            <th class="text-center">EMAIL ADMIN</th>
            <th class="text-center">PHONE NUMBER</th>
            <th class="text-center">ROLE</th>
            <th class="text-center" width="200px">ACTION</th>
        </tr>
        @foreach($user as $u)
        <tr>
            <td class="text-center">{{ $u->firstname }}</td>
            <td class="text-center">{{ $u->lastname }}</td>
            <td class="text-center">{{ $u->email }}</td>
            <td class="text-center">{{ $u->phonenumber }}</td>
            <td class="text-center">
                @if($u->role === 'admin') Admin
                @else User
                @endif
            </td>
            <td class="text-center">
                <a href="/adminedit/{{ $u->id }}" class="btn btn-primary">Edit</a>
                <a href="/admindelete/{{ $u->id }}" class="btn btn-danger">Delete</a>
            </td>
        </tr>
        @endforeach
    </table>

</div>