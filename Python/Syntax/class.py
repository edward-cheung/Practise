class User:
    '''用户类'''

    def __init__(self, name, id):
        self.name = name
        self.__id = id


a = User('yii', 2018)
print(a.name, a._User__id)
