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
 * 学生肢体动作结果
 *
 * @method float getConfidence() 获取置信度（已废弃）
 * @method void setConfidence(float $Confidence) 设置置信度（已废弃）
 * @method float getHandupConfidence() 获取举手识别结果置信度
 * @method void setHandupConfidence(float $HandupConfidence) 设置举手识别结果置信度
 * @method string getHandupStatus() 获取举手识别结果，包含举手（handup）和未举手（nothandup）
 * @method void setHandupStatus(string $HandupStatus) 设置举手识别结果，包含举手（handup）和未举手（nothandup）
 * @method integer getHeight() 获取识别结果高度
 * @method void setHeight(integer $Height) 设置识别结果高度
 * @method integer getLeft() 获取识别结果左坐标
 * @method void setLeft(integer $Left) 设置识别结果左坐标
 * @method string getMovements() 获取动作识别结果（已废弃）
 * @method void setMovements(string $Movements) 设置动作识别结果（已废弃）
 * @method float getStandConfidence() 获取站立识别结果置信度
 * @method void setStandConfidence(float $StandConfidence) 设置站立识别结果置信度
 * @method string getStandStatus() 获取站立识别结果，包含站立（stand）和坐着（sit）
 * @method void setStandStatus(string $StandStatus) 设置站立识别结果，包含站立（stand）和坐着（sit）
 * @method integer getTop() 获取识别结果顶坐标
 * @method void setTop(integer $Top) 设置识别结果顶坐标
 * @method integer getWidth() 获取识别结果宽度
 * @method void setWidth(integer $Width) 设置识别结果宽度
 */
class StudentBodyMovementResult extends AbstractModel
{
    /**
     * @var float 置信度（已废弃）
     */
    public $Confidence;

    /**
     * @var float 举手识别结果置信度
     */
    public $HandupConfidence;

    /**
     * @var string 举手识别结果，包含举手（handup）和未举手（nothandup）
     */
    public $HandupStatus;

    /**
     * @var integer 识别结果高度
     */
    public $Height;

    /**
     * @var integer 识别结果左坐标
     */
    public $Left;

    /**
     * @var string 动作识别结果（已废弃）
     */
    public $Movements;

    /**
     * @var float 站立识别结果置信度
     */
    public $StandConfidence;

    /**
     * @var string 站立识别结果，包含站立（stand）和坐着（sit）
     */
    public $StandStatus;

    /**
     * @var integer 识别结果顶坐标
     */
    public $Top;

    /**
     * @var integer 识别结果宽度
     */
    public $Width;

    /**
     * @param float $Confidence 置信度（已废弃）
     * @param float $HandupConfidence 举手识别结果置信度
     * @param string $HandupStatus 举手识别结果，包含举手（handup）和未举手（nothandup）
     * @param integer $Height 识别结果高度
     * @param integer $Left 识别结果左坐标
     * @param string $Movements 动作识别结果（已废弃）
     * @param float $StandConfidence 站立识别结果置信度
     * @param string $StandStatus 站立识别结果，包含站立（stand）和坐着（sit）
     * @param integer $Top 识别结果顶坐标
     * @param integer $Width 识别结果宽度
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
        if (array_key_exists("Confidence",$param) and $param["Confidence"] !== null) {
            $this->Confidence = $param["Confidence"];
        }

        if (array_key_exists("HandupConfidence",$param) and $param["HandupConfidence"] !== null) {
            $this->HandupConfidence = $param["HandupConfidence"];
        }

        if (array_key_exists("HandupStatus",$param) and $param["HandupStatus"] !== null) {
            $this->HandupStatus = $param["HandupStatus"];
        }

        if (array_key_exists("Height",$param) and $param["Height"] !== null) {
            $this->Height = $param["Height"];
        }

        if (array_key_exists("Left",$param) and $param["Left"] !== null) {
            $this->Left = $param["Left"];
        }

        if (array_key_exists("Movements",$param) and $param["Movements"] !== null) {
            $this->Movements = $param["Movements"];
        }

        if (array_key_exists("StandConfidence",$param) and $param["StandConfidence"] !== null) {
            $this->StandConfidence = $param["StandConfidence"];
        }

        if (array_key_exists("StandStatus",$param) and $param["StandStatus"] !== null) {
            $this->StandStatus = $param["StandStatus"];
        }

        if (array_key_exists("Top",$param) and $param["Top"] !== null) {
            $this->Top = $param["Top"];
        }

        if (array_key_exists("Width",$param) and $param["Width"] !== null) {
            $this->Width = $param["Width"];
        }
    }
}
