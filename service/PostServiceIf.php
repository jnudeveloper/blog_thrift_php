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


interface PostServiceIf {
  /**
   * @param \thriftgen\domain\TQuery $query
   * @return \thriftgen\domain\TPost[]
   */
  public function find(\thriftgen\domain\TQuery $query);
  /**
   * @return \thriftgen\domain\TPost[]
   */
  public function findAll();
  /**
   * @param int $id
   * @return \thriftgen\domain\TPost
   */
  public function findById($id);
  /**
   * @param \thriftgen\domain\TPost $post
   * @return \thriftgen\domain\TCUDResult
   */
  public function create(\thriftgen\domain\TPost $post);
  /**
   * @param \thriftgen\domain\TPost $post
   * @param \thriftgen\domain\TTag[] $tagList
   * @return \thriftgen\domain\TCUDResult
   */
  public function createWithTags(\thriftgen\domain\TPost $post, array $tagList);
  /**
   * @param \thriftgen\domain\TPost $post
   * @return \thriftgen\domain\TCUDResult
   */
  public function update(\thriftgen\domain\TPost $post);
  /**
   * @param \thriftgen\domain\TPost $post
   * @param \thriftgen\domain\TTag[] $tagList
   * @return \thriftgen\domain\TCUDResult
   */
  public function updateWithTags(\thriftgen\domain\TPost $post, array $tagList);
  /**
   * @param int $id
   * @return \thriftgen\domain\TCUDResult
   */
  public function deleteById($id);
}


