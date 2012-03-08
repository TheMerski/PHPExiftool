<?php

namespace PHPExiftool\Driver\Tag\MIEGPS;

class GPSDifferential extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'Differential';

    protected $Name = 'GPSDifferential';

    protected $FullName = 'MIE::GPS';

    protected $GroupName = 'MIE-GPS';

    protected $g0 = 'MIE';

    protected $g1 = 'MIE-GPS';

    protected $g2 = 'Location';

    protected $Type = 'int8u';

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
