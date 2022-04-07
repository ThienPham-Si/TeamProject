from faker import Faker
import time
fake = Faker()

Faker.seed(12)
my_word_list = [
'Cheesecake','Sugar',
'Lollipop', 'Wafer','Gummies',
'Jelly']

now = fake.date_of_birth()

for _ in range(5):
    print(fake.ssn().replace("-", ""))