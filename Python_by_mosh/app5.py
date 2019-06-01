# How to get input from a user - 18.67

# name = input('What is your name? ')
#
# print('Hi ' + name)


# How to get age from birth year

# birth_year = input('Birth year: ')

# gives the datatype
# print(type(birth_year))
#
# age = 2019 - int(birth_year)

# gives the datatype of age
# print(type(age))
# print(age)

# How to get weight in kgs from lbs

# weight_lbs = input('Weight (lbs): ')
# weight_kg = int(weight_lbs) * 0.45
# print(weight_kg)

# course = 'Python for "Beginners"'
# print(course)

# Three quotes are used for defining strings that span multiple lines
# course = '''
# Hi John,

# Thank you for mail
# '''

# course = 'Python'

# this will give us the character of the first index
# print(course[0])

# this will give the last character
# print(course[-1])


# starts the character from first index upto the second index
# print(course[0:3])  -> prints pyt
# print(course[1:]) -> print yt till the end

# Print the name backwards

# name = 'Jatin'

# starts from index 1 and leaves out the last index
# print(name[1:-1])

# first = 'John'
# last = 'Smith'
#
# message = first + ' [' + last + '] is a coder'

# Formatted string
# msg = f'{first} [{last}] is a coder'
# print(msg)
# print(message)

# course = 'Python for Beginners'

# print(len(course))

# print(course.upper());
# print(course.lower());

# Used for finding character indices - returns -1 when the character isn't found
# print(course.find('o'))

# Used for replacing a substring
# print(course.replace('Beginners', 'Absolute Beginners'))

# Checks whether a substring exists in a string - returns boolean value
# print('Python' in course)

# Gives float value
# print(10/3)

# Gives int value
# print (10 // 3)

# Gives remainder
# print(10 % 3)

# Gives exponential value
# print(10 ** 3)

# For rounding the number
# x = 2.9
# print(round(x))

# Returns positive representation of the value
# print(abs(-2.9))

# for importing math module
# import math

# print(math.ceil(2.9))
# print(math.floor(2.9))

# If statements

is_hot = False
is_cold = True

if is_hot:
    print("It's a hot day")
elif is_cold:
    print("It's cold")
else:
    print("Enjoy your day")
