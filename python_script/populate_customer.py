import mysql.connector
import time
import random
from faker import Faker

fake = Faker()

mydb = mysql.connector.connect(
    host="localhost",
    user="root",
    password="",
    database="theme-park"
)

mycursor = mydb.cursor()


for _ in range(10):
    sql = "INSERT INTO customers (first_name, middle_name, last_name, address, date_of_birth, current_age, gender, phone_number, email, credit_card, date_of_visit, VIP_status, hours_spent, user_name, user_password) VALUES (%s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)"
    val = (fake.first_name(),
           fake.last_name(),
           fake.last_name(),
           fake.address(),
           fake.date_of_birth().strftime("%Y-%m-%d %H:%M:%S"),
           random.randint(15, 89),
           random.randint(0, 1),
           fake.phone_number(),
           fake.email(),
           fake.credit_card_number(),
           fake.date_this_year().strftime("%Y-%m-%d %H:%M:%S"),
           random.randint(0, 1),
           random.randint(2, 59),  # hour spent
           fake.simple_profile()['username'],
           fake.password())

    mycursor.execute(sql, val)
    mydb.commit()
# for x in mycursor:
#   print(x)
