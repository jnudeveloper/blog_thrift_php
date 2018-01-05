<?php
namespace common\thrift\gen\domain;

/**
 * Autogenerated by Thrift Compiler (0.10.0)
 *
 * DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
 *  @generated
 */
use Thrift\Base\TBase;
use Thrift\Type\TType;
use Thrift\Type\TMessageType;
use Thrift\Exception\TException;
use Thrift\Exception\TProtocolException;
use Thrift\Protocol\TProtocol;
use Thrift\Protocol\TBinaryProtocolAccelerated;
use Thrift\Exception\TApplicationException;


class Tag {
  static $_TSPEC;

  /**
   * @var int
   */
  public $id = null;
  /**
   * @var string
   */
  public $name = null;
  /**
   * @var int
   */
  public $frequency = null;
  /**
   * @var int
   */
  public $create_time = null;
  /**
   * @var int
   */
  public $update_time = null;
  /**
   * @var int
   */
  public $status = null;

  public function __construct($vals=null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'id',
          'type' => TType::I32,
          ),
        2 => array(
          'var' => 'name',
          'type' => TType::STRING,
          ),
        3 => array(
          'var' => 'frequency',
          'type' => TType::I32,
          ),
        4 => array(
          'var' => 'create_time',
          'type' => TType::I32,
          ),
        5 => array(
          'var' => 'update_time',
          'type' => TType::I32,
          ),
        6 => array(
          'var' => 'status',
          'type' => TType::I32,
          ),
        );
    }
    if (is_array($vals)) {
      if (isset($vals['id'])) {
        $this->id = $vals['id'];
      }
      if (isset($vals['name'])) {
        $this->name = $vals['name'];
      }
      if (isset($vals['frequency'])) {
        $this->frequency = $vals['frequency'];
      }
      if (isset($vals['create_time'])) {
        $this->create_time = $vals['create_time'];
      }
      if (isset($vals['update_time'])) {
        $this->update_time = $vals['update_time'];
      }
      if (isset($vals['status'])) {
        $this->status = $vals['status'];
      }
    }
  }

  public function getName() {
    return 'Tag';
  }

  public function read($input)
  {
    $xfer = 0;
    $fname = null;
    $ftype = 0;
    $fid = 0;
    $xfer += $input->readStructBegin($fname);
    while (true)
    {
      $xfer += $input->readFieldBegin($fname, $ftype, $fid);
      if ($ftype == TType::STOP) {
        break;
      }
      switch ($fid)
      {
        case 1:
          if ($ftype == TType::I32) {
            $xfer += $input->readI32($this->id);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 2:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->name);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 3:
          if ($ftype == TType::I32) {
            $xfer += $input->readI32($this->frequency);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 4:
          if ($ftype == TType::I32) {
            $xfer += $input->readI32($this->create_time);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 5:
          if ($ftype == TType::I32) {
            $xfer += $input->readI32($this->update_time);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 6:
          if ($ftype == TType::I32) {
            $xfer += $input->readI32($this->status);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        default:
          $xfer += $input->skip($ftype);
          break;
      }
      $xfer += $input->readFieldEnd();
    }
    $xfer += $input->readStructEnd();
    return $xfer;
  }

  public function write($output) {
    $xfer = 0;
    $xfer += $output->writeStructBegin('Tag');
    if ($this->id !== null) {
      $xfer += $output->writeFieldBegin('id', TType::I32, 1);
      $xfer += $output->writeI32($this->id);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->name !== null) {
      $xfer += $output->writeFieldBegin('name', TType::STRING, 2);
      $xfer += $output->writeString($this->name);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->frequency !== null) {
      $xfer += $output->writeFieldBegin('frequency', TType::I32, 3);
      $xfer += $output->writeI32($this->frequency);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->create_time !== null) {
      $xfer += $output->writeFieldBegin('create_time', TType::I32, 4);
      $xfer += $output->writeI32($this->create_time);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->update_time !== null) {
      $xfer += $output->writeFieldBegin('update_time', TType::I32, 5);
      $xfer += $output->writeI32($this->update_time);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->status !== null) {
      $xfer += $output->writeFieldBegin('status', TType::I32, 6);
      $xfer += $output->writeI32($this->status);
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();
    return $xfer;
  }

}

