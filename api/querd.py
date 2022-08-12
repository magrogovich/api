from random import*
import time


test = True
while test == True:
    x = uniform(-90.0, 90.0)
    y = uniform(-180.0, 180.0)
    with open("coordinates.txt", "w") as data:
        data.write(f"{x},{y}\n")
    time.sleep(10)



