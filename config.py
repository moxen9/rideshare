import os
_basedir = os.path.abspath(os.path.dirname(__file__))

DEBUG = False

#ADMINS = frozenset(['youremail@yourdomain.com'])
#SECRET_KEY = 'SecretKeyForSessionSigning'

SQLALCHEMY_DATABASE_URI = 'sqlite:///' + os.path.join(_basedir, 'app.db')
DATABASE_CONNECT_OPTIONS = {}
