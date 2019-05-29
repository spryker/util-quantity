<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Service\UtilQuantity\Comparator;

interface QuantityComparatorInterface
{
    /**
     * @param float $firstQuantity
     * @param float $secondQuantity
     *
     * @return bool
     */
    public function isQuantityEqual(float $firstQuantity, float $secondQuantity): bool;

    /**
     * @param float $dividendQuantity
     * @param float $divisorQuantity
     * @param float $remainder
     *
     * @return bool
     */
    public function isQuantityModuloEqual(float $dividendQuantity, float $divisorQuantity, float $remainder): bool;

    /**
     * @param float $firstQuantity
     * @param float $secondQuantity
     *
     * @return bool
     */
    public function isQuantityGreaterOrEqual(float $firstQuantity, float $secondQuantity): bool;

    /**
     * @param float $firstQuantity
     * @param float $secondQuantity
     *
     * @return bool
     */
    public function isQuantityLessOrEqual(float $firstQuantity, float $secondQuantity): bool;
}
