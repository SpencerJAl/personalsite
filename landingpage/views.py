from django.shortcuts import render

# Create your views here.
def index(request):
    context = locals()
    templates = 'index.html'
    return render(request, templates, context)

def work(request):
    context = locals()
    templates = 'work.html'
    return render(request, templates, context)

def coding(request):
    context = locals()
    templates = 'coding.html'
    return render(request, templates, context)

def contact(request):
    context = locals()
    templates = 'contact.html'
    return render(request, templates, context)