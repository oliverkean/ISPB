
  <!-- Modal -->
  <div class="modal fade" id="examplesModal" tabindex="-1" aria-labelledby="examplesModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header bg-dark text-warning">
          <h3 class="modal-title fs-5" id="examplesModalLabel">EDIT USER INFORMATION</h3>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="" method="post">
            @csrf
            <div class="form-group">
                <label for="" class="form-label">Username: </label>
                <input class="form-control" type="text">
            </div>
            <div class="form-group">
                <label for="" class="form-label">Name: </label>
                <input class="form-control" type="text">
            </div>
            <div class="form-group">
                <label for="" class="form-label">Email: </label>
                <input type="email" class="form-control">
            </div>
            <div class="form-group">
                <label for="" class="form-label">Contact No.: </label>
                <input type="email" class="form-control">
            </div>
            <div class="form-group">
                <label for="" class="form-label">Birth Date: </label>
                <input type="date" class="form-control">
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-dark">Update Info!</button>

        </form>
        </div>
      </div>
    </div>
  </div>