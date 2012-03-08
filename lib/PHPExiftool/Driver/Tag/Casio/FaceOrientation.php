<?php

namespace PHPExiftool\Driver\Tag\Casio;

class FaceOrientation extends \PHPExiftool\Driver\Tag
{

    protected $Id = 8;

    protected $Name = 'FaceOrientation';

    protected $FullName = 'Casio::FaceInfo2';

    protected $GroupName = 'Casio';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Casio';

    protected $g2 = 'Image';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'Face Orientation';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Horizontal (normal)',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Rotate 90 CW',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Rotate 270 CW',
        ),
        3 => array(
            'Id' => 3,
            'Label' => 'Rotate 180',
        ),
    );

}
