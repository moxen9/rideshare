from flask import (Blueprint, request, render_template, flash, g, session,
                   redirect, url_for)

from app import db
from app.users.models import User


mod = Blueprint('users', __name__, url_prefix='/users')


@mod.route('/me/')
def home():
    g.user = User('test', 'test@test.com', 'test')
    return render_template("users/profile.html", user=g.user)
