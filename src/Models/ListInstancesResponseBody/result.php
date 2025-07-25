<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models\ListInstancesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\ListInstancesResponseBody\result\dataSourceDetails;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\ListInstancesResponseBody\result\network;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\ListInstancesResponseBody\result\spec;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\ListInstancesResponseBody\result\tags;

class result extends Model
{
    /**
     * @var string
     */
    public $chargeType;

    /**
     * @var string
     */
    public $commodityCode;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var dataSourceDetails[]
     */
    public $dataSourceDetails;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $edition;

    /**
     * @var string
     */
    public $expiredTime;

    /**
     * @var bool
     */
    public $inDebt;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $lockMode;

    /**
     * @var network
     */
    public $network;

    /**
     * @var bool
     */
    public $noQrs;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var spec
     */
    public $spec;

    /**
     * @var string
     */
    public $status;

    /**
     * @var tags[]
     */
    public $tags;

    /**
     * @var string
     */
    public $updateTime;

    /**
     * @var string
     */
    public $userName;

    /**
     * @var string
     */
    public $version;
    protected $_name = [
        'chargeType' => 'chargeType',
        'commodityCode' => 'commodityCode',
        'createTime' => 'createTime',
        'dataSourceDetails' => 'dataSourceDetails',
        'description' => 'description',
        'edition' => 'edition',
        'expiredTime' => 'expiredTime',
        'inDebt' => 'inDebt',
        'instanceId' => 'instanceId',
        'lockMode' => 'lockMode',
        'network' => 'network',
        'noQrs' => 'noQrs',
        'resourceGroupId' => 'resourceGroupId',
        'spec' => 'spec',
        'status' => 'status',
        'tags' => 'tags',
        'updateTime' => 'updateTime',
        'userName' => 'userName',
        'version' => 'version',
    ];

    public function validate()
    {
        if (\is_array($this->dataSourceDetails)) {
            Model::validateArray($this->dataSourceDetails);
        }
        if (null !== $this->network) {
            $this->network->validate();
        }
        if (null !== $this->spec) {
            $this->spec->validate();
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->chargeType) {
            $res['chargeType'] = $this->chargeType;
        }

        if (null !== $this->commodityCode) {
            $res['commodityCode'] = $this->commodityCode;
        }

        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }

        if (null !== $this->dataSourceDetails) {
            if (\is_array($this->dataSourceDetails)) {
                $res['dataSourceDetails'] = [];
                $n1 = 0;
                foreach ($this->dataSourceDetails as $item1) {
                    $res['dataSourceDetails'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->edition) {
            $res['edition'] = $this->edition;
        }

        if (null !== $this->expiredTime) {
            $res['expiredTime'] = $this->expiredTime;
        }

        if (null !== $this->inDebt) {
            $res['inDebt'] = $this->inDebt;
        }

        if (null !== $this->instanceId) {
            $res['instanceId'] = $this->instanceId;
        }

        if (null !== $this->lockMode) {
            $res['lockMode'] = $this->lockMode;
        }

        if (null !== $this->network) {
            $res['network'] = null !== $this->network ? $this->network->toArray($noStream) : $this->network;
        }

        if (null !== $this->noQrs) {
            $res['noQrs'] = $this->noQrs;
        }

        if (null !== $this->resourceGroupId) {
            $res['resourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->spec) {
            $res['spec'] = null !== $this->spec ? $this->spec->toArray($noStream) : $this->spec;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['tags'] = [];
                $n1 = 0;
                foreach ($this->tags as $item1) {
                    $res['tags'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->updateTime) {
            $res['updateTime'] = $this->updateTime;
        }

        if (null !== $this->userName) {
            $res['userName'] = $this->userName;
        }

        if (null !== $this->version) {
            $res['version'] = $this->version;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['chargeType'])) {
            $model->chargeType = $map['chargeType'];
        }

        if (isset($map['commodityCode'])) {
            $model->commodityCode = $map['commodityCode'];
        }

        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }

        if (isset($map['dataSourceDetails'])) {
            if (!empty($map['dataSourceDetails'])) {
                $model->dataSourceDetails = [];
                $n1 = 0;
                foreach ($map['dataSourceDetails'] as $item1) {
                    $model->dataSourceDetails[$n1] = dataSourceDetails::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['edition'])) {
            $model->edition = $map['edition'];
        }

        if (isset($map['expiredTime'])) {
            $model->expiredTime = $map['expiredTime'];
        }

        if (isset($map['inDebt'])) {
            $model->inDebt = $map['inDebt'];
        }

        if (isset($map['instanceId'])) {
            $model->instanceId = $map['instanceId'];
        }

        if (isset($map['lockMode'])) {
            $model->lockMode = $map['lockMode'];
        }

        if (isset($map['network'])) {
            $model->network = network::fromMap($map['network']);
        }

        if (isset($map['noQrs'])) {
            $model->noQrs = $map['noQrs'];
        }

        if (isset($map['resourceGroupId'])) {
            $model->resourceGroupId = $map['resourceGroupId'];
        }

        if (isset($map['spec'])) {
            $model->spec = spec::fromMap($map['spec']);
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['tags'])) {
            if (!empty($map['tags'])) {
                $model->tags = [];
                $n1 = 0;
                foreach ($map['tags'] as $item1) {
                    $model->tags[$n1] = tags::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['updateTime'])) {
            $model->updateTime = $map['updateTime'];
        }

        if (isset($map['userName'])) {
            $model->userName = $map['userName'];
        }

        if (isset($map['version'])) {
            $model->version = $map['version'];
        }

        return $model;
    }
}
