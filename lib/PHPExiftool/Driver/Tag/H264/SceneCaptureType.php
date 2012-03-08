<?php

namespace PHPExiftool\Driver\Tag\H264;

class SceneCaptureType extends \PHPExiftool\Driver\Tag
{

    protected $Id = 170;

    protected $Name = 'SceneCaptureType';

    protected $FullName = 'H264::MDPM';

    protected $GroupName = 'H264';

    protected $g0 = 'H264';

    protected $g1 = 'H264';

    protected $g2 = 'Camera';

    protected $Type = 'int32u';

    protected $Writable = false;

    protected $Description = 'Scene Capture Type';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Standard',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Landscape',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Portrait',
        ),
        3 => array(
            'Id' => 3,
            'Label' => 'Night',
        ),
    );

}
