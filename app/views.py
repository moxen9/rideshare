from flask import Flask, g, render_template
from flask.ext.sqlalchemy import SQLAlchemy
from app.notifications.models import Notification
from app.users.models import User
from app.feedback.models import Feedback
from app import app, db

test_user = User('TestName', 'testemail@gmail.com', 'testpass')

""" Used for generating initial data.
notification1 = Notification('Match found! (1)', test_user.id)
notification2 = Notification('Match found! (2)', test_user.id)
notification3 = Notification('Match found! (3)', test_user.id)

feedback1 = Feedback(5, test_user.id, 2)
feedback2 = Feedback(3, test_user.id, 2)
feedback3 = Feedback(1, test_user.id, 2)


db.session.add(notification1)
db.session.add(notification2)
db.session.add(notification3)

db.session.add(feedback1)
db.session.add(feedback2)
db.session.add(feedback3)

db.session.commit()
"""

@app.route('/', methods=['GET'])
def get():
    return render_template('index.html', user=test_user)

@app.route('/<user>/notifications/', methods=['GET'])
def get_notifications(user):
    notifications = get_notifications(test_user.id) #Needs to be switched with querying a user.
    return render_template('notifications.html', notifications=notifications, user=test_user)

def get_notifications(userid):
    return Notification.query.filter_by(user_id=userid)

