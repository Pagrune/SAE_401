<div id="contact">
    <div class="block-1">
    <img src="img/page_contact/contact.jpg" alt="enveloppe de contact">
        <div class="block-contact">
            <h1>
                Contact
            </h1>            
            <form action="">
                <label for="nom_contact">
                    <input type="text" id="nom_contact" name="nom_contact" placeholder="<?=lang::contact_nom?>">
                </label>
                <label for="email_contact">
                    <input type="email" id="email_contact" name="email_contact" placeholder="<?=lang::contact_mail?>">
                </label>
                <label for="tel_contact">
                    <input type="tel" id="tel_contact" name="tel_contact" placeholder="<?=lang::contact_tel?>">
                </label>
                <label for="sujet_contact">
                    <input type="text" id="sujet_contact" name="sujet_contact" placeholder="<?=lang::contact_sujet?>">
                </label>
                <label for="message_contact">
                    <input type="text" id="message_contact" name="message_contact" placeholder="<?=lang::contact_msg?>">
                </label>
                <input id="submit_contact" name="submit_contact" type="submit" value="<?=lang::contact_send?>">
            </form>
    </div>
</div>