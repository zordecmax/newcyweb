 <!-- contact -->
 <section class="py-5" id="contact">
     <div class="container">
         <div class="row g-4">
             <div class="col-12 col-md-6">
                 <div class="contact-info">
                     <h6 class="text-grey">Ask us anything, we have the friendliest customer service folks</h6>
                     <a class="text-white hover-red mb-2 d-inline-block" href="tel:+35799345184">+357 993 451 84</a>
                     <p class="mb-3">info@cyprusweb.eu</p>
                     <button class="border-0 btn-contact-info"><span class="text-red">Start </span> a new chat</button>
                 </div>
             </div>
             <div class="col-12 col-md-6">
                 <h6 class="fs-1 fw-bold">Let’s get started!</h6>
                 <p class="text-grey" style="font-size: 12px;">Contact us by using the form below or give us a call.</p>
                 <form action="{{ route('contact.submit') }}" method="POST">
                     @csrf
                     <input class="form-control form-contact mb-3" type="text" name="name" placeholder="Имя" required min="4" max="20">
                     <input class="form-control form-contact mb-3" type="email" name="email" placeholder="Email" required>
                     <input class="form-control form-contact mb-3" type="tel" name="phone" placeholder="Телефон" required>
                     <button type="submit" class="btn-price-buy border-0">Send Now</a>
                 </form>
             </div>
         </div>
     </div>
 </section>
 <!-- contact -->
