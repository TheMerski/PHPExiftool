<?php

namespace PHPExiftool\Driver\Tag\Minolta;

class AutoBracketOrder extends \PHPExiftool\Driver\Tag
{

    protected $Id = 67;

    protected $Name = 'AutoBracketOrder';

    protected $FullName = 'Minolta::CameraSettingsA100';

    protected $GroupName = 'Minolta';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Minolta';

    protected $g2 = 'Camera';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'Auto Bracket Order';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => '0 - +',
        ),
        1 => array(
            'Id' => 1,
            'Label' => '- 0 +',
        ),
    );

}
