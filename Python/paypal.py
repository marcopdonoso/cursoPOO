from ast import Str
from payment import Payment

class PayPal(Payment):
    email = Str
    
    def __init__(self, id, email):
        super().__init__(id)
        self.email = email