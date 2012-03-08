<?php

namespace PHPExiftool\Driver\Tag\Minolta;

class MinoltaModelID extends \PHPExiftool\Driver\Tag
{

    protected $Id = 37;

    protected $Name = 'MinoltaModelID';

    protected $FullName = 'Minolta::CameraSettings';

    protected $GroupName = 'Minolta';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Minolta';

    protected $g2 = 'Camera';

    protected $Type = 'int32u';

    protected $Writable = true;

    protected $Description = 'Minolta Model ID';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'DiMAGE 7, X1, X21 or X31',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'DiMAGE 5',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'DiMAGE S304',
        ),
        3 => array(
            'Id' => 3,
            'Label' => 'DiMAGE S404',
        ),
        4 => array(
            'Id' => 4,
            'Label' => 'DiMAGE 7i',
        ),
        5 => array(
            'Id' => 5,
            'Label' => 'DiMAGE 7Hi',
        ),
        6 => array(
            'Id' => 6,
            'Label' => 'DiMAGE A1',
        ),
        7 => array(
            'Id' => 7,
            'Label' => 'DiMAGE A2 or S414',
        ),
    );

}
