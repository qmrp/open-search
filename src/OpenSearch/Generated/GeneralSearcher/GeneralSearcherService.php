<?php
namespace OpenSearch\Generated\GeneralSearcher;
/**
 * Autogenerated by Thrift Compiler (0.10.0)
 *
 * DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
 *  @generated
 */
use OpenSearch\Thrift\Base\TBase;
use OpenSearch\Thrift\Type\TType;
use OpenSearch\Thrift\Type\TMessageType;
use OpenSearch\Thrift\Exception\TException;
use OpenSearch\Thrift\Exception\TProtocolException;
use OpenSearch\Thrift\Protocol\TProtocol;
use OpenSearch\Thrift\Protocol\TBinaryProtocolAccelerated;
use OpenSearch\Thrift\Exception\TApplicationException;


interface GeneralSearcherService {
}


class GeneralSearcherServiceClient implements \OpenSearch\Generated\GeneralSearcher\GeneralSearcherService {
  protected $input_ = null;
  protected $output_ = null;

  protected $seqid_ = 0;

  public function __construct($input, $output=null) {
    $this->input_ = $input;
    $this->output_ = $output ? $output : $input;
  }

}


// HELPER FUNCTIONS AND STRUCTURES



