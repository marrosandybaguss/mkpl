<div class="container">
    <div class="row ml-3">
        <h5 class="mt-4">Products</h5>
    </div>
    <div class="row ml-3 mt-3 mb-4">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addModal">
            <i class="fas fa-plus"></i> Add Product
        </button>
    </div>
    <div class="row col-md-10 mt-3 ml-3 mr-3">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Type</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Prodcut 1</td>
                    <td>Food</td>
                    <td>120</td>
                    <td>
                        <span class="btn btn-primary" data-toggle="modal" data-target="#editModal">
                            <i class="fa fa-pen text-white"></i>
                        </span>
                        <span class="btn btn-danger" data-toggle="modal" data-target="#deleteModal">
                            <i class="fa fa-trash text-white"></i>
                        </span>
                    </td>
                </tr>
                <tr>
                    <th scope="row">1</th>
                    <td>Prodcut 1</td>
                    <td>Food</td>
                    <td>120</td>
                    <td>
                        <span class="btn btn-primary" data-toggle="modal" data-target="#editModal">
                            <i class="fa fa-pen text-white"></i>
                        </span>
                        <span class="btn btn-danger" data-toggle="modal" data-target="#deleteModal">
                            <i class="fa fa-trash text-white"></i>
                        </span>
                    </td>
                </tr>
                <tr>
                    <th scope="row">1</th>
                    <td>Prodcut 1</td>
                    <td>Food</td>
                    <td>120</td>
                    <td>
                        <span class="btn btn-primary" data-toggle="modal" data-target="#editModal">
                            <i class="fa fa-pen text-white"></i>
                        </span>
                        <span class="btn btn-danger" data-toggle="modal" data-target="#deleteModal">
                            <i class="fa fa-trash text-white"></i>
                        </span>
                    </td>
                </tr>
                <tr>
                    <th scope="row">1</th>
                    <td>Prodcut 1</td>
                    <td>Food</td>
                    <td>120</td>
                    <td>
                        <span class="btn btn-primary" data-toggle="modal" data-target="#editModal">
                            <i class="fa fa-pen text-white"></i>
                        </span>
                        <span class="btn btn-danger" data-toggle="modal" data-target="#deleteModal">
                            <i class="fa fa-trash text-white"></i>
                        </span>
                    </td>
                </tr>
                <tr>
                    <th scope="row">1</th>
                    <td>Prodcut 1</td>
                    <td>Food</td>
                    <td>120</td>
                    <td>
                        <span class="btn btn-primary" data-toggle="modal" data-target="#editModal">
                            <i class="fa fa-pen text-white"></i>
                        </span>
                        <span class="btn btn-danger" data-toggle="modal" data-target="#deleteModal">
                            <i class="fa fa-trash text-white"></i>
                        </span>
                    </td>
                </tr>
                <tr>
                    <th scope="row">1</th>
                    <td>Prodcut 1</td>
                    <td>Food</td>
                    <td>120</td>
                    <td>
                        <span class="btn btn-primary" data-toggle="modal" data-target="#editModal">
                            <i class="fa fa-pen text-white"></i>
                        </span>
                        <span class="btn btn-danger" data-toggle="modal" data-target="#deleteModal">
                            <i class="fa fa-trash text-white"></i>
                        </span>
                    </td>
                </tr>
                <tr>
                    <th scope="row">1</th>
                    <td>Prodcut 1</td>
                    <td>Food</td>
                    <td>120</td>
                    <td>
                        <span class="btn btn-primary" data-toggle="modal" data-target="#editModal">
                            <i class="fa fa-pen text-white"></i>
                        </span>
                        <span class="btn btn-danger" data-toggle="modal" data-target="#deleteModal">
                            <i class="fa fa-trash text-white"></i>
                        </span>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">
                    <i class="fas fa-exclamation-circle text-warning"></i>
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Are you sure want to delete (qty) product?
                <div class="row mt-5 float-right">
                    <button type="button" class="btn btn-secondary mr-2" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-danger mr-2">Delete</button>
                </div>
            </div>

        </div>
    </div>
</div>

<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit (product name)</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Name:</label>
                        <input type="text" class="form-control" id="recipient-name" value="Product 1">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Quantity:</label>
                        <input type="number" class="form-control" id="recipient-name" value="120">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Type:</label>
                        <select class="custom-select" id="inputGroupSelect01">
                            <option >Choose...</option>
                            <option value="1" selected>Food</option>
                            <option value="2">Type1</option>
                            <option value="3">Type2</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Notes:</label>
                        <textarea class="form-control" id="message-text"></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Update Data</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Prodcut</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="product/create" method="post">
                <?= csrf_field(); ?>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="prod_name" class="col-form-label">Name:</label>
                        <input type="text" name="prod_name" class="form-control" id="prod_name" >
                    </div>
                    <div class="form-group">
                        <label for="prod_qty" class="col-form-label">Quantity:</label>
                        <input type="number" name="prod_qty" class="form-control" id="prod_qty" >
                    </div>
                    <div class="form-group">
                        <label for="prod_type" class="col-form-label">Type:</label>
                        <select class="custom-select" name="prod_type" id="prod_type">
                            <option selected>Choose...</option>
                            <option value="food">Food</option>
                            <option value="tshirt">T-Shirt</option>
                            <option value="smartphone">Smartphone</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="prod_notes" class="col-form-label">Notes:</label>
                        <textarea class="form-control" name="prod_notes" id="prod_notes"></textarea>
                    </div>                
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Create Data</button>
                </div>
            </form>
        </div>
    </div>
</div>