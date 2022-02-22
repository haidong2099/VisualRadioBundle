<?php

namespace Guave\VisualRadioBundle\Widget\Backend;

use Contao\Database\Result;
use Contao\StringUtil;
use Contao\Widget;
use Contao\Image;

class VisualRadio extends Widget
{
    protected $blnSubmitInput = true;
    protected $blnForAttribute = true;
    protected $strTemplate = 'be_widget';

    public function generate(): string
    {
        $html = '<div>';
        foreach ($this->options as $option) {
            $id = $this->strName . '_' . $option['value'];
            $image = $this->imagePath . '/' . $option['value'] . $this->imageExt;
            $active = $this->varValue === $option['value'];

            $html .= '<div style="width:25%;display:inline-block;text-align:center;margin-bottom:20px;">';
            $html .= '<input type="radio" id="' . $id . '" name="' . $this->strName . '" value="' . $option['value'] . '"' . ($active ? ' checked' : '') . '/> ';
            $html .= '<label for="' . $id . '">';
            $html .= Image::getHtml($image, $option['value']);
            $html .= '</label>';
            $html .= '</div>';
        }

        $html .= '</div>';

        return '<div>' . $html . '</div>';
    }
}
