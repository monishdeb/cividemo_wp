<?php

/**
 * @package CRM
 * @copyright CiviCRM LLC https://civicrm.org/licensing
 *
 * Generated from xml/schema/CRM/Core/Cache.xml
 * DO NOT EDIT.  Generated by CRM_Core_CodeGen
 * (GenCodeChecksum:403c445d5664ce00dd56a61dc7e18bc6)
 */

/**
 * Database access object for the Cache entity.
 */
class CRM_Core_DAO_Cache extends CRM_Core_DAO {
  const EXT = 'civicrm';
  const TABLE_ADDED = '2.1';

  /**
   * Static instance to hold the table name.
   *
   * @var string
   */
  public static $_tableName = 'civicrm_cache';

  /**
   * Should CiviCRM log any modifications to this table in the civicrm_log table.
   *
   * @var bool
   */
  public static $_log = FALSE;

  /**
   * Unique table ID
   *
   * @var int|string|null
   *   (SQL type: int unsigned)
   *   Note that values will be retrieved from the database as a string.
   */
  public $id;

  /**
   * group name for cache element, useful in cleaning cache elements
   *
   * @var string
   *   (SQL type: varchar(32))
   *   Note that values will be retrieved from the database as a string.
   */
  public $group_name;

  /**
   * Unique path name for cache element
   *
   * @var string|null
   *   (SQL type: varchar(255))
   *   Note that values will be retrieved from the database as a string.
   */
  public $path;

  /**
   * data associated with this path
   *
   * @var string|null
   *   (SQL type: longtext)
   *   Note that values will be retrieved from the database as a string.
   */
  public $data;

  /**
   * Component that this menu item belongs to
   *
   * @var int|string|null
   *   (SQL type: int unsigned)
   *   Note that values will be retrieved from the database as a string.
   */
  public $component_id;

  /**
   * When was the cache item created
   *
   * @var string|null
   *   (SQL type: timestamp)
   *   Note that values will be retrieved from the database as a string.
   */
  public $created_date;

  /**
   * When should the cache item expire
   *
   * @var string
   *   (SQL type: timestamp)
   *   Note that values will be retrieved from the database as a string.
   */
  public $expired_date;

  /**
   * Class constructor.
   */
  public function __construct() {
    $this->__table = 'civicrm_cache';
    parent::__construct();
  }

