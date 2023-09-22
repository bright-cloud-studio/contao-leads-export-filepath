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

/* Register the classes */
ClassLoader::addClasses(array
(
    'src\Export\CustomAbstractExporter'               => 'system/modules/contao_leads_export_filepath/library/src/Export/CustomAbstractExporter.php'
));
