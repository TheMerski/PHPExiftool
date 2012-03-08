<?php

namespace PHPExiftool\Driver\Tag\DICOM;

class NumberOfSamples extends \PHPExiftool\Driver\Tag
{

    protected $Id = '50xx,2006';

    protected $Name = 'NumberOfSamples';

    protected $FullName = 'DICOM::Main';

    protected $GroupName = 'DICOM';

    protected $g0 = 'DICOM';

    protected $g1 = 'DICOM';

    protected $g2 = 'Image';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Number Of Samples';

}
