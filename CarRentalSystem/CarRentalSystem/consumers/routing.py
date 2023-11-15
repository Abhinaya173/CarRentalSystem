# routing.py
from django.urls import re_path
from . import consumers

websocket_urlpatterns = [
    re_path(r'ws/conversation/$', consumers.ConversationConsumer.as_asgi()),
]
