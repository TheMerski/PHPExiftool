<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\MNG;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTag;

/**
 * @ExclusionPolicy("all")
 */
class AlphaFilter extends AbstractTag
{

    protected $Id = 14;

    protected $Name = 'AlphaFilter';

    protected $FullName = 'MNG::JNGHeader';

    protected $GroupName = 'MNG';

    protected $g0 = 'MNG';

    protected $g1 = 'MNG';

    protected $g2 = 'Image';

    protected $Type = 'int8u';

    protected $Writable = false;

    protected $Description = 'Alpha Filter';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Adaptive MNG (N/A for JPEG)',
        ),
    );

}
