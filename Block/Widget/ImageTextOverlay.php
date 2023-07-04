<?php
namespace Snowfoot\ImageTextOverlay\Block\Widget;

use Magento\Framework\View\Element\Template;
use Magento\Widget\Block\BlockInterface;

class ImageTextOverlayWidget extends Template implements BlockInterface
{
    protected $_template = 'widget/ImageTextOverlayWidget.phtml';

    public function getImagePath()
    {
        return $this->getData('image_path');
    }

    public function getText()
    {
        return $this->getData('text');
    }

    public function getButtonText()
    {
        return $this->getData('button_text');
    }

    public function getButtonUrl()
    {
        return $this->getData('button_url');
    }
}
