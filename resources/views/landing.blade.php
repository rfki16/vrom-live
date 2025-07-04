<x-front-layout>
  <!-- Hero -->
  <section class="container relative pb-[100px] pt-[30px]">
    <div class="flex flex-col items-center justify-center gap-[30px]">
      <!-- Preview Image -->
      <div class="relative">
        <div class="absolute z-0 hidden lg:block">
          <div class="font-extrabold text-[220px] text-darkGrey tracking-[-0.06em] leading-[101%]">
            <div data-aos="fade-right" data-aos-delay="300">
              ANGKUT
            </div>
            <div data-aos="fade-left" data-aos-delay="600">
              AJA
            </div>
          </div>
        </div>
        <img src="/images/porche.webp" class="w-full max-w-[963px] z-10 relative" alt=""
          data-aos="zoom-in" data-aos-delay="950">
      </div>

      <div class="flex flex-col lg:flex-row items-center justify-around lg:gap-[60px] gap-7">
        <!-- Car Details -->
        <div class="flex items-center gap-y-12">
          <div class="flex flex-col items-center gap-[2px] px-3 md:px-10" data-aos="fade-left"
            data-aos-delay="1400">
            <h6 class="font-bold text-dark text-xl md:text-[26px] text-center">
              Power
            </h6>
            <p class="text-sm font-normal text-center md:text-base text-secondary">
              Muatan Besar
            </p>
          </div>
          <span class="vr" data-aos="fade-left" data-aos-delay="1600"></span>
          <div class="flex flex-col items-center gap-[2px] px-3 md:px-10" data-aos="fade-left"
            data-aos-delay="1900">
            <h6 class="font-bold text-dark text-xl md:text-[26px] text-center">
              Bebas
            </h6>
            <p class="text-sm font-normal text-center md:text-base text-secondary">
              Lepas Kunci
            </p>
          </div>
          <span class="vr" data-aos="fade-left" data-aos-delay="2100"></span>
          <div class="flex flex-col items-center gap-[2px] px-3 md:px-10" data-aos="fade-left"
            data-aos-delay="2400">
            <h6 class="font-bold text-dark text-xl md:text-[26px] text-center">
              Transmisi
            </h6>
            <p class="text-sm font-normal text-center md:text-base text-secondary">
              Otomatis
            </p>
          </div>
          <span class="vr" data-aos="fade-left" data-aos-delay="2600"></span>
          <div class="flex flex-col items-center gap-[2px] px-3 md:px-10" data-aos="fade-left"
            data-aos-delay="2900">
            <h6 class="font-bold text-dark text-xl md:text-[26px] text-center">
              GPS
            </h6>
            <p class="text-sm font-normal text-center md:text-base text-secondary">
              Tracking
            </p>
          </div>
        </div>
        <!-- Button Primary -->
        <div class="p-1 rounded-full bg-primary group" data-aos="zoom-in" data-aos-delay="3400">
          <a href="checkout.html" class="btn-primary">
            <p>
              Rent Now
            </p>
            <img src="/svgs/ic-arrow-right.svg" alt="">
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- Popular Cars -->
  <section class="bg-darkGrey">
    <div class="container relative py-[100px]">
      <header class="mb-[30px]">
        <h2 class="font-bold text-dark text-[26px] mb-1">
          Popular Cars
        </h2>
        <p class="text-base text-secondary">Start your big day</p>
      </header>

      <!-- Cars -->
      <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-[29px]">
        @foreach ($items as $item)
        <!-- Card -->
        <div class="card-popular">
          <div>
            <h5 class="text-lg text-dark font-bold mb-[2px]">
              {{$item->name}}
            </h5>
            <p class="text-sm font-normal text-secondary">{{$item->type ? $item->type->name : '-'}}</p>
            <a href="{{route('front.detail', $item->slug)}}" class="absolute inset-0"></a>
          </div>
          <img src="{{$item->thumbnail}}" class="rounded-[18px] min-w-[216px] w-full h-[150px]"
            alt="">
          <div class="flex items-center justify-between gap-1">
            <!-- Price -->
            <p class="text-sm font-normal text-secondary">
              <span class="text-base font-bold text-primary">Rp {{number_format($item->price)}}</span>/day
            </p>
            <!-- Rating -->
            <p class="text-dark text-xs font-semibold flex items-center gap-[2px]">
              ({{$item->star}})
              <img src="/svgs/ic-star.svg" alt="">
            </p>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </section>

  <!-- Extra Benefits -->
  <section class="container relative pt-[100px]">
    <div class="flex items-center flex-col md:flex-row flex-wrap justify-center gap-8 lg:gap-[120px]">
      <img src="/images/illustration-01.webp" class="w-full lg:max-w-[536px]" alt="">
      <div class="max-w-[268px] w-full">
        <div class="flex flex-col gap-[30px]">
          <header>
            <h2 class="font-bold text-dark text-[26px] mb-1">
              Extra Benefits
            </h2>
            <p class="text-base text-secondary">You drive safety and famous</p>
          </header>
          <!-- Benefits Item -->
          <div class="flex items-center gap-4">
            <div class="bg-dark rounded-[26px] p-[19px]">
              <img src="/svgs/ic-car.svg" alt="">
            </div>
            <div>
              <h5 class="text-lg text-dark font-bold mb-[2px]">
                Delivery
              </h5>
              <p class="text-sm font-normal text-secondary">Just sit tight and wait</p>
            </div>
          </div>
          <div class="flex items-center gap-4">
            <div class="bg-dark rounded-[26px] p-[19px]">
              <img src="/svgs/ic-card.svg" alt="">
            </div>
            <div>
              <h5 class="text-lg text-dark font-bold mb-[2px]">
                Pricing
              </h5>
              <p class="text-sm font-normal text-secondary">12x Pay Installment</p>
            </div>
          </div>
          <div class="flex items-center gap-4">
            <div class="bg-dark rounded-[26px] p-[19px]">
              <img src="/svgs/ic-securityuser.svg" alt="">
            </div>
            <div>
              <h5 class="text-lg text-dark font-bold mb-[2px]">
                Secure
              </h5>
              <p class="text-sm font-normal text-secondary">Use your plate number</p>
            </div>
          </div>
          <div class="flex items-center gap-4">
            <div class="bg-dark rounded-[26px] p-[19px]">
              <img src="/svgs/ic-convert3dcube.svg" alt="">
            </div>
            <div>
              <h5 class="text-lg text-dark font-bold mb-[2px]">
                Fast Trade
              </h5>
              <p class="text-sm font-normal text-secondary">Change car faster</p>
            </div>
          </div>
        </div>
        <!-- CTA Button -->
        <div class="mt-[50px]">
          <!-- Button Primary -->
          <div class="p-1 rounded-full bg-primary group">
            <a href="#!" class="btn-primary">
              <p>
                Explore Cars
              </p>
              <img src="/svgs/ic-arrow-right.svg" alt="">
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- FAQ -->
  <section class="container relative py-[100px]">
    <header class="text-center mb-[50px]">
      <h2 class="font-bold text-dark text-[26px] mb-1">
        Frequently Asked Questions
      </h2>
      <p class="text-base text-secondary">Learn more about Angkutin Aja and get a success</p>
    </header>

    <!-- Questions -->
    <div class="grid md:grid-cols-2 gap-x-[50px] gap-y-6 max-w-[910px] w-full mx-auto">
      <a href="#!" class="px-6 py-4 border rounded-[24px] border-grey h-min accordion max-w-[430px]"
        id="faq1">
        <div class="flex items-center justify-between gap-1">
          <p class="text-base font-semibold text-dark">
            What if I crash the car?
          </p>
          <img src="/svgs/ic-chevron-down-rounded.svg" class="transition-all" alt="">
        </div>
        <div class="hidden pt-4 max-w-[335px]" id="faq1-content">
          <p class="text-base text-dark leading-[26px]">
            In case of an accident, you must report it
            immediately to our team. The cost will depend
            on the rental agreement and insurance terms.
          </p>
        </div>
      </a>
      <a href="#!" class="px-6 py-4 border rounded-[24px] border-grey h-min accordion max-w-[430px]"
        id="faq2">
        <div class="flex items-center justify-between gap-1">
          <p class="text-base font-semibold text-dark">
            How do I book a pick-up car?
          </p>
          <img src="/svgs/ic-chevron-down-rounded.svg" class="transition-all" alt="">
        </div>
        <div class="hidden pt-4 max-w-[335px]" id="faq2-content">
          <p class="text-base text-dark leading-[26px]">
            Just choose your date and time, fill the form,
            and confirm the order. Our system will process
            your booking in minutes.
          </p>
        </div>
      </a>
      <a href="#!" class="px-6 py-4 border rounded-[24px] border-grey h-min accordion max-w-[430px]"
        id="faq3">
        <div class="flex items-center justify-between gap-1">
          <p class="text-base font-semibold text-dark">
            Is the driver included in the rental?
          </p>
          <img src="/svgs/ic-chevron-down-rounded.svg" class="transition-all" alt="">
        </div>
        <div class="hidden pt-4 max-w-[335px]" id="faq3-content">
          <p class="text-base text-dark leading-[26px]">
            You can rent with or without a driver.
            Both options are available depending
            on your needs.
          </p>
        </div>
      </a>
      <a href="#!" class="px-6 py-4 border rounded-[24px] border-grey h-min accordion max-w-[430px]"
        id="faq4">
        <div class="flex items-center justify-between gap-1">
          <p class="text-base font-semibold text-dark">
            Can I rent for out-of-town?
          </p>
          <img src="/svgs/ic-chevron-down-rounded.svg" class="transition-all" alt="">
        </div>
        <div class="hidden pt-4 max-w-[335px]" id="faq4-content">
          <p class="text-base text-dark leading-[26px]">
            Yes, you can use our service for out-of-town.
            Just mention the destination, and
            we’ll adjust the price accordingly.
          </p>
        </div>
      </a>
      <a href="#!" class="px-6 py-4 border rounded-[24px] border-grey h-min accordion max-w-[430px]"
        id="faq5">
        <div class="flex items-center justify-between gap-1">
          <p class="text-base font-semibold text-dark">
            What documents are needed?
          </p>
          <img src="/svgs/ic-chevron-down-rounded.svg" class="transition-all" alt="">
        </div>
        <div class="hidden pt-4 max-w-[335px]" id="faq5-content">
          <p class="text-base text-dark leading-[26px]">
            You will need a valid ID and drivers license.
            For company use, we may request
            a letter of assignment.
          </p>
        </div>
      </a>
      <a href="#!" class="px-6 py-4 border rounded-[24px] border-grey h-min accordion max-w-[430px]"
        id="faq6">
        <div class="flex items-center justify-between gap-1">
          <p class="text-base font-semibold text-dark">
            Is fuel included in the rental price?
          </p>
          <img src="/svgs/ic-chevron-down-rounded.svg" class="transition-all" alt="">
        </div>
        <div class="hidden pt-4 max-w-[335px]" id="faq6-content">
          <p class="text-base text-dark leading-[26px]">
            No, fuel is not included. The vehicle is delivered
            with a full tank, and we expect it to be
            returned in the same condition.
          </p>
        </div>
      </a>
    </div>
  </section>

  <!-- Instant Booking -->
  <section class="relative bg-[#060523]">
    <div class="container py-20">
      <div class="flex flex-col">
        <header class="mb-[50px] max-w-[360px] w-full">
          <h2 class="font-bold text-white text-[26px] mb-4">
            Solusi Angkut Cepat. <br>
            Dan Dapat Diandalkan.
          </h2>
          <p class="text-base text-subtlePars">Book a trusted pick-up now and make every delivery on time — rain or shine, we’re ready.</p>
        </header>
        <!-- Button Primary -->
        <div class="p-1 rounded-full bg-primary group w-max">
          <a href="details.html" class="btn-primary">
            <p>
              Book Now
            </p>
            <img src="/svgs/ic-arrow-right.svg" alt="">
          </a>
        </div>
      </div>
      <div class="absolute bottom-[-30px] right-0 lg:w-[764px] max-h-[332px] hidden lg:block">
        <img src="/images/porche_small.webp" alt="">
      </div>
    </div>
  </section>

  <footer class="py-10 md:pt-[100px] md:pb-[70px] container">
    <p class="text-base text-center text-secondary">
      All Rights Reserved. Copyright Angkutin Aja 2025.
    </p>
  </footer>
</x-front-layout>