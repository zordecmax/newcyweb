 <section class="py-5" id="contact">
     <div class="container">
         <div class="row g-4 align-items-center">
             <div class="col-12 col-md-6">
                 <div class="contact-info">
                     <h6 class="text-grey">{{__('main.contact_advance')}}</h6>
                     <a class="text-white hover-red mb-2 d-inline-block" href="tel:+35799345184">+357 993 451 84</a>
                     <p class="mb-3">info@cyprusweb.eu</p>
                     {{-- <button class="border-0 btn-contact-info"><span class="text-red">Start </span> a new chat</button> --}}
                 </div>
             </div>
             <div class="col-12 col-md-6">
                 <h6 class="fs-1 fw-bold">{{__('main.contact_title')}}</h6>
                 <p class="text-grey" style="font-size: 12px;">{{__('main.contacts_description')}}</p>
                 <form action="{{ route('contact.submit') }}" method="POST">
                     @csrf
                     <input class="form-control form-contact mb-3" type="text" name="name" placeholder={{__('main.name')}} required min="4" max="20">
                     <input class="form-control form-contact mb-3" type="email" name="email" placeholder={{__('main.email')}} required>
                     <input class="form-control form-contact mb-3" type="tel" name="phone" placeholder={{__('main.phone')}} required>
                     <button type="submit" class="btn-price-buy border-0">{{__('main.send_now')}}</a>
                 </form>
             </div>
         </div>
     </div>
 </section>
