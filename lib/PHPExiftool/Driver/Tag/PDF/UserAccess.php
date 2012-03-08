<?php

namespace PHPExiftool\Driver\Tag\PDF;

class UserAccess extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'P';

    protected $Name = 'UserAccess';

    protected $FullName = 'PDF::Encrypt';

    protected $GroupName = 'PDF';

    protected $g0 = 'PDF';

    protected $g1 = 'PDF';

    protected $g2 = 'Document';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'User Access';

    protected $Values = array(
        4 => array(
            'Id' => 4,
            'Label' => 'Print',
        ),
        8 => array(
            'Id' => 8,
            'Label' => 'Modify',
        ),
        16 => array(
            'Id' => 16,
            'Label' => 'Copy',
        ),
        32 => array(
            'Id' => 32,
            'Label' => 'Annotate',
        ),
        256 => array(
            'Id' => 256,
            'Label' => 'Fill forms',
        ),
        512 => array(
            'Id' => 512,
            'Label' => 'Extract',
        ),
        1024 => array(
            'Id' => 1024,
            'Label' => 'Assemble',
        ),
        2048 => array(
            'Id' => 2048,
            'Label' => 'Print high-res',
        ),
    );

}
