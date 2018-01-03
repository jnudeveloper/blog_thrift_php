<?php
namespace common\thrift\gen\service;
/**
 * Autogenerated by Thrift Compiler (0.11.0)
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


class PostService_update_args {
  static $isValidate = false;

  static $_TSPEC = array(
    1 => array(
      'var' => 'post',
      'isRequired' => false,
      'type' => TType::STRUCT,
      'class' => '\common\thrift\gen\domain\Post',
      ),
    );

  /**
   * @var \common\thrift\gen\domain\Post
   */
  public $post = null;

  public function __construct($vals=null) {
    if (is_array($vals)) {
      if (isset($vals['post'])) {
        $this->post = $vals['post'];
      }
    }
  }

  public function getName() {
    return 'PostService_update_args';
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
            $this->post = new \common\thrift\gen\domain\Post();
            $xfer += $this->post->read($input);
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
    $xfer += $output->writeStructBegin('PostService_update_args');
    if ($this->post !== null) {
      if (!is_object($this->post)) {
        throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
      }
      $xfer += $output->writeFieldBegin('post', TType::STRUCT, 1);
      $xfer += $this->post->write($output);
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();
    return $xfer;
  }

}

