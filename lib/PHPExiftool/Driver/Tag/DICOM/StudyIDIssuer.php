<?php

namespace PHPExiftool\Driver\Tag\DICOM;

class StudyIDIssuer extends \PHPExiftool\Driver\Tag
{

    protected $Id = '0032,0012';

    protected $Name = 'StudyIDIssuer';

    protected $FullName = 'DICOM::Main';

    protected $GroupName = 'DICOM';

    protected $g0 = 'DICOM';

    protected $g1 = 'DICOM';

    protected $g2 = 'Image';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Study ID Issuer';

}
