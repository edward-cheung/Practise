def selectSort(arr):
    length = len(arr)
    for i in range(length):
        min_index = i
        for j in range(i, length):
            if arr[j] < arr[min_index]:
                min_index = j
        arr[i], arr[min_index] = arr[min_index], arr[i]
    return arr


print(selectSort([1, 5, 2, 6, 9, 3]))
