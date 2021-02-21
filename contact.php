<section id="contact" class="padd-section">
  <div class="container" data-aos="fade-up">
    <div class="section-title text-center">
      <h2>Contact</h2>
      <p class="separator">Tinggalkan pesan pada form berikut</p>
    </div>
    <div
      class="row justify-content-center"
      data-aos="fade-up"
      data-aos-delay="100"
    >
      <div class="col-auto col-md-6">
        <div class="form">
          <form
            action="forms/contact.php"
            method="post"
            role="form"
            class="php-email-form"
          >
            <div class="form-group">
              <input
                type="text"
                name="name"
                class="form-control"
                id="name"
                placeholder="Your Name"
                required
              />
            </div>
            <div class="form-group mt-3">
              <input
                type="email"
                class="form-control"
                name="email"
                id="email"
                placeholder="Your Email"
                required
              />
            </div>
            <div class="form-group mt-3">
              <input
                type="text"
                class="form-control"
                name="subject"
                id="subject"
                placeholder="Subject"
                required
              />
            </div>
            <div class="form-group mt-3">
              <textarea
                class="form-control"
                name="message"
                rows="5"
                placeholder="Message"
                required
              ></textarea>
            </div>
            <div class="my-3">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">
                Your message has been sent. Thank you!
              </div>
            </div>
            <div class="text-center">
              <button type="submit">Send Message</button>
            </div>
          </form>
        </div>
      </div>
      <div class="col-lg-3">
        <div class="info">
          <div>
            <i class="bi bi-geo-alt"></i>
            <p>
              Jln.SMK Dusun III Desa Sukaraja, Kec.Air Putih<br />Kab.Batu Bara,
              Sumatera Utara
            </p>
          </div>
          <div class="email">
            <i class="bi bi-envelope"></i>
            <p>admin@smknegeri1airputih.sch.id</p>
          </div>
          <div>
            <i class="bi bi-phone"></i>
            <p>+62 622 723 1599</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/js/main.js"></script>
