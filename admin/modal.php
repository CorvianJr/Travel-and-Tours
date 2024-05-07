<!-- update -->
<div class="modal modal-sheet fade p-4 py-md-5" tabindex="-1" role="dialog" id="updateUser">
  <div class="modal-dialog" role="document">
    <div class="modal-content rounded-4 shadow">
      <div class="modal-header border-bottom-0">
        <h1 class="modal-title fs-5">Update User (<i id="user_id"></i>)</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form id="update_user">
        <div class="modal-body py-0 bg-dark">
           <!-- password -->

          <br>
          <label for="password">Change Password</label>
          <input class="form-control bg-dark text-light" type="password" id="u_pass" aria-label="default input example" required>
          <br>

          <input type="checkbox" onclick="revealPsw()"><b>Show Password</b>
        </div>

        
        <div class="modal-footer bg-dark flex-column align-items-stretch w-100 gap-2 pb-3 border-top-0">
          <center>
          <button type="submit" class="btn btn-lg btn-warning">Save changes</button>
          <button type="button" class="btn btn-lg btn-secondary" data-bs-dismiss="modal">Close</button>
          </center>
        </div>
        

      </form>
    </div>
  </div>
</div>