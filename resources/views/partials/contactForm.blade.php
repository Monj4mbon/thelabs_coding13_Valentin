<!-- Contact section -->
<div class="contact-section spad fix">
    <div class="container">
        <div class="row">
            <!-- contact info -->
            <div class="col-md-5 col-md-offset-1 contact-info col-push">
                @foreach ($contactFormData as $contactForm)
                    @if ($contactForm->balise == 'contact form title')
                        <div class="section-title left">
                            <h2>{{$contactForm->texte}}</h2>
                        </div>
                    @endif
                    @if ($contactForm->balise == 'contact form text')
                        <p>{{$contactForm->texte}}</p>
                    @endif
                    @if ($contactForm->balise == 'contact form subtitle')
                        <h3 class="mt60">{{$contactForm->texte}}</h3>
                    @endif
                    @if ($contactForm->balise == 'contact form street')
                        <p class="con-item">{{$contactForm->texte}}</p>
                    @endif
                    @if ($contactForm->balise == 'contact form city')
                        <p class="con-item">{{$contactForm->texte}}</p>
                    @endif
                    @if ($contactForm->balise == 'contact form phone')
                        <p class="con-item">{{$contactForm->texte}}</p>
                    @endif
                    @if ($contactForm->balise == 'contact form mail')
                        <p class="con-item">{{$contactForm->texte}}</p>
                    @endif                    
                @endforeach
            </div>
            <!-- contact form -->
            <div class="col-md-6 col-pull">
                <form class="form-class" id="con_form">
                    <div class="row">
                        <div class="col-sm-6">
                            <input type="text" name="name" placeholder="Your name">
                        </div>
                        <div class="col-sm-6">
                            <input type="text" name="email" placeholder="Your email">
                        </div>
                        <div class="col-sm-12">
                            <input type="text" name="subject" placeholder="Subject">
                            <textarea name="message" placeholder="Message"></textarea>
                            @foreach ($contactFormData as $contactForm)
                                @if ($contactForm->balise == 'contact form button')
                                    <button class="site-btn">{{$contactForm->texte}}</button>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Contact section end-->