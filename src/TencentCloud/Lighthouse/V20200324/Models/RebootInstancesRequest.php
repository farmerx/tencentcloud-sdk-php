<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Lighthouse\V20200324\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RebootInstances请求参数结构体
 *
 * @method array getInstanceIds() 获取实例 ID 列表。每次请求批量实例的上限为 100。
 * @method void setInstanceIds(array $InstanceIds) 设置实例 ID 列表。每次请求批量实例的上限为 100。
 */
class RebootInstancesRequest extends AbstractModel
{
    /**
     * @var array 实例 ID 列表。每次请求批量实例的上限为 100。
     */
    public $InstanceIds;

    /**
     * @param array $InstanceIds 实例 ID 列表。每次请求批量实例的上限为 100。
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }
    }
}
