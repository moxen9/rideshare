from flask import Flask, g, render_template
from flask.ext.sqlalchemy import SQLAlchemy

app = Flask(__name__)
app.config.from_object('config')

db = SQLAlchemy(app)


@app.before_request
def before_request():
    g.db = db
    g.app = app


@app.route('/', methods=['GET'])
def get():
    return render_template('index.html')


# Blueprints

from app.users.views import mod as usersModule
app.register_blueprint(usersModule)

# Later on you'll import the other blueprints the same way:
#from app.comments.views import mod as commentsModule
#from app.posts.views import mod as postsModule
#app.register_blueprint(commentsModule)
#app.register_blueprint(postsModule)
