<?php

namespace PHPExiftool\Driver\Tag\XMPExif;

class GainControl extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'GainControl';

    protected $Name = 'GainControl';

    protected $FullName = 'XMP::exif';

    protected $GroupName = 'XMP-exif';

    protected $g0 = 'XMP';

    protected $g1 = 'XMP-exif';

    protected $g2 = 'Image';

    protected $Type = 'integer';

    protected $Writable = true;

    protected $Description = 'Gain Control';

    protected $local_g2 = 'Camera';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'None',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Low gain up',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'High gain up',
        ),
        3 => array(
            'Id' => 3,
            'Label' => 'Low gain down',
        ),
        4 => array(
            'Id' => 4,
            'Label' => 'High gain down',
        ),
    );

}
