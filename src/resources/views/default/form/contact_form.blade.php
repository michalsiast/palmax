@php
    $currentLocale = app()->getLocale();
@endphp

<form id="contactForm" method="POST" action="#">
    <div class="row">
        <div class="col-md-6">
            <!-- Single Form Start with Name -->
            <div class="form-group single-form">
                @if($currentLocale === "pl")
                <label for="name">Imię *</label>
                <input id="name" type="text" name="name" placeholder="Imię *" class="form-control" required>
                @elseif($currentLocale === "en")
                    <label for="name">First Name *</label>
                    <input id="name" type="text" name="name" placeholder="First Name *" class="form-control" required>
                @endif
                <div class="invalid-feedback"></div>
            </div>
            <!-- Single Form End -->
        </div>
        <div class="col-md-6">
            <!-- Single Form Start with Email -->
            <div class="form-group single-form">
                @if($currentLocale === "pl")
                <label for="email">Email *</label>
                <input id="email" type="email" name="email" placeholder="Email *" class="form-control" required>
                @elseif($currentLocale === "en")
                    <label for="email">Email *</label>
                    <input id="email" type="email" name="email" placeholder="Email *" class="form-control" required>
                @endif
                <div class="invalid-feedback"></div>
            </div>
            <!-- Single Form End -->
        </div>
        <div class="col-md-12">
            <!-- Single Form Start for Phone, adjusted -->
            <div class="form-group single-form">
                @if($currentLocale === "pl")
                <label for="phone">Telefon *</label>
                <input id="phone" type="text" name="phone" placeholder="Telefon *" class="form-control" required>
                @elseif($currentLocale === "en")
                    <label for="phone">Phone number *</label>
                    <input id="phone" type="text" name="phone" placeholder="Phone number *" class="form-control" required>
                @endif
                <div class="invalid-feedback"></div>
            </div>
            <!-- Single Form End -->
        </div>
        <div class="col-sm-12">
            <!-- Single Form Start with Message -->
            <div class="form-group single-form">
                @if($currentLocale === "pl")
                <label for="message">Wiadomość *</label>
                <textarea id="message" name="message" rows="5" placeholder="Wiadomość *" class="form-control" required></textarea>
                @elseif($currentLocale === "en")
                    <label for="message">Message *</label>
                    <textarea id="message" name="message" rows="5" placeholder="Message *" class="form-control" required></textarea>
                @endif
                <div class="invalid-feedback"></div>
            </div>
            <!-- Single Form End -->
        </div>
        <div class="col-sm-12">
            <!-- Form Check Start -->
            <div class="form-group form-check single-form">
                <input id="rule" type="checkbox" name="rule" class="form-check-input">
                <label for="rule" class="form-check-label">{!! getConstField('contact_form_rule') !!}</label>
                <div class="invalid-feedback"></div>
            </div>
            <!-- Form Check End -->
        </div>
        <div class="col-sm-12">
            <!-- Recaptcha Start -->
            <div class="form-group single-form">
                <div class="g-recaptcha" data-sitekey="{{$siteKey}}"></div>
                <div class="invalid-feedback"></div>
            </div>
            <!-- Recaptcha End -->
        </div>
        <div class="col-sm-12">
            <!-- Submit Button Start -->
            <div class="form-group single-form form-btn">
                @if($currentLocale === "pl")
                <input type="submit" value="Wyślij" class="btn btn-outline-primary mb-3">
                @elseif($currentLocale === "en")
                    <input type="submit" value="Send" class="btn btn-outline-primary mb-3">
                @endif
            </div>
            <!-- Submit Button End -->
        </div>
    </div>
    <div id="alert" class="alert"></div>
</form>

@push('scripts.body.bottom')
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <script>
        document.getElementById('contactForm').addEventListener('submit', e => {
            e.preventDefault();
            submitForm(e.target);
        })
    </script>
@endpush
