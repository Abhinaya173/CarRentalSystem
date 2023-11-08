from celery import shared_task
from django.utils import timezone
from django.contrib.auth.models import User

@shared_task
def auto_logout_users():
    twelve_hours_ago = timezone.now() - timezone.timedelta(hours=12)
    users_to_logout = User.objects.filter(last_login__lt=twelve_hours_ago)

    for user in users_to_logout:
        user.auth_token_set.all().delete()
