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

<?php if ( is_readable( AI1WM_STORAGE_PATH ) && is_writable( AI1WM_STORAGE_PATH ) ) : ?>
	<div class="ai1m-import-messages"></div>

	<div class="ai1m-import-form">
		<div class="hide-if-no-js">
			<div class="ai1m-drag-drop-area" id="ai1m-drag-drop-area">
				<div id="ai1m-import-init">
					<p>
						<i class="ai1m-icon-cloud-upload"></i><br />
						<?php _e( 'Drag & Drop to upload', AI1M_PLUGIN_NAME ); ?>
					</p>
					<div class="ai1m-button-group ai1m-button-import ai1m-expandable ai1m-open">
						<a href="#" id="ai1m-import-file" class="ai1m-button-main">
							<?php _e( 'Import From', AI1M_PLUGIN_NAME ); ?>
							<?php _e( 'File', AI1M_PLUGIN_NAME ); ?>
							<input type="file" id="ai1m-select-file" />
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<p>
		<?php _e( 'Maximum upload file size:' ); ?>
		<?php if ( ( $max_file_size = apply_filters( 'ai1m_max_file_size', AI1WM_MAX_FILE_SIZE ) ) ) : ?>
			<span class="ai1m-max-upload-size"><?php echo size_format( $max_file_size ); ?></span>
		<?php else : ?>
			<span class="ai1m-max-upload-size"><?php _e( 'Unlimited', AI1M_PLUGIN_NAME ); ?></span>
		<?php endif; ?>
	</p>
<?php else : ?>
	<div class="ai1m-message ai1m-red-message">
		<?php
		printf(
			__(
				'<h3>Site could not be imported!</h3>' .
				'<p>Please make sure that storage directory <strong>%s</strong> has read and write permissions.</p>',
				AI1M_PLUGIN_NAME
			),
			AI1WM_STORAGE_PATH
		);
		?>
	</div>
<?php endif; ?>
