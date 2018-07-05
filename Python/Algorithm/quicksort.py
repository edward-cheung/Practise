def quickSort(arr):
    if len(arr) <= 1:
        return arr
    else:
        pivot = arr[0]
        left = [x for x in arr[1:] if x < pivot]
        right = [x for x in arr[1:] if x > pivot]
        return quickSort(left) + [pivot] + quickSort(right)


def quick_sort(arr):
    def qsort(arr, begin, end):
        if begin >= end:
            return
        pivot = arr[begin]
        i = begin
        for j in range(begin + 1, end + 1):
            if arr[j] < pivot:  # 发现一个小元素
                i += 1
                arr[i], arr[j] = arr[j], arr[i]  # 小元素换位
        arr[begin], arr[i] = arr[i], arr[begin]  # 枢轴元就位
        qsort(arr, begin, i - 1)
        qsort(arr, i + 1, end)

    qsort(arr, 0, len(arr) - 1)
    return arr


if __name__ == "__main__":
    print(quickSort([3, 6, 8, 10, 1, 2, 1]))
    print(quick_sort([3, 6, 8, 10, 1, 2, 1]))
