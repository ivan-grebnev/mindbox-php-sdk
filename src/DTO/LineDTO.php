<?php


namespace Mindbox\DTO;

/**
 * Class LineDTO
 *
 * @package Mindbox\DTO
 * @property string $quantity
 * @property array  $customFields
 * @property string $status
 **/
abstract class LineDTO extends DTO
{
    use CustomFieldDTO;

    /**
     * @var string Название элемента для корректной генерации xml.
     */
    protected static $xmlName = 'line';

    /**
     * @return string
     */
    public function getQuantity()
    {
        return $this->getField('quantity');
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->getField('status');
    }
}
