<?php

namespace PHPExiftool\Driver\Tag\MPImage;

class MPImageType extends \PHPExiftool\Driver\Tag
{

    protected $Id = '0.3';

    protected $Name = 'MPImageType';

    protected $FullName = 'MPF::MPImage';

    protected $GroupName = 'MPImage';

    protected $g0 = 'MPF';

    protected $g1 = 'MPImage';

    protected $g2 = 'Image';

    protected $Type = 'int32u';

    protected $Writable = false;

    protected $Description = 'MP Image Type';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Undefined',
        ),
        65537 => array(
            'Id' => 65537,
            'Label' => 'Large Thumbnail (VGA equivalent)',
        ),
        65538 => array(
            'Id' => 65538,
            'Label' => 'Large Thumbnail (full HD equivalent)',
        ),
        131073 => array(
            'Id' => 131073,
            'Label' => 'Multi-frame Panorama',
        ),
        131074 => array(
            'Id' => 131074,
            'Label' => 'Multi-frame Disparity',
        ),
        131075 => array(
            'Id' => 131075,
            'Label' => 'Multi-angle',
        ),
        196608 => array(
            'Id' => 196608,
            'Label' => 'Baseline MP Primary Image',
        ),
    );

}
