@extends('admin.admindashboard')


@section('content')

    <!-- Stock Capture Form -->
    <div class="container">
        <div class="row justify-content-center mt-1">
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="card shadow">
                    <div class="card-title text-center border-bottom">
                        <h2 class="p-3">Delete Stock</h2>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="mb-4">
                                <label for="Name" class="form-label">Stock Name</label>
                                <input type="text" class="form-control" id="Name" required />
                            </div>

                            <div class="d-grid">
                                <button type="submit" class="btn btn-danger main-bg">Delete</button>
                            </div>
                        </form>




                    </div>
                </div>
            </div>
        </div>

{{--hidden table--}}

        <table class="table table-bordered" >
            <thead>
            <tr>

                <th >Name</th>
                <th >Quantity Remaining</th>

                <th>Unit Price</th>
                <th>Selling Price</th>
                <th>Action</th>

            </tr>
            </thead>
            <tbody>


            {{--@foreach($applications as $row)--}}
            <tr>

                <th>  </th>
                <td></td>
                <td></td>
                <td></td>


                <td>
                    <button type="button" class="btn btn-danger">Delete</button>

                </td>


            </tr>

            </tbody>
        </table>

{{--        end of hidden table--}}

    </div>



@endsection
