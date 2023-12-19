from pylenium.driver import Pylenium
from pylenium.element import Element

class TestNPE:
    def __init__(self, py: Pylenium) -> None:
        self.py = py
        
    def goto(self, link = 'http://localhost:8000/') -> 'TestNPE':
        self.py.visit(link)
        return self
    
    def login(self, email, password) -> Element:
        self.py.get('input[name="email"]').type(email)
        self.py.get('input[name="password"]').type(password)
        self.py.get('button[type="submit"]').click()
        
    def insert_input(self, name, value) -> Element:
        self.py.get(f'input[name="{name}"]').type(value)
        
    def select_option(self, name, value) -> Element:
        self.py.get(f'select[name="{name}"]').select_by_value(value)
        
    def insert_text(self, name, value) -> Element:
        self.py.get(f'textarea[name="{name}"]').type(value)
        
    def click(self, selector) -> Element:
        return self.py.get(selector).click()