<?php
namespace thriftgen\service;
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


class AdditionService_add_args {
  static $_TSPEC;

  /**
   * @var int
   */
  public $n1 = null;
  /**
   * @var int
   */
  public $n2 = null;

  public function __construct($vals=null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'n1',
          'type' => TType::I32,
          ),
        2 => array(
          'var' => 'n2',
          'type' => TType::I32,
          ),
        );
    }
    if (is_array($vals)) {
      if (isset($vals['n1'])) {
        $this->n1 = $vals['n1'];
      }
      if (isset($vals['n2'])) {
        $this->n2 = $vals['n2'];
      }
    }
  }

  public function getName() {
    return 'AdditionService_add_args';
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
            $xfer += $input->readI32($this->n1);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 2:
          if ($ftype == TType::I32) {
            $xfer += $input->readI32($this->n2);
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
    $xfer += $output->writeStructBegin('AdditionService_add_args');
    if ($this->n1 !== null) {
      $xfer += $output->writeFieldBegin('n1', TType::I32, 1);
      $xfer += $output->writeI32($this->n1);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->n2 !== null) {
      $xfer += $output->writeFieldBegin('n2', TType::I32, 2);
      $xfer += $output->writeI32($this->n2);
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();
    return $xfer;
  }

}

