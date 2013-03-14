from flask import Blueprint, render_template, g, request

from app.users.models import User, Feedback, Notification, Route
from app.forms import LeaveFeedback
from app import db

mod = Blueprint('users', __name__, url_prefix='/users')


@mod.before_request
def before_request():
    g.user = User.query.filter_by(name='TestName').first()


@mod.route('/me/')
def home():
    form = LeaveFeedback()

    feedback = g.user.feedback
    return render_template("profile.html", form=form, user=g.user, person=g.user, feedback=feedback)


@mod.route('/<user_name>/notifications/', methods=['GET'])
def notifications(user_name):
    notifications = Notification.query.filter_by(user_name=user_name).all()
    all_notifications = Notification.query.all()
    print [notification.user_name for notification in all_notifications]
    if not notifications:
        notifications = "No notifications"
    return render_template('notifications.html', user=g.user,
                           notifications=notifications)

@mod.route('/<user_id>', methods=['GET','POST'])
def view_profile(user_id):

    person = User.query.filter_by(name=user_id).first()

    if person:
        if request.method == "POST":
            db.session.add(Feedback(user=person, rater=g.user, comment=form.comment.data, rating=int(form.rating.data)))
            db.session.commit()

        feedback = Feedback.query.filter_by(user_name=person.name).all()
        return render_template("profile.html",form=form, user=g.user, person=person, feedback=feedback)
    return "Profile not found."

@mod.route('/<user_name>/routes/', methods=['GET'])
def routes(user_name):
    routes = Route.query.filter_by(user_name=user_name).all()
    all_routes = Route.query.all()
    print [route.user_name for route in all_routes]
    if not routes:
        routes = "No routes"
    return render_template('routes.html', user=g.user,
                           routes=routes)

