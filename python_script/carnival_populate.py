import mysql.connector
import time
import random
from faker import Faker

fake = Faker()

my_word_list = [
'Cheesecake','Sugar',
'Lollipop', 'Wafer','Gummies',
'Jelly']


mydb = mysql.connector.connect(
    host="team6database.cerk6mugrkdv.us-east-1.rds.amazonaws.com",
    user="",
    password="",
    database="Theme_Park_Database"
)

mycursor = mydb.cursor()

# sql = "INSERT INTO food (food_name, food_type, cost, menu_id, total_sold) VALUES (%s, %s, %s, %s, %s)"
# val = ("Hamburger", "Fast Food", 8.95, 1, 27)

sql = "INSERT INTO carnival_games (canival_name, canival_location, canival_description, hours_of_operation, cost_per_round, currently_in_operation) VALUES (%s, %s, %s, %s, %s, %s)"
val = ("Water Gun",
       f"{fake.sentence(nb_words=1, ext_word_list=my_word_list)[:-1]}land",
       fake.paragraph(nb_sentences=4),
       f"{random.randint(8, 11)} am - {random.randint(5, 9)} pm",
       random.randint(1, 9),
       random.randint(0, 1),
       )

mycursor.execute(sql, val)
mydb.commit()
# for x in mycursor:
#   print(x)
