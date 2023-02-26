from django.contrib.auth.models import AbstractUser
from django.db import models
import os
# Create your models here.


def get_image_path(instance, filename):
    return os.path.join('avatars/users', str(instance.id), filename)


class CustomUser(AbstractUser):
    avatar = models.ImageField(upload_to=get_image_path, default='static/users/avatars/default_avatar.jpeg', blank=True)


