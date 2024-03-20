<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models;

use AlibabaCloud\Tea\Model;

class GetNodeConfigRequest extends Model
{
    /**
     * @description The name of the cluster
     *
     * @example vpc_sh_domain_2
     *
     * @var string
     */
    public $clusterName;

    /**
     * @description The name of the cluster.
     *
     * @example ha-cn-30174dhoz53_qrs
     *
     * @var string
     */
    public $name;

    /**
     * @description The type of the node. Valid values: qrs, search, index, and cluster. qrs indicates a query node, search indicates a data node, index indicates an index node, and cluster indicates a cluster node.
     *
     * @example index
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'clusterName' => 'clusterName',
        'name'        => 'name',
        'type'        => 'type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterName) {
            $res['clusterName'] = $this->clusterName;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetNodeConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['clusterName'])) {
            $model->clusterName = $map['clusterName'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
