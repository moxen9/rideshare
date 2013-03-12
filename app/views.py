from flask import g, render_template, Blueprint, request
from forms import AddUser
from users.models import User
from app import db

mod = Blueprint('app', __name__)


@mod.before_request
def before_request():
    g.user = User.query.filter_by(name='TestName').first()


@mod.route('/', methods=['GET'])
def root():
    return render_template('index.html')


@mod.route('/matching/', methods=['get', 'post'])
def matching():
    return render_template('map.html')

@mod.route("/add_user", methods=['GET', 'POST'])
def register():
    #user = current_user
    form = AddUser()
    message = ""

    if request.method == "POST":
        if form.password.data != form.confirm_pass.data:
            message="The passwords provided did not match!\n"
        else:
            #Add user to db
            db.session.add(User(name=form.user.data,
                email = form.email.data, password=form.password.data))
            db.session.commit()
            message = form.user.data+" has been added successfully!\n"

    return render_template('add_user.html', form=form, message=message)
