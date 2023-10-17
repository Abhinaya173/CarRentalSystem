from django.shortcuts import render, redirect
from django.contrib.auth import (
    authenticate,
    login,
    logout,
    get_user_model,
)
from .forms import UserLoginForm, UserRegisterForm
from django.contrib import messages
from django.contrib import messages

from django.contrib.auth import authenticate, login
from django.shortcuts import render, redirect

def login_view(request):
    if request.method == 'POST':
        username = request.POST['username']
        password = request.POST['password']
        user = authenticate(request, username=username, password=password)
        if user is not None:
            login(request, user)
            return redirect('/car')  # Ganti 'home' sesuai dengan nama URL home Anda

    return render(request, 'registration/login.html')


def register_view(request):
    form = UserRegisterForm(request.POST or None)
    if form.is_valid():
        user = form.save(commit=False)
        password = form.cleaned_data.get("password")
        user.set_password(password)
        user.save()

        return redirect("/login/")
    context = {
        "title" : "Registration",
        "form": form,
    }
    return render(request, "form.html", context)

def logout_view(request):
    logout(request)
    return render(request, "home.html", {})
