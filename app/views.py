from flask import g, render_template, Blueprint

mod = Blueprint('app', __name__)


@mod.route('/', methods=['GET'])
def get():
    return render_template('index.html', user=g.user)
