@extends('admin.admindashboard')


@section('content')

    <!-- Stock Capture Form -->
    <div class="container">
        <div class="row justify-content-center mt-1">
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="card shadow">
                    <div class="card-title text-center border-bottom">
                        <h2 class="p-3">Capture Stock</h2>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="mb-4">
                                <label for="Name" class="form-label">Stock Name</label>
                                <input type="text" class="form-control" id="Name" required />
                            </div>



                            <div class="mb-4">
                                <label for="Quantity" class="form-label">Quantity</label>
                                <input type="number" class="form-control" id="Quantity"  name="Quantity" value="1" min="1"  step="1"  required />
                            </div>


                            <div class="mb-4">
                                <label for="UnitPrice" class="form-label">Unit Price</label>
                                <input type="number" min="0.00" max="10000.00" step="0.01"  class="form-control" id="UnitPrice" required />
                            </div>


                            <div class="mb-4">
                                <label for="CostPrice" class="form-label">Cost Price</label>
                                <input type="number" min="0.00" max="10000.00" step="0.01" class="form-control" id="CostPrice" required />
                            </div>



                            <div class="d-grid">
                                <button type="submit" class="btn btn-success main-bg">Add Stock</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection
