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

    user_id = db.Column(db.Integer, db.ForeignKey("user.id"))
    rater_id = db.Column(db.Integer, db.ForeignKey("user.id"))

    user = db.relationship("User", backref="feedback",
                           foreign_keys=[user_id])

    rater = db.relationship("User", backref="feedback_given",
                            foreign_keys=[rater_id])

    def __init__(self, rating, rater, user):
        self.rating = rating
        self.rater_id = rater.id
        self.user_id = user.id


class Notification(db.Model):
    __tablename__ = 'notification'
    id = db.Column(db.Integer, primary_key=True)
    description = db.Column(db.String(50))

    user_id = db.Column(db.Integer, db.ForeignKey("user.id"))
    user = db.relationship("User", backref="notifications",
                           foreign_keys=[user_id])

    def __init__(self, description):
        self.description = description
