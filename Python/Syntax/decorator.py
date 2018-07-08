# 1、简单的装饰器：@show_time   # foo=show_time(foo)
import time


def show_time(func):
    def wrapper():
        start_time = time.time()
        func()
        end_time = time.time()
        print('spend %s' % (end_time - start_time))

    return wrapper


def foo():
    print('hello foo')
    time.sleep(3)


@show_time  # bar=show_time(bar)
def bar():
    print('in the bar')
    time.sleep(2)


foo = show_time(foo)
foo()
print('***********')
bar()


# 2、带参数的被装饰器函数：
#  1 import time
#  2
#  3 def show_time(func):
#  4
#  5     def wrapper(a,b):
#  6         start_time=time.time()
#  7         ret=func(a,b)
#  8         end_time=time.time()
#  9         print('spend %s'%(end_time-start_time))
# 10         return ret
# 11
# 12     return wrapper
# 13
# 14 @show_time   #add=show_time(add)
# 15 def add(a,b):
# 16
# 17     time.sleep(1)
# 18     return a+b
# 19
# 20 print(add(2,5))


# 3、不定长参数被装饰器
#  1 #*************不定长参数
#  2 import time
#  3
#  4 def show_time(func):
#  5
#  6     def wrapper(*args,**kwargs):
#  7         start_time=time.time()
#  8         func(*args,**kwargs)
#  9         end_time=time.time()
# 10         print('spend %s'%(end_time-start_time))
# 11
# 12     return wrapper
# 13
# 14 @show_time   #add=show_time(add)
# 15 def add(*args,**kwargs):
# 16
# 17     time.sleep(1)
# 18     sum=0
# 19     for i in args:
# 20         sum+=i
# 21     print(sum)
# 22
# 23 add(2,4,8,9)
# 4、带参数的装饰器
#  1 import time
#  2
#  3 def time_logger(flag=0):
#  4
#  5     def show_time(func):
#  6
#  7             def wrapper(*args,**kwargs):
#  8                 start_time=time.time()
#  9                 func(*args,**kwargs)
# 10                 end_time=time.time()
# 11                 print('spend %s'%(end_time-start_time))
# 12
# 13                 if flag:
# 14                     print('将这个操作的时间记录到日志中')
# 15
# 16             return wrapper
# 17
# 18     return show_time
# 19
# 20
# 21 @time_logger(3)
# 22 def add(*args,**kwargs):
# 23     time.sleep(1)
# 24     sum=0
# 25     for i in args:
# 26         sum+=i
# 27     print(sum)
# 28
# 29 add(2,7,5)

# @time_logger(3) 做了两件事：
#     （1）time_logger(3)：得到闭包函数show_time，里面保存环境变量flag
#     （2）@show_time   ：add＝show_time(add)


# 5、多层装饰器
#  1 def makebold(fn):
#  2     def wrapper():
#  3         return "<b>" + fn() + "</b>"
#  4     return wrapper
#  5
#  6 def makeitalic(fn):
#  7     def wrapper():
#  8         return "<i>" + fn() + "</i>"
#  9     return wrapper
# 10
# 11 @makebold
# 12 @makeitalic
# 13 def hello():
# 14     return "hello alvin"
# 15
# 16 hello()


# 6、类装饰器
# 使用类装饰器还可以依靠类内部的__call__方法，当使用 @ 形式将装饰器附加到函数上时，就会调用此方法。
#  1 import time
#  2
#  3 class Foo(object):
#  4     def __init__(self, func):
#  5         self._func = func
#  6
#  7     def __call__(self):
#  8         start_time=time.time()
#  9         self._func()
# 10         end_time=time.time()
# 11         print('spend %s'%(end_time-start_time))
# 12
# 13 @Foo  #bar=Foo(bar)
# 14
# 15 def bar():
# 16
# 17     print ('bar')
# 18     time.sleep(2)
# 19
# 20 bar()    #bar=Foo(bar)()>>>>>>>没有嵌套关系了,直接active Foo的 __call__方法


def judge(func):
    '''装饰器示例'''

    def exam(*arg):
        if not len(arg):
            return 0
        for i in arg:
            if not isinstance(i, int):
                return 0
        return func(*arg)

    return exam


@judge
def computeSum(*arg):
    return sum(arg)


@judge
def computeMax(*arg):
    return max(arg)


print(computeSum(), computeSum(1, 2, 3), computeMax(1, 2, '3'), computeMax(1, 2, 3))
