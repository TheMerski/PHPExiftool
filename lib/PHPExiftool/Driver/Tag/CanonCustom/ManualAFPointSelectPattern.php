<?php

namespace PHPExiftool\Driver\Tag\CanonCustom;

class ManualAFPointSelectPattern extends \PHPExiftool\Driver\Tag
{

    protected $Id = 1299;

    protected $Name = 'ManualAFPointSelectPattern';

    protected $FullName = 'CanonCustom::Functions2';

    protected $GroupName = 'CanonCustom';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'CanonCustom';

    protected $g2 = 'Camera';

    protected $Type = 'int32s';

    protected $Writable = true;

    protected $Description = 'Manual AF Point Select Pattern';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Stops at AF area edges',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Continuous',
        ),
    );

}
