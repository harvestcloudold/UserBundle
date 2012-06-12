<?php

/*
 * This file is part of the Harvest Cloud package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace HarvestCloud\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class HarvestCloudUserBundle extends Bundle
{
    /**
     * Declare HarvestCloud\UserBundle as child of FOS\UserBundle
     * This will allow us to override the default views, as documented
     * in FOS\UserBundle documentation
     *
     * @author Tom Haskins-Vaughan <tom@harvestcloud.com>
     * @sicne  2012-06-08
     *
     * @return string
     */
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
