
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="modal-title fs-5" id="exampleModalLabel">CHANGE PASSWORD</h3>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="" method="post">
            @csrf
            <div class="form-group">
                <label for="" class="form-label">Current Password: </label>
                <input class="form-control" type="password">
            </div>
            <div class="form-group">
                <label for="" class="form-label">New Password: </label>
                <input class="form-control" type="password">
            </div>

          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-dark">Change Password!</button>

        </form>
        </div>
      </div>
    </div>
  </div>