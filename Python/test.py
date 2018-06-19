# python D:\Study\Python\project\test.py

print("Hello World!")

from datetime import datetime
import json


class DateEncoder(json.JSONEncoder):

    def default(self, obj):
        if isinstance(obj, datetime):
            return obj.__str__()
        return json.JSONEncoder.default(self, obj)


json_1 = {'num': 1112, 'date': datetime.now()}
print(json.dumps(json_1, cls=DateEncoder))

'''
输出结果： 
{"date": "2014-03-16 13:56:39.003000", "num": 1112} 
'''


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
输出结果： 
{"date": "2014-03-16 14:01:46.738000", "num": 1112} 
{"user": "orange"} 
'''
