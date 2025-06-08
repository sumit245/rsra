<script type="text/javascript">
loadUnitsTable = function (selector) {
var optionVisibility = false;

$(selector).appTable({
source: '<?php echo_uri("purchase/list_item_categories_data") ?>',

        order: [[0, "desc"]],
        
        columns: [
        {title: "#ID", "class": "w10p"},
        {title: "<?php echo app_lang("pur_commodity_group_code") ?>", "class": ""},
        {title: "<?php echo app_lang("pur_commodity_group_name") ?>", "class": "w15p"},

        {title: "<?php echo app_lang("order") ?>", "class": "w10p", "iDataSort": 5},
        {title: "<?php echo app_lang("display") ?>", "class": "w10p"},
        {title: "<?php echo app_lang("pur_note") ?>", "class": "w10p"},
        {title: "<?php echo app_lang("pur_options") ?>", "class": "w10p"},
        ],

});
};
$(document).ready(function () {
"use strict";        
loadUnitsTable("#commodity_groups-table");
});
</script>