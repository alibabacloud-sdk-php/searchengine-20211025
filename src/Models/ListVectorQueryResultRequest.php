<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models;

use AlibabaCloud\Tea\Model;

class ListVectorQueryResultRequest extends Model
{
    /**
     * @example 127.0.0.1
     *
     * @var string
     */
    public $address;

    /**
     * @example {}
     *
     * @var mixed[]
     */
    public $body;

    /**
     * @example primary_key
     *
     * @var string
     */
    public $queryType;

    /**
     * @example image
     *
     * @var string
     */
    public $vectorQueryType;
    protected $_name = [
        'address'         => 'address',
        'body'            => 'body',
        'queryType'       => 'queryType',
        'vectorQueryType' => 'vectorQueryType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->address) {
            $res['address'] = $this->address;
        }
        if (null !== $this->body) {
            $res['body'] = $this->body;
        }
        if (null !== $this->queryType) {
            $res['queryType'] = $this->queryType;
        }
        if (null !== $this->vectorQueryType) {
            $res['vectorQueryType'] = $this->vectorQueryType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListVectorQueryResultRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['address'])) {
            $model->address = $map['address'];
        }
        if (isset($map['body'])) {
            $model->body = $map['body'];
        }
        if (isset($map['queryType'])) {
            $model->queryType = $map['queryType'];
        }
        if (isset($map['vectorQueryType'])) {
            $model->vectorQueryType = $map['vectorQueryType'];
        }

        return $model;
    }
}
