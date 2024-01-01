<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Update StoreKeeper</title>

    @include('layouts.Admin.LinkHeader')

</head>

<body>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            <div class="navbar-bg"></div>

            @include('layouts.Admin.Header')

            <div class="main-sidebar sidebar-style-2">


                @include('layouts.Admin.Sidebar')
            </div>

            <!-- Main Content -->
            <div class="main-content">
                <section class="section">

                    <div class="col-10 col-md-6 col-lg-12">
                        <div class="card">
                            <form method="POST" action="{{ route('admin.storeKeeper.update', $storeKeeper->id) }}"
                                enctype="multipart/form-data">
                                @csrf
                                @method('put')
                                <div class="card-header">
                                    <h4>Update StoreKeeper</h4>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col">
                                                <label>Name</label>
                                                <input type="text" class="form-control" name="name"
                                                    value="{{ $storeKeeper->name }}" required="">
                                            </div>

                                            <div class="col">
                                                <label>Email</label>
                                                <input type="email" class="form-control" name="email"
                                                    value="{{ $storeKeeper->email }}" required="">
                                            </div>
                                        </div>

                                        <br>

                                        <div class="row">

                                            <div class="col-4">
                                                <label>Phone</label>
                                                <input type="tel" class="form-control" name="phone" required=""
                                                    value="{{ $storeKeeper->phone }}">
                                            </div>

                                            <div class="col-2">
                                                <label>Age</label>
                                                <input type="number" class="form-control" name="age" required=""
                                                    value="{{ $storeKeeper->age }}">
                                            </div>

                                        </div>

                                        <br>

                                        <div class="row">

                                            <div class="col-3">
                                                <label>Gender</label>
                                                <select class="form-control select2" name="gender" required>
                                                    <option value="1"
                                                        {{ $storeKeeper->gender === 1 ? 'selected' : '' }}>Male</option>
                                                    <option value="0"
                                                        {{ $storeKeeper->gender === 0 ? 'selected' : '' }}>Female</option>
                                                </select>
                                            </div>

                                            <div class="col-3">
                                                <label>Status</label>
                                                <select class="form-control select2" name="status" required>
                                                    <option value="1"
                                                        {{ $storeKeeper->status === 1 ? 'selected' : '' }}>Active</option>
                                                    <option value="0"
                                                        {{ $storeKeeper->status === 0 ? 'selected' : '' }}>Not Active
                                                    </option>
                                                </select>
                                            </div>


                                            <div class="col-5">
                                                <label>Image</label>
                                                <input type="file" class="form-control" name="img">
                                            </div>

                                        </div>

                                        <br>

                                    </div>

                                </div>
                                <div class="card-footer text-center">
                                    <button class="btn btn-primary" type="submit">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>

                </section>
            </div>

        </div>
    </div>

    @include('layouts.Admin.LinkJS')
</body>

</html>
