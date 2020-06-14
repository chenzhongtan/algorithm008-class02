学习笔记

1.位运算
常见使用：
判断奇偶：
x % 2 == 1 —> (x & 1) == 1
x % 2 == 0 —> (x & 1) == 0
位移：
x >> 1 —> x / 2. 
即： x = x / 2; —> x = x >> 1;
mid = (left + right) / 2; —> mid = (left + right) >> 1;

X = X & (X-1) 清零最低位的 1 

X & -X => 得到最低位的 1 

X & ~X => 0


2.布隆过滤器和hash table
一个很长的二进制向量和一系列随机映射函数。
布隆过滤器可以检索一个元素是否在一个集合中。

优点：空间效率和查询时间远远超过一班的算法
缺点：有一定的误识别率和删除困难。


常见算法：
1.冒泡排序
function maopaoSort ($list)
{
    $len = count($list);
    for ($i = 0; $i < $len - 1; $i++) {
        for ($j = 0; $j < $len - $i - 1; $j++) {
            if ($list[$j] > $list[$j + 1]) {
                $tmp = $list[$j];
                $list[$j] = $list[$j + 1];
                $list[$j + 1] = $tmp;
            }
        }
    }
    return $list;
}

2.选择排序
function xuanzeSort ($list)
{
    $len = count($list);
    for ($i = 0; $i < $len - 1; $i++) {
        $pos = $i;
        for ($j = $i + 1; $j < $len; $j++) {
            if ($list[$pos] > $list[$j]) {
                $pos = $j;
            }
        }
        if ($pos != $i) {
            $tmp = $list[$pos];
            $list[$pos] = $list[$i];
            $list[$i] = $tmp;
        }
    }
    return $list;
}

3.快速排序
function kuaisuSort ($list)
{
    $len = count($list);
    if ($len <= 1) {//递归出口
        return $list;
    }
    $base = $list[0];//选择一个比较值
    $leftList = $rightList = [];
    for ($i = 1; $i < $len; $i++) {
        if ($base > $list[$i]) {
            $leftList[] = $list[$i];
        } else {
            $rightList[] = $list[$i];
        }
    }
    //递归分别再处理左右两边的数组
    $leftList = kuaisuSort($leftList);
    $rightList = kuaisuSort($rightList);
    return array_merge($leftList, [$base], $rightList);
}

4.插入排序
function charuSort ($list)
{
    $len = count($list);
    for ($i = 1; $i < $len; $i++) {
        $tmp = $list[$i];//获取对比元素
        for ($j = $i - 1; $j > 0; $j--) {
            if ($list[$j] > $tmp) {
                $list[$j + 1] = $list[$j];
                $list[$j] = $tmp;
            } else {
                break;
            }
        }
    }
    return $list;
}