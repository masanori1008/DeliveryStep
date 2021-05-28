<?php

namespace AHT\DeliveryStep\Plugin\Block\Adminhtml;

class DeliveryViewInfo
{
    public function afterToHtml(
        \Magento\Sales\Block\Adminhtml\Order\View\Info $subject, $result
    )
    {
        $customBlock = $subject->getLayout()->getBlock('custom_block');
        if ($customBlock !== false && $subject->getNameInLayout() == 'order_info') {
            $result = $result . $customBlock->toHtml();
        }

        return $result;
    }
}