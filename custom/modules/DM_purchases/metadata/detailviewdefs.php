<?php
$module_name = 'DM_purchases';
$viewdefs [$module_name] = 
array (
  'DetailView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'buttons' => 
        array (
          0 => 'EDIT',
          1 => 'DUPLICATE',
          2 => 'DELETE',
          3 => 'FIND_DUPLICATES',
        ),
      ),
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
        'DEFAULT' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 'name',
          1 => 
          array (
            'name' => 'price_gbp_c',
            'label' => 'LBL_PRICE_GBP',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'purchase_date_c',
            'label' => 'LBL_PURCHASE_DATE',
          ),
          1 => '',
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'price_aud_c',
            'label' => 'LBL_PRICE_AUD',
          ),
          1 => 
          array (
            'name' => 'price_eur_c',
            'label' => 'LBL_PRICE_EUR',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'price_nzd_c',
            'label' => 'LBL_PRICE_NZD',
          ),
          1 => 
          array (
            'name' => 'price_usd_c',
            'label' => 'LBL_PRICE_USD',
          ),
        ),
      ),
    ),
  ),
);
;
?>
