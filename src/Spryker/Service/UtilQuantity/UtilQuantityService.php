<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Service\UtilQuantity;

use Spryker\Service\Kernel\AbstractService;

/**
 * @method \Spryker\Service\UtilQuantity\UtilQuantityServiceFactory getFactory()
 */
class UtilQuantityService extends AbstractService implements UtilQuantityServiceInterface
{
    /**
     * {@inheritdoc}
     *
     * @api
     *
     * @param float $firstQuantity
     * @param float $secondQuantity
     *
     * @return float
     */
    public function sumQuantities(float $firstQuantity, float $secondQuantity): float
    {
        return $this->getFactory()
            ->createQuantityCalculator()
            ->sumQuantities($firstQuantity, $secondQuantity);
    }

    /**
     * {@inheritdoc}
     *
     * @api
     *
     * @param float $firstQuantity
     * @param float $secondQuantity
     *
     * @return float
     */
    public function subtractQuantities(float $firstQuantity, float $secondQuantity): float
    {
        return $this->getFactory()
            ->createQuantityCalculator()
            ->subtractQuantities($firstQuantity, $secondQuantity);
    }

    /**
     * {@inheritdoc}
     *
     * @api
     *
     * @param float $firstQuantity
     * @param float $secondQuantity
     *
     * @return bool
     */
    public function isQuantityEqual(float $firstQuantity, float $secondQuantity): bool
    {
        return $this->getFactory()
            ->createQuantityComparator()
            ->isQuantityEqual($firstQuantity, $secondQuantity);
    }

    /**
     * {@inheritdoc}
     *
     * @api
     *
     * @param float $firstQuantity
     * @param float $secondQuantity
     *
     * @return bool
     */
    public function isQuantityMultiple(float $firstQuantity, float $secondQuantity): bool
    {
        return $this->getFactory()
            ->createQuantityCalculator()
            ->isQuantityMultiple($firstQuantity, $secondQuantity);
    }
}
