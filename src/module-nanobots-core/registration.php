<?php
/**
 * Created by Q-Solutions Studio
 *
 * @category    Nanobots
 * @package     Nanobots_Core
 * @author      Jakub Winkler <jwinkler@qsolutionsstudio.com> @MagentoNinja
 * @author      Sebastian Strojwas <sebastian@qsolutionsstudio.com>
 */

use Magento\Framework\Component\ComponentRegistrar;

ComponentRegistrar::register(
    \Magento\Framework\Component\ComponentRegistrar::MODULE,
    'Nanobots_Core',
    __DIR__
);
