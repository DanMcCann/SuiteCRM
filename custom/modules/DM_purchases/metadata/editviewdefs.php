<?php
$module_name = 'DM_purchases';
$viewdefs [$module_name] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'useTabs' => false,
      'tabDefs' => 
      array (
        'LBL_EDITVIEW_PANEL1' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
    ),
    'panels' => 
    array (
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'product_name_c',
            'label' => 'LBL_PRODUCT_NAME',
          ),
          1 => '',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'purchase_date_c',
            'label' => 'LBL_PURCHASE_DATE',
          ),
          1 => 
          array (
            'name' => 'price_gbp_c',
            'label' => 'LBL_PRICE_GBP',
          ),
        ),
      ),
    ),
  ),
);
;
?>
