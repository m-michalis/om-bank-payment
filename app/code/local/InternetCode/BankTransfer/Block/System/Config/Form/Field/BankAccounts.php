<?php

class InternetCode_BankTransfer_Block_System_Config_Form_Field_BankAccounts extends Mage_Adminhtml_Block_System_Config_Form_Field_Array_Abstract
{
    public function __construct()
    {
        $hlp = Mage::helper('ic_banktransfer');

        $this->addColumn('bank_name', [
            'label' => $hlp->getBankKeyLabel('bank_name'),
            'style' => 'width:120px',
        ]);
        $this->addColumn('iban', [
            'label' => $hlp->getBankKeyLabel('iban'),
            'style' => 'width:120px',
        ]);
        $this->addColumn('bic', [
            'label' => $hlp->getBankKeyLabel('bic'),
            'style' => 'width:120px',
        ]);
        $this->addColumn('beneficiary', [
            'label' => $hlp->getBankKeyLabel('beneficiary'),
            'style' => 'width:120px',
        ]);
        $this->_addAfter = false;
        $this->_addButtonLabel = $hlp->__('Add Bank');
        parent::__construct();
    }
}
