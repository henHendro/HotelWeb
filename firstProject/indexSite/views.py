from django.shortcuts import render

# Create your views here.
def index(request):
    return render(request, 'indexSite/index.php')

def Gallery(request):
    return render(request, 'indexSite/gallery.php')

def roomsTariff(request):
    return render(request, 'indexSite/rooms-tariff.php')
