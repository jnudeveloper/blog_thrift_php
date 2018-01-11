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


interface TagServiceIf {
  /**
   * @param \thriftgen\domain\TQuery $query
   * @return \thriftgen\domain\TTag[]
   */
  public function find(\thriftgen\domain\TQuery $query);
  /**
   * @param \thriftgen\domain\TTag $tag
   * @return \thriftgen\domain\TCUDResult
   */
  public function create(\thriftgen\domain\TTag $tag);
  /**
   * @param \thriftgen\domain\TTag $tag
   * @return \thriftgen\domain\TCUDResult
   */
  public function update(\thriftgen\domain\TTag $tag);
  /**
   * @param int $id
   * @return \thriftgen\domain\TCUDResult
   */
  public function deleteById($id);
}


