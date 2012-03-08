<?php

namespace PHPExiftool\Driver\Tag\Sanyo;

class SequenceShotInterval extends \PHPExiftool\Driver\Tag
{

    protected $Id = 548;

    protected $Name = 'SequenceShotInterval';

    protected $FullName = 'Sanyo::Main';

    protected $GroupName = 'Sanyo';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Sanyo';

    protected $g2 = 'Camera';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'Sequence Shot Interval';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => '5 frames/s',
        ),
        1 => array(
            'Id' => 1,
            'Label' => '10 frames/s',
        ),
        2 => array(
            'Id' => 2,
            'Label' => '15 frames/s',
        ),
        3 => array(
            'Id' => 3,
            'Label' => '20 frames/s',
        ),
    );

}
