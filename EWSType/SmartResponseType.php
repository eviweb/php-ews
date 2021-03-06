<?php
/**
 * Definition of the SmartResponseType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the SmartResponseType type
 */
class EWSType_SmartResponseType extends EWSType
{
    /**
     * NewBodyContent property
     *
     * @var EWSType_BodyType
     */
    public $NewBodyContent;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schema = array(
            array(
                'name' => 'NewBodyContent',
                'required' => false,
                'type' => 'BodyType',
            ),
        );
    }
}
