<head>
     <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/sponsor.css">
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
     <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

     <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>

<div>
     <div class="tab">
          <a style="font-size:20px;" class="tablinks" href="<?= base_url(); ?>index.php/sponsors/2019 ">2019</a>
          <a style="font-size:20px;" class="tablinks" href="<?= base_url(); ?>index.php/sponsors/2018 ">2018</a>
          <a style="font-size:20px;" class="tablinks" href="<?= base_url(); ?>index.php/sponsors/2017 ">2017</a>
          <a style="font-size:20px;" class="tablinks" href="<?= base_url(); ?>index.php/sponsors/2016 ">2016</a>
          <a style="font-size:20px;" class="tablinks" href="<?= base_url(); ?>index.php/sponsors/2015">2015</a>
     </div>

     <div class="sponsors">
          <center>
               <h1><?= $year ?></h1>
          </center>
          <?php foreach ($category as $cat) : ?>
               <?php if (!empty($spons[$cat->category_id])) : ?>
                    <div class="category">
                         <div class="catname">
                              <h2><u><?= $cat->name; ?></u></h2>
                         </div>
                         <!--<div class="owl-carousel"> -->
                         <div class="row">
                         <?php foreach ($spons[$cat->category_id] as $categorywise) : ?>
                              
                                   <div class="col s6 m4 l3 xl3">
                              <div class="spons zoom">
                                   <!-- style="border:2px solid black;"                   border:2px solid black;-->
                                   <a href="<?php echo $categorywise->link ?>">
                                        <img src="<?= base_url() ?>assets/sponslogo/<?= $categorywise->logo ?>" alt="<?php echo $categorywise->sponsor_name ?>">
                                   </a>
                              </div>
                              </div>
                         <?php endforeach; ?>
                         <!--</div> -->
                         </div>
                    </div>
               <?php endif; ?>
          <?php endforeach; ?>
     </div>

</div>
</div>


</canvas>
</body>