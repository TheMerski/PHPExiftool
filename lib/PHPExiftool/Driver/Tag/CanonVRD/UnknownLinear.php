<?php

namespace PHPExiftool\Driver\Tag\CanonVRD;

class UnknownLinear extends \PHPExiftool\Driver\Tag
{

    protected $Id = 70;

    protected $Name = 'UnknownLinear';

    protected $FullName = 'CanonVRD::Ver2';

    protected $GroupName = 'CanonVRD';

    protected $g0 = 'CanonVRD';

    protected $g1 = 'CanonVRD';

    protected $g2 = 'Image';

    protected $Type = 'int16s';

    protected $Writable = true;

    protected $Description = 'Unknown Linear';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'No',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Yes',
        ),
    );

}
