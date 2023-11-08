from celery import Celery
from celery.schedules import crontab
from .tasks import auto_logout_users

app = Celery('carrentalsystem')
app.config_from_object('django.conf:settings')

app.conf.beat_schedule = {
    'auto-logout-every-12-hours': {
        'task': '.tasks.auto_logout_users',
        'schedule': crontab(hour='*/12'),
    },
}
