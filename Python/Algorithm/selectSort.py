def selectSort(arr):
    length = len(arr)
    for i in range(length):
        min_index = i
        for j in range(i, length):
            if arr[j] < arr[min_index]:
                min_index = j
        arr[i], arr[min_index] = arr[min_index], arr[i]
    return arr


def select_sort(arr):
    for i in range(len(arr) - 1):  # 只需循环len(arr)-1次
        k = i
        for j in range(i, len(arr)):  # k是已知最小元素的位置
            if arr[j] < arr[k]:
                k = j
        if i != k:  # arr(k)是确定的最小元素，检查是否需要交换
            arr[i], arr[k] = arr[k], arr[i]
    return arr


print(selectSort([1, 5, 2, 6, 9, 3]))
print(select_sort([1, 5, 2, 6, 9, 3]))
