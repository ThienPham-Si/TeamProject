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
    host="localhost",
    user="root",
    password="",
    database="theme-park"
)

mycursor = mydb.cursor()

# sql = "INSERT INTO food (food_name, food_type, cost, menu_id, total_sold) VALUES (%s, %s, %s, %s, %s)"
# val = ("Hamburger", "Fast Food", 8.95, 1, 27)

sql = "INSERT INTO rides (ride_name, ride_description, times_broken_down, number_of_riders, min_height_inches, currently_in_operation, date_first_opened, ride_capacity, ride_speed, ride_duration, distance_travelled, operation_hours, location) VALUES (%s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)"
val = ("Teacups",
       fake.paragraph(nb_sentences=4),
       random.randint(0, 9),
       random.randint(30, 80),
       random.randint(40, 60),
       random.randint(0, 1),
       time.strftime('%Y-%m-%d %H:%M:%S'),
       random.randint(50, 120),
       random.randint(0, 9),  # ride speed
       random.randint(5, 15),  # ride duration
       random.randint(500, 5200),  # distance traveled
       f"{random.randint(8, 11)} am - {random.randint(5, 9)} pm",
       f"{fake.sentence(nb_words=1, ext_word_list=my_word_list)[:-1]}land")

mycursor.execute(sql, val)
mydb.commit()
# for x in mycursor:
#   print(x)
