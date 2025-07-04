<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
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
namespace TencentCloud\Tci\V20190318\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeVocab请求参数结构体
 *
 * @method string getVocabLibName() 获取要查询词汇的词汇库名
 * @method void setVocabLibName(string $VocabLibName) 设置要查询词汇的词汇库名
 */
class DescribeVocabRequest extends AbstractModel
{
    /**
     * @var string 要查询词汇的词汇库名
     */
    public $VocabLibName;

    /**
     * @param string $VocabLibName 要查询词汇的词汇库名
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
        if (array_key_exists("VocabLibName",$param) and $param["VocabLibName"] !== null) {
            $this->VocabLibName = $param["VocabLibName"];
        }
    }
}
