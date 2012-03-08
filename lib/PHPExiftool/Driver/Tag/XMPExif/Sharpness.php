<?php

namespace PHPExiftool\Driver\Tag\XMPExif;

class Sharpness extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'Sharpness';

    protected $Name = 'Sharpness';

    protected $FullName = 'XMP::exif';

    protected $GroupName = 'XMP-exif';

    protected $g0 = 'XMP';

    protected $g1 = 'XMP-exif';

    protected $g2 = 'Image';

    protected $Type = 'integer';

    protected $Writable = true;

    protected $Description = 'Sharpness';

    protected $local_g2 = 'Camera';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Normal',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Soft',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Hard',
        ),
    );

}
