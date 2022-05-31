from car import Car
from account import Account

if __name__ == "__main__":
    car = Car("AMS234",Account("Willy","ANDA876"))
    print(vars(car))
    print(vars(car.driver))