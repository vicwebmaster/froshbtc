<div class="footer_part">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="footer_iner text-center">
                    <p>2020 © Influence - Designed by <a href="#"> <i class="ti-heart"></i> </a><a href="#"> Dashboard</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<!-- Logout Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Confirm Logout</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          Are You Sure You Want to Logout?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">No, Keep me Logged in</button>
          <button type="button" onclick="window.location='logout'" class="btn btn-primary">Yes, Log me out</button>
        </div>
      </div>
    </div>
  </div>

<!-- Change Password Modal -->
<div class="modal fade" id="changePassword" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Change Password</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
			<div class="modal-body">
				<div class="form-group">
					<label for="inputAddress">Current Password</label>
					<input type="password" class="form-control" id="oldpass" placeholder="********" required>
				</div>
				<div class="form-row">
					<div class="form-group col-md-6">
						<label for="inputCity">New Password</label>
						<input type="password" class="form-control" placeholder="********" id="newpass" required>
					</div>
					<div class="form-group col-md-6">
						<label for="inputZip">Confirm New Password</label>
						<input type="password" class="form-control" placeholder="********" id="cnewpass" required>
					</div>
				</div>
			</div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Change Password</button>
        </div>
      </div>
    </div>
  </div>