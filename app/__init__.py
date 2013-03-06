from flask import Flask, g, render_template
from flask.ext.sqlalchemy import SQLAlchemy

app = Flask(__name__)
app.config.from_object('config')

db = SQLAlchemy(app)
db.init_app(app)

@app.before_request
def before_request():
    g.db = db
    g.app = app

from app.users.models import User
from app.feedback.models import Feedback
from app.notifications.models import Notification

# Blueprints

from app.users.views import mod as usersModule
app.register_blueprint(usersModule)

import views

# Later on you'll import the other blueprints the same way:
#from app.comments.views import mod as commentsModule
#from app.posts.views import mod as postsModule
#app.register_blueprint(commentsModule)
#app.register_blueprint(postsModule)
