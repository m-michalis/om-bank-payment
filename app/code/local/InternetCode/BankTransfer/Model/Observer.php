<?php

class InternetCode_BankTransfer_Model_Observer
{

    public function prepareSpecificInformation($event)
    {
        $payment = $event->getPayment();
        $transport = $event->getTransport();
        $helper = Mage::helper('ic_banktransfer');
        if ($payment->getMethod() === 'icbanktransfer') {
            foreach ([
                         'bank_name',
                         'iban',
                         'bic',
                         'beneficiary'
                     ] as $key) {
                if ($value = $payment->getAdditionalInformation($key)) {
                    $transport->setData($helper->getBankKeyLabel($key), $value);
                }
            }
        }
    }
}
