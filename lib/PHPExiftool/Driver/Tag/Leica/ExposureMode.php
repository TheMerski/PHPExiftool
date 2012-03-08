<?php

namespace PHPExiftool\Driver\Tag\Leica;

class ExposureMode extends \PHPExiftool\Driver\Tag
{

    protected $Id = 1037;

    protected $Name = 'ExposureMode';

    protected $FullName = 'Panasonic::Leica5';

    protected $GroupName = 'Leica';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Leica';

    protected $g2 = 'Camera';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'Exposure Mode';

    protected $Values = array(
        '0 0 0 0' => array(
            'Id' => '0 0 0 0',
            'Label' => 'Program AE',
        ),
        '1 0 0 0' => array(
            'Id' => '1 0 0 0',
            'Label' => 'Aperture-priority AE',
        ),
        '2 0 0 0' => array(
            'Id' => '2 0 0 0',
            'Label' => 'Shutter speed priority AE',
        ),
        '3 0 0 0' => array(
            'Id' => '3 0 0 0',
            'Label' => 'Manual',
        ),
    );

}
