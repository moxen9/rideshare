from flask import g, render_template, Blueprint
from users.models import User

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
