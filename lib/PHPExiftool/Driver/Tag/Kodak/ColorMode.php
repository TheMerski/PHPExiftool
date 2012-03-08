<?php

namespace PHPExiftool\Driver\Tag\Kodak;

class ColorMode extends \PHPExiftool\Driver\Tag
{

    protected $Id = 102;

    protected $Name = 'ColorMode';

    protected $FullName = 'Kodak::Main';

    protected $GroupName = 'Kodak';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Kodak';

    protected $g2 = 'Camera';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'Color Mode';

    protected $Values = array(
        1 => array(
            'Id' => 1,
            'Label' => 'B&W',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Sepia',
        ),
        3 => array(
            'Id' => 3,
            'Label' => 'B&W Yellow Filter',
        ),
        4 => array(
            'Id' => 4,
            'Label' => 'B&W Red Filter',
        ),
        32 => array(
            'Id' => 32,
            'Label' => 'Saturated Color',
        ),
        64 => array(
            'Id' => 64,
            'Label' => 'Neutral Color',
        ),
        256 => array(
            'Id' => 256,
            'Label' => 'Saturated Color',
        ),
        512 => array(
            'Id' => 512,
            'Label' => 'Neutral Color',
        ),
        8192 => array(
            'Id' => 8192,
            'Label' => 'B&W',
        ),
        16384 => array(
            'Id' => 16384,
            'Label' => 'Sepia',
        ),
    );

}
