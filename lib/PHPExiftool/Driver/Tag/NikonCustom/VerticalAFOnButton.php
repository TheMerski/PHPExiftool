<?php

namespace PHPExiftool\Driver\Tag\NikonCustom;

class VerticalAFOnButton extends \PHPExiftool\Driver\Tag
{

    protected $Id = '3.2';

    protected $Name = 'VerticalAFOnButton';

    protected $FullName = 'NikonCustom::SettingsD3';

    protected $GroupName = 'NikonCustom';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'NikonCustom';

    protected $g2 = 'Camera';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'Vertical AF On Button';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'AF On',
        ),
        16 => array(
            'Id' => 16,
            'Label' => 'AE/AF Lock',
        ),
        32 => array(
            'Id' => 32,
            'Label' => 'AE Lock Only',
        ),
        48 => array(
            'Id' => 48,
            'Label' => 'AE Lock (reset on release)',
        ),
        64 => array(
            'Id' => 64,
            'Label' => 'AE Lock (hold)',
        ),
        80 => array(
            'Id' => 80,
            'Label' => 'AF Lock Only',
        ),
        112 => array(
            'Id' => 112,
            'Label' => 'Same as AF On',
        ),
    );

}
