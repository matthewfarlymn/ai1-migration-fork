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

<div class="ai1m-report-problem">
	<button type="button" id="ai1m-report-problem-button" class="ai1m-button-red">
		<i class="ai1m-icon-notification"></i>
		<?php _e( 'Report issue', AI1M_PLUGIN_NAME ); ?>
	</button>
	<div class="ai1m-report-problem-dialog">
		<div class="ai1m-field">
			<input placeholder="<?php _e( 'Enter your email address..', AI1M_PLUGIN_NAME ); ?>" type="text" id="ai1m-report-email" class="ai1m-report-email" />
		</div>
		<div class="ai1m-field">
			<textarea rows="3" id="ai1m-report-message" class="ai1m-report-message" placeholder="<?php _e( 'Please describe your problem here..', AI1M_PLUGIN_NAME ); ?>"></textarea>
		</div>
		<div class="ai1m-field ai1m-report-terms-segment">
			<label for="ai1m-report-terms">
				<input type="checkbox" class="ai1m-report-terms" id="ai1m-report-terms" />
				<?php _e( 'I agree that by filling in the contact form with my data, I authorize Ai1 Migration to use my <strong>email</strong> to reply to my requests for information. <a href="https://www.iubenda.com/privacy-policy/946881" target="_blank">Privacy policy</a>', AI1M_PLUGIN_NAME ); ?>
			</label>
		</div>
		<div class="ai1m-field">
			<div class="ai1m-buttons">
				<a href="#" id="ai1m-report-cancel" class="ai1m-report-cancel"><?php _e( 'Cancel', AI1M_PLUGIN_NAME ); ?></a>
				<button type="submit" id="ai1m-report-submit" class="ai1m-button-blue ai1m-form-submit">
					<i class="ai1m-icon-paperplane"></i>
					<?php _e( 'Send', AI1M_PLUGIN_NAME ); ?>
				</button>
				<span class="spinner"></span>
				<div class="ai1m-clear"></div>
			</div>
		</div>
	</div>
</div>
