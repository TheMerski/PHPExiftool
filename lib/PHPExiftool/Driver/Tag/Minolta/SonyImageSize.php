<?php

namespace PHPExiftool\Driver\Tag\Minolta;

class SonyImageSize extends \PHPExiftool\Driver\Tag
{

    protected $Id = 59;

    protected $Name = 'SonyImageSize';

    protected $FullName = 'Minolta::CameraSettingsA100';

    protected $GroupName = 'Minolta';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Minolta';

    protected $g2 = 'Camera';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'Sony Image Size';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Standard',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Medium',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Small',
        ),
    );

}
