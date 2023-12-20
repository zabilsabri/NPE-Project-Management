from pylenium.driver import Pylenium
from testing.main.npe import TestNPE
import pytest

@pytest.fixture
def page(py: Pylenium):
    
    return TestNPE(py).goto()

def test_add_milestone(page: TestNPE):
    page.login('user@gmail.com', 'password')
    page.goto('http://localhost:8000/user/project/')

    page.py.get('div.project-card-container').get('a:last-child').click()
    page.click('button.add-milestone-btn')
    
    milestone = 'Buat CI/CD Pipeline #Test'
    
    page.insert_input('nama', milestone)
    page.insert_input('deadline', '2023-12-25')
    page.insert_text('detail', 'Ini adalah deskripsi dari milestone CI/CD Pipeline #Test')
    
    page.click('button[type="submit"]')
    
    assert page.py.get('div.body.d-flex.flex-column.mt-3.scrollbox').contains(milestone)
    
def test_add_task(page: TestNPE):
    page.login('user@gmail.com', 'password')
    page.goto('http://localhost:8000/user/project/')
    
    page.py.get('div.project-card-container').get('a:last-child').click()
    
    page.py.get('.milestone-section').get('.body').get('div.milestone-item:last-child').get('div:first-child').get('a').get('h5').click()
    
    page.click('button[data-target="#modal-new-task"]')
    
    page.insert_input('nama', 'Buat component pipeline')
    page.insert_input('deadline', '2023-12-25')
    page.insert_text('detail', 'Ini adalah deskripsi dari task Buat component pipeline')
    
    page.click('button[title="Select Programmer"]')
    page.click('a#bs-select-1-1')
    
    page.click('#modal-new-task')
    
    page.click('button[type="submit"]')