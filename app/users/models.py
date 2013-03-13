from app import db


class User(db.Model):
    __tablename__ = 'user'
    id = db.Column(db.Integer, primary_key=True)
    name = db.Column(db.String(50), unique=True)
    email = db.Column(db.String(120), unique=True)
    password = db.Column(db.String(20))

    def __init__(self, name=None, email=None, password=None):
        self.name = name
        self.email = email
        self.password = password

    def __repr__(self):
        return '<User %r>' % (self.name)


class Feedback(db.Model):
    __tablename__ = 'feedback'
    id = db.Column(db.Integer, primary_key=True)
    rating = db.Column(db.Integer)
    comment = db.Column(db.String(50))
    user_name = db.Column(db.String(50), db.ForeignKey("user.name"))
    rater_name = db.Column(db.String(50), db.ForeignKey("user.name"))

    user = db.relationship("User", backref="feedback",
                           foreign_keys=[user_name])

    rater = db.relationship("User", backref="feedback_given",
                            foreign_keys=[rater_name])

    def __init__(self, rating, rater, user, comment=None):
        self.comment = comment
        self.rating = rating
        self.rater_name = rater.name
        self.user_name = user.name


class Notification(db.Model):
    __tablename__ = 'notification'
    id = db.Column(db.Integer, primary_key=True)
    description = db.Column(db.String(50))

    user_name = db.Column(db.String(50), db.ForeignKey("user.name"))
    user = db.relationship("User", backref="notifications",
                           foreign_keys=[user_name])

    def __init__(self, description, user):
        self.user_name = user.name
        self.description = description
