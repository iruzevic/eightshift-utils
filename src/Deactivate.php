<?php

/**
 * The file that defines actions on plugin deactivation.
 *
 * @package EightshiftUtils
 */

declare(strict_types=1);

namespace EightshiftUtils;

use EightshiftUtilsVendor\EightshiftLibs\Plugin\HasDeactivationInterface;

/**
 * The plugin deactivation class.
 */
class Deactivate implements HasDeactivationInterface
{
	/**
	 * Deactivate the plugin.
	 */
	public function deactivate(): void
	{
		\flush_rewrite_rules();
	}
}