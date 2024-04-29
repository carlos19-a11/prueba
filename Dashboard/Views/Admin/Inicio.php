<div class="col-12">
  <div class="card mb-0">
    <div class="card-body">
      <div class="card-body">
        <div class="d-flex mb-3 align-items-center">
          <h4 class="card-title mb-0">Default File Upload</h4>
          <div class="ms-auto flex-shrink-0">
            <button class="btn bg-primary-subtle text-primary btn-sm" title="View Code" data-bs-toggle="modal" data-bs-target="#view-code37-modal">
              <i class="fa-solid fa-file"></i>
            </button>
            <!-- Code Modal -->
            <div id="view-code37-modal" class="modal fade" tabindex="-1" aria-hidden="true">
              <div class="modal-dialog modal-dialog-scrollable modal-lg">
                <div class="modal-content">
                  <div class="modal-header border-bottom">
                    <h5 class="modal-title" id="exampleModalLabel">
                      Default File Upload - View Code
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body p-4">

                  </div>
                </div>
                <!-- /.modal-content -->
              </div>
              <!-- /.modal-dialog -->
            </div>
            <!-- /.modal -->
          </div>
        </div>
        <p class="mb-3 card-subtitle">
          To use add
          <mark>
            <code>.form-control-file</code>
          </mark> class to the
          input
        </p>
        <form class="mt-3" action="?controller=Admin&action=savefacturas" method="POST" enctype="multipart/form-data">
          <input class="form-control" type="file" name="facturas[]" id="formFile" multiple>
          <br>
          <div class="d-md-flex align-items-center">

            <div class="ms-auto mt-3 mt-md-0">
              <button type="submit" class="btn btn-primary hstack gap-6">
                <i class="fa-solid fa-paper-plane"></i>
                Submit
              </button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>