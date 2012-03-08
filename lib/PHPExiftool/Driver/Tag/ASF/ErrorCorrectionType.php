<?php

namespace PHPExiftool\Driver\Tag\ASF;

class ErrorCorrectionType extends \PHPExiftool\Driver\Tag
{

    protected $Id = 16;

    protected $Name = 'ErrorCorrectionType';

    protected $FullName = 'ASF::StreamProperties';

    protected $GroupName = 'ASF';

    protected $g0 = 'ASF';

    protected $g1 = 'ASF';

    protected $g2 = 'Video';

    protected $Type = 'binary';

    protected $Writable = false;

    protected $Description = 'Error Correction Type';

    protected $Values = array(
        '20FB5700-5B55-11CF-A8FD-00805F5C442B' => array(
            'Id' => '20FB5700-5B55-11CF-A8FD-00805F5C442B',
            'Label' => 'No Error Correction',
        ),
        'BFC3CD50-618F-11CF-8BB2-00AA00B4E220' => array(
            'Id' => 'BFC3CD50-618F-11CF-8BB2-00AA00B4E220',
            'Label' => 'Audio Spread',
        ),
    );

}
