<?php

/**
 * @package CRM
 * @copyright CiviCRM LLC https://civicrm.org/licensing
 *
 * Generated from xml/schema/CRM/Core/UFMatch.xml
 * DO NOT EDIT.  Generated by CRM_Core_CodeGen
 * (GenCodeChecksum:25d315f3cc5d90e1400374e3b0919fa6)
 */

/**
 * Database access object for the UFMatch entity.
 */
class CRM_Core_DAO_UFMatch extends CRM_Core_DAO {
  const EXT = 'civicrm';
  const TABLE_ADDED = '1.1';

  /**
   * Static instance to hold the table name.
   *
   * @var string
   */
  public static $_tableName = 'civicrm_uf_match';

  /**
   * Should CiviCRM log any modifications to this table in the civicrm_log table.
   *
   * @var bool
   */
  public static $_log = TRUE;

  /**
   * System generated ID.
   *
   * @var int|string|null
   *   (SQL type: int unsigned)
   *   Note that values will be retrieved from the database as a string.
   */
  public $id;

  /**
   * Which Domain is this match entry for
   *
   * @var int|string
   *   (SQL type: int unsigned)
   *   Note that values will be retrieved from the database as a string.
   */
  public $domain_id;

  /**
   * UF ID
   *
   * @var int|string
   *   (SQL type: int unsigned)
   *   Note that values will be retrieved from the database as a string.
   */
  public $uf_id;

  /**
   * UF Name
   *
   * @var string|null
   *   (SQL type: varchar(128))
   *   Note that values will be retrieved from the database as a string.
   */
  public $uf_name;

  /**
   * FK to Contact ID
   *
   * @var int|string|null
   *   (SQL type: int unsigned)
   *   Note that values will be retrieved from the database as a string.
   */
  public $contact_id;

  /**
   * UI language preferred by the given user/contact
   *
   * @var string|null
   *   (SQL type: varchar(5))
   *   Note that values will be retrieved from the database as a string.
   */
  public $language;

  /**
   * Class constructor.
   */
  public function __construct() {
    $this->__table = 'civicrm_uf_match';
    parent::__construct();
  }

