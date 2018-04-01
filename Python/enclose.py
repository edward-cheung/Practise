def setLine(line):
    '''闭包示例'''

    def compare(mark):
        return 'pass' if mark > line else 'fail'

    return compare


a = setLine(60)
b = setLine(90)
print(a(89), b(89))
