from django import forms

class BookingForms(forms.Form):
    name = forms.CharField(widget=forms.TextInput(
        attrs={
            'class' : 'form-control',
            'placeholder' : 'Name'
        }
    ))
    email = forms.EmailField(widget=forms.TextInput(
        attrs={
            'class' : 'form-control',
            'placeholder' : 'E-Mail'
        }
    ))
    phone = forms.CharField(widget=forms.TextInput(
        attrs={
            'class' : 'form-control',
            'placeholder' : 'Phone Number'
        }
    ))
    numRoom = forms.ChoiceField(choices=[('', 'Number of Rooms'),('1','1'),('2','2'),('3','3'),('4','4'),('5','5')], widget=forms.Select(
        attrs={
            'class' : 'form-control'
        }
    ))
    numAdult = forms.ChoiceField(choices=[('', 'Number of Adults'),('1','1'),('2','2'),('3','3'),('4','4'),('5','5')], widget=forms.Select(
        attrs={
            'class' : 'form-control'
        }
    ))
    checkinDate = forms.DateField(widget=forms.TextInput(
        attrs={
            'class' : 'datepicker form-control',
            'placeholder': 'Check In'
        }
    ))
    checkoutDate = forms.DateField(widget=forms.TextInput(
        attrs={
            'class' : 'datepicker form-control',
            'placeholder': 'Check Out'
        }
    ))

