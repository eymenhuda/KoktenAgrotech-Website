<?php
    $pageTitle = "İletişim | Kökten AgroTech";
    include 'includes/head.php';
    include 'includes/header.php';
?>
<div class="contact-section">
    <h2>İletişim Bilgilerimiz</h2>
    <strong>Aşağıdaki kanallardan bizimle iletişime geçebilirsiniz.</strong>

    <div class="contact-info">
        <p><strong>📍 Adres: </strong> Fatih Mahallesi Gökpınar Caddesi No:238/9 Çeltik/KONYA</p>
        <p><strong>📞 Telefon: </strong> +90 (532) 786 72 05</p>
        <p><strong>📧 E-posta:</strong> info@koktenagrotech.com</p>
        <p><strong>🕒 Çalışma Saatleri:</strong> Pazartesi - Cumartesi: 08.00 - 18.00</p>
    </div>

    <h3>Mesaj Gönderin</h3>
    <form class="contact-form">
        <input type="text" placeholder="Adınız Soyadınız" required>
        <input type="email" placeholder="E-posta Adresiniz" required>
        <input type="text" placeholder="Konu" required>
        <textarea placeholder="Mesajınız" rows="5" required></textarea>
        <button type="submit">Formu Gönder</button>
    </form>
</div>
 <div class="map-container">
        <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3995.696979918988!2d31.800432899999997!3d39.0223343!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14d1fb4dcbb050ab%3A0x48906409341546a8!2sK%C3%B6kten%20Agrotech%20%26%20Trailer%20Solutions!5e1!3m2!1str!2str!4v1761259919262!5m2!1str!2str" 
            allowfullscreen="" 
            loading="lazy" 
            referrerpolicy="no-referrer-when-downgrade">
        </iframe>
    </div>
<br>
<?php include 'includes/footer.php'; ?>
<link rel="stylesheet" href="assets/css/iletisim_css.css">