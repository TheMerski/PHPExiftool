<?php

namespace PHPExiftool\Driver\Tag\Minolta;

class ColorTemperatureSetting extends \PHPExiftool\Driver\Tag
{

    protected $Id = 37;

    protected $Name = 'ColorTemperatureSetting';

    protected $FullName = 'Minolta::CameraSettingsA100';

    protected $GroupName = 'Minolta';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Minolta';

    protected $g2 = 'Camera';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'Color Temperature Setting';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Temperature',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Color Filter',
        ),
    );

}
