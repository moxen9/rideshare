from app import db

from app.users.models import User, Feedback, Notification

db.create_all()

test_user = User('TestName', 'testemail@gmail.com', 'testpass')
rater = User('niceguy', 'noone@gmail.com', 'testpass')

notification1 = Notification('Match found! (1)')
notification2 = Notification('Match found! (2)')
notification3 = Notification('Match found! (3)')

test_user.notifications.append(notification1)
test_user.notifications.append(notification2)
test_user.notifications.append(notification3)

feedback1 = Feedback(5, rater, test_user)
feedback2 = Feedback(3, rater, test_user)
feedback3 = Feedback(1, rater, test_user)

test_user.feedback.append(feedback1)
test_user.feedback.append(feedback3)
test_user.feedback.append(feedback3)

db.session.add(test_user)
db.session.add(rater)

db.session.add(notification1)
db.session.add(notification2)
db.session.add(notification3)

db.session.add(feedback1)
db.session.add(feedback2)
db.session.add(feedback3)

db.session.commit()
