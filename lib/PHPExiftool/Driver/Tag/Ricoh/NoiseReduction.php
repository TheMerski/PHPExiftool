<?php

namespace PHPExiftool\Driver\Tag\Ricoh;

class NoiseReduction extends \PHPExiftool\Driver\Tag
{

    protected $Id = 42;

    protected $Name = 'NoiseReduction';

    protected $FullName = 'Ricoh::Subdir';

    protected $GroupName = 'Ricoh';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Ricoh';

    protected $g2 = 'Camera';

    protected $Type = 'int32u';

    protected $Writable = true;

    protected $Description = 'Noise Reduction';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Off',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Weak',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Strong',
        ),
        3 => array(
            'Id' => 3,
            'Label' => 'Max',
        ),
    );

}
