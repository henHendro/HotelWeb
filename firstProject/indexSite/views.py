from django.shortcuts import render
from datetime import datetime
from .forms import BookingForms

# Create your views here.
def index(request):
    if request.method == 'POST':
        print(request.POST.get('name'))
    forms = BookingForms()
    context={ 
        'range' : [1,2,3,4,5],
        'dateNow' : datetime.today(),
        'forms' : forms
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