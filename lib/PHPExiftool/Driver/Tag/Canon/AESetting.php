<?php

namespace PHPExiftool\Driver\Tag\Canon;

class AESetting extends \PHPExiftool\Driver\Tag
{

    protected $Id = 33;

    protected $Name = 'AESetting';

    protected $FullName = 'Canon::CameraSettings';

    protected $GroupName = 'Canon';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Canon';

    protected $g2 = 'Camera';

    protected $Type = 'int16s';

    protected $Writable = true;

    protected $Description = 'AE Setting';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Normal AE',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Exposure Compensation',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'AE Lock',
        ),
        3 => array(
            'Id' => 3,
            'Label' => 'AE Lock + Exposure Comp.',
        ),
        4 => array(
            'Id' => 4,
            'Label' => 'No AE',
        ),
    );

}
