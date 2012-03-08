<?php

namespace PHPExiftool\Driver\Tag\XMPPlus;

class CreditLineRequired extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'CreditLineRequired';

    protected $Name = 'CreditLineRequired';

    protected $FullName = 'XMP::plus';

    protected $GroupName = 'XMP-plus';

    protected $g0 = 'XMP';

    protected $g1 = 'XMP-plus';

    protected $g2 = 'Author';

    protected $Type = 'string';

    protected $Writable = true;

    protected $Description = 'Credit Line Required';

    protected $Values = array(
        'CR-CAI' => array(
            'Id' => 'CR-CAI',
            'Label' => 'Credit Adjacent To Image',
        ),
        'CR-CCA' => array(
            'Id' => 'CR-CCA',
            'Label' => 'Credit in Credits Area',
        ),
        'CR-COI' => array(
            'Id' => 'CR-COI',
            'Label' => 'Credit on Image',
        ),
        'CR-NRQ' => array(
            'Id' => 'CR-NRQ',
            'Label' => 'Not Required',
        ),
    );

}
