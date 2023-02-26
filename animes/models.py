import os
from datetime import datetime
from django.db import models
from users.models import CustomUser


def get_preview_image_path(instance, filename):
    return os.path.join('animes', str(instance.id), 'preview/' + filename)


# Create your models here.
class Genre(models.Model):
    name = models.CharField(max_length=256)


class Type(models.Model):
    name = models.CharField(max_length=256)


class Status(models.Model):
    name = models.CharField(max_length=256)


class Anime(models.Model):
    name_eng = models.CharField(max_length=256)
    name_jp = models.CharField(max_length=256)

    release = models.DateField()
    last_update = models.DateField()

    avatar = models.ImageField(upload_to=get_preview_image_path, default='static/animes/preview/37738.jpg', blank=True)
    description = models.TextField()

    rating = models.FloatField(default=0)
    likes = models.IntegerField(default=0)
    dislikes = models.IntegerField(default=0)

    genre = models.ManyToManyField(Genre)
    type = models.ForeignKey(Type, on_delete=models.CASCADE)
    status = models.ForeignKey(Status, on_delete=models.CASCADE)


class Comment(models.Model):
    user = models.ForeignKey(CustomUser, on_delete=models.CASCADE)
    text = models.TextField()
    date = models.DateField(default=datetime.now)
    time = models.TimeField(default=datetime.now)
    likes = models.IntegerField(default=0)
    dislikes = models.IntegerField(default=0)
    anime = models.ForeignKey(Anime, on_delete=models.CASCADE)
