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
