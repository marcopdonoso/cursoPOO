from car import Car

if __name__ == "__main__":
    car = Car()
    car.license = "AMS123"
    car.driver = "Willy"
    print(vars(car))
    
    car2 = Car()
    car2.license = "GRS983"
    car2.driver = "Drogo"
    print(vars(car2))