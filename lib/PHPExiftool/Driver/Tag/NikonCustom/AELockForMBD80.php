<?php

namespace PHPExiftool\Driver\Tag\NikonCustom;

class AELockForMBD80 extends \PHPExiftool\Driver\Tag
{

    protected $Id = '3.1';

    protected $Name = 'AELockForMB-D80';

    protected $FullName = 'NikonCustom::SettingsD90';

    protected $GroupName = 'NikonCustom';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'NikonCustom';

    protected $g2 = 'Camera';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'AE Lock For MB-D80';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'AE Lock Only',
        ),
        4 => array(
            'Id' => 4,
            'Label' => 'AF Lock Only',
        ),
        8 => array(
            'Id' => 8,
            'Label' => 'AE Lock (hold)',
        ),
        12 => array(
            'Id' => 12,
            'Label' => 'AF-On',
        ),
        16 => array(
            'Id' => 16,
            'Label' => 'FV Lock',
        ),
        20 => array(
            'Id' => 20,
            'Label' => 'Focus Point Selection',
        ),
        28 => array(
            'Id' => 28,
            'Label' => 'AE/AF Lock',
        ),
    );

}
