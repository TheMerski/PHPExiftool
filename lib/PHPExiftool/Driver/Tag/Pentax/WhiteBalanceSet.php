<?php

namespace PHPExiftool\Driver\Tag\Pentax;

class WhiteBalanceSet extends \PHPExiftool\Driver\Tag
{

    protected $Id = 10;

    protected $Name = 'WhiteBalanceSet';

    protected $FullName = 'Pentax::CameraSettings';

    protected $GroupName = 'Pentax';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Pentax';

    protected $g2 = 'Camera';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'White Balance Set';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Auto',
        ),
        16 => array(
            'Id' => 16,
            'Label' => 'Daylight',
        ),
        32 => array(
            'Id' => 32,
            'Label' => 'Shade',
        ),
        48 => array(
            'Id' => 48,
            'Label' => 'Cloudy',
        ),
        64 => array(
            'Id' => 64,
            'Label' => 'Daylight Fluorescent',
        ),
        80 => array(
            'Id' => 80,
            'Label' => 'Day White Fluorescent',
        ),
        96 => array(
            'Id' => 96,
            'Label' => 'White Fluorescent',
        ),
        112 => array(
            'Id' => 112,
            'Label' => 'Tungsten',
        ),
        128 => array(
            'Id' => 128,
            'Label' => 'Flash',
        ),
        144 => array(
            'Id' => 144,
            'Label' => 'Manual',
        ),
        192 => array(
            'Id' => 192,
            'Label' => 'Set Color Temperature 1',
        ),
        208 => array(
            'Id' => 208,
            'Label' => 'Set Color Temperature 2',
        ),
        224 => array(
            'Id' => 224,
            'Label' => 'Set Color Temperature 3',
        ),
    );

}
