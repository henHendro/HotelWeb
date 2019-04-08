from django.shortcuts import render
from datetime import datetime

# Create your views here.
def index(request):
    items = "cuma test"
    context={
        'items' : items,
        'range' : [1,2,3,4,5],
        'dateNow' : datetime.today()
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