  /**
   * Returns localized title of this entity.
   *
   * @param bool $plural
   *   Whether to return the plural version of the title.
   */
  public static function getEntityTitle($plural = FALSE) {
    return $plural ? ts('User Accounts') : ts('User Account');
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
          'title' => ts('UF Match ID'),
          'description' => ts('System generated ID.'),
          'required' => TRUE,
          'usage' => [
            'import' => FALSE,
            'export' => FALSE,
            'duplicate_matching' => FALSE,
            'token' => FALSE,
          ],
          'where' => 'civicrm_uf_match.id',
          'table_name' => 'civicrm_uf_match',
          'entity' => 'UFMatch',
          'bao' => 'CRM_Core_BAO_UFMatch',
          'localizable' => 0,
          'html' => [
            'type' => 'Number',
          ],
          'readonly' => TRUE,
          'add' => '1.1',
        ],
        'domain_id' => [
          'name' => 'domain_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Domain ID'),
          'description' => ts('Which Domain is this match entry for'),
          'required' => TRUE,
          'usage' => [
            'import' => FALSE,
            'export' => FALSE,
            'duplicate_matching' => FALSE,
            'token' => FALSE,
          ],
          'where' => 'civicrm_uf_match.domain_id',
          'table_name' => 'civicrm_uf_match',
          'entity' => 'UFMatch',
          'bao' => 'CRM_Core_BAO_UFMatch',
          'localizable' => 0,
          'FKClassName' => 'CRM_Core_DAO_Domain',
          'FKColumnName' => 'id',
          'html' => [
            'label' => ts("Domain"),
          ],
          'pseudoconstant' => [
            'table' => 'civicrm_domain',
            'keyColumn' => 'id',
            'labelColumn' => 'name',
          ],
          'add' => '3.0',
        ],
        'uf_id' => [
          'name' => 'uf_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('CMS ID'),
          'description' => ts('UF ID'),
          'required' => TRUE,
          'usage' => [
            'import' => FALSE,
            'export' => FALSE,
            'duplicate_matching' => FALSE,
            'token' => FALSE,
          ],
          'where' => 'civicrm_uf_match.uf_id',
          'table_name' => 'civicrm_uf_match',
          'entity' => 'UFMatch',
          'bao' => 'CRM_Core_BAO_UFMatch',
          'localizable' => 0,
          'add' => '1.1',
        ],
        'uf_name' => [
          'name' => 'uf_name',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('CMS Unique Identifier'),
          'description' => ts('UF Name'),
          'maxlength' => 128,
          'size' => CRM_Utils_Type::HUGE,
          'usage' => [
            'import' => FALSE,
            'export' => FALSE,
            'duplicate_matching' => FALSE,
            'token' => FALSE,
          ],
          'where' => 'civicrm_uf_match.uf_name',
          'table_name' => 'civicrm_uf_match',
          'entity' => 'UFMatch',
          'bao' => 'CRM_Core_BAO_UFMatch',
          'localizable' => 0,
          'add' => '1.9',
        ],
        'contact_id' => [
          'name' => 'contact_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Contact ID'),
          'description' => ts('FK to Contact ID'),
          'usage' => [
            'import' => FALSE,
            'export' => FALSE,
            'duplicate_matching' => FALSE,
            'token' => FALSE,
          ],
          'where' => 'civicrm_uf_match.contact_id',
          'table_name' => 'civicrm_uf_match',
          'entity' => 'UFMatch',
          'bao' => 'CRM_Core_BAO_UFMatch',
          'localizable' => 0,
          'FKClassName' => 'CRM_Contact_DAO_Contact',
          'FKColumnName' => 'id',
          'html' => [
            'label' => ts("Contact"),
          ],
          'add' => '1.1',
        ],
        'language' => [
          'name' => 'language',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Preferred Language'),
          'description' => ts('UI language preferred by the given user/contact'),
          'maxlength' => 5,
          'size' => CRM_Utils_Type::SIX,
          'usage' => [
            'import' => FALSE,
            'export' => FALSE,
            'duplicate_matching' => FALSE,
            'token' => FALSE,
          ],
          'where' => 'civicrm_uf_match.language',
          'table_name' => 'civicrm_uf_match',
          'entity' => 'UFMatch',
          'bao' => 'CRM_Core_BAO_UFMatch',
          'localizable' => 0,
          'add' => '2.1',
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
    $r = CRM_Core_DAO_AllCoreTables::getImports(__CLASS__, 'uf_match', $prefix, []);
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
    $r = CRM_Core_DAO_AllCoreTables::getExports(__CLASS__, 'uf_match', $prefix, []);
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
    $indices = [
      'I_civicrm_uf_match_uf_id' => [
        'name' => 'I_civicrm_uf_match_uf_id',
        'field' => [
          0 => 'uf_id',
        ],
        'localizable' => FALSE,
        'sig' => 'civicrm_uf_match::0::uf_id',
      ],
      'UI_uf_match_uf_id_domain_id' => [
        'name' => 'UI_uf_match_uf_id_domain_id',
        'field' => [
          0 => 'uf_id',
          1 => 'domain_id',
        ],
        'localizable' => FALSE,
        'sig' => 'civicrm_uf_match::0::uf_id::domain_id',
      ],
      'UI_uf_name_domain_id' => [
        'name' => 'UI_uf_name_domain_id',
        'field' => [
          0 => 'uf_name',
          1 => 'domain_id',
        ],
        'localizable' => FALSE,
        'unique' => TRUE,
        'sig' => 'civicrm_uf_match::1::uf_name::domain_id',
      ],
      'UI_contact_domain_id' => [
        'name' => 'UI_contact_domain_id',
        'field' => [
          0 => 'contact_id',
          1 => 'domain_id',
        ],
        'localizable' => FALSE,
        'unique' => TRUE,
        'sig' => 'civicrm_uf_match::1::contact_id::domain_id',
      ],
    ];
    return ($localize && !empty($indices)) ? CRM_Core_DAO_AllCoreTables::multilingualize(__CLASS__, $indices) : $indices;
  }

}