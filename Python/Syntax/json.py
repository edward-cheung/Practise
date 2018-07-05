import json


# json.dumps(): 对数据进行编码
# json.loads(): 对数据进行解码

# Python -> JSON
# dict -> object
# list, tuple -> array

# JSON -> Python
# object -> dict
# array -> list

# 自定义一个类

class User(object):
    def __init__(self, name):
        self.name = name


class UserEncoder(json.JSONEncoder):
    def default(self, obj):
        if isinstance(obj, User):
            return obj.name
        return json.JSONEncoder.default(self, obj)


json_2 = {'user': User('orange')}
a = json.dumps(json_2, cls=UserEncoder)
print(json.dumps(a))
b = json.dumps(a)
print(json.dumps(b))

'''
输出结果为json对象： 
{"date": "2014-03-16 14:01:46.738000", "num": 1112} 
'''
