<?php


namespace Mindbox\DTO;

/**
 * Class SmsConfirmationResponseDTO
 *
 * @package Mindbox\DTO
 * @property string $processingStatus
 */
class SmsConfirmationResponseDTO extends DTO
{
    /**
     * @var string Название элемента для корректной генерации xml.
     */
    protected static $xmlName = 'smsConfirmation';

    /**
     * @return string
     */
    public function getProcessingStatus()
    {
        return $this->getField('processingStatus');
    }
}
