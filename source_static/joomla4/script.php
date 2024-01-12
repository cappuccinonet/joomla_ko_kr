<?php
/**
 * @package    Joomla.Language
 *
 * @copyright  (C) 2024 Joomla.org
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 */

\defined('_JEXEC') or die;

use Joomla\CMS\Installer\InstallerScript;

/**
 * Installation class to perform additional changes during install/uninstall/update
 *
 * @since  4.0.0v1
 */
class Pkg_deDEInstallerScript extends InstallerScript
{
	/**
	 * Extension script constructor.
	 *
	 * @since   4.0.0v1
	 */
	public function __construct()
	{
		// Define the minimum versions to be supported.
		$this->minimumJoomla = '4.2';
		$this->minimumPhp    = '7.2.5';

		$this->deleteFiles = [
			// Backend
			'/administrator/language/ko-KR/ko-KR.com_actionlogs.ini',
			'/administrator/language/ko-KR/ko-KR.com_actionlogs.sys.ini',
			'/administrator/language/ko-KR/ko-KR.com_admin.ini',
			'/administrator/language/ko-KR/ko-KR.com_admin.sys.ini',
			'/administrator/language/ko-KR/ko-KR.com_ajax.ini',
			'/administrator/language/ko-KR/ko-KR.com_ajax.sys.ini',
			'/administrator/language/ko-KR/ko-KR.com_associations.ini',
			'/administrator/language/ko-KR/ko-KR.com_associations.sys.ini',
			'/administrator/language/ko-KR/ko-KR.com_banners.ini',
			'/administrator/language/ko-KR/ko-KR.com_banners.sys.ini',
			'/administrator/language/ko-KR/ko-KR.com_cache.ini',
			'/administrator/language/ko-KR/ko-KR.com_cache.sys.ini',
			'/administrator/language/ko-KR/ko-KR.com_categories.ini',
			'/administrator/language/ko-KR/ko-KR.com_categories.sys.ini',
			'/administrator/language/ko-KR/ko-KR.com_checkin.ini',
			'/administrator/language/ko-KR/ko-KR.com_checkin.sys.ini',
			'/administrator/language/ko-KR/ko-KR.com_config.ini',
			'/administrator/language/ko-KR/ko-KR.com_config.sys.ini',
			'/administrator/language/ko-KR/ko-KR.com_contact.ini',
			'/administrator/language/ko-KR/ko-KR.com_contact.sys.ini',
			'/administrator/language/ko-KR/ko-KR.com_contenthistory.ini',
			'/administrator/language/ko-KR/ko-KR.com_contenthistory.sys.ini',
			'/administrator/language/ko-KR/ko-KR.com_content.ini',
			'/administrator/language/ko-KR/ko-KR.com_content.sys.ini',
			'/administrator/language/ko-KR/ko-KR.com_cpanel.ini',
			'/administrator/language/ko-KR/ko-KR.com_cpanel.sys.ini',
			'/administrator/language/ko-KR/ko-KR.com_fields.ini',
			'/administrator/language/ko-KR/ko-KR.com_fields.sys.ini',
			'/administrator/language/ko-KR/ko-KR.com_finder.ini',
			'/administrator/language/ko-KR/ko-KR.com_finder.sys.ini',
			'/administrator/language/ko-KR/ko-KR.com_installer.ini',
			'/administrator/language/ko-KR/ko-KR.com_installer.sys.ini',
			'/administrator/language/ko-KR/ko-KR.com_joomlaupdate.ini',
			'/administrator/language/ko-KR/ko-KR.com_joomlaupdate.sys.ini',
			'/administrator/language/ko-KR/ko-KR.com_languages.ini',
			'/administrator/language/ko-KR/ko-KR.com_languages.sys.ini',
			'/administrator/language/ko-KR/ko-KR.com_login.ini',
			'/administrator/language/ko-KR/ko-KR.com_login.sys.ini',
			'/administrator/language/ko-KR/ko-KR.com_mailto.sys.ini',
			'/administrator/language/ko-KR/ko-KR.com_media.ini',
			'/administrator/language/ko-KR/ko-KR.com_media.sys.ini',
			'/administrator/language/ko-KR/ko-KR.com_menus.ini',
			'/administrator/language/ko-KR/ko-KR.com_menus.sys.ini',
			'/administrator/language/ko-KR/ko-KR.com_messages.ini',
			'/administrator/language/ko-KR/ko-KR.com_messages.sys.ini',
			'/administrator/language/ko-KR/ko-KR.com_modules.ini',
			'/administrator/language/ko-KR/ko-KR.com_modules.sys.ini',
			'/administrator/language/ko-KR/ko-KR.com_newsfeeds.ini',
			'/administrator/language/ko-KR/ko-KR.com_newsfeeds.sys.ini',
			'/administrator/language/ko-KR/ko-KR.com_plugins.ini',
			'/administrator/language/ko-KR/ko-KR.com_plugins.sys.ini',
			'/administrator/language/ko-KR/ko-KR.com_postinstall.ini',
			'/administrator/language/ko-KR/ko-KR.com_postinstall.sys.ini',
			'/administrator/language/ko-KR/ko-KR.com_privacy.ini',
			'/administrator/language/ko-KR/ko-KR.com_privacy.sys.ini',
			'/administrator/language/ko-KR/ko-KR.com_redirect.ini',
			'/administrator/language/ko-KR/ko-KR.com_redirect.sys.ini',
			'/administrator/language/ko-KR/ko-KR.com_tags.ini',
			'/administrator/language/ko-KR/ko-KR.com_tags.sys.ini',
			'/administrator/language/ko-KR/ko-KR.com_templates.ini',
			'/administrator/language/ko-KR/ko-KR.com_templates.sys.ini',
			'/administrator/language/ko-KR/ko-KR.com_users.ini',
			'/administrator/language/ko-KR/ko-KR.com_users.sys.ini',
			'/administrator/language/ko-KR/ko-KR.com_wrapper.ini',
			'/administrator/language/ko-KR/ko-KR.com_wrapper.sys.ini',
			'/administrator/language/ko-KR/ko-KR.ini',
			'/administrator/language/ko-KR/ko-KR.lib_joomla.ini',
			'/administrator/language/ko-KR/ko-KR.localise.php',
			'/administrator/language/ko-KR/ko-KR.mod_custom.ini',
			'/administrator/language/ko-KR/ko-KR.mod_custom.sys.ini',
			'/administrator/language/ko-KR/ko-KR.mod_feed.ini',
			'/administrator/language/ko-KR/ko-KR.mod_feed.sys.ini',
			'/administrator/language/ko-KR/ko-KR.mod_latestactions.ini',
			'/administrator/language/ko-KR/ko-KR.mod_latestactions.sys.ini',
			'/administrator/language/ko-KR/ko-KR.mod_latest.ini',
			'/administrator/language/ko-KR/ko-KR.mod_latest.sys.ini',
			'/administrator/language/ko-KR/ko-KR.mod_logged.ini',
			'/administrator/language/ko-KR/ko-KR.mod_logged.sys.ini',
			'/administrator/language/ko-KR/ko-KR.mod_login.ini',
			'/administrator/language/ko-KR/ko-KR.mod_login.sys.ini',
			'/administrator/language/ko-KR/ko-KR.mod_menu.ini',
			'/administrator/language/ko-KR/ko-KR.mod_menu.sys.ini',
			'/administrator/language/ko-KR/ko-KR.mod_multilangstatus.ini',
			'/administrator/language/ko-KR/ko-KR.mod_multilangstatus.sys.ini',
			'/administrator/language/ko-KR/ko-KR.mod_popular.ini',
			'/administrator/language/ko-KR/ko-KR.mod_popular.sys.ini',
			'/administrator/language/ko-KR/ko-KR.mod_privacy_dashboard.ini',
			'/administrator/language/ko-KR/ko-KR.mod_privacy_dashboard.sys.ini',
			'/administrator/language/ko-KR/ko-KR.mod_quickicon.ini',
			'/administrator/language/ko-KR/ko-KR.mod_quickicon.sys.ini',
			'/administrator/language/ko-KR/ko-KR.mod_sampledata.ini',
			'/administrator/language/ko-KR/ko-KR.mod_sampledata.sys.ini',
			'/administrator/language/ko-KR/ko-KR.mod_stats_admin.ini',
			'/administrator/language/ko-KR/ko-KR.mod_stats_admin.sys.ini',
			'/administrator/language/ko-KR/ko-KR.mod_status.ini',
			'/administrator/language/ko-KR/ko-KR.mod_status.sys.ini',
			'/administrator/language/ko-KR/ko-KR.mod_submenu.ini',
			'/administrator/language/ko-KR/ko-KR.mod_submenu.sys.ini',
			'/administrator/language/ko-KR/ko-KR.mod_title.ini',
			'/administrator/language/ko-KR/ko-KR.mod_title.sys.ini',
			'/administrator/language/ko-KR/ko-KR.mod_toolbar.ini',
			'/administrator/language/ko-KR/ko-KR.mod_toolbar.sys.ini',
			'/administrator/language/ko-KR/ko-KR.mod_version.ini',
			'/administrator/language/ko-KR/ko-KR.mod_version.sys.ini',
			'/administrator/language/ko-KR/ko-KR.plg_actionlog_joomla.ini',
			'/administrator/language/ko-KR/ko-KR.plg_actionlog_joomla.sys.ini',
			'/administrator/language/ko-KR/ko-KR.plg_authentication_cookie.ini',
			'/administrator/language/ko-KR/ko-KR.plg_authentication_cookie.sys.ini',
			'/administrator/language/ko-KR/ko-KR.plg_authentication_gmail.ini',
			'/administrator/language/ko-KR/ko-KR.plg_authentication_gmail.sys.ini',
			'/administrator/language/ko-KR/ko-KR.plg_authentication_joomla.ini',
			'/administrator/language/ko-KR/ko-KR.plg_authentication_joomla.sys.ini',
			'/administrator/language/ko-KR/ko-KR.plg_authentication_ldap.ini',
			'/administrator/language/ko-KR/ko-KR.plg_authentication_ldap.sys.ini',
			'/administrator/language/ko-KR/ko-KR.plg_captcha_recaptcha.ini',
			'/administrator/language/ko-KR/ko-KR.plg_captcha_recaptcha_invisible.ini',
			'/administrator/language/ko-KR/ko-KR.plg_captcha_recaptcha_invisible.sys.ini',
			'/administrator/language/ko-KR/ko-KR.plg_captcha_recaptcha.sys.ini',
			'/administrator/language/ko-KR/ko-KR.plg_content_confirmconsent.ini',
			'/administrator/language/ko-KR/ko-KR.plg_content_confirmconsent.sys.ini',
			'/administrator/language/ko-KR/ko-KR.plg_content_contact.ini',
			'/administrator/language/ko-KR/ko-KR.plg_content_contact.sys.ini',
			'/administrator/language/ko-KR/ko-KR.plg_content_emailcloak.ini',
			'/administrator/language/ko-KR/ko-KR.plg_content_emailcloak.sys.ini',
			'/administrator/language/ko-KR/ko-KR.plg_content_fields.ini',
			'/administrator/language/ko-KR/ko-KR.plg_content_fields.sys.ini',
			'/administrator/language/ko-KR/ko-KR.plg_content_finder.ini',
			'/administrator/language/ko-KR/ko-KR.plg_content_finder.sys.ini',
			'/administrator/language/ko-KR/ko-KR.plg_content_geshi.ini',
			'/administrator/language/ko-KR/ko-KR.plg_content_geshi.sys.ini',
			'/administrator/language/ko-KR/ko-KR.plg_content_joomla.ini',
			'/administrator/language/ko-KR/ko-KR.plg_content_joomla.sys.ini',
			'/administrator/language/ko-KR/ko-KR.plg_content_loadmodule.ini',
			'/administrator/language/ko-KR/ko-KR.plg_content_loadmodule.sys.ini',
			'/administrator/language/ko-KR/ko-KR.plg_content_pagebreak.ini',
			'/administrator/language/ko-KR/ko-KR.plg_content_pagebreak.sys.ini',
			'/administrator/language/ko-KR/ko-KR.plg_content_pagenavigation.ini',
			'/administrator/language/ko-KR/ko-KR.plg_content_pagenavigation.sys.ini',
			'/administrator/language/ko-KR/ko-KR.plg_content_vote.ini',
			'/administrator/language/ko-KR/ko-KR.plg_content_vote.sys.ini',
			'/administrator/language/ko-KR/ko-KR.plg_editors_codemirror.ini',
			'/administrator/language/ko-KR/ko-KR.plg_editors_codemirror.sys.ini',
			'/administrator/language/ko-KR/ko-KR.plg_editors_none.ini',
			'/administrator/language/ko-KR/ko-KR.plg_editors_none.sys.ini',
			'/administrator/language/ko-KR/ko-KR.plg_editors_tinymce.ini',
			'/administrator/language/ko-KR/ko-KR.plg_editors_tinymce.sys.ini',
			'/administrator/language/ko-KR/ko-KR.plg_editors-xtd_article.ini',
			'/administrator/language/ko-KR/ko-KR.plg_editors-xtd_article.sys.ini',
			'/administrator/language/ko-KR/ko-KR.plg_editors-xtd_contact.ini',
			'/administrator/language/ko-KR/ko-KR.plg_editors-xtd_contact.sys.ini',
			'/administrator/language/ko-KR/ko-KR.plg_editors-xtd_fields.ini',
			'/administrator/language/ko-KR/ko-KR.plg_editors-xtd_fields.sys.ini',
			'/administrator/language/ko-KR/ko-KR.plg_editors-xtd_image.ini',
			'/administrator/language/ko-KR/ko-KR.plg_editors-xtd_image.sys.ini',
			'/administrator/language/ko-KR/ko-KR.plg_editors-xtd_menu.ini',
			'/administrator/language/ko-KR/ko-KR.plg_editors-xtd_menu.sys.ini',
			'/administrator/language/ko-KR/ko-KR.plg_editors-xtd_module.ini',
			'/administrator/language/ko-KR/ko-KR.plg_editors-xtd_module.sys.ini',
			'/administrator/language/ko-KR/ko-KR.plg_editors-xtd_pagebreak.ini',
			'/administrator/language/ko-KR/ko-KR.plg_editors-xtd_pagebreak.sys.ini',
			'/administrator/language/ko-KR/ko-KR.plg_editors-xtd_readmore.ini',
			'/administrator/language/ko-KR/ko-KR.plg_editors-xtd_readmore.sys.ini',
			'/administrator/language/ko-KR/ko-KR.plg_editors-xtd_weblink.ini',
			'/administrator/language/ko-KR/ko-KR.plg_editors-xtd_weblink.sys.ini',
			'/administrator/language/ko-KR/ko-KR.plg_extension_joomla.ini',
			'/administrator/language/ko-KR/ko-KR.plg_extension_joomla.sys.ini',
			'/administrator/language/ko-KR/ko-KR.plg_fields_calendar.ini',
			'/administrator/language/ko-KR/ko-KR.plg_fields_calendar.sys.ini',
			'/administrator/language/ko-KR/ko-KR.plg_fields_checkboxes.ini',
			'/administrator/language/ko-KR/ko-KR.plg_fields_checkboxes.sys.ini',
			'/administrator/language/ko-KR/ko-KR.plg_fields_color.ini',
			'/administrator/language/ko-KR/ko-KR.plg_fields_color.sys.ini',
			'/administrator/language/ko-KR/ko-KR.plg_fields_editor.ini',
			'/administrator/language/ko-KR/ko-KR.plg_fields_editor.sys.ini',
			'/administrator/language/ko-KR/ko-KR.plg_fields_image.ini',
			'/administrator/language/ko-KR/ko-KR.plg_fields_image.sys.ini',
			'/administrator/language/ko-KR/ko-KR.plg_fields_imagelist.ini',
			'/administrator/language/ko-KR/ko-KR.plg_fields_imagelist.sys.ini',
			'/administrator/language/ko-KR/ko-KR.plg_fields_integer.ini',
			'/administrator/language/ko-KR/ko-KR.plg_fields_integer.sys.ini',
			'/administrator/language/ko-KR/ko-KR.plg_fields_list.ini',
			'/administrator/language/ko-KR/ko-KR.plg_fields_list.sys.ini',
			'/administrator/language/ko-KR/ko-KR.plg_fields_media.ini',
			'/administrator/language/ko-KR/ko-KR.plg_fields_media.sys.ini',
			'/administrator/language/ko-KR/ko-KR.plg_fields_radio.ini',
			'/administrator/language/ko-KR/ko-KR.plg_fields_radio.sys.ini',
			'/administrator/language/ko-KR/ko-KR.plg_fields_repeatable.ini',
			'/administrator/language/ko-KR/ko-KR.plg_fields_repeatable.sys.ini',
			'/administrator/language/ko-KR/ko-KR.plg_fields_sql.ini',
			'/administrator/language/ko-KR/ko-KR.plg_fields_sql.sys.ini',
			'/administrator/language/ko-KR/ko-KR.plg_fields_textarea.ini',
			'/administrator/language/ko-KR/ko-KR.plg_fields_textarea.sys.ini',
			'/administrator/language/ko-KR/ko-KR.plg_fields_text.ini',
			'/administrator/language/ko-KR/ko-KR.plg_fields_text.sys.ini',
			'/administrator/language/ko-KR/ko-KR.plg_fields_url.ini',
			'/administrator/language/ko-KR/ko-KR.plg_fields_url.sys.ini',
			'/administrator/language/ko-KR/ko-KR.plg_fields_usergrouplist.ini',
			'/administrator/language/ko-KR/ko-KR.plg_fields_usergrouplist.sys.ini',
			'/administrator/language/ko-KR/ko-KR.plg_fields_user.ini',
			'/administrator/language/ko-KR/ko-KR.plg_fields_user.sys.ini',
			'/administrator/language/ko-KR/ko-KR.plg_finder_categories.ini',
			'/administrator/language/ko-KR/ko-KR.plg_finder_categories.sys.ini',
			'/administrator/language/ko-KR/ko-KR.plg_finder_contacts.ini',
			'/administrator/language/ko-KR/ko-KR.plg_finder_contacts.sys.ini',
			'/administrator/language/ko-KR/ko-KR.plg_finder_content.ini',
			'/administrator/language/ko-KR/ko-KR.plg_finder_content.sys.ini',
			'/administrator/language/ko-KR/ko-KR.plg_finder_newsfeeds.ini',
			'/administrator/language/ko-KR/ko-KR.plg_finder_newsfeeds.sys.ini',
			'/administrator/language/ko-KR/ko-KR.plg_finder_tags.ini',
			'/administrator/language/ko-KR/ko-KR.plg_finder_tags.sys.ini',
			'/administrator/language/ko-KR/ko-KR.plg_installer_folderinstaller.ini',
			'/administrator/language/ko-KR/ko-KR.plg_installer_folderinstaller.sys.ini',
			'/administrator/language/ko-KR/ko-KR.plg_installer_packageinstaller.ini',
			'/administrator/language/ko-KR/ko-KR.plg_installer_packageinstaller.sys.ini',
			'/administrator/language/ko-KR/ko-KR.plg_installer_urlinstaller.ini',
			'/administrator/language/ko-KR/ko-KR.plg_installer_urlinstaller.sys.ini',
			'/administrator/language/ko-KR/ko-KR.plg_installer_webinstaller.ini',
			'/administrator/language/ko-KR/ko-KR.plg_installer_webinstaller.sys.ini',
			'/administrator/language/ko-KR/ko-KR.plg_privacy_actionlogs.ini',
			'/administrator/language/ko-KR/ko-KR.plg_privacy_actionlogs.sys.ini',
			'/administrator/language/ko-KR/ko-KR.plg_privacy_consents.ini',
			'/administrator/language/ko-KR/ko-KR.plg_privacy_consents.sys.ini',
			'/administrator/language/ko-KR/ko-KR.plg_privacy_contact.ini',
			'/administrator/language/ko-KR/ko-KR.plg_privacy_contact.sys.ini',
			'/administrator/language/ko-KR/ko-KR.plg_privacy_content.ini',
			'/administrator/language/ko-KR/ko-KR.plg_privacy_content.sys.ini',
			'/administrator/language/ko-KR/ko-KR.plg_privacy_message.ini',
			'/administrator/language/ko-KR/ko-KR.plg_privacy_message.sys.ini',
			'/administrator/language/ko-KR/ko-KR.plg_privacy_user.ini',
			'/administrator/language/ko-KR/ko-KR.plg_privacy_user.sys.ini',
			'/administrator/language/ko-KR/ko-KR.plg_quickicon_eos310.ini',
			'/administrator/language/ko-KR/ko-KR.plg_quickicon_eos310.sys.ini',
			'/administrator/language/ko-KR/ko-KR.plg_quickicon_extensionupdate.ini',
			'/administrator/language/ko-KR/ko-KR.plg_quickicon_extensionupdate.sys.ini',
			'/administrator/language/ko-KR/ko-KR.plg_quickicon_joomlaupdate.ini',
			'/administrator/language/ko-KR/ko-KR.plg_quickicon_joomlaupdate.sys.ini',
			'/administrator/language/ko-KR/ko-KR.plg_quickicon_phpversioncheck.ini',
			'/administrator/language/ko-KR/ko-KR.plg_quickicon_phpversioncheck.sys.ini',
			'/administrator/language/ko-KR/ko-KR.plg_quickicon_privacycheck.ini',
			'/administrator/language/ko-KR/ko-KR.plg_quickicon_privacycheck.sys.ini',
			'/administrator/language/ko-KR/ko-KR.plg_sampledata_blog.ini',
			'/administrator/language/ko-KR/ko-KR.plg_sampledata_blog.sys.ini',
			'/administrator/language/ko-KR/ko-KR.plg_system_actionlogs.ini',
			'/administrator/language/ko-KR/ko-KR.plg_system_actionlogs.sys.ini',
			'/administrator/language/ko-KR/ko-KR.plg_system_cache.ini',
			'/administrator/language/ko-KR/ko-KR.plg_system_cache.sys.ini',
			'/administrator/language/ko-KR/ko-KR.plg_system_debug.ini',
			'/administrator/language/ko-KR/ko-KR.plg_system_debug.sys.ini',
			'/administrator/language/ko-KR/ko-KR.plg_system_fields.ini',
			'/administrator/language/ko-KR/ko-KR.plg_system_fields.sys.ini',
			'/administrator/language/ko-KR/ko-KR.plg_system_highlight.ini',
			'/administrator/language/ko-KR/ko-KR.plg_system_highlight.sys.ini',
			'/administrator/language/ko-KR/ko-KR.plg_system_languagecode.ini',
			'/administrator/language/ko-KR/ko-KR.plg_system_languagecode.sys.ini',
			'/administrator/language/ko-KR/ko-KR.plg_system_languagefilter.ini',
			'/administrator/language/ko-KR/ko-KR.plg_system_languagefilter.sys.ini',
			'/administrator/language/ko-KR/ko-KR.plg_system_log.ini',
			'/administrator/language/ko-KR/ko-KR.plg_system_logout.ini',
			'/administrator/language/ko-KR/ko-KR.plg_system_logout.sys.ini',
			'/administrator/language/ko-KR/ko-KR.plg_system_logrotation.ini',
			'/administrator/language/ko-KR/ko-KR.plg_system_logrotation.sys.ini',
			'/administrator/language/ko-KR/ko-KR.plg_system_log.sys.ini',
			'/administrator/language/ko-KR/ko-KR.plg_system_p3p.ini',
			'/administrator/language/ko-KR/ko-KR.plg_system_p3p.sys.ini',
			'/administrator/language/ko-KR/ko-KR.plg_system_privacyconsent.ini',
			'/administrator/language/ko-KR/ko-KR.plg_system_privacyconsent.sys.ini',
			'/administrator/language/ko-KR/ko-KR.plg_system_redirect.ini',
			'/administrator/language/ko-KR/ko-KR.plg_system_redirect.sys.ini',
			'/administrator/language/ko-KR/ko-KR.plg_system_remember.ini',
			'/administrator/language/ko-KR/ko-KR.plg_system_remember.sys.ini',
			'/administrator/language/ko-KR/ko-KR.plg_system_sef.ini',
			'/administrator/language/ko-KR/ko-KR.plg_system_sef.sys.ini',
			'/administrator/language/ko-KR/ko-KR.plg_system_sessiongc.ini',
			'/administrator/language/ko-KR/ko-KR.plg_system_sessiongc.sys.ini',
			'/administrator/language/ko-KR/ko-KR.plg_system_stats.ini',
			'/administrator/language/ko-KR/ko-KR.plg_system_stats.sys.ini',
			'/administrator/language/ko-KR/ko-KR.plg_system_updatenotification.ini',
			'/administrator/language/ko-KR/ko-KR.plg_system_updatenotification.sys.ini',
			'/administrator/language/ko-KR/ko-KR.plg_twofactorauth_totp.ini',
			'/administrator/language/ko-KR/ko-KR.plg_twofactorauth_totp.sys.ini',
			'/administrator/language/ko-KR/ko-KR.plg_twofactorauth_yubikey.ini',
			'/administrator/language/ko-KR/ko-KR.plg_twofactorauth_yubikey.sys.ini',
			'/administrator/language/ko-KR/ko-KR.plg_user_contactcreator.ini',
			'/administrator/language/ko-KR/ko-KR.plg_user_contactcreator.sys.ini',
			'/administrator/language/ko-KR/ko-KR.plg_user_joomla.ini',
			'/administrator/language/ko-KR/ko-KR.plg_user_joomla.sys.ini',
			'/administrator/language/ko-KR/ko-KR.plg_user_profile.ini',
			'/administrator/language/ko-KR/ko-KR.plg_user_profile.sys.ini',
			'/administrator/language/ko-KR/ko-KR.plg_user_terms.ini',
			'/administrator/language/ko-KR/ko-KR.plg_user_terms.sys.ini',
			'/administrator/language/ko-KR/ko-KR.tpl_hathor.ini',
			'/administrator/language/ko-KR/ko-KR.tpl_hathor.sys.ini',
			'/administrator/language/ko-KR/ko-KR.tpl_isis.ini',
			'/administrator/language/ko-KR/ko-KR.tpl_isis.sys.ini',
			'/administrator/language/ko-KR/ko-KR.xml',
			'/administrator/language/ko-KR/plg_fields_image.ini',
			'/administrator/language/ko-KR/plg_fields_image.sys.ini',
			'/administrator/language/ko-KR/plg_fields_menuitem.ini',
			'/administrator/language/ko-KR/plg_fields_menuitem.sys.ini',
			// Frontend
			'/language/ko-KR/ko-KR.com_ajax.ini',
			'/language/ko-KR/ko-KR.com_config.ini',
			'/language/ko-KR/ko-KR.com_contact.ini',
			'/language/ko-KR/ko-KR.com_content.ini',
			'/language/ko-KR/ko-KR.com_finder.ini',
			'/language/ko-KR/ko-KR.com_mailto.ini',
			'/language/ko-KR/ko-KR.com_media.ini',
			'/language/ko-KR/ko-KR.com_messages.ini',
			'/language/ko-KR/ko-KR.com_newsfeeds.ini',
			'/language/ko-KR/ko-KR.com_privacy.ini',
			'/language/ko-KR/ko-KR.com_tags.ini',
			'/language/ko-KR/ko-KR.com_users.ini',
			'/language/ko-KR/ko-KR.com_wrapper.ini',
			'/language/ko-KR/ko-KR.files_joomla.sys.ini',
			'/language/ko-KR/ko-KR.finder_cli.ini',
			'/language/ko-KR/ko-KR.ini',
			'/language/ko-KR/ko-KR.lib_fof.ini',
			'/language/ko-KR/ko-KR.lib_fof.sys.ini',
			'/language/ko-KR/ko-KR.lib_idna_convert.sys.ini',
			'/language/ko-KR/ko-KR.lib_joomla.ini',
			'/language/ko-KR/ko-KR.lib_joomla.sys.ini',
			'/language/ko-KR/ko-KR.lib_phpass.sys.ini',
			'/language/ko-KR/ko-KR.lib_phputf8.sys.ini',
			'/language/ko-KR/ko-KR.lib_simplepie.sys.ini',
			'/language/ko-KR/ko-KR.localise.php',
			'/language/ko-KR/ko-KR.mod_articles_archive.ini',
			'/language/ko-KR/ko-KR.mod_articles_archive.sys.ini',
			'/language/ko-KR/ko-KR.mod_articles_categories.ini',
			'/language/ko-KR/ko-KR.mod_articles_categories.sys.ini',
			'/language/ko-KR/ko-KR.mod_articles_category.ini',
			'/language/ko-KR/ko-KR.mod_articles_category.sys.ini',
			'/language/ko-KR/ko-KR.mod_articles_latest.ini',
			'/language/ko-KR/ko-KR.mod_articles_latest.sys.ini',
			'/language/ko-KR/ko-KR.mod_articles_news.ini',
			'/language/ko-KR/ko-KR.mod_articles_news.sys.ini',
			'/language/ko-KR/ko-KR.mod_articles_popular.ini',
			'/language/ko-KR/ko-KR.mod_articles_popular.sys.ini',
			'/language/ko-KR/ko-KR.mod_banners.ini',
			'/language/ko-KR/ko-KR.mod_banners.sys.ini',
			'/language/ko-KR/ko-KR.mod_breadcrumbs.ini',
			'/language/ko-KR/ko-KR.mod_breadcrumbs.sys.ini',
			'/language/ko-KR/ko-KR.mod_custom.ini',
			'/language/ko-KR/ko-KR.mod_custom.sys.ini',
			'/language/ko-KR/ko-KR.mod_feed.ini',
			'/language/ko-KR/ko-KR.mod_feed.sys.ini',
			'/language/ko-KR/ko-KR.mod_finder.ini',
			'/language/ko-KR/ko-KR.mod_finder.sys.ini',
			'/language/ko-KR/ko-KR.mod_footer.ini',
			'/language/ko-KR/ko-KR.mod_footer.sys.ini',
			'/language/ko-KR/ko-KR.mod_languages.ini',
			'/language/ko-KR/ko-KR.mod_languages.sys.ini',
			'/language/ko-KR/ko-KR.mod_login.ini',
			'/language/ko-KR/ko-KR.mod_login.sys.ini',
			'/language/ko-KR/ko-KR.mod_menu.ini',
			'/language/ko-KR/ko-KR.mod_menu.sys.ini',
			'/language/ko-KR/ko-KR.mod_random_image.ini',
			'/language/ko-KR/ko-KR.mod_random_image.sys.ini',
			'/language/ko-KR/ko-KR.mod_related_items.ini',
			'/language/ko-KR/ko-KR.mod_related_items.sys.ini',
			'/language/ko-KR/ko-KR.mod_stats.ini',
			'/language/ko-KR/ko-KR.mod_stats.sys.ini',
			'/language/ko-KR/ko-KR.mod_syndicate.ini',
			'/language/ko-KR/ko-KR.mod_syndicate.sys.ini',
			'/language/ko-KR/ko-KR.mod_tags_popular.ini',
			'/language/ko-KR/ko-KR.mod_tags_popular.sys.ini',
			'/language/ko-KR/ko-KR.mod_tags_similar.ini',
			'/language/ko-KR/ko-KR.mod_tags_similar.sys.ini',
			'/language/ko-KR/ko-KR.mod_users_latest.ini',
			'/language/ko-KR/ko-KR.mod_users_latest.sys.ini',
			'/language/ko-KR/ko-KR.mod_whosonline.ini',
			'/language/ko-KR/ko-KR.mod_whosonline.sys.ini',
			'/language/ko-KR/ko-KR.mod_wrapper.ini',
			'/language/ko-KR/ko-KR.mod_wrapper.sys.ini',
			'/language/ko-KR/ko-KR.tpl_beez3.ini',
			'/language/ko-KR/ko-KR.tpl_beez3.sys.ini',
			'/language/ko-KR/ko-KR.tpl_protostar.ini',
			'/language/ko-KR/ko-KR.tpl_protostar.sys.ini',
			'/language/ko-KR/ko-KR.xml',
		];
	}

	/**
	 * Function to perform changes during postflight
	 *
	 * @param   string            $type    The action being performed
	 * @param   ComponentAdapter  $parent  The class calling this method
	 *
	 * @return  void
	 *
	 * @since   4.0.0v1
	 */
	public function postflight($type, $parent)
	{
		$this->removeFiles();
	}
}