<?php


class CustomAbstractExporter extends Terminal42\LeadsBundle\Export\AbstractExporter
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
