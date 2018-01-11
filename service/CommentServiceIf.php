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


interface CommentServiceIf {
  /**
   * @param \thriftgen\domain\TQuery $query
   * @return \thriftgen\domain\TComment[]
   */
  public function find(\thriftgen\domain\TQuery $query);
  /**
   * @param \thriftgen\domain\TComment $comment
   * @return \thriftgen\domain\TCUDResult
   */
  public function create(\thriftgen\domain\TComment $comment);
  /**
   * @param \thriftgen\domain\TComment $comment
   * @return \thriftgen\domain\TCUDResult
   */
  public function update(\thriftgen\domain\TComment $comment);
  /**
   * @param int $id
   * @return \thriftgen\domain\TCUDResult
   */
  public function deleteById($id);
}


