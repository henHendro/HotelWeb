from django.shortcuts import render

# Create your views here.
def index(request):
    return render(request, 'indexSite/index.php')

# show gallery
def Gallery(request):
    return render(request, 'indexSite/gallery.php')

# show room tarif
def roomsTariff(request):
    return render(request, 'indexSite/rooms-tariff.php')

def introduction(request):
    return render(request, 'indexSite/introduction.php')