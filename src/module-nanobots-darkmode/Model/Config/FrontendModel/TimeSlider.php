<?php

namespace Nanobots\DarkMode\Model\Config\FrontendModel;

use Magento\Config\Block\System\Config\Form\Field;
use Magento\Framework\Data\Form\Element\AbstractElement;
use Magento\Framework\Exception\LocalizedException;

class TimeSlider extends Field
{

    /**
     * Retrieve element HTML markup
     *
     * @param AbstractElement $element
     * @return string
     * @throws LocalizedException
     */
    protected function _getElementHtml(AbstractElement $element)
    {
        $renderer = $this->getLayout()->createBlock(
            \Nanobots\DarkMode\Block\Adminhtml\Config\TimeSlider::class
        );
        $renderer->setElement($element);

        return $renderer->toHtml();
    }
}