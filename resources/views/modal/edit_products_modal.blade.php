<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Product Information</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <div class="container form_container">
                <form action="" class="form" method="POST" enctype="multipart/form-data">
                    <h3 class="text-white">Add Product</h3>

                    <div class="form-item mb-5 profile_pic">

                        <img src="{{ asset('images/cat_default.jpg') }}" class=" image_pic rounded mx-auto d-block mb-2" alt="..." id="output" width="100px" height="100px">
                        <h3 class="text-white">Product picture</h3>
                    </div>

                    <div class="input-group">
                        <input type="file" class="form-control" name="ProductImage" id="inputGroupFile02" onchange="loadFile(event)">
                        <label class="input-group-text" for="inputGroupFile02">Upload</label>
                        <span class="text-danger">@error('ProductImage') {{$message}} @enderror</span>
                    </div>
                    <p class="text-danger">Validation error message here</p>

                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="ProductName" id="ProductName" value="{{old('ProductName')}}" placeholder="ProductName">
                        <label for="ProductName">ProductName</label>
                        <span class="text-danger">@error('ProductName') {{$message}} @enderror</span>
                        <p class="text-danger">Validation error message here</p>
                    </div>
                    
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="Description" id="Description" value="{{old('Description')}}" placeholder="Description">
                        <label for="Description">Description</label>
                        <span class="text-danger">@error('Description') {{$message}} @enderror</span>
                        <p class="text-danger">Validation error message here</p>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="Quantity" id="Quantity" value="{{old('Quantity')}}" placeholder="Quantity">
                        <label for="Quantity">Quantity</label>
                        <span class="text-danger">@error('Quantity') {{$message}} @enderror</span>
                        <p class="text-danger">Validation error message here</p>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="number" class="form-control" name="KiloPrice" id="KiloPrice" value="{{old('KiloPrice')}}" placeholder="KiloPrice">
                        <label for="KiloPrice">Price per Kilo</label>
                        <span class="text-danger">@error('Quantity') {{$message}} @enderror</span>
                        <p class="text-danger">Validation error message here</p>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="number" class="form-control" name="SackPrice" id="SackPrice" value="{{old('SackPrice')}}" placeholder="SackPrice">
                        <label for="SackPrice">Price per Sack</label>
                        <span class="text-danger">@error('Quantity') {{$message}} @enderror</span>
                        <p class="text-danger">Validation error message here</p>
                    </div>

                    <div class="row justify-content-center">
                        <div class="col-sm-6 text-center mb-3">
                            <div class="dropdown">
                            <a class="btn dropdown_btn dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Category
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Category 1</a></li>
                                <li><a class="dropdown-item" href="#">Category 2</a></li>
                                <li><a class="dropdown-item" href="#">Category 3</a></li>
                            </ul>
                            </div>
                        </div>
                    </div>


                </form>
            </div>
            <script>

                var loadFile = function(event){
                    var output = document.getElementById('output');
                    output.src = URL.createObjectURL(event.target.files[0]);
                };

            </script>
            </div>
            <div class="modal-footer">
                <button type="submit " class="btn btn-outline-dark ">Save changes!</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>