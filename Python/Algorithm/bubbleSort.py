def bubbleSort(arr):
    length = len(arr)
    for i in range(length):
        flag = True
        for j in range(1, length - i):
            if arr[j - 1] > arr[j]:
                arr[j], arr[j - 1] = arr[j - 1], arr[j]
                flag = False
        if flag:
            return arr
    return arr


def bubble_sort(arr):
    for i in range(len(arr)):
        found = False
        for j in range(1, len(arr) - i):
            if arr[j - 1] > arr[j]:
                arr[j - 1], arr[j] = arr[j], arr[j - 1]
                found = True
        if not found:
            break
    return arr


print(bubbleSort([1, 5, 2, 6, 9, 3]))
print(bubble_sort([1, 5, 2, 6, 9, 3]))
