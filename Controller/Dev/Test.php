<?php
/**
 * Created by PhpStorm.
 * User: mikko
 * Date: 04/12/2017
 * Time: 23.01
 */

namespace Bunnyfeet\MultiplePayments\Controller\Dev;


use Magento\Framework\App\Action\Context;
use Magento\Framework\App\ResponseInterface;

class Test extends \Magento\Framework\App\Action\Action
{

    /** @var \Magento\Payment\Api\PaymentMethodListInterface  */
    protected $_paymentMethodList;

    public function __construct(
        Context $context,
        \Magento\Payment\Api\PaymentMethodListInterface $paymentMethodList
    )
    {
        $this->_paymentMethodList = $paymentMethodList;
        parent::__construct($context);
    }

    public function execute()
    {
        echo '<pre>';
        var_dump($this->_paymentMethodList->getActiveList(1));
        echo '</pre>';
        die();
    }
}