<?php

/**
 * @package CRM
 * @copyright CiviCRM LLC https://civicrm.org/licensing
 *
 * Generated from xml/schema/CRM/Batch/EntityBatch.xml
 * DO NOT EDIT.  Generated by CRM_Core_CodeGen
 * (GenCodeChecksum:1a1671244f5bfc0adb9c7c5e4aa80b50)
 */

/**
 * Database access object for the EntityBatch entity.
 */
class CRM_Batch_DAO_EntityBatch extends CRM_Core_DAO {
  const EXT = 'civicrm';
  const TABLE_ADDED = '3.3';

  /**
   * Static instance to hold the table name.
   *
   * @var string
   */
  public static $_tableName = 'civicrm_entity_batch';

  /**
   * Should CiviCRM log any modifications to this table in the civicrm_log table.
   *
   * @var bool
   */
  public static $_log = FALSE;

  /**
   * primary key
   *
   * @var int|string|null
   *   (SQL type: int unsigned)
   *   Note that values will be retrieved from the database as a string.
   */
  public $id;

  /**
   * physical tablename for entity being joined to file, e.g. civicrm_contact
   *
   * @var string|null
   *   (SQL type: varchar(64))
   *   Note that values will be retrieved from the database as a string.
   */
  public $entity_table;

  /**
   * FK to entity table specified in entity_table column.
   *
   * @var int|string
   *   (SQL type: int unsigned)
   *   Note that values will be retrieved from the database as a string.
   */
  public $entity_id;

  /**
   * FK to civicrm_batch
   *
   * @var int|string
   *   (SQL type: int unsigned)
   *   Note that values will be retrieved from the database as a string.
   */
  public $batch_id;

  /**
   * Class constructor.
   */
  public function __construct() {
    $this->__table = 'civicrm_entity_batch';
    parent::__construct();
  }

  /**
   * Returns localized title of this entity.
   *
   * @param bool $plural
   *   Whether to return the plural version of the title.
   */
  public static function getEntityTitle($plural = FALSE) {
    return $plural ? ts('Entity Batches') : ts('Entity Batch');
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
          'title' => ts('EntityBatch ID'),
          'description' => ts('primary key'),
          'required' => TRUE,
          'usage' => [
            'import' => FALSE,
            'export' => FALSE,
            'duplicate_matching' => FALSE,
            'token' => FALSE,
          ],
          'where' => 'civicrm_entity_batch.id',
          'table_name' => 'civicrm_entity_batch',
          'entity' => 'EntityBatch',
          'bao' => 'CRM_Batch_BAO_EntityBatch',
          'localizable' => 0,
          'html' => [
            'type' => 'Number',
          ],
          'readonly' => TRUE,
          'add' => '3.3',
        ],
        'entity_table' => [
          'name' => 'entity_table',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('EntityBatch Table'),
          'description' => ts('physical tablename for entity being joined to file, e.g. civicrm_contact'),
          'maxlength' => 64,
          'size' => CRM_Utils_Type::BIG,
          'usage' => [
            'import' => FALSE,
            'export' => FALSE,
            'duplicate_matching' => FALSE,
            'token' => FALSE,
          ],
          'where' => 'civicrm_entity_batch.entity_table',
          'table_name' => 'civicrm_entity_batch',
          'entity' => 'EntityBatch',
          'bao' => 'CRM_Batch_BAO_EntityBatch',
          'localizable' => 0,
          'pseudoconstant' => [
            'optionGroupName' => 'entity_batch_extends',
            'optionEditPath' => 'civicrm/admin/options/entity_batch_extends',
          ],
          'add' => '3.3',
        ],
        'entity_id' => [
          'name' => 'entity_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Entity ID'),
          'description' => ts('FK to entity table specified in entity_table column.'),
          'required' => TRUE,
          'usage' => [
            'import' => FALSE,
            'export' => FALSE,
            'duplicate_matching' => FALSE,
            'token' => FALSE,
          ],
          'where' => 'civicrm_entity_batch.entity_id',
          'table_name' => 'civicrm_entity_batch',
          'entity' => 'EntityBatch',
          'bao' => 'CRM_Batch_BAO_EntityBatch',
          'localizable' => 0,
          'DFKEntityColumn' => 'entity_table',
          'FKColumnName' => 'id',
          'add' => '3.3',
        ],
        'batch_id' => [
          'name' => 'batch_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Batch ID'),
          'description' => ts('FK to civicrm_batch'),
          'required' => TRUE,
          'usage' => [
            'import' => FALSE,
            'export' => FALSE,
            'duplicate_matching' => FALSE,
            'token' => FALSE,
          ],
          'where' => 'civicrm_entity_batch.batch_id',
          'table_name' => 'civicrm_entity_batch',
          'entity' => 'EntityBatch',
          'bao' => 'CRM_Batch_BAO_EntityBatch',
          'localizable' => 0,
          'FKClassName' => 'CRM_Batch_DAO_Batch',
          'FKColumnName' => 'id',
          'html' => [
            'label' => ts("Batch"),
          ],
          'pseudoconstant' => [
            'table' => 'civicrm_batch',
            'keyColumn' => 'id',
            'labelColumn' => 'title',
          ],
          'add' => '3.3',
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
    $r = CRM_Core_DAO_AllCoreTables::getImports(__CLASS__, 'entity_batch', $prefix, []);
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
    $r = CRM_Core_DAO_AllCoreTables::getExports(__CLASS__, 'entity_batch', $prefix, []);
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
      'index_entity' => [
        'name' => 'index_entity',
        'field' => [
          0 => 'entity_table',
          1 => 'entity_id',
        ],
        'localizable' => FALSE,
        'sig' => 'civicrm_entity_batch::0::entity_table::entity_id',
      ],
      'UI_batch_entity' => [
        'name' => 'UI_batch_entity',
        'field' => [
          0 => 'batch_id',
          1 => 'entity_id',
          2 => 'entity_table',
        ],
        'localizable' => FALSE,
        'unique' => TRUE,
        'sig' => 'civicrm_entity_batch::1::batch_id::entity_id::entity_table',
      ],
    ];
    return ($localize && !empty($indices)) ? CRM_Core_DAO_AllCoreTables::multilingualize(__CLASS__, $indices) : $indices;
  }

}