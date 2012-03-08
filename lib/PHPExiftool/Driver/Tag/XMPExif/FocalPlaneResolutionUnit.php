<?php

namespace PHPExiftool\Driver\Tag\XMPExif;

class FocalPlaneResolutionUnit extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'FocalPlaneResolutionUnit';

    protected $Name = 'FocalPlaneResolutionUnit';

    protected $FullName = 'XMP::exif';

    protected $GroupName = 'XMP-exif';

    protected $g0 = 'XMP';

    protected $g1 = 'XMP-exif';

    protected $g2 = 'Image';

    protected $Type = 'integer';

    protected $Writable = true;

    protected $Description = 'Focal Plane Resolution Unit';

    protected $local_g2 = 'Camera';

    protected $Values = array(
        1 => array(
            'Id' => 1,
            'Label' => 'None',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'inches',
        ),
        3 => array(
            'Id' => 3,
            'Label' => 'cm',
        ),
        4 => array(
            'Id' => 4,
            'Label' => 'mm',
        ),
        5 => array(
            'Id' => 5,
            'Label' => 'um',
        ),
    );

}