  /**
   * Returns localized title of this entity.
   *
   * @param bool $plural
   *   Whether to return the plural version of the title.
   */
  public static function getEntityTitle($plural = FALSE) {
    return $plural ? ts('Caches') : ts('Cache');
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
          'title' => ts('Cache ID'),
          'description' => ts('Unique table ID'),
          'required' => TRUE,
          'usage' => [
            'import' => FALSE,
            'export' => FALSE,
            'duplicate_matching' => FALSE,
            'token' => FALSE,
          ],
          'where' => 'civicrm_cache.id',
          'table_name' => 'civicrm_cache',
          'entity' => 'Cache',
          'bao' => 'CRM_Core_BAO_Cache',
          'localizable' => 0,
          'html' => [
            'type' => 'Number',
          ],
          'readonly' => TRUE,
          'add' => '2.1',
        ],
        'group_name' => [
          'name' => 'group_name',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Group Name'),
          'description' => ts('group name for cache element, useful in cleaning cache elements'),
          'required' => TRUE,
          'maxlength' => 32,
          'size' => CRM_Utils_Type::MEDIUM,
          'usage' => [
            'import' => FALSE,
            'export' => FALSE,
            'duplicate_matching' => FALSE,
            'token' => FALSE,
          ],
          'where' => 'civicrm_cache.group_name',
          'table_name' => 'civicrm_cache',
          'entity' => 'Cache',
          'bao' => 'CRM_Core_BAO_Cache',
          'localizable' => 0,
          'add' => '2.1',
        ],
        'path' => [
          'name' => 'path',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Path'),
          'description' => ts('Unique path name for cache element'),
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
          'usage' => [
            'import' => FALSE,
            'export' => FALSE,
            'duplicate_matching' => FALSE,
            'token' => FALSE,
          ],
          'where' => 'civicrm_cache.path',
          'table_name' => 'civicrm_cache',
          'entity' => 'Cache',
          'bao' => 'CRM_Core_BAO_Cache',
          'localizable' => 0,
          'add' => '2.1',
        ],
        'data' => [
          'name' => 'data',
          'type' => CRM_Utils_Type::T_LONGTEXT,
          'title' => ts('Data'),
          'description' => ts('data associated with this path'),
          'usage' => [
            'import' => FALSE,
            'export' => FALSE,
            'duplicate_matching' => FALSE,
            'token' => FALSE,
          ],
          'where' => 'civicrm_cache.data',
          'table_name' => 'civicrm_cache',
          'entity' => 'Cache',
          'bao' => 'CRM_Core_BAO_Cache',
          'localizable' => 0,
          'add' => '2.1',
        ],
        'component_id' => [
          'name' => 'component_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Component ID'),
          'description' => ts('Component that this menu item belongs to'),
          'usage' => [
            'import' => FALSE,
            'export' => FALSE,
            'duplicate_matching' => FALSE,
            'token' => FALSE,
          ],
          'where' => 'civicrm_cache.component_id',
          'table_name' => 'civicrm_cache',
          'entity' => 'Cache',
          'bao' => 'CRM_Core_BAO_Cache',
          'localizable' => 0,
          'FKClassName' => 'CRM_Core_DAO_Component',
          'FKColumnName' => 'id',
          'html' => [
            'type' => 'Select',
            'label' => ts("Component"),
          ],
          'pseudoconstant' => [
            'table' => 'civicrm_component',
            'keyColumn' => 'id',
            'labelColumn' => 'name',
          ],
          'add' => '2.1',
        ],
        'created_date' => [
          'name' => 'created_date',
          'type' => CRM_Utils_Type::T_TIMESTAMP,
          'title' => ts('Created Date'),
          'description' => ts('When was the cache item created'),
          'usage' => [
            'import' => FALSE,
            'export' => FALSE,
            'duplicate_matching' => FALSE,
            'token' => FALSE,
          ],
          'where' => 'civicrm_cache.created_date',
          'default' => 'CURRENT_TIMESTAMP',
          'table_name' => 'civicrm_cache',
          'entity' => 'Cache',
          'bao' => 'CRM_Core_BAO_Cache',
          'localizable' => 0,
          'add' => '2.1',
        ],
        'expired_date' => [
          'name' => 'expired_date',
          'type' => CRM_Utils_Type::T_TIMESTAMP,
          'title' => ts('Expired Date'),
          'description' => ts('When should the cache item expire'),
          'required' => FALSE,
          'usage' => [
            'import' => FALSE,
            'export' => FALSE,
            'duplicate_matching' => FALSE,
            'token' => FALSE,
          ],
          'where' => 'civicrm_cache.expired_date',
          'default' => NULL,
          'table_name' => 'civicrm_cache',
          'entity' => 'Cache',
          'bao' => 'CRM_Core_BAO_Cache',
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
    $r = CRM_Core_DAO_AllCoreTables::getImports(__CLASS__, 'cache', $prefix, []);
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
    $r = CRM_Core_DAO_AllCoreTables::getExports(__CLASS__, 'cache', $prefix, []);
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
      'UI_group_name_path' => [
        'name' => 'UI_group_name_path',
        'field' => [
          0 => 'group_name',
          1 => 'path',
        ],
        'localizable' => FALSE,
        'unique' => TRUE,
        'sig' => 'civicrm_cache::1::group_name::path',
      ],
      'index_expired_date' => [
        'name' => 'index_expired_date',
        'field' => [
          0 => 'expired_date',
        ],
        'localizable' => FALSE,
        'sig' => 'civicrm_cache::0::expired_date',
      ],
    ];
    return ($localize && !empty($indices)) ? CRM_Core_DAO_AllCoreTables::multilingualize(__CLASS__, $indices) : $indices;
  }

}