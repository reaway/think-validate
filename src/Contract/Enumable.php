<?php
declare(strict_types=1);

namespace Think\Component\Validate\Contract;

/**
 * 枚举类接口
 */
interface Enumable
{
    // 返回枚举类的清单
    public static function values(): array;
}