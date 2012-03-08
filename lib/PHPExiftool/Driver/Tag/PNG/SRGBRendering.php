<?php

namespace PHPExiftool\Driver\Tag\PNG;

class SRGBRendering extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'sRGB';

    protected $Name = 'SRGBRendering';

    protected $FullName = 'PNG::Main';

    protected $GroupName = 'PNG';

    protected $g0 = 'PNG';

    protected $g1 = 'PNG';

    protected $g2 = 'Image';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'SRGB Rendering';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Perceptual',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Relative Colorimetric',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Saturation',
        ),
        3 => array(
            'Id' => 3,
            'Label' => 'Absolute Colorimetric',
        ),
    );

}
