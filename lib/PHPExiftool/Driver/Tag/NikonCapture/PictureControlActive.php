<?php

namespace PHPExiftool\Driver\Tag\NikonCapture;

class PictureControlActive extends \PHPExiftool\Driver\Tag
{

    protected $Id = 0;

    protected $Name = 'PictureControlActive';

    protected $FullName = 'NikonCapture::PictureCtrl';

    protected $GroupName = 'NikonCapture';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'NikonCapture';

    protected $g2 = 'Image';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'Picture Control Active';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Off',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'On',
        ),
    );

}
