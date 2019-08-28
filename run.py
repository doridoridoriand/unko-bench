import time

start_time = time.time()

res = 0
for i in range(1000000000):
    res = res + i

end_time = time.time()

print('{:.2f}'.format(end_time - start_time))
