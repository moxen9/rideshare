from flask.ext.wtf import Form, TextField, PasswordField, BooleanField, SelectField, SelectMultipleField
from flask.ext.wtf import Required, Email

class AddUser(Form):
    user = TextField('user', [Required()])
    password = PasswordField('password', [Required()])
    confirm_pass = PasswordField('confirm_pass', [Required()])
    email = TextField('email', [Required(), Email()])


