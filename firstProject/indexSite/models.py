from django.db import models

# Create your models here.

class booking(models.Model):
    name = models.CharField(max_length=50)
    email = models.EmailField(max_length=30)
    phone = models.CharField(max_length=30)
    numrooms = models.IntegerField()
    numadults = models.IntegerField()
    checkin = models.DateField()
    checkout = models.DateField()
    
    def __str__(self):
        return self.name
