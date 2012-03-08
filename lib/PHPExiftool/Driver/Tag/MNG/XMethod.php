<?php

namespace PHPExiftool\Driver\Tag\MNG;

class XMethod extends \PHPExiftool\Driver\Tag
{

    protected $Id = 4;

    protected $Name = 'XMethod';

    protected $FullName = 'MNG::MagnifyObject';

    protected $GroupName = 'MNG';

    protected $g0 = 'MNG';

    protected $g1 = 'MNG';

    protected $g2 = 'Image';

    protected $Type = 'int8u';

    protected $Writable = false;

    protected $Description = 'X Method';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'No Magnification',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Pixel Replication',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Linear Interpolation',
        ),
        3 => array(
            'Id' => 3,
            'Label' => 'Closest Pixel',
        ),
        4 => array(
            'Id' => 4,
            'Label' => 'Color Linear Interpolation and Alpha Closest Pixel',
        ),
        5 => array(
            'Id' => 5,
            'Label' => 'Color Closest Pixel and Alpha Linear Interpolation',
        ),
    );

}
