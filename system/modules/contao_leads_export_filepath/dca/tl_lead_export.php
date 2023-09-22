<?php

  /**
  * Bright Cloud Studio's Contao Leads Export Filepath
  *
  * Copyright (C) 2023 Bright Cloud Studio
  *
  * @package    bright-cloud-studio/contao-leads-export-filepath
  * @link       https://www.brightcloudstudio.com/
  * @license    http://opensource.org/licenses/lgpl-3.0.html
  **/
  
  /* Extend the tl_user palettes */
  $GLOBALS['TL_DCA']['tl_lead_export']['palettes']['csv'] = str_replace(';{conditions_legend}', ',full_path;{conditions_legend}', $GLOBALS['TL_DCA']['tl_lead_export']['palettes']['csv']);
  
  
  /* Add fields to tl_user */
  $GLOBALS['TL_DCA']['tl_lead_export']['fields']['full_path'] = array
  (
    'label'                     => &$GLOBALS['TL_LANG']['tl_lead_export']['full_path'],
    'inputType'                 => 'checkbox',
    'eval'                      => array('mandatory'=>false, 'multiple'=>false, 'tl_class'=>'w50'),
    'sql' => [
        'type' => 'boolean',
        'default' => false,
    ],
  );
