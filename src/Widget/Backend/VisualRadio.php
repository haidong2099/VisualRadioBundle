<?php

namespace Guave\VisualRadioBundle\Widget\Backend;

use Contao\Image;
use Contao\Widget;

class VisualRadio extends Widget
{
    protected $blnSubmitInput = true;
    protected $blnForAttribute = true;
    protected $strTemplate = 'be_widget';

    public function generate(): string
    {
        $html = '';
        foreach ($this->options as $option) {
            $id = $this->strName . '_' . $option['value'];
            $image = $this->imagePath . '/' . $option['value'] . $this->imageExt;
            $active = $this->varValue === $option['value'];

            $html .= sprintf(
                '<div style="width:25%%;display:inline-block;text-align:center;margin-bottom:20px;">'
                . '<input type="radio" id="%s" name="%s" value="%s"%s/>'
                . '<label for="%s">%s</label>'
                . '</div>',
                $id,
                $this->strName,
                $option['value'],
                $active ? 'checked' : '',
                $id,
                Image::getHtml($image, $option['value'])
            );
        }

        return '<div>' . $html . '</div>';
    }
}
