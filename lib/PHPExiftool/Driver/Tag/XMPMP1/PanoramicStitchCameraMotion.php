<?php

namespace PHPExiftool\Driver\Tag\XMPMP1;

class PanoramicStitchCameraMotion extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'PanoramicStitchCameraMotion';

    protected $Name = 'PanoramicStitchCameraMotion';

    protected $FullName = 'Microsoft::MP1';

    protected $GroupName = 'XMP-MP1';

    protected $g0 = 'XMP';

    protected $g1 = 'XMP-MP1';

    protected $g2 = 'Image';

    protected $Type = 'string';

    protected $Writable = true;

    protected $Description = 'Panoramic Stitch Camera Motion';

    protected $Values = array(
        '3DRotation' => array(
            'Id' => '3DRotation',
            'Label' => '3D Rotation',
        ),
        'Affine' => array(
            'Id' => 'Affine',
            'Label' => 'Affine',
        ),
        'Homography' => array(
            'Id' => 'Homography',
            'Label' => 'Homography',
        ),
        'RigidScale' => array(
            'Id' => 'RigidScale',
            'Label' => 'Rigid Scale',
        ),
    );

}
