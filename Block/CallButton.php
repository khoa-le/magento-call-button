<?php

namespace Khoaln\CallButton\Block;


class CallButton extends \Magento\Framework\View\Element\Template
{
    /**
     * @var \Khoaln\CallButton\Helper\Data
     */
    private $_dataHelper;

    /**
     * CallButton constructor.
     * @param \Khoaln\CallButton\Helper\Data $dataHelper
     * @param \Magento\Framework\View\Element\Template\Context $context
     * @param array $data
     */
    public function __construct(
        \Khoaln\CallButton\Helper\Data $dataHelper,
        \Magento\Framework\View\Element\Template\Context $context,
        array $data = []
    )
    {
        parent::__construct($context, $data);
        $this->_dataHelper = $dataHelper;
    }

    public function _toHtml()
    {
        if($this->_dataHelper->isEnabled()){
            if($this->_dataHelper->getPosition() == 2){
                $this->setTemplate("Khoaln_CallButton::call_button-left.phtml");
            }
        }else{
            $this->setTemplate("");
        }

        return parent::_toHtml();
    }

    public function getHotline()
    {
        return $this->_dataHelper->getHotline();
    }

    public function getLabelHotline()
    {
        return $this->_dataHelper->getLabelHotline();
    }
}
