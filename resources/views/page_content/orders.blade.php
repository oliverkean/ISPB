@extends('pagelayout.dashboard_layout')
@section('title', 'Orders List')

@section('css', 'manualcss/orders.css')
@section('content')

    <div class="container-fluid mx-auto m-5">
        <div class="card bp-2 orders_container" >
            <div class="card-header">
                <div class="d-flex justify-content-between align-items-center">
                    <h2 class="h2 h2-responsive-sm h2-responsive-md h2-responsive-lg" style="text-align: center">ORDER's TABLE</h2>
                    <div class="col d-flex justify-content-end">
                        <button type="button" class="btn btn-outline-dark my-3" ><i class="bi bi-plus-square-fill"></i> Add Users</button>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <!---------------------------------------------SEARCH--------------------------------------------->
                <div class="card  my-3 bg-light">
                    <form class="d-flex m-3 form-floating">
                        <input class="form-control me-2 border-dark" type="search" placeholder="Search" aria-label="Search">
                        <label for="Password"><i class="bi bi-search"></i> Search</label>
                        <button class="btn btn-outline-dark" type="submit"><i class="bi bi-search search-icon"></i></button>
                    </form>
                </div>

                <!---------------------------------------------TABLE--------------------------------------------->
                <div class="table-responsive">
                    <table class="table" style="text-align:center;">
                        <thead>
                            <tr>
                                <th>OrderID</th>
                                <th>Item</th>
                                <th>Order Quantity</th>
                                <th>Order Status</th>
                                <th>Order Date</th>
                                <th>Order Type</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>
                                    <div class="btn-group g-4 btn_action" role="group" aria-label="Basic example">
                                        <a href="#" class="btn edit_btn"><i class="bi bi-pen pen_icon"></i></a>
                                        <a href="#" class="btn delete_btn" onclick="return confirm('Sure Want Delete?')"><i class="bi bi-trash3-fill"></i></a></td>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection