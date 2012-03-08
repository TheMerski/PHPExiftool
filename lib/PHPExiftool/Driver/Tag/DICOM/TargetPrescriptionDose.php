<?php

namespace PHPExiftool\Driver\Tag\DICOM;

class TargetPrescriptionDose extends \PHPExiftool\Driver\Tag
{

    protected $Id = '300A,0026';

    protected $Name = 'TargetPrescriptionDose';

    protected $FullName = 'DICOM::Main';

    protected $GroupName = 'DICOM';

    protected $g0 = 'DICOM';

    protected $g1 = 'DICOM';

    protected $g2 = 'Image';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Target Prescription Dose';

}
