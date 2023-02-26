# Generated by Django 4.1.7 on 2023-02-26 21:21

import animes.models
from django.db import migrations, models
import django.db.models.deletion


class Migration(migrations.Migration):

    initial = True

    dependencies = [
    ]

    operations = [
        migrations.CreateModel(
            name='Genre',
            fields=[
                ('id', models.BigAutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('name', models.CharField(max_length=256)),
            ],
        ),
        migrations.CreateModel(
            name='Status',
            fields=[
                ('id', models.BigAutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('name', models.CharField(max_length=256)),
            ],
        ),
        migrations.CreateModel(
            name='Type',
            fields=[
                ('id', models.BigAutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('name', models.CharField(max_length=256)),
            ],
        ),
        migrations.CreateModel(
            name='Anime',
            fields=[
                ('id', models.BigAutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('name_eng', models.CharField(max_length=256)),
                ('name_jp', models.CharField(max_length=256)),
                ('release', models.DateField()),
                ('last_update', models.DateField()),
                ('avatar', models.ImageField(blank=True, default='static/animes/preview/37738.jpg', upload_to=animes.models.get_preview_image_path)),
                ('description', models.TextField()),
                ('rating', models.FloatField(default=0)),
                ('likes', models.IntegerField(default=0)),
                ('dislikes', models.IntegerField(default=0)),
                ('genre', models.ManyToManyField(to='animes.genre')),
                ('status', models.ForeignKey(on_delete=django.db.models.deletion.CASCADE, to='animes.status')),
                ('type', models.ForeignKey(on_delete=django.db.models.deletion.CASCADE, to='animes.type')),
            ],
        ),
    ]
