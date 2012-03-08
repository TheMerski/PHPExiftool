<?php

namespace PHPExiftool\Driver\Tag\NikonCapture;

class WBAdjLighting extends \PHPExiftool\Driver\Tag
{

    protected $Id = 21;

    protected $Name = 'WBAdjLighting';

    protected $FullName = 'NikonCapture::WBAdjData';

    protected $GroupName = 'NikonCapture';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'NikonCapture';

    protected $g2 = 'Image';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'WB Adj Lighting';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'None',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Incandescent',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Daylight',
        ),
        3 => array(
            'Id' => 3,
            'Label' => 'Standard Fluorescent',
        ),
        4 => array(
            'Id' => 4,
            'Label' => 'High Color Rendering Fluorescent',
        ),
        5 => array(
            'Id' => 5,
            'Label' => 'Flash',
        ),
    );

}
