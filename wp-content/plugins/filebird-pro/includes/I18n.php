<?php
namespace FileBird;

defined('ABSPATH') || exit;
/**
 * I18n Logic
 */
class I18n {
  protected static $instance = null;

  public static function getInstance() {
    if (null == self::$instance) {
      self::$instance = new self;
    }

    return self::$instance;
  }

  private function __construct() {
    add_action('plugins_loaded', array($this, 'loadPluginTextdomain'));
  }

  public static function loadPluginTextdomain() {
    if (function_exists('determine_locale')) {
      $locale = determine_locale();
    } else {
      $locale = is_admin() ? get_user_locale() : get_locale();
    }
    unload_textdomain('filebird');
    load_textdomain('filebird', NJFB_PLUGIN_PATH . '/i18n/languages/' . $locale . '.mo');
    load_plugin_textdomain('filebird', false, NJFB_PLUGIN_PATH . '/i18n/languages/');
  }

  public static function getTranslation(){
    $translation = array(
      'noMedia' => __('No media files found.', 'filebird'),
      'new_folder' => __('New Folder', 'filebird'),
      'delete' => __('Delete', 'filebird'),
      'folders' => __('Folders', 'filebird'),
      'ok' => __('Ok', 'filebird'),
      'cancel' => __('Cancel', 'filebird'),
      'cut' => __("Cut", 'filebird'),
      'paste' => __("Paste", 'filebird'),
      'loading' => __("Loading", 'filebird'),
      'move_done' => __("Successfully moved", 'filebird'),
      'delete_done' => __("Successfully deleted!", 'filebird'),
      'delete_error' => __("Can't delete!", 'filebird'),
      'save' => __('Save', 'filebird'),
      'folder' => __('Folder', 'filebird'),
      'folder_name_placeholder' => __('Folder name...', 'filebird'),
      'folders' => __('Folders', 'filebird'),
      'enter_folder_name_placeholder' => __('Enter folder name...', 'filebird'),
      'are_you_sure_delete' => __('Are you sure you want to delete', 'filebird'),
      'are_you_sure' => __('Are you sure?', 'filebird'),
      'all_files_will_move' => __('Those files will be moved to <strong>Uncategorized</strong> folder.', 'filebird'),
      'editing_warning' => __('You are editing another folder! Please done the task!', 'filebird'),
      'sort_folders' => __('Sort Folders', 'filebird'),
      'delete_folder' => __('Delete Folder', 'filebird'),
      'sort_files' => __('Sort Files', 'filebird'),
      'bulk_select' => __('Bulk Select', 'filebird'),
      'all_files' => __('All Files', 'filebird'),
      'uncategorized' => __('Uncategorized', 'filebird'),
      'rename' => __('Rename', 'filebird'),
      'are_you_sure_delete_this_folder' => __('Are you sure you want to delete this folder?', 'filebird'),
      'sort_ascending' => __('Sort Ascending', 'filebird'),
      'sort_descending' => __('Sort Descending', 'filebird'),
      'reset' => __('Reset', 'filebird'),
      'by_name' => __('By Name', 'filebird'),
      'name_ascending' => __('Name Ascending', 'filebird'),
      'name_descending' => __('Name Descending', 'filebird'),
      'by_date' => __('By Date', 'filebird'),
      'date_ascending' => __('Date Ascending', 'filebird'),
      'date_descending' => __('Date Descending', 'filebird'),
      'by_modified' => __('By Modified', 'filebird'),
      'modified_ascending' => __('Modified Ascending', 'filebird'),
      'modified_descending' => __('Modified Descending', 'filebird'),
      'by_author' => __('By Author', 'filebird'),
      'author_ascending' => __('Author Ascending', 'filebird'),
      'author_descending' => __('Author Descending', 'filebird'),
      'skip_and_deactivate' => __('Skip & Deactivate', 'filebird'),
      'deactivate' => __('Deactivate', 'filebird'),
      'thank_you_so_much' => __('Thank you so much!', 'filebird'),
      'feedback' => array(
        'no_features' => __('It doesn\'t have the features I\'m looking for.', 'filebird'),
        'not_working' => __('Not work with my theme or other plugins.', 'filebird'),
        'found_better_plugin' => __('Found another plugin that works better.', 'filebird'),
        'not_know_using' => __('Don\'t know how to use it.', 'filebird'),
        'temporary_deactivation' => __('This is just temporary, I will use it again.', 'filebird'),
        'other' => __('Other', 'filebird'),
      ),
      'which_features' => __('Which features please?', 'filebird'),
      'found_better_plugin_placeholder' => __('Please tell us which one', 'filebird'),
      'not_know_using_document' => __('Please read FileBird documentation <a target="_blank" href="https://ninjateam.gitbook.io/filebird/">here</a> or <a target="_blank" href="https://ninjateam.org/support/">chat with us</a> if you need help', 'filebird'),
      'not_working_support' => __('Please <a target="_blank" href="https://ninjateam.org/support/">ask for support here</a>, we will fix it for you.', 'filebird'),
      'other_placeholder' => __('Please share your thoughts...', 'filebird'),
      'quick_feedback' => __('Want a better FileBird?', 'filebird'),
      'deactivate_sadly' => __('Sorry to see you walk away, please share why you want to deactivate FileBird?', 'filebird'),
      'folder_limit_reached' => __('Folder Limit Reached', 'filebird'),
      'limit_folder' => __('<p>FileBird Lite version supports up to 10 folders.<br>Please upgrade to have unlimited folders and other premium features!</p>
        <ul class="fbv-in_feature">
          <li>Unlimited Folders</li>
          <li>Sort Files / Folders</li>
          <li>Compatible with Premium Page Builders <span id="fbv-pagebuilder" class="njn-i"><svg viewBox="0 0 192 512"><path fill="currentColor" d="M20 424.229h20V279.771H20c-11.046 0-20-8.954-20-20V212c0-11.046 8.954-20 20-20h112c11.046 0 20 8.954 20 20v212.229h20c11.046 0 20 8.954 20 20V492c0 11.046-8.954 20-20 20H20c-11.046 0-20-8.954-20-20v-47.771c0-11.046 8.954-20 20-20zM96 0C56.235 0 24 32.235 24 72s32.235 72 72 72 72-32.235 72-72S135.764 0 96 0z"></path></svg></span></li>
          <li>Get Fast Updates</li>
          <li>Premium Technical Support</li>
          <li>One-time Payment</li>
          <li>30-day Refund Guarantee</li>
        </ul>', 'filebird'),
      'pagebuilder_support' => __('Including Divi, Fusion, Thrive Architect, WPBakery...', 'filebird'),
      'upgrade_to_pro' => __('Upgrade to FileBird Pro now', 'filebird'),
      'success' => __('Success.', 'filebird'),
      'filebird_db_updated' => __('Congratulations. Successfully imported!', 'filebird'),
      'update_noti_title' => __('FileBird database update required!', 'filebird'),
      'update_noti_desc' => __('To use the latest vevrsion, you have to update your database to make your FileBird folders display correctly.', 'filebird'),
      'update_noti_btn' => __('Update Now', 'filebird'),
      'import_failed' => __('Import failed. Please try again or contact our support https://ninjateam.org/support.', 'filebird')
    );
    return $translation;
  }
}
