# 类定义
class People:
    # 定义基本属性
    name = ''
    age = 0
    # 定义私有属性,私有属性在类外部无法直接进行访问
    __weight = 0

    # 定义构造方法
    def __init__(self, n, a, w):
        self.name = n
        self.age = a
        self.__weight = w

    def speak(self):
        print("%s 说: 我 %d 岁。" % (self.name, self.age))


# 单继承示例
class Student(People):
    grade = ''

    def __init__(self, n, a, w, g):
        # 调用父类的构函
        People.__init__(self, n, a, w)
        # super(Student,self).__init__(n, a, w)   # 作用同上
        self.grade = g

    # 覆写父类的方法
    def speak(self):
        print("%s 说: 我 %d 岁了，我在读 %d 年级" % (self.name, self.age, self.grade))


s = Student('ken', 10, 60, 3)  # 子类实例
s.speak()  # 子类调用重写方法
super(Student, s).speak()  # 用子类对象调用父类已被覆盖的方法


# _xxx：保护成员，不能导入，只有类对象和子类对象能访问
# __xxx__：特殊成员
# __attribute：两个下划线开头，声明该属性为私有，不能在类地外部被使用或直接访问。
# __method:两个下划线开头，声明该方法为私有方法，只能在类的内部调用 ，不能在类地外部调用。
class User:
    '''用户类'''
    __grade = 1

    def __init__(self, name, id):
        self.name = name
        self.__id = id

    @classmethod
    def classShow(cls):
        print(cls.__grade)

    @staticmethod
    def staticShow():
        print(User.__grade)


a = User('yii', 2018)
print(a.name, a._User__id)  # 不推荐此方式

a.classShow()  # 通过对象来调用类方法
a.staticShow()  # 通过对象来调用静态方法
User.classShow()  # 通过类名来调用类方法
User.staticShow()  # 通过类名来调用静态方法
