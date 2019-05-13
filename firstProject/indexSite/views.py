from django.shortcuts import render
from datetime import datetime
from .forms import BookingForms

# Create your views here.
def index(request):
    error = ''
    data = {}
    if request.method == 'POST':
        
        data["name"] = request.POST.get("name")
        data["email"] = request.POST.get("email")
        data["phone"] = request.POST.get("phone")
        data["numrooms"] = request.POST.get("numrooms")
        data["numadults"] = request.POST.get("numadults")
        data["datein"] = request.POST.get("dateBookIn")
        data["dateout"] = request.POST.get("dateBookOut")
        if (data["name"] == '' or data["email"] == '' or data["phone"] == '' or data["numrooms"] == '' or 
            data["numadults"] == '' or data["datein"] == '' or data["dateout"] == ''):
            error = "*Data tidak komplit"
        else:
            data.clear()
        
    #menambahkan contoh disini
    #forms = BookingForms()
    context={ 
        'range' : [1,2,3,4,5],
        'dateNow' : datetime.today(),
        'error' : error,
        'data': data,
        #'forms' : forms
        }
    return render(request, 'indexSite/index.php', context)

# show gallery
def Gallery(request):
    return render(request, 'indexSite/gallery.php')

# show room tarif
def roomsTariff(request):
    return render(request, 'indexSite/rooms-tariff.php')

def introduction(request):
    return render(request, 'indexSite/introduction.php')