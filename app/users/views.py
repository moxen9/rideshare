from flask import Blueprint, render_template, g

from app.users.models import User, Feedback

mod = Blueprint('users', __name__, url_prefix='/users')


@mod.before_request
def before_request():
    g.user = User.query.filter_by(name='TestName').first()


@mod.route('/me/')
def home():
    feedback = g.user.feedback
    return render_template("profile.html", user=g.user, person=g.user, feedback=feedback)


@mod.route('/<user>/notifications/', methods=['GET'])
def notifications(user):
    user = User.query.filter_by(name=user).first()
    notifications = user.notifications
    if not notifications:
        notifications = "No notifications"
    return render_template('notifications.html', user=user,
                           notifications=notifications)

@mod.route('/<user_id>', methods=['GET','POST'])
def view_profile(user_id):
    person = User.query.filter_by(id=user_id).first()
    if person:
        feedback = Feedback.query.filter_by(user_id=person.id).all()
        return render_template("profile.html", user=g.user, person=person, feedback=feedback)
    return "Profile not found."





