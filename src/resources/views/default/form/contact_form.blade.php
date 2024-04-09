<form id="contactForm" method="POST" action="#">
    <div class="row">
        <div class="col-md-6">
            <!-- Single Form Start with Name -->
            <div class="form-group single-form">
                <label for="name">Imię *</label>
                <input id="name" type="text" name="name" placeholder="Imię *" class="form-control" required>
                <div class="invalid-feedback"></div>
            </div>
            <!-- Single Form End -->
        </div>
        <div class="col-md-6">
            <!-- Single Form Start with Email -->
            <div class="form-group single-form">
                <label for="email">Email *</label>
                <input id="email" type="email" name="email" placeholder="Email *" class="form-control" required>
                <div class="invalid-feedback"></div>
            </div>
            <!-- Single Form End -->
        </div>
        <div class="col-md-12">
            <!-- Single Form Start for Phone, adjusted -->
            <div class="form-group single-form">
                <label for="phone">Telefon *</label>
                <input id="phone" type="text" name="phone" placeholder="Telefon *" class="form-control" required>
                <div class="invalid-feedback"></div>
            </div>
            <!-- Single Form End -->
        </div>
        <div class="col-sm-12">
            <!-- Single Form Start with Message -->
            <div class="form-group single-form">
                <label for="message">Wiadomość *</label>
                <textarea id="message" name="message" rows="5" placeholder="Wiadomość *" class="form-control" required></textarea>
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
                <input type="submit" value="Wyślij" class="btn btn-outline-primary mb-3">
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
