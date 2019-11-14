<?php

namespace Guave\VisualRadioBundle\Widget;

use Contao\Database\Result;
use Contao\Widget;
use Contao\Image;

class VisualRadio extends Widget
{
	/** @var string */
	protected $strTemplate = 'be_widget';

	protected $blnSubmitInput = true;

	public $imageExt = '.jpg';

	public function validator($varInput) {
		return $varInput;
	}

    public function generate(): string
	{
	    /** @var Result $activeRecord */
		$activeRecord = $this->activeRecord;

		$html = '<div>';
		foreach ($this->options as $k => $option) {
			$id = $this->strName.'-'.$k;

			$image = $this->imagepath.'/'.$option['value'].$this->imageExt;

			$active = $this->varValue === $option['value'];

			$html .= '<div style="width:25%;display: inline-block;text-align:center;margin-bottom:20px;">';
			$html .= '<input type="radio" id="'.$id.'" name="'.$this->strName.'" value="'.$option['value'].'" '.( $active?'checked':'' ).' /> ';
			$html .= '<label for="'.$id.'">';
			$html .= Image::getHtml($image, $option['name'], 'title="'.specialchars($option['name']).'"');
			$html .= '</label>';
			$html .= '</div>';
		}

		$html .= '</div>';

		return '<div>'.$html.'</div>';
	}
}
