<?php


class InternetCode_BankTransfer_Helper_Data extends Mage_Core_Helper_Abstract {

    const LABELS = [
        'bank_name' => 'Bank Name',
        'iban' => 'IBAN',
        'bic' => 'BIC',
        'beneficiary' => 'Beneficiary',
        'alias_tin' => 'Alias/Tin'
    ];
    public function getBankKeyLabel($k)
    {
        return isset(self::LABELS[$k]) ? $this->__(self::LABELS[$k]) : $k;
    }
}
