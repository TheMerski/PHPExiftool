<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\HTMLNcc;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTag;

/**
 * @ExclusionPolicy("all")
 */
class SourceRights extends AbstractTag
{

    protected $Id = 'sourcerights';

    protected $Name = 'SourceRights';

    protected $FullName = 'HTML::ncc';

    protected $GroupName = 'HTML-ncc';

    protected $g0 = 'HTML';

    protected $g1 = 'HTML-ncc';

    protected $g2 = 'Document';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Source Rights';

}
