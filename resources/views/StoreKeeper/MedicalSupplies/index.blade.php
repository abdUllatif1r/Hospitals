<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Medical Supplies Table</title>

    @include('layouts.StoreKeeper.LinkHeader')

</head>

<body>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            <div class="navbar-bg"></div>

            @include('layouts.StoreKeeper.Header')

            <div class="main-sidebar sidebar-style-2">


                @include('layouts.StoreKeeper.Sidebar')
            </div>

            <!-- Main Content -->
            <div class="main-content">
                <section class="section">

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Medical Supplies Table</h4>
                                </div>

                                {{-- message Section --}}

                                @if (session('success_message'))
                                    <div class="alert alert-success">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        {{ session('success_message') }}
                                    </div>
                                @endif

                                @if (session('error_message'))
                                    <div class="alert alert-danger">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        {{ session('error_message') }}
                                    </div>
                                @endif
                                {{-- end  message Section --}}
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped" id="table-1">
                                            <thead>
                                                <tr>
                                                    <th class="text-center">
                                                        #
                                                    </th>
                                                    <th>Name</th>
                                                    <th>Type</th>
                                                    <th>Details</th>
                                                    <th>Quantity</th>
                                                    <th>Status</th>
                                                    <th>Image</th>
                                                    <th>Created By</th>
                                                    <th>Created Date</th>
                                                    <th>Last Update Date</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                @foreach ($medicalSupplieses as $medicalSupplies)
                                                    <tr>
                                                        <td>
                                                            {{ $medicalSupplies->id }}
                                                        </td>
                                                        <td>{{ $medicalSupplies->name }}</td>
                                                        <td>{{ $medicalSupplies->type }}</td>
                                                        <td>

                                                            {{ $medicalSupplies->details }}
                                                        </td>
                                                        <td>{{ $medicalSupplies->quantity }}</td>
                                                        <td>
                                                            @if ($medicalSupplies->status == 1)
                                                                <div class="badge badge-success">Active</div>
                                                            @else
                                                                <div class="badge badge-danger">Not Active</div>
                                                            @endif

                                                        </td>


                                                        <td><img src="{{ asset('image/' . $medicalSupplies->img) }}"
                                                                style="width: 100px; height: 100px;"></td>
                                                        <td>{{ $medicalSupplies->storeKeeper->name }}</td>

                                                        <td>
                                                            {{ $medicalSupplies->created_at }}
                                                        </td>
                                                        <td>
                                                            {{ $medicalSupplies->updated_at }}
                                                        </td>
                                                        <td>
                                                            <div class="btn-group">
                                                                <button type="button"
                                                                    class="btn btn-secondary dropdown-toggle"
                                                                    data-toggle="dropdown" aria-haspopup="true"
                                                                    aria-expanded="false">
                                                                    <span class="visually-hidden">Detail</span>
                                                                </button>
                                                                <div class="dropdown-menu">
                                                                    <a class="dropdown-item"
                                                                        href="{{ route('storeKeeper.medicalSupplies.edit', $medicalSupplies->id) }}"
                                                                        style="size: 20px;">Edit</a>
                                                                    <form
                                                                        action="{{ route('storeKeeper.medicalSupplies.soft.delete', $medicalSupplies->id) }}"
                                                                        method="POST">
                                                                        @csrf
                                                                        @method('delete')
                                                                        <button class="dropdown-item" type="submit"
                                                                            style="color: red">Delete</button>
                                                                    </form>

                                                                </div>
                                                            </div>
                                                        </td>

                                                    </tr>
                                                @endforeach

                                            </tbody>

                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </section>
            </div>

        </div>
    </div>

    @include('layouts.StoreKeeper.LinkJS')
</body>

</html>
