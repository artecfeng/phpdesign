## 策略模式
    1、策略接口
    2、行为类实现策略接口
    3、展示类 设置注册方法，并调用策略接口中的方法展示
    4、控制器中 调用展示类的注册方法，根据相应业务注册
        对应的行为，然后调用展示类的展示方法
    5、如果行为增加了，只需要在控制器中添加注册行为即可