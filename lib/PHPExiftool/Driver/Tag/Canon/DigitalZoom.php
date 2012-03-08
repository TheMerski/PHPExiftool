<?php

namespace PHPExiftool\Driver\Tag\Canon;

class DigitalZoom extends \PHPExiftool\Driver\Tag
{

    protected $Id = 12;

    protected $Name = 'DigitalZoom';

    protected $FullName = 'Canon::CameraSettings';

    protected $GroupName = 'Canon';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Canon';

    protected $g2 = 'Camera';

    protected $Type = 'int16s';

    protected $Writable = true;

    protected $Description = 'Digital Zoom';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'None',
        ),
        1 => array(
            'Id' => 1,
            'Label' => '2x',
        ),
        2 => array(
            'Id' => 2,
            'Label' => '4x',
        ),
        3 => array(
            'Id' => 3,
            'Label' => 'Other',
        ),
    );

}
