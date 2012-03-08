<?php

namespace PHPExiftool\Driver\Tag\ExifIFD;

class SubjectDistanceRange extends \PHPExiftool\Driver\Tag
{

    protected $Id = 41996;

    protected $Name = 'SubjectDistanceRange';

    protected $FullName = 'Exif::Main';

    protected $GroupName = 'ExifIFD';

    protected $g0 = 'EXIF';

    protected $g1 = 'IFD0';

    protected $g2 = 'Image';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'Subject Distance Range';

    protected $local_g1 = 'ExifIFD';

    protected $local_g2 = 'Camera';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Unknown',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Macro',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Close',
        ),
        3 => array(
            'Id' => 3,
            'Label' => 'Distant',
        ),
    );

}
