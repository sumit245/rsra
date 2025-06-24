<div class="form-group mbot25  select-placeholder">
    <select name="item_select" class="select2 no-margin<?php if ($ajaxItems == true) {
                                                            echo ' ajax-search';
                                                        } ?>" data-width="100%" id="item_select" placeholder="<?php echo _l('select_item'); ?>" data-live-search="true">
        <option value=""></option>
        <?php foreach ($items as $group_id => $_items) { ?>
            <optgroup data-group-id="<?php echo html_entity_decode($group_id ?? ''); ?>" label="<?php echo html_entity_decode($_items[0]['group_name']  ?? ''); ?>">
                <?php foreach ($_items as $item) { ?>
                    <option value="<?php echo html_entity_decode($item['id']  ?? ''); ?>"
                        data-item-title="<?php echo html_entity_decode($item['item_title'] ?? ''); ?>"
                        data-item-code="<?php echo html_entity_decode($item['item_code'] ?? ''); ?>"
                        data-sku-code="<?php echo html_entity_decode($item['sku_code'] ?? ''); ?>"
                        data-sku-name="<?php echo html_entity_decode($item['sku_name'] ?? ''); ?>"
                        data-unit-id="<?php echo html_entity_decode($item['unit_id'] ?? ''); ?>"><?php echo html_entity_decode($item['item_title']  ?? ''); ?></option>
                <?php } ?>
            </optgroup>
        <?php } ?>
    </select>
</div>