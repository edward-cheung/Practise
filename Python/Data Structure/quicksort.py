def quickSort(arr):
    if len(arr) <= 1:
        return arr
    else:
        pivot = arr[0]
        left = [x for x in arr[1:] if x < pivot]
        right = [x for x in arr[1:] if x > pivot]
        return quickSort(left) + [pivot] + quickSort(right)


if __name__ == "__main__":
    print(quickSort([3, 6, 8, 10, 1, 2, 1]))
