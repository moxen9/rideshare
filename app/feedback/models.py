from app import db

class Feedback(db.Model):
    __tablename__ = 'feedback'
    id = db.Column(db.Integer, primary_key=True)
    rating = db.Column(db.Integer)
    rater = db.Column(db.Integer)
    user_id = db.Column(db.Integer)

    def __init__(self, rating, user_id, rater):
        self.rating = rating
        self.rater = rater
        self.user_id = user_id
