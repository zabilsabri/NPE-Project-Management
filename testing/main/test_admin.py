from pylenium.driver import Pylenium
from testing.main.npe import TestNPE
import pytest

@pytest.fixture
def page(py: Pylenium):
    return TestNPE(py).goto()

def test_add_project(page: TestNPE):
    page.login('admin@gmail.com', 'password')
    page.goto('http://localhost:8000/admin/project/create')
    
    project_name = 'Projek PPL JAGO'
    
    page.insert_input('nama', project_name)
    page.insert_input('klien', 'Mas-Mas NPE')
    page.select_option('tipe', 'Web')
    page.insert_input('deadline', '2023-12-21')
    
    page.click('button[title="Silahkan Pilih PM Anda"]')
    page.click('a#bs-select-2-1')
    
    page.click('button[title="Nothing selected"]')
    page.click('a#bs-select-1-3')
    page.click('a#bs-select-1-2')
    
    page.py.get('body').type('Escape')
    
    page.insert_text('detail', 'Ini adalah desrkipsi dari projek PPL JAGO - test')
    
    page.click('button[type="submit"]')
    
    assert project_name in page.py.get('div.alert-success').text()
