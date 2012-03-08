<?php

namespace PHPExiftool\Driver\Tag\MinoltaRaw;

class BayerPattern extends \PHPExiftool\Driver\Tag
{

    protected $Id = 23;

    protected $Name = 'BayerPattern';

    protected $FullName = 'MinoltaRaw::PRD';

    protected $GroupName = 'MinoltaRaw';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'MinoltaRaw';

    protected $g2 = 'Camera';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'Bayer Pattern';

    protected $Values = array(
        1 => array(
            'Id' => 1,
            'Label' => 'RGGB',
        ),
        4 => array(
            'Id' => 4,
            'Label' => 'GBRG',
        ),
    );

}
