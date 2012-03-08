<?php

namespace PHPExiftool\Driver\Tag\CanonRaw;

class ColorSpace extends \PHPExiftool\Driver\Tag
{

    protected $Id = 4276;

    protected $Name = 'ColorSpace';

    protected $FullName = 'CanonRaw::Main';

    protected $GroupName = 'CanonRaw';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'CanonRaw';

    protected $g2 = 'Camera';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'Color Space';

    protected $Values = array(
        1 => array(
            'Id' => 1,
            'Label' => 'sRGB',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Adobe RGB',
        ),
        65535 => array(
            'Id' => 65535,
            'Label' => 'Uncalibrated',
        ),
    );

}
