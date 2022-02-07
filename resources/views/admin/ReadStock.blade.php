@extends('admin.admindashboard')


@section('content')

    <!-- Stock Capture Form -->
    <div class="container">
        <div class="row justify-content-center mt-1">
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="card shadow">
                    <div class="card-title text-center border-bottom">
                        <h2 class="p-3">View Stock</h2>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="mb-4">
                                <label for="Name" class="form-label">Stock Name</label>
                                <input type="text" class="form-control" id="Name" required />
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-success main-bg">View</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>




        <!-- Modal Show onClick -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        ...
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Understood</button>
                    </div>
                </div>
            </div>
        </div>


{{--        End of Modal--}}

    </div>



@endsection
