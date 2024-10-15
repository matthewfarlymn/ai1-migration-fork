<?php
/**
 * Copyright (C) 2014-2018 ServMask Inc.
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 * ███████╗███████╗██████╗ ██╗   ██╗███╗   ███╗ █████╗ ███████╗██╗  ██╗
 * ██╔════╝██╔════╝██╔══██╗██║   ██║████╗ ████║██╔══██╗██╔════╝██║ ██╔╝
 * ███████╗█████╗  ██████╔╝██║   ██║██╔████╔██║███████║███████╗█████╔╝
 * ╚════██║██╔══╝  ██╔══██╗╚██╗ ██╔╝██║╚██╔╝██║██╔══██║╚════██║██╔═██╗
 * ███████║███████╗██║  ██║ ╚████╔╝ ██║ ╚═╝ ██║██║  ██║███████║██║  ██╗
 * ╚══════╝╚══════╝╚═╝  ╚═╝  ╚═══╝  ╚═╝     ╚═╝╚═╝  ╚═╝╚══════╝╚═╝  ╚═╝
 */
?>

<ul id="ai1m-queries">
	<li class="ai1m-query ai1m-expandable ai1m-open">
		<p>
			<span>
				<strong><?php _e( 'Find', AI1M_PLUGIN_NAME ); ?></strong>
				<small class="ai1m-query-find-text ai1m-tooltip" title="Search the database for this text"><?php echo esc_html( __( '<text>', AI1M_PLUGIN_NAME ) ); ?></small>
				<strong><?php _e( 'Replace with', AI1M_PLUGIN_NAME ); ?></strong>
				<small class="ai1m-query-replace-text ai1m-tooltip" title="Replace the database with this text"><?php echo esc_html( __( '<another-text>', AI1M_PLUGIN_NAME ) ); ?></small>
				<strong><?php _e( 'in the database', AI1M_PLUGIN_NAME ); ?></strong>
			</span>
			<span class="ai1m-query-arrow ai1m-icon-chevron-right"></span>
		</p>
		<div>
			<input class="ai1m-query-find-input" type="text" placeholder="<?php _e( 'Find', AI1M_PLUGIN_NAME ); ?>" name="options[replace][old_value][]" />
			<input class="ai1m-query-replace-input" type="text" placeholder="<?php _e( 'Replace with', AI1M_PLUGIN_NAME ); ?>" name="options[replace][new_value][]" />
		</div>
	</li>
</ul>

<button type="button" class="ai1m-button-gray" id="ai1m-add-new-replace-button">
	<i class="ai1m-icon-plus2"></i>
	<?php _e( 'Add', AI1M_PLUGIN_NAME ); ?>
</button>
