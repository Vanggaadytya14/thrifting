<div class="container-fluid">
    @if (session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
    </div>
    @endif

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">DATA KATEGORI</h1>

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
            <i class="fas fa-fw fa-plus"></i> Tambah Kategori
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">TAMBAH KATEGORI</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="container-fluid">

                            <form class="user" action="/categorypost" method="POST">
                                @csrf
                                <div class="form-group">
                                    <input type="text"
                                        class="form-control form-control-user @error('name') is-invalid @enderror"
                                        id="name" name="name" placeholder="Name" value="{{ old('name') }}">

                                    @error('name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary float-right"
                                        data-dismiss="modal">Close</button>
                                    <button class="btn btn-primary float-right" type="submit">
                                        Simpan
                                    </button>
                                    <br> <br>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="mb-5">
        <div class="row">
            @foreach($category as $c)
            <div class="col-md-3 mb-3">
                <div class="top-categories">
                    <div class="category-icon">
                        <i class="fab fa-earlybirds"></i>
                    </div>
                    <div class="category-title">
                        {{ $c->name }} <p>Category</p>
                        <a href="#" class="btn btn-primary mt-3" data-toggle="modal"
                            data-target="#edit-{{ $c->id }}">Edit</a>
                        <a href="/categorydelete/{{ $c->id }}" class="btn btn-danger mt-3">Delete</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>

    @foreach($category as $c)
    <!-- Modal -->
    <div class="modal fade" id="edit-{{ $c->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">EDIT KATEGORI</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="container-fluid">

                        <form class="user" action="/categoryupdate/{{ $c->id }}" method="POST">
                            @method("put")
                            @csrf
                            <div class="form-group">
                                <input type="text"
                                    class="form-control form-control-user @error('name') is-invalid @enderror" id="name"
                                    name="name" placeholder="Name" value="{{ $c->name }}">

                                @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary float-right"
                                    data-dismiss="modal">Close</button>
                                <button class="btn btn-primary float-right" type="submit">
                                    Simpan
                                </button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
    @endforeach

</div>