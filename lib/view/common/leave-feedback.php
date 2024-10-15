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

<div class="ai1m-feedback">
	<ul class="ai1m-feedback-types">
		<li>
			<input type="radio" class="ai1m-flat-radio-button ai1m-feedback-type" id="ai1m-feedback-type-1" name="ai1m_feedback_type" value="review" />
			<a id="ai1m-feedback-type-link-1" href="https://wordpress.org/support/view/plugin-reviews/ai1-migration?rate=5#postform" target="_blank">
				<i></i>
				<span><?php _e( 'I would like to review this plugin', AI1M_PLUGIN_NAME ); ?></span>
			</a>
		</li>
		<li>
			<input type="radio" class="ai1m-flat-radio-button ai1m-feedback-type" id="ai1m-feedback-type-2" name="ai1m_feedback_type" value="suggestions" />
			<a id="ai1m-feedback-type-link-2" href="https://feedback.wp-migration.com" target="_blank">
				<i></i>
				<span><?php _e( 'I have ideas to improve this plugin', AI1M_PLUGIN_NAME ); ?></span>
			</a>
		</li>
		<li>
			<input type="radio" class="ai1m-flat-radio-button ai1m-feedback-type" id="ai1m-feedback-type-3" name="ai1m_feedback_type" value="help-needed" />
			<label for="ai1m-feedback-type-3">
				<i></i>
				<span><?php _e( 'I need help with this plugin', AI1M_PLUGIN_NAME ); ?></span>
			</label>
		</li>
	</ul>

	<div class="ai1m-feedback-form">
		<div class="ai1m-field">
			<input placeholder="<?php _e( 'Enter your email address..', AI1M_PLUGIN_NAME ); ?>" type="text" id="ai1m-feedback-email" class="ai1m-feedback-email" />
		</div>
		<div class="ai1m-field">
			<textarea rows="3" id="ai1m-feedback-message" class="ai1m-feedback-message" placeholder="<?php _e( 'Leave plugin developers any feedback here..', AI1M_PLUGIN_NAME ); ?>"></textarea>
		</div>
		<div class="ai1m-field ai1m-feedback-terms-segment">
			<label for="ai1m-feedback-terms">
				<input type="checkbox" class="ai1m-feedback-terms" id="ai1m-feedback-terms" />
				<?php _e( 'I agree that by filling in the contact form with my data, I authorize Ai1 Migration to use my <strong>email</strong> to reply to my requests for information. <a href="https://www.iubenda.com/privacy-policy/946881" target="_blank">Privacy policy</a>', AI1M_PLUGIN_NAME ); ?>
			</label>
		</div>
		<div class="ai1m-field">
			<div class="ai1m-buttons">
				<a class="ai1m-feedback-cancel" id="ai1m-feedback-cancel" href="#"><?php _e( 'Cancel', AI1M_PLUGIN_NAME ); ?></a>
				<button type="submit" id="ai1m-feedback-submit" class="ai1m-button-blue ai1m-form-submit">
					<i class="ai1m-icon-paperplane"></i>
					<?php _e( 'Send', AI1M_PLUGIN_NAME ); ?>
				</button>
				<span class="spinner"></span>
				<div class="ai1m-clear"></div>
			</div>
		</div>
	</div>
</div>
