<?php

namespace PHPExiftool\Driver\Tag\CanonVRD;

class AutoLightingOptimizer extends \PHPExiftool\Driver\Tag
{

    protected $Id = 111;

    protected $Name = 'AutoLightingOptimizer';

    protected $FullName = 'CanonVRD::Ver2';

    protected $GroupName = 'CanonVRD';

    protected $g0 = 'CanonVRD';

    protected $g1 = 'CanonVRD';

    protected $g2 = 'Image';

    protected $Type = 'int16s';

    protected $Writable = true;

    protected $Description = 'Auto Lighting Optimizer';

    protected $Values = array(
        100 => array(
            'Id' => 100,
            'Label' => 'Low',
        ),
        200 => array(
            'Id' => 200,
            'Label' => 'Standard',
        ),
        300 => array(
            'Id' => 300,
            'Label' => 'Strong',
        ),
        32767 => array(
            'Id' => 32767,
            'Label' => 'n/a',
        ),
    );

}
