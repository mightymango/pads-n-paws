<?php snippet('header') ?>

<main role="main">

  <section class="contact">
    <div class="container">
      <div class="row">
        <div class="col-sm-10 col-md-8 col-sm-offset-1 col-md-offset-2">
          <div class="text-center breakline">
            <h1><?= $page->contact_title() ?></h1>
            <span><?= $page->contact_subtitle() ?></span>
          </div>
          <!--for the contact form we use the webapplication formspree.io-->
          <form id="contact-form" action="https://formspree.io/<?= $page->youremail();?>" method="POST">
            <div class="form-group">
              <input class="form-control" type="text" id="name" name="Name" placeholder="Name" required/>
            </div>
            <div class="form-group">
              <input class="form-control" type="email" id="email" name="Email" placeholder="E-Mail" required/>
            </div>
            <div class="form-group">
              <textarea class="form-control" id="message" name="Message" placeholder="Message" rows="10"></textarea>
              <input class="hidden" type="text" name="_gotcha">
              <input type="hidden" name="Subject" value="<?= $page->emailsubject()->html();?>">
            </div>
            <button type="submit" class="btn btn-default" id="contact-form-submit">Submit</button>
          </form>
          <!--end of form-->
        </div>
        <!--end of col-->
      </div>
      <!--end of row-->
    </div>
    <!--end of container-->
  </section>
  <!--end of section-->

</main>

<?php snippet('footer') ?>
