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


class CommentService_create_args {
  static $_TSPEC;

  /**
   * @var \thriftgen\domain\TComment
   */
  public $comment = null;

  public function __construct($vals=null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'comment',
          'type' => TType::STRUCT,
          'class' => '\thriftgen\domain\TComment',
          ),
        );
    }
    if (is_array($vals)) {
      if (isset($vals['comment'])) {
        $this->comment = $vals['comment'];
      }
    }
  }

  public function getName() {
    return 'CommentService_create_args';
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
          if ($ftype == TType::STRUCT) {
            $this->comment = new \thriftgen\domain\TComment();
            $xfer += $this->comment->read($input);
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
    $xfer += $output->writeStructBegin('CommentService_create_args');
    if ($this->comment !== null) {
      if (!is_object($this->comment)) {
        throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
      }
      $xfer += $output->writeFieldBegin('comment', TType::STRUCT, 1);
      $xfer += $this->comment->write($output);
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();
    return $xfer;
  }

}

