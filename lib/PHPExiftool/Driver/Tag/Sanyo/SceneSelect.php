<?php

namespace PHPExiftool\Driver\Tag\Sanyo;

class SceneSelect extends \PHPExiftool\Driver\Tag
{

    protected $Id = 543;

    protected $Name = 'SceneSelect';

    protected $FullName = 'Sanyo::Main';

    protected $GroupName = 'Sanyo';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Sanyo';

    protected $g2 = 'Camera';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'Scene Select';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Off',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Sport',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'TV',
        ),
        3 => array(
            'Id' => 3,
            'Label' => 'Night',
        ),
        4 => array(
            'Id' => 4,
            'Label' => 'User 1',
        ),
        5 => array(
            'Id' => 5,
            'Label' => 'User 2',
        ),
        6 => array(
            'Id' => 6,
            'Label' => 'Lamp',
        ),
    );

}
