<?php

namespace PHPExiftool\Driver\Tag\GPS;

class GPSDifferential extends \PHPExiftool\Driver\Tag
{

    protected $Id = 30;

    protected $Name = 'GPSDifferential';

    protected $FullName = 'GPS::Main';

    protected $GroupName = 'GPS';

    protected $g0 = 'EXIF';

    protected $g1 = 'GPS';

    protected $g2 = 'Location';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'GPS Differential';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'No Correction',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Differential Corrected',
        ),
    );

}
