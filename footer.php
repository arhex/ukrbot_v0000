<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package estore
 */

?>

	</div><!-- #content -->

<?php       $Copirate = carbon_get_theme_option('est_footer_copy');
            $Phone = carbon_get_theme_option('crb_phone');
            $Email = carbon_get_theme_option('crb_email');
            $WWW = carbon_get_theme_option('crb_www');
                     //get_pr($Phone)?>

<div class="footer  container-fluid">

    <div class="row justify-content-center foot">
        <div class="col">
            <h5>Доставка</h5>
            Мы сотрудничаем с самыми надёжными службами доставки. Выбирайте наиболее удобной
            способ для вас! Вы можете получить товар на ваш адрес курьером, в почтовом терминале или у нас в магазине. <br>
            <div class="img"><img src="<?php echo get_template_directory_uri(). '/assets/' ?>image/Delivery_icons.png" alt=""></div>
            <br>
        </div>
        <div class="col">
            <h5>Оплата</h5>
            В нашем интернет-магазине возможно оплачивать кредитной картой, банковским переводом или через систему
            PayPal. Покупки в магазине по адресу Pae21 оплачиваются через терминал или наличными. <br>
            <div class="img"><img src="<?php echo get_template_directory_uri(). '/assets/' ?>image/Payment_icons.png" alt=""></div>
            <br>
        </div>
        <div class="col">
            <h5>Помощь</h5>
            <h6>Условия магазина</h6>
            <h6>Защита личных данных</h6>

            MOBESTON autovaruosad.ee oü
            Рег. Номер: 10092865
            VAT: EE100247307
            Адрес: Pae 21, 11415
            Тел.: <?php echo $Phone."\n";?>
            <?php echo $Email."\n";?>
            <?php echo $WWW; ?>
           
        </div>
        <div class="col">
            <h5>Следите за новостями</h5>
            <img src="<?php echo get_template_directory_uri(). '/assets/' ?>image/Layer56.jpg" alt="">
            <div class="img" style="margin-top: 10px"><img src="<?php echo get_template_directory_uri(). '/assets/' ?>image/Instagram.png" alt=""></div>
        </div>

    </div>
    <p class="justify-content-center"><?php echo  $Copirate?> </p>
</div>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
