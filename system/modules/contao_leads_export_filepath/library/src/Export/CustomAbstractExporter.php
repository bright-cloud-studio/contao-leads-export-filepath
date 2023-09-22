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
    
    namespace Bcs\Export;
    
    use Terminal42\LeadsBundle\Export\AbstractExporter;
    
    class CustomAbstractExporter extends AbstractExporter implements ExporterInterface
    {
    
        protected function getOutput(string $value, string $label, string $format): string
        {
            switch ($format) {
                case self::OUTPUT_VALUE:
                    return $value;
                
                case self::OUTPUT_LABEL:
                    if($this->config['full_path'] == 'yes')
                        return "YES";
                    else
                        return "NO";
                    return $label ?: $value;
                
                case self::OUTPUT_BOTH:
                    if ('' !== $label && '' !== $value && $label !== $value) {
                        return sprintf('%s [%s]', $label, $value);
                    }
                
                return '' === $value ? $label : $value;
            }
            
            throw new \RuntimeException(sprintf('Unknown output format "%s"', $format));
        }
    
    }
