<?php

namespace PHPExiftool\Driver\Tag\DICOM;

class GrayScale extends \PHPExiftool\Driver\Tag
{

    protected $Id = '0028,1080';

    protected $Name = 'GrayScale';

    protected $FullName = 'DICOM::Main';

    protected $GroupName = 'DICOM';

    protected $g0 = 'DICOM';

    protected $g1 = 'DICOM';

    protected $g2 = 'Image';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Gray Scale';

}
