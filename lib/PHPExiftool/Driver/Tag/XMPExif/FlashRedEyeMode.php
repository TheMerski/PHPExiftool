<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\XMPExif;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTag;

/**
 * @ExclusionPolicy("all")
 */
class FlashRedEyeMode extends AbstractTag
{

    protected $Id = 'FlashRedEyeMode';

    protected $Name = 'FlashRedEyeMode';

    protected $FullName = 'XMP::exif';

    protected $GroupName = 'XMP-exif';

    protected $g0 = 'XMP';

    protected $g1 = 'XMP-exif';

    protected $g2 = 'Image';

    protected $Type = 'boolean';

    protected $Writable = true;

    protected $Description = 'Flash Red Eye Mode';

    protected $local_g2 = 'Camera';

    protected $Values = array(
        False => array(
            'Id' => False,
            'Label' => False,
        ),
        True => array(
            'Id' => True,
            'Label' => True,
        ),
    );

}
