@extends('pagelayout.dashboard_layout')
@section('title', 'User List')


@section('content')

    <div class="container mx-auto m-5" style="max-width: 80%; margin-top: 50px;">
        <div class="card border-dark p-2">
            <div class="card-header">
                <div class="d-flex justify-content-between align-items-center">
                    <h2 class="h2 h2-responsive-sm h2-responsive-md h2-responsive-lg" style="text-align: center">USER's TABLE</h2>
                    <div class="col d-flex justify-content-end">
                        <button type="button" class="btn btn-success my-3" style="width: 80px;">Add</button>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <!---------------------------------------------SEARCH--------------------------------------------->
                <div class="card border-dark my-3 bg-light">
                    <form class="d-flex m-3 form-floating">
                        <input class="form-control me-2 border-dark" type="search" placeholder="Search" aria-label="Search">
                        <label for="Password"><i class="bi bi-search"></i> Search</label>
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>

                <!---------------------------------------------TABLE--------------------------------------------->
                <div class="table-responsive">
                    <table class="table" style="text-align:center;">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>FirstName</th>
                                <th>LastName</th>
                                <th>Password</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>000001</td>
                                <td>Vincent James</td>
                                <td>Beato</td>
                                <td>2444666668888888</td>
                                <td>
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <a href="#" class="btn btn-primary">Edit</a>
                                        <a href="#" class="btn btn-danger" onclick="return confirm('Sure Want Delete?')">Delete</a></td>
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