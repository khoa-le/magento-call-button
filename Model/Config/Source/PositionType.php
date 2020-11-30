<?php

namespace Khoaln\CallButton\Model\Config\Source;


class PositionType implements \Magento\Framework\Data\OptionSourceInterface
{
    public function toOptionArray()
    {
        return [
            ['value' => 1, 'label' => __('Right-Bottom')],
            ['value' => 2, 'label' => __('Left-Bottom')],
        ];
    }
}
