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

<div class="ai1m-container">
	<div class="ai1m-holder">
		<h1>
			<i class="ai1m-icon-export"></i>
			<?php _e( 'Backups', AI1M_PLUGIN_NAME ); ?>
		</h1>

		<form action="" method="post" id="ai1m-backups-form" class="ai1m-clear">

			<?php if ( is_readable( AI1WM_BACKUPS_PATH ) && is_writable( AI1WM_BACKUPS_PATH ) ) : ?>
				<?php if ( $backups ) : ?>
					<div class="ai1m-backups-container">
						<table class="ai1m-backups">
							<thead>
								<tr>
									<th class="ai1m-column-name"><?php _e( 'Name', AI1M_PLUGIN_NAME ); ?></th>
									<th class="ai1m-column-date"><?php _e( 'Date', AI1M_PLUGIN_NAME ); ?></th>
									<th class="ai1m-column-size"><?php _e( 'Size', AI1M_PLUGIN_NAME ); ?></th>
									<th class="ai1m-column-actions"><?php _e( 'Action', AI1M_PLUGIN_NAME ); ?></th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ( $backups as $backup ) : ?>
								<tr>
									<td class="ai1m-column-name">
										<?php if ( $backup['path'] ) : ?>
											<i class="ai1m-icon-folder"></i>
											<?php echo esc_html( $backup['path'] ); ?>
											<br />
										<?php endif; ?>
										<i class="ai1m-icon-file-zip"></i>
										<?php echo esc_html( basename( $backup['filename'] ) ); ?>
									</td>
									<td class="ai1m-column-date">
										<?php echo esc_html( sprintf( __( '%s ago', AI1M_PLUGIN_NAME ), human_time_diff( $backup['mtime'] ) ) ); ?>
									</td>
									<td class="ai1m-column-size">
										<?php if ( is_null( $backup['size'] ) ) : ?>
											<?php _e( '2GB+', AI1M_PLUGIN_NAME ); ?>
										<?php else : ?>
											<?php echo size_format( $backup['size'], 2 ); ?>
										<?php endif; ?>
									</td>
									<td class="ai1m-column-actions ai1m-backup-actions">
										<a href="<?php echo ai1m_backup_url( array( 'archive' => esc_attr( $backup['filename'] ) ) ); ?>" class="ai1m-button-green ai1m-backup-download" title="<?php _e( 'Download', AI1M_PLUGIN_NAME ); ?>">
											<i class="ai1m-icon-arrow-down"></i>
											<span><?php _e( 'Download', AI1M_PLUGIN_NAME ); ?></span>
										</a>
										<a href="#" data-archive="<?php echo esc_attr( $backup['filename'] ); ?>" class="ai1m-button-gray ai1m-backup-restore" title="<?php _e( 'Restore', AI1M_PLUGIN_NAME ); ?>">
											<i class="ai1m-icon-cloud-upload"></i>
											<span><?php _e( 'Restore', AI1M_PLUGIN_NAME ); ?></span>
										</a>
										<a href="#" data-archive="<?php echo esc_attr( $backup['filename'] ); ?>" class="ai1m-button-red ai1m-backup-delete" title="<?php _e( 'Delete', AI1M_PLUGIN_NAME ); ?>">
											<i class="ai1m-icon-close"></i>
											<span><?php _e( 'Delete', AI1M_PLUGIN_NAME ); ?></span>
										</a>
									</td>
								</tr>
								<?php endforeach; ?>
							</tbody>
						</table>
					</div>
				<?php endif; ?>
				<div class="ai1m-backups-create">
					<p class="ai1m-backups-empty <?php echo $backups ? 'ai1m-hide' : null; ?>">
						<?php _e( 'There are no backups available at this time, why not create a new one?', AI1M_PLUGIN_NAME ); ?>
					</p>
					<p>
						<a href="<?php echo esc_url( network_admin_url( 'admin.php?page=ai1m_export' ) ); ?>" class="ai1m-button-green">
							<i class="ai1m-icon-export"></i>
							<?php _e( 'Create backup', AI1M_PLUGIN_NAME ); ?>
						</a>
					</p>
				</div>
			<?php else : ?>
				<div class="ai1m-clear ai1m-message ai1m-red-message">
					<?php
					printf(
						__(
							'<h3>Site could not create backups!</h3>' .
							'<p>Please make sure that storage directory <strong>%s</strong> has read and write permissions.</p>',
							AI1M_PLUGIN_NAME
						),
						AI1WM_STORAGE_PATH
					);
					?>
				</div>
			<?php endif; ?>

			<?php do_action( 'ai1m_backups_left_end' ); ?>

			<input type="hidden" name="ai1m_manual_restore" value="1" />

		</form>
	</div>
</div>
