<?php defined('BASEPATH') or exit('No direct script access allowed');


// Theese lines should aways at the end of the document left side. Dont indent these lines
$html = <<<EOF
<div class="width-680-important">
$hr_contract->content
</div>
EOF;
$pdf->writeHTML($html, true, false, true, false, '');
