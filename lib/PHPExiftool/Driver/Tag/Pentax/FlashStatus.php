<?php

namespace PHPExiftool\Driver\Tag\Pentax;

class FlashStatus extends \PHPExiftool\Driver\Tag
{

    protected $Id = 0;

    protected $Name = 'FlashStatus';

    protected $FullName = 'Pentax::FlashInfo';

    protected $GroupName = 'Pentax';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Pentax';

    protected $g2 = 'Camera';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'Flash Status';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Off',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Off (1)',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'External, Did not fire',
        ),
        6 => array(
            'Id' => 6,
            'Label' => 'External, Fired',
        ),
        8 => array(
            'Id' => 8,
            'Label' => 'Internal, Did not fire (0x08)',
        ),
        9 => array(
            'Id' => 9,
            'Label' => 'Internal, Did not fire',
        ),
        13 => array(
            'Id' => 13,
            'Label' => 'Internal, Fired',
        ),
    );

}
