from pylenium.driver import Pylenium
from pylenium.driver import WebDriverWait
from pylenium import driver


def test_login(py: Pylenium):
    py.visit('http://localhost:8000/')
    py.get('input[name="email"]').type("admin@gmail.com")
    py.get('input[name="password"]').type("password")
    py.get('button[type="submit"]').click()
    # assert py.should().have_url('http://localhost:8000/admin')
    
    
    py.visit('http://localhost:8000/admin/project/create')
    py.get('input[name="nama"]').type("Projek PPL JAGO")
    py.get('input[name="klien"]').type("Mas-Mas NPE")
    py.get('select[name="tipe"]').select_by_value("Web")
    py.get('[name="deadline"]').type("2021-05-20")
    
    py.get('button[title="Silahkan Pilih PM Anda"]').click()
    
    