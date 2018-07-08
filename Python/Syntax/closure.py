# 1、在Python中，只有模块（module），类（class）以及函数（def、lambda）才会引入新的作用域，
# 其它的代码块（如if、try、for等）是不会引入新的作用域的，
# 变量查找顺序：LEGB，局部作用域local>嵌套的父级函数的外层作用域enclosing>当前模块中的全局变量global>系统固定模块里的变量built-in；

x = int(2.9)  # int built-in
g_count = 0  # global


# 当然，local和enclosing是相对的
# 当内部作用域想修改外部作用域的变量时，就要用到global和nonlocal关键字了，
# 当修改的变量是在全局作用域（global作用域）上的，就要使用global先声明一下，
# 当要修改嵌套作用域（enclosing作用域，外层非全局作用域）中的变量，这时就需要nonlocal关键字了

def outer():
    o_count = 1  # enclosing

    def inner():
        i_count = 2  # local
        print(o_count)

    # print(i_count) 找不到
    inner()


outer()


# print(o_count) #找不到

# 2、高阶函数(函数即对象)；

# *******函数名作为参数**********
def foo(func):
    print('foo')
    func()


def bar():
    print('bar')


foo(bar)


# *******函数名作为返回值*********
def foo():
    print('foo')
    return bar


def bar():
    print('bar')


b = foo()
b()

# 3、函数的嵌套以及闭包（n.closure,v.enclose）；
# 定义：如果在一个内部函数里，对在外部作用域（但不是在全局作用域）的变量进行引用，那么内部函数就被认为是闭包(closure).

# 用途1：当闭包执行完后，仍然能够保持住当前的运行环境。
# 比如说，如果你希望函数的每次执行结果，都是基于这个函数上次的运行结果。
origin = [0, 0]  # 坐标系统原点


def create(pos=origin):
    def player(direction, step):
        '''
        一个函数，接收2个参数，分别为方向(direction)，步长(step)，该函数控制棋子的运动。
        棋子运动的新的坐标除了依赖于方向和步长以外，当然还要根据原来所处的坐标点，用闭包就可以保持住这个棋子原来所处的坐标。
        '''
        new_x = pos[0] + direction[0] * step
        new_y = pos[1] + direction[1] * step
        pos[0] = new_x
        pos[1] = new_y
        # 注意！此处不能写成 pos = [new_x, new_y]，原因在上文有说过
        return pos

    return player


player = create()  # 创建棋子player，起点为原点
print(player([1, 0], 10))  # 向x轴正方向移动10步
print(player([0, 1], 20))  # 向y轴正方向移动20步


# [10, 0]
# [10, 20]


# 用途2：闭包可以根据外部作用域的局部变量来得到不同的结果。
# 修改外部的变量，闭包根据这个变量展现出不同的功能
def setLine(line):
    '''
    判断100分制和150分制是否及格
    '''

    def compare(mark):
        return 'pass' if mark > line else 'fail'

    return compare


a = setLine(60)
b = setLine(90)
print(a(89), b(89))

# pass fail
