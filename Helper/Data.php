<?php

namespace Khoaln\CallButton\Helper;


use Magento\Framework\App\Helper\AbstractHelper;

class Data extends AbstractHelper
{
    const CONFIG_PATH_CALL_BUTTON_LABEL_HOTLINE = 'khoaln_callbutton/general/label_hotline';
    const CONFIG_PATH_CALL_BUTTON_HOTLINE = 'khoaln_callbutton/general/hotline';
    const CONFIG_PATH_CALL_BUTTON_POSITION = 'khoaln_callbutton/general/position';

    /**
     * @var \Magento\Framework\App\Config\ScopeConfigInterface|null
     */
    protected $_scopeConfig = null;

    /**
     * Data constructor.
     * @param \Magento\Framework\App\Helper\Context $context
     * @param \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig
     */
    public function __construct(
        \Magento\Framework\App\Helper\Context $context
    )
    {
        parent::__construct($context);
        $this->_scopeConfig = $context->getScopeConfig();
    }

    public function getLabelHotline()
    {
        return $this->_getConfigValueByPath(self::CONFIG_PATH_CALL_BUTTON_LABEL_HOTLINE);
    }

    public function getHotline()
    {
        return $this->_getConfigValueByPath(self::CONFIG_PATH_CALL_BUTTON_HOTLINE);
    }

    public function getPosition()
    {
        return $this->_getConfigValueByPath(self::CONFIG_PATH_CALL_BUTTON_POSITION);
    }

    /**
     * @param $path
     * @param string $scope
     * @param null $storeId
     * @return mixed
     */
    private function _getConfigValueByPath(
        $path,
        $scope = \Magento\Store\Model\ScopeInterface::SCOPE_WEBSITE,
        $storeId = null
    )
    {
        return $this->_scopeConfig->getValue(
            $path,
            $scope,
            $storeId
        );
    }

}
