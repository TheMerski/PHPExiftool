<?php

namespace PHPExiftool\Driver\Tag\EXE;

class PEType extends \PHPExiftool\Driver\Tag
{

    protected $Id = 10;

    protected $Name = 'PEType';

    protected $FullName = 'EXE::Main';

    protected $GroupName = 'EXE';

    protected $g0 = 'EXE';

    protected $g1 = 'EXE';

    protected $g2 = 'Other';

    protected $Type = 'int16u';

    protected $Writable = false;

    protected $Description = 'PE Type';

    protected $Values = array(
        267 => array(
            'Id' => 267,
            'Label' => 'PE32',
        ),
        523 => array(
            'Id' => 523,
            'Label' => 'PE32+',
        ),
    );

}
