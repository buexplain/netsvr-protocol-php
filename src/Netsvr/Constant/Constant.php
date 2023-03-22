<?php
/**
 * Copyright 2023 buexplain@qq.com
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace Netsvr\Constant;

/**
 * 常量约定
 */
class Constant
{
    //发起心跳字符串
    const PING_MESSAGE = "~3yPvmnz~";
    //响应心跳的字符串
    const PONG_MESSAGE = "~u38NvZ~";
    //business的worker id的编号范围
    const WORKER_ID_MAX = 999;
    const WORKER_ID_MIN = 1;
}