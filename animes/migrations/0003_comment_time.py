# Generated by Django 4.1.7 on 2023-02-26 21:33

import datetime
from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('animes', '0002_comment'),
    ]

    operations = [
        migrations.AddField(
            model_name='comment',
            name='time',
            field=models.TimeField(default=datetime.datetime.now),
        ),
    ]
