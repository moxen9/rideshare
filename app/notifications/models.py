from app import db

class Notification(db.Model):
    __tablename__ = 'notifications'
    id = db.Column(db.Integer, primary_key=True)
    description = db.Column(db.String(50))

    user_id = db.Column(db.Integer)

    def __init__(self, description, user):
        self.description = description
        self.user = user
