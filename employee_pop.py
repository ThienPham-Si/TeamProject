import mysql.connector
import time
import random
from faker import Faker

fake = Faker()

mydb = mysql.connector.connect(
    host="team6database.cerk6mugrkdv.us-east-1.rds.amazonaws.com",
    user="team_6_member",
    password="Ramamurthy06",
    database="Theme_Park_Database"
)


mycursor = mydb.cursor()

relation = ['Father', 'Mother', 'Brother', 'Sister', 'Cousin', 'Grandfather', 'Son', 'Daughter']
#
# for _ in range(0, 6):
#     sql = "INSERT INTO employees (employee_id, ssn, dob, phone_num, address, salery_biweekly, first_name, m_name, last_name, emergency_contact_person, ec_relation, ec_phone_num, hours) VALUES (%s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)"
#     val = (_,
#            fake.ssn(),
#            fake.date_of_birth().strftime("%Y-%m-%d %H:%M:%S"),
#            fake.phone_number(),
#            fake.address(),
#            random.randint(2000, 5000),  # salary biweekly
#            fake.first_name(),
#            fake.last_name(),
#            fake.last_name(),
#            fake.name(),
#            f"{fake.sentence(nb_words=1, ext_word_list=relation)[:-1]}",
#            fake.phone_number(),
#            random.randint(10, 78))
#
#     mycursor.execute(sql, val)
#     mydb.commit()
mycursor.execute("SELECT * FROM YOUR_TABLE_NAME")

# print all the first cell of all the rows
for row in mycursor.fetchall():
    print(row[0])

mydb.close()

