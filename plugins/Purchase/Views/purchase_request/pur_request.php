<div id="page-content" class="page-wrapper clearfix">
  <?php echo form_open(uri_string(), ['id' => 'add_edit_pur_request-form', 'class' => 'general-form ']); ?>
  <div class="card clearfix">


  </div>

  <div class="row mt3">
    <div class="col-md-12">
      <div class="card clearfix">
        <div class="modal-body clearfix">
          <div class="mtop10 invoice-item">



            <div id="removed-items"></div>
          </div>

        </div>

        <div class="clearfix"></div>

        <div class="btn-bottom-toolbar text-right">
          <button type="button" class="btn-tr save_pr btn btn-info mr-5 text-white">
            <?php echo _l('submit'); ?>
          </button>

        </div>
        <div class="btn-bottom-pusher"></div>



      </div>
    </div>
  </div>
  <?php echo form_close(); ?>
</div>
<?php require 'plugins/Purchase/assets/js/purchase_request/pur_request_js.php'; ?>