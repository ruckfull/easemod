
=======
@author Black丶丶Mamba  
@email 1024514854@qq.com
=======

easemod环信
只是做最基础的测试用

=====================
开发中遇到的错误(问题)
1、创建一个群组：
返回的groupid是一串15位的整数(正常的是14位)
然后拿这个整数获取它的详情
error：'illegal_argument'
exception：'java.lang.IllegalArgumentException'
error_description：'1.4093816642141e+14is not a valid group id'
>>>解决办法：
id参数应该是string类型

2、header已加上 Authorization : Bearer还出现'unauthorized'的错误
>>>解决办法：
去掉Authorization与冒号(:)之间的空格

3、
=====================