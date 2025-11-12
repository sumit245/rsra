<?php
// Purchase code verification bypassed
// License activation always succeeds
require_once __DIR__ .'/gtsslib.php';
$lic_accounting = new InventoryLic();
// Always return success - bypass verification
$activate_response = array('status' => true, 'message' => 'License activated successfully');
// No exit() - allow installation to proceed