<?php # -*- coding: utf-8 -*-
/*
 * This file is part of the metabox-orchestra package.
 *
 * (c) Inpsyde GmbH
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace MetaboxOrchestra;

/**
 * @package metabox-orchestra
 * @license http://opensource.org/licenses/MIT MIT
 */
interface Metabox {

	const SAVE = 'save';
	const SHOW = 'show';

	/**
	 * @param string $show_or_save
	 *
	 * @return BoxInfo
	 */
	public function create_info( string $show_or_save ): BoxInfo;

}