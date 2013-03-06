from flask import (Blueprint, request, render_template, flash, g, session,
                   redirect, url_for)

from app import db
from app.users.models import User
from app.feedback.models import Feedback


mod = Blueprint('users', __name__, url_prefix='/users')

user = User("TestUser", "testemail@gmail.com", "testpass")

@mod.route('/me/')
def home():
    g.user = User('test', 'test@test.com', 'test')
    feedback = Feedback.query.filter_by(user_id=user.id).all()
    return render_template("profile.html", user=user, feedback=feedback)
