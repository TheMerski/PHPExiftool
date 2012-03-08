<?php

namespace PHPExiftool\Driver\Tag\MPEG;

class Emphasis extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'Bit30-31';

    protected $Name = 'Emphasis';

    protected $FullName = 'MPEG::Audio';

    protected $GroupName = 'MPEG';

    protected $g0 = 'MPEG';

    protected $g1 = 'MPEG';

    protected $g2 = 'Audio';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Emphasis';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'None',
        ),
        1 => array(
            'Id' => 1,
            'Label' => '50/15 ms',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'reserved',
        ),
        3 => array(
            'Id' => 3,
            'Label' => 'CCIT J.17',
        ),
    );

}
