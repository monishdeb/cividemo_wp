<?php

/**
 * @package CRM
 * @copyright CiviCRM LLC https://civicrm.org/licensing
 *
 * Generated from xml/schema/CRM/Mailing/Event/MailingEventConfirm.xml
 * DO NOT EDIT.  Generated by CRM_Core_CodeGen
 * (GenCodeChecksum:6034240899b98a7372d88220354b56dd)
 */

/**
 * Database access object for the MailingEventConfirm entity.
 */
class CRM_Mailing_Event_DAO_MailingEventConfirm extends CRM_Core_DAO {
  const EXT = 'civicrm';
  const TABLE_ADDED = '';
  const COMPONENT = 'CiviMail';

  /**
   * Static instance to hold the table name.
   *
   * @var string
   */
  public static $_tableName = 'civicrm_mailing_event_confirm';

  /**
   * Should CiviCRM log any modifications to this table in the civicrm_log table.
   *
   * @var bool
   */
  public static $_log = FALSE;

  /**
   * @var int|string|null
   *   (SQL type: int unsigned)
   *   Note that values will be retrieved from the database as a string.
   */
  public $id;

  /**
   * FK to civicrm_mailing_event_subscribe
   *
   * @var int|string
   *   (SQL type: int unsigned)
   *   Note that values will be retrieved from the database as a string.
   */
  public $event_subscribe_id;

  /**
   * When this confirmation event occurred.
   *
   * @var string
   *   (SQL type: timestamp)
   *   Note that values will be retrieved from the database as a string.
   */
  public $time_stamp;

  /**
   * Class constructor.
   */
  public function __construct() {
    $this->__table = 'civicrm_mailing_event_confirm';
    parent::__construct();
  }

  /**
   * Returns localized title of this entity.
   *
   * @param bool $plural
   *   Whether to return the plural version of the title.
   */
  public static function getEntityTitle($plural = FALSE) {
    return $plural ? ts('Mailing Opt-In Confirmations') : ts('Mailing Opt-In Confirmation');
  }

  /**
   * Returns all the column names of this table
   *
   * @return array
   */
  public static function &fields() {
    if (!isset(Civi::$statics[__CLASS__]['fields'])) {
      Civi::$statics[__CLASS__]['fields'] = [
        'id' => [
          'name' => 'id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Mailing Confirmation ID'),
          'required' => TRUE,
          'usage' => [
            'import' => FALSE,
            'export' => FALSE,
            'duplicate_matching' => FALSE,
            'token' => FALSE,
          ],
          'where' => 'civicrm_mailing_event_confirm.id',
          'table_name' => 'civicrm_mailing_event_confirm',
          'entity' => 'MailingEventConfirm',
          'bao' => 'CRM_Mailing_Event_BAO_MailingEventConfirm',
          'localizable' => 0,
          'html' => [
            'type' => 'Number',
            'label' => ts("ID"),
          ],
          'readonly' => TRUE,
          'add' => NULL,
        ],
        'event_subscribe_id' => [
          'name' => 'event_subscribe_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Mailing Subscribe ID'),
          'description' => ts('FK to civicrm_mailing_event_subscribe'),
          'required' => TRUE,
          'usage' => [
            'import' => FALSE,
            'export' => FALSE,
            'duplicate_matching' => FALSE,
            'token' => FALSE,
          ],
          'where' => 'civicrm_mailing_event_confirm.event_subscribe_id',
          'table_name' => 'civicrm_mailing_event_confirm',
          'entity' => 'MailingEventConfirm',
          'bao' => 'CRM_Mailing_Event_BAO_MailingEventConfirm',
          'localizable' => 0,
          'FKClassName' => 'CRM_Mailing_Event_DAO_MailingEventSubscribe',
          'FKColumnName' => 'id',
          'html' => [
            'label' => ts("Mailing Subscribe"),
          ],
          'add' => NULL,
        ],
        'time_stamp' => [
          'name' => 'time_stamp',
          'type' => CRM_Utils_Type::T_TIMESTAMP,
          'title' => ts('Confirm Timestamp'),
          'description' => ts('When this confirmation event occurred.'),
          'required' => TRUE,
          'usage' => [
            'import' => FALSE,
            'export' => FALSE,
            'duplicate_matching' => FALSE,
            'token' => FALSE,
          ],
          'where' => 'civicrm_mailing_event_confirm.time_stamp',
          'default' => 'CURRENT_TIMESTAMP',
          'table_name' => 'civicrm_mailing_event_confirm',
          'entity' => 'MailingEventConfirm',
          'bao' => 'CRM_Mailing_Event_BAO_MailingEventConfirm',
          'localizable' => 0,
          'add' => NULL,
        ],
      ];
      CRM_Core_DAO_AllCoreTables::invoke(__CLASS__, 'fields_callback', Civi::$statics[__CLASS__]['fields']);
    }
    return Civi::$statics[__CLASS__]['fields'];
  }

  /**
   * Returns the list of fields that can be imported
   *
   * @param bool $prefix
   *
   * @return array
   */
  public static function &import($prefix = FALSE) {
    $r = CRM_Core_DAO_AllCoreTables::getImports(__CLASS__, 'mailing_event_confirm', $prefix, []);
    return $r;
  }

  /**
   * Returns the list of fields that can be exported
   *
   * @param bool $prefix
   *
   * @return array
   */
  public static function &export($prefix = FALSE) {
    $r = CRM_Core_DAO_AllCoreTables::getExports(__CLASS__, 'mailing_event_confirm', $prefix, []);
    return $r;
  }

  /**
   * Returns the list of indices
   *
   * @param bool $localize
   *
   * @return array
   */
  public static function indices($localize = TRUE) {
    $indices = [];
    return ($localize && !empty($indices)) ? CRM_Core_DAO_AllCoreTables::multilingualize(__CLASS__, $indices) : $indices;
  }

